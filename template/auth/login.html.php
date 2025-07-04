<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Gestion Commerciale</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
        }
        .card-shadow {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        .input-focus:focus {
            border-color: #22c55e;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.1);
        }
        .btn-hover:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 20px rgba(34, 197, 94, 0.2);
        }
        .illustration-container {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
        }
    </style>
</head>
<body class="min-h-screen bg-[#151e13]">
    <div class="min-h-screen flex">
        <!-- Section illustration gauche -->
        <div class="hidden lg:flex lg:flex-1 items-center justify-center illustration-container relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-600"></div>
            <div class="relative z-10 max-w-md mx-auto text-center">
                <!-- Illustration commerciale -->
                <div class="relative">
                    <!-- Fond avec formes géométriques -->
                    <div class="absolute -top-10 -left-10 w-20 h-20 bg-white bg-opacity-20 rounded-full animate-pulse"></div>
                    <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-white bg-opacity-10 rounded-full animate-pulse delay-1000"></div>
                    
                    <!-- Container principal de l'illustration -->
                    <div class="relative bg-white bg-opacity-20 backdrop-blur-sm rounded-2xl p-8 transform hover:scale-105 transition-transform duration-300">
                        <!-- Icône principale -->
                        <div class="text-6xl mb-4">📊</div>
                        <h2 class="text-2xl font-bold text-white mb-2">Gestion Commerciale</h2>
                        <p class="text-green-100 mb-6">Gérez vos commandes, clients et produits en toute simplicité</p>
                        
                        <!-- Éléments décoratifs -->
                        <div class="flex justify-center space-x-4 mb-4">
                            <div class="bg-white bg-opacity-30 rounded-lg p-3 transform rotate-3">
                                <div class="text-2xl">🛒</div>
                            </div>
                            <div class="bg-white bg-opacity-30 rounded-lg p-3 transform -rotate-3">
                                <div class="text-2xl">📦</div>
                            </div>
                            <div class="bg-white bg-opacity-30 rounded-lg p-3 transform rotate-6">
                                <div class="text-2xl">💰</div>
                            </div>
                        </div>
                        
                        <!-- Stats simulées -->
                        <div class="grid grid-cols-2 gap-4 text-white">
                            <div class="bg-white bg-opacity-20 rounded-lg p-3">
                                <div class="text-lg font-bold">150+</div>
                                <div class="text-sm">Commandes</div>
                            </div>
                            <div class="bg-white bg-opacity-20 rounded-lg p-3">
                                <div class="text-lg font-bold">50+</div>
                                <div class="text-sm">Clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section formulaire droite -->
        <div class="flex-1 flex items-center justify-center px-4 sm:px-6 lg:px-8 bg-[#151e13]">
            <div class="max-w-md w-full space-y-8">
                <div class="bg-[#1a2a1a] rounded-2xl card-shadow p-8 lg:p-10 border border-green-700/30">
                    <!-- En-tête -->
                    <div class="text-center mb-8">
                        <div class="mx-auto w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-white mb-2">Connexion Vendeur</h2>
                        <p class="text-sm text-gray-400">Connectez-vous pour accéder à votre espace</p>
                    </div>
                    
                    <!-- Affichage des erreurs -->
                    <?php if (isset($error)): ?>
                        <div class="mb-6 p-4 bg-red-900/50 border border-red-700 rounded-lg">
                            <p class="text-red-300 text-sm"><?= htmlspecialchars($error) ?></p>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Formulaire -->
                    <form class="space-y-6" action="/login" method="POST">
                        <div>
                            <label for="login" class="block text-sm font-medium text-gray-300 mb-2">
                                Nom d'utilisateur
                            </label>
                            <input 
                                id="login" 
                                name="login" 
                                type="text" 
                                required 
                                class="w-full px-4 py-3 border border-green-700 rounded-lg focus:outline-none input-focus transition-all duration-200 bg-[#151e13] text-white placeholder-gray-500"
                                placeholder="Votre nom d'utilisateur"
                                value="<?= htmlspecialchars($_POST['login'] ?? '') ?>"
                            >
                        </div>
                        
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-300 mb-2">
                                Mot de passe
                            </label>
                            <input 
                                id="password" 
                                name="password" 
                                type="password" 
                                required 
                                class="w-full px-4 py-3 border border-green-700 rounded-lg focus:outline-none input-focus transition-all duration-200 bg-[#151e13] text-white placeholder-gray-500"
                                placeholder="••••••••"
                            >
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input 
                                    id="remember-me" 
                                    name="remember-me" 
                                    type="checkbox" 
                                    class="h-4 w-4 text-green-600 focus:ring-green-500 border-green-700 rounded bg-[#151e13]"
                                >
                                <label for="remember-me" class="ml-2 block text-sm text-gray-400">
                                    Se souvenir de moi
                                </label>
                            </div>
                            
                            <div class="text-sm">
                                <a href="#" class="text-green-400 hover:text-green-300 font-medium transition-colors">
                                    Mot de passe oublié?
                                </a>
                            </div>
                        </div>
                        
                        <div>
                            <button 
                                type="submit" 
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200 btn-hover focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-[#1a2a1a]"
                            >
                                Se connecter
                            </button>
                        </div>
                        
                        <div class="text-center">
                            <p class="text-sm text-gray-400">
                                Besoin d'aide? 
                                <a href="#" class="text-green-400 hover:text-green-300 font-medium transition-colors">
                                    Contactez l'administrateur
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
                
                <!-- Informations supplémentaires -->
                <div class="text-center text-gray-500 text-xs">
                    <p>© 2024 Gestion Commerciale. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>