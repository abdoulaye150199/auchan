<?php
$title = "Nouvelle Commande";
ob_start();
?>
<!-- Ton contenu principal du formulaire ici (sans le <html>, <head>, <body>, <nav> etc.) -->
<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-bold mb-10">Nouveau Commande</h1>

    <form action="/commande/create" method="post">
        <!-- Ligne Client/Paiement -->
        <div class="flex flex-col md:flex-row gap-6 mb-6">
            <div class="flex-1">
                <label class="block mb-2">Client</label>
                <select name="client_id" class="w-full rounded-lg px-4 py-3 bg-[#1a2a1a] border border-green-700 text-white">
                    <option value="1">Ndoye</option>
                    <option value="2">Faye</option>
                </select>
            </div>
            <div class="flex-1">
                <label class="block mb-2">Vendeur</label>
                <select name="vendeur_id" class="w-full rounded-lg px-4 py-3 bg-[#1a2a1a] border border-green-700 text-white">
                    <option value="3">Diop</option>
                    <option value="4">Sow</option>
                </select>
            </div>
            <div class="flex-1">
                <label class="block mb-2">Paiement</label>
                <input type="text" name="montant" placeholder="Entrer le montant" class="w-full rounded-lg px-4 py-3 bg-[#1a2a1a] border border-green-700 text-white" />
            </div>
        </div>

        <!-- Ajouter Produit -->
        <div class="mb-6">
            <label class="block mb-2 font-semibold">Ajouter Produit</label>
            <div class="flex flex-col md:flex-row gap-4">
                <select class="rounded-lg px-4 py-3 flex-1 bg-[#1a2a1a] border border-green-700 text-white">
                    <option>Sélectionner un produit</option>
                    <option>Sac de riz</option>
                    <option>Sucre</option>
                    <option>Lait</option>
                </select>
                <input type="text" placeholder="Saisir le montant" class="rounded-lg px-4 py-3 flex-1 bg-[#1a2a1a] border border-green-700 text-white" />
                <button class="bg-green-500 hover:bg-green-600 text-black font-semibold rounded-lg px-6 py-3">Ajouter</button>
            </div>
        </div>

        <!-- Tableau Produits -->
        <div class="rounded-lg overflow-hidden mb-8 border border-green-700 bg-[#1a2a1a]">
            <table class="w-full">
                <thead>
                    <tr class="bg-[#1a2a1a] text-green-200">
                        <th class="p-4 text-left">Produits</th>
                        <th class="p-4 text-center">Quantité</th>
                        <th class="p-4 text-right">Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-green-900/30">
                        <td class="p-4">Sac de riz</td>
                        <td class="p-4 text-center">2</td>
                        <td class="p-4 text-right">40.000 fcfa</td>
                    </tr>
                    <tr class="border-b border-green-900/30">
                        <td class="p-4">Sucre</td>
                        <td class="p-4 text-center">5</td>
                        <td class="p-4 text-right">200000 fcfa</td>
                    </tr>
                    <tr>
                        <td class="p-4">Lait</td>
                        <td class="p-4 text-center">10</td>
                        <td class="p-4 text-right">1200 fcfa</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-4 mb-8">
            <button class="w-8 h-8 rounded-full flex items-center justify-center text-green-400 hover:text-white">&lt;</button>
            <button class="w-8 h-8 rounded-full flex items-center justify-center bg-green-500 text-black font-semibold">1</button>
            <button class="w-8 h-8 rounded-full flex items-center justify-center text-green-400 hover:text-white">2</button>
            <button class="w-8 h-8 rounded-full flex items-center justify-center text-green-400 hover:text-white">3</button>
            <button class="w-8 h-8 rounded-full flex items-center justify-center text-green-400 hover:text-white">&gt;</button>
        </div>

        <!-- Total & Valider -->
        <div class="flex flex-col md:flex-row justify-between items-center mt-8">
            <div class="text-2xl font-semibold mb-4 md:mb-0">
                <span class="text-gray-200">Total :</span> <span class="text-green-400">61.200 fcfa</span>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-black font-semibold rounded-lg px-8 py-3 text-lg">Valider commande</button>
        </div>
    </form>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/layout.html.php';
?>