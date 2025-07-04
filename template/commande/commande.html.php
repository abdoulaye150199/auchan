<?php
$title = "Liste des Commandes";
ob_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Commandes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass-effect {
            background: rgba(255,255,255,0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.08);
        }
        .nav-item { transition: all 0.3s; }
        .nav-item:hover { color: #22c55e; }
        .btn-green {
            background: #22c55e;
            color: #fff;
            border-radius: 1rem;
            font-weight: 600;
            padding: 0.25rem 1.5rem;
            transition: background 0.2s;
        }
        .btn-green:hover { background: #16a34a; }
        .pagination-btn {
            width: 32px; height: 32px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            transition: all 0.3s; font-size: 1rem;
        }
        .pagination-active {
            background: #22c55e; color: #000;
        }
        .status-badge {
            border-radius: 1rem; padding: 0.2rem 1rem; font-size: 0.9rem; font-weight: 600;
        }
        .status-impaye { background: #222; color: #a3e635; }
        .status-paye { background: #22c55e; color: #000; }
    </style>
</head>
<body class="min-h-screen bg-[#151e13] text-white">

    <nav class="glass-effect border-b border-green-700/50 px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <div class="w-6 h-6 bg-green-500 rounded"></div>
                <span class="text-xl font-semibold">Abdoulaye Diallo</span>
            </div>
         
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-bold mb-8">Liste des commandes</h1>

        <!-- Filtres -->
        <div class="flex gap-6 mb-8">
            <select class="bg-[#1a2a1a] border border-green-700 rounded-lg px-4 py-2 text-white">
                <option>Filtrer par status</option>
                <option>payé</option>
                <option>impayé</option>
            </select>
            <select class="bg-[#1a2a1a] border border-green-700 rounded-lg px-4 py-2 text-white">
                <option>Filtrer par client</option>
                <option>BAKARY DIASSY</option>
                <option>ANONYME</option>
                <option>ALI DIOP</option>
            </select>
            <select class="bg-[#1a2a1a] border border-green-700 rounded-lg px-4 py-2 text-white">
                <option>Filtrer par Etat</option>
                <option>En cours</option>
                <option>Validée</option>
            </select>
        </div>

        <!-- Tableau -->
        <div class="glass-effect rounded-lg overflow-hidden mb-8">
            <table class="w-full">
                <thead>
                    <tr class="bg-[#1a2a1a] text-green-200">
                        <th class="p-4 text-left">Numero Commande</th>
                        <th class="p-4 text-left">Client</th>
                        <th class="p-4 text-left">Status</th>
                        <th class="p-4 text-center">Facture</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($commandes as $commande): ?>
                    <tr class="border-b border-green-900/30 hover:bg-[#1a2a1a]">
                        <td class="p-4 font-mono">#<?= htmlspecialchars($commande['numero']) ?></td>
                        <td class="p-4"><?= htmlspecialchars($commande['client'] ?? $commande['client_id']) ?></td>
                        <td class="p-4">
                            <span class="status-badge status-impaye"><?= htmlspecialchars($commande['status'] ?? 'impayé') ?></span>
                        </td>
                        <td class="p-4 text-center">
                            <button class="btn-green">voir</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-4">
            <button class="pagination-btn text-green-400 hover:text-white">&lt;</button>
            <button class="pagination-btn pagination-active">1</button>
            <button class="pagination-btn text-green-400 hover:text-white">2</button>
            <button class="pagination-btn text-green-400 hover:text-white">3</button>
            <button class="pagination-btn text-green-400 hover:text-white">&gt;</button>
        </div>
    </div>
</body>
</html>
<?php
$content = ob_get_clean();
require __DIR__ . '/layout.html.php';
?>