
    <nav class="w-full bg-[#151f11] px-8 py-3 flex items-center justify-between border-b border-[#263a1d]">
      <div class="flex items-center space-x-3">
        <span class="text-white text-xl font-semibold">Abdoulaye</span>
      </div>
      <div class="flex items-center space-x-8">
     <a href="/" class="nav-item text-white font-semibold">List Commandes</a>
                <a href="/commande" class="nav-item">Nouvelle commande</a>
                <a href="#" class="nav-item">Clients</a>
                <a href="#" class="nav-item">Produits</a>
        <div class="ml-6">
          <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-[#232d1a] text-gray-300">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
              <path d="M12 14a4 4 0 100-8 4 4 0 000 8zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
            </svg>
          </span>
        </div>
      </div>
    </nav>
    <main class="max-w-5xl mx-auto mt-8 p-8">
      <?php
      $title = "Commande #" . htmlspecialchars($commande['id'] ?? '');
      ob_start();
      ?>
      <div class="flex justify-between items-start mb-6">
          <div>
              <h1 class="text-3xl font-bold text-white mb-2">Commande #<?= htmlspecialchars($commande['id'] ?? '') ?></h1>
              <p class="text-gray-400">Commande le <?= htmlspecialchars($commande['date'] ?? '') ?></p>
          </div>
          <div class="bg-[#151f11] rounded-lg p-4 text-sm min-w-[250px]">
              <p><span class="font-semibold">Nom:</span> <?= htmlspecialchars($commande['nom_client'] ?? '') ?></p>
              <p><span class="font-semibold">Prenom:</span> <?= htmlspecialchars($commande['prenom_client'] ?? '') ?></p>
          </div>
      </div>
      <h2 class="text-xl font-semibold mb-4">Résumé de la Commande</h2>
      <div class="bg-[#151f11] rounded-xl overflow-hidden mb-0 border border-[#263a1d]">
        <table class="min-w-full text-left">
          <thead>
            <tr class="text-white">
              <th class="px-6 py-3 font-semibold">Produit</th>
              <th class="px-6 py-3 font-semibold">Quantité</th>
              <th class="px-6 py-3 font-semibold">Prix</th>
              <th class="px-6 py-3 font-semibold">Total</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($commande['produits'])): ?>
              <?php foreach ($commande['produits'] as $produit): ?>
                <tr class="border-t border-[#263a1d]">
                  <td class="px-6 py-4"><?= htmlspecialchars($produit['nom']) ?></td>
                  <td class="px-6 py-4"><?= htmlspecialchars($produit['quantite']) ?></td>
                  <td class="px-6 py-4"><?= htmlspecialchars($produit['prix']) ?></td>
                  <td class="px-6 py-4"><?= htmlspecialchars($produit['total']) ?></td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="4" class="px-6 py-4 text-center text-gray-400">Aucun produit</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
      <!-- Infos sous le tableau -->
      <div class="flex flex-wrap gap-8 mt-4 mb-8 text-sm justify-end">
        <div>
          <p><span class="font-semibold">Téléphone :</span> <?= htmlspecialchars($commande['telephone_client'] ?? '') ?></p>
          <p><span class="font-semibold">Total :</span> <?= htmlspecialchars($commande['montant'] ?? '') ?> fcfa</p>
          <p><span class="font-semibold">Montant payé :</span> <?= htmlspecialchars($commande['montant_paye'] ?? '0') ?> FCFA</p>
          <p><span class="font-semibold">Statut :</span> <span class="text-lime-400"><?= htmlspecialchars($commande['statut'] ?? 'Impayé') ?></span></p>
        </div>
      </div>
      <!-- Pagination -->
      <div class="flex justify-center items-center space-x-2 mb-8">
        <button class="w-8 h-8 flex items-center justify-center rounded bg-[#151f11] text-gray-400 hover:bg-[#101d0b]">&lt;</button>
        <button class="w-8 h-8 flex items-center justify-center rounded-full bg-lime-400 text-[#101d0b] font-bold">1</button>
        <button class="w-8 h-8 flex items-center justify-center rounded bg-[#151f11] text-white hover:bg-[#101d0b]">2</button>
        <button class="w-8 h-8 flex items-center justify-center rounded bg-[#151f11] text-white hover:bg-[#101d0b]">3</button>
        <button class="w-8 h-8 flex items-center justify-center rounded bg-[#151f11] text-gray-400 hover:bg-[#101d0b]">&gt;</button>
      </div>
      <div class="mb-8">
        <h3 class="font-bold mb-2">Facture</h3>
        <button class="bg-lime-400 text-[#101d0b] px-6 py-2 rounded-full font-semibold hover:bg-lime-500 transition">Générer Facture</button>
      </div>
      <div class="mb-4">
        <h3 class="font-bold mb-2">Paiement</h3>
        <div class="bg-[#151f11] rounded-xl overflow-hidden mb-4 border border-[#263a1d]">
          <table class="min-w-full text-left">
            <thead>
              <tr class="text-white">
                <th class="px-6 py-3">Date</th>
                <th class="px-6 py-3">Montant Total</th>
                <th class="px-6 py-3">Méthode</th>
                <th class="px-6 py-3">Status</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($commande['paiements'])): ?>
                <?php foreach ($commande['paiements'] as $paiement): ?>
                  <tr class="border-t border-[#263a1d]">
                    <td class="px-6 py-4"><?= htmlspecialchars($paiement['date']) ?></td>
                    <td class="px-6 py-4"><?= htmlspecialchars($paiement['montant']) ?> FCFA</td>
                    <td class="px-6 py-4"><?= htmlspecialchars($paiement['methode']) ?></td>
                    <td class="px-6 py-4">
                      <span class="inline-block bg-lime-400 text-[#101d0b] px-4 py-1 rounded-full font-semibold">
                        <?= htmlspecialchars($paiement['statut']) ?>
                      </span>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="4" class="px-6 py-4 text-center text-gray-400">Aucun paiement</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
        <button class="bg-lime-400 text-[#101d0b] px-6 py-2 rounded-full font-semibold hover:bg-lime-500 transition">Enregistrer un paiement</button>
      </div>
      <?php
      $content = ob_get_clean();
     require __DIR__ . '/layout.html.php';
      ?>
    </main>
  </body>
</html>