<?php include __DIR__ . '/layout.php'; ?>
<main class="ml-64 p-8">
    <h1 class="text-2xl font-bold mb-6">Enregistrer une commande</h1>
    <form class="bg-white p-8 rounded shadow-md max-w-lg" method="post" action="traitement_commande.php">
        <div class="mb-4">
            <label class="block mb-2 font-semibold">Client</label>
            <select name="client_id" class="w-full p-2 border rounded">
                <option value="anonyme">Anonyme</option>
                <?php foreach($clients as $client): ?>
                    <option value="<?= htmlspecialchars($client['id']) ?>">
                        <?= htmlspecialchars($client['nom']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2 font-semibold">Produits</label>
            <select name="produits[]" class="w-full p-2 border rounded" multiple>
                <?php foreach($produits as $produit): ?>
                    <option value="<?= htmlspecialchars($produit['id']) ?>">
                        <?= htmlspecialchars($produit['libelle']) ?> (Stock: <?= htmlspecialchars($produit['qteStock']) ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2 font-semibold">Date</label>
            <input type="date" name="date" class="w-full p-2 border rounded" required>
        </div>
        <button type="submit" class="w-full bg-blue-700 text-white p-2 rounded">Enregistrer</button>
    </form>
</main>
</body>
</html>