(function () {
    // CONFIG
    const API_URL = "https://blockchain.info/unconfirmed-transactions?format=json&cors=true";
    const MAX_ROWS = 100;
    const REFRESH_MS = 30000; // 30s
    document.getElementById('intervalLabel').textContent = Math.round(REFRESH_MS/1000);

    // Helper: sum outputs to BTC
    function sumOutputsToBTC(outputs) {
      if (!Array.isArray(outputs)) return 0;
      const sat = outputs.reduce((s, o) => s + (o && o.value ? Number(o.value) : 0), 0);
      return sat / 1e8;
    }

    // Helper: pick primary address (first output with an address)
    function pickPrimaryAddress(outputs) {
      if (!Array.isArray(outputs)) return "N/A";
      for (const o of outputs) {
        if (o && o.addr) return o.addr;
      }
      return outputs.length && outputs[0].addr ? outputs[0].addr : "N/A";
    }

    // Create grouped fake dates across last 5 days:
    // We'll split transactions into up to 5 groups (day 0..4), assign day offsets so rows are grouped by day.
    function assignGroupedDates(txs) {
      const now = new Date();
      const n = txs.length;
      const groups = Math.min(5, n || 1);
      const perGroup = Math.ceil(n / groups);

      return txs.map((tx, idx) => {
        const groupIndex = Math.floor(idx / perGroup); // 0..groups-1
        // dayOffset: 0 => today, 1 => yesterday, etc.
        const dayOffset = groupIndex;
        // random hour/minute to make them look natural within that day
        const hour = Math.floor(Math.random() * 24);
        const minute = Math.floor(Math.random() * 60);
        const second = Math.floor(Math.random() * 60);

        const d = new Date(now);
        d.setDate(now.getDate() - dayOffset);
        d.setHours(hour, minute, second, 0);

        return Object.assign({}, tx, { fakeDateObj: d });
      });
    }

    // Format date to "YYYY-MM-DD HH:MM"
    function formatDateShort(d) {
      const yyyy = d.getFullYear();
      const mm = String(d.getMonth() + 1).padStart(2, '0');
      const dd = String(d.getDate()).padStart(2, '0');
      const hh = String(d.getHours()).padStart(2, '0');
      const min = String(d.getMinutes()).padStart(2, '0');
      return `${yyyy}-${mm}-${dd} ${hh}:${min}`;
    }

    // Render table rows
    function renderRows(rows) {
      const tbody = document.querySelector("#btcTable tbody");
      tbody.innerHTML = "";

      // Insert rows
      rows.forEach(r => {
        const amount = Number(r.amount).toFixed(8);
        const addr = r.address || "N/A";
        const dateStr = formatDateShort(r.fakeDateObj);

        const tr = document.createElement('tr');

        const tdAmount = document.createElement('td');
        tdAmount.className = 'text-left';
        tdAmount.innerHTML = `<span class="price">${amount} BTC</span>`;
        tr.appendChild(tdAmount);

        const tdAddr = document.createElement('td');
        tdAddr.className = 'text-left small';
        tdAddr.innerHTML = `<span class="price">${addr}</span>`;
        tr.appendChild(tdAddr);

        const tdDate = document.createElement('td');
        tdDate.className = 'text-left muted';
        tdDate.innerHTML = `<span class="price">${dateStr}</span>`;
        tr.appendChild(tdDate);

        tbody.appendChild(tr);
      });
    }

    // Main loader
    async function loadAndRender() {
      try {
        const resp = await fetch(API_URL, { cache: "no-store" });
        if (!resp.ok) throw new Error("Network response not OK: " + resp.status);
        const json = await resp.json();

        // The blockchain.info endpoint returns { txs: [ ... ] }
        const txsRaw = Array.isArray(json.txs) ? json.txs : [];

        // Limit to MAX_ROWS
        const limited = txsRaw.slice(0, MAX_ROWS);

        // Map to objects with amount, address (first output), original time (if needed)
        const mapped = limited.map((t) => {
          const amountBTC = sumOutputsToBTC(t.out || t.outputs || []);
          const address = pickPrimaryAddress(t.out || t.outputs || []);
          return {
            txid: t.hash || t.txid || null,
            amount: amountBTC,
            address: address,
            originalTime: t.time ? new Date(t.time * 1000) : null
          };
        });

        // Assign grouped fake dates across last 5 days (keeps them grouped)
        const withDates = assignGroupedDates(mapped);

        // Sort descending by the fake date (newest first)
        withDates.sort((a, b) => b.fakeDateObj - a.fakeDateObj);

        // Render
        renderRows(withDates);

      } catch (err) {
        console.error("Failed to load mempool txs:", err);
        // show a message in the table
        const tbody = document.querySelector("#btcTable tbody");
        tbody.innerHTML = `<tr><td colspan="3" class="muted">Unable to fetch data: ${String(err.message || err)}</td></tr>`;
      }
    }

    // initial load
    loadAndRender();

    // auto refresh
    setInterval(loadAndRender, REFRESH_MS);

  })();