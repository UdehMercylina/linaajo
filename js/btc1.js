function randomDateWithin5Days() {
    const now = new Date();
    const randomDays = Math.floor(Math.random() * 5);
    const randomHours = Math.floor(Math.random() * 24);
    const randomMinutes = Math.floor(Math.random() * 60);

    const d = new Date(now);
    d.setDate(now.getDate() - randomDays);
    d.setHours(randomHours);
    d.setMinutes(randomMinutes);

    return d; // return actual Date object for sorting
}

function formatDate(d) {
    const yyyy = d.getFullYear();
    const mm = String(d.getMonth() + 1).padStart(2, '0');
    const dd = String(d.getDate()).padStart(2, '0');
    const hh = String(d.getHours()).padStart(2, '0');
    const min = String(d.getMinutes()).padStart(2, '0');

    return `${yyyy}-${mm}-${dd} ${hh}:${min}`;
}

async function loadBTCTransactions() {
    try {
        const res = await fetch("https://api.blockcypher.com/v1/btc/main/txs?limit=100");
        const txs = await res.json();

        // Assign fake date to each transaction
        const mapped = txs.map(tx => {
            return {
                amount: (tx.total / 1e8).toFixed(8),
                address: tx.addresses ? tx.addresses[0] : "N/A",
                fakeDate: randomDateWithin5Days()
            };
        });

        // SORT descending by fake date
        mapped.sort((a, b) => b.fakeDate - a.fakeDate);

        const tbody = document.querySelector("#btcTable tbody");
        tbody.innerHTML = "";

        mapped.forEach(tx => {
            const row = `
                <tr>
                    <td class="text-left"><span class="price">${tx.amount} BTC</span></td>
                    <td class="text-left"><span class="price">${tx.address}</span></td>
                    <td class="text-left"><span class="price">${formatDate(tx.fakeDate)}</span></td>
                </tr>
            `;
            tbody.insertAdjacentHTML("beforeend", row);
        });

    } catch (error) {
        console.error("Error loading BTC transactions:", error);
    }
}

loadBTCTransactions();
setInterval(loadBTCTransactions, 30000);
