
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
        <?= $content ?? '' ?>
    </main>
</body>
</html>