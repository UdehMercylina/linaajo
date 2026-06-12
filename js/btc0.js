async function loadBTCTransactions() {
    try {
        // Fetch 100 latest unconfirmed Bitcoin transactions
        const res = await fetch("https://api.blockcypher.com/v1/btc/main/txs?limit=100");
        const txs = await res.json();

        const tbody = document.querySelector("#btcTable tbody");
        tbody.innerHTML = ""; // clear existing

        txs.forEach(tx => {
            const amountBTC = (tx.total / 1e8).toFixed(8);
            const address = tx.addresses ? tx.addresses[0] : "N/A";
            const time = tx.received || "N/A";

            const row = `
                <tr>
                    <td class="text-left"><span class="price">${amountBTC} BTC</span></td>
                    <td class="text-left"><span class="price">${address}</span></td>
                    <td class="text-left"><span class="price">${time}</span></td>
                </tr>
            `;
            tbody.insertAdjacentHTML("beforeend", row);
        });

    } catch (error) {
        console.error("Error loading BTC transactions:", error);
    }
}

// Load once
loadBTCTransactions();

// Reload every 30 seconds (optional)
setInterval(loadBTCTransactions, 30000);
