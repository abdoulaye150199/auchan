<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-shadow {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        .input-focus:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .btn-hover:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.2);
        }
        .illustration-container {
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50">
    <div class="min-h-screen flex">
        <!-- Section illustration gauche -->
        <div class="hidden lg:flex lg:flex-1 items-center justify-center illustration-container relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600"></div>
            <div class="relative z-10 max-w-md mx-auto">
                <!-- Illustration isométrique -->
                <div class="relative">
                    <!-- Fond avec formes géométriques -->
                    <div class="absolute -top-10 -left-10 w-20 h-20 bg-white bg-opacity-20 rounded-full"></div>
                    <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-white bg-opacity-10 rounded-full"></div>
                    
                    <!-- Container principal de l'illustration -->
                    <div class="relative bg-white bg-opacity-20 backdrop-blur-sm rounded-2xl p-8 transform rotate-3 hover:rotate-0 transition-transform duration-300">
                        <!-- Laptop -->
                        <div class="relative mb-6">
                            <div class="bg-gray-800 rounded-lg p-2 shadow-2xl transform -rotate-6">
                                <div class="bg-blue-500 rounded h-24 w-32 flex items-center justify-center">
                                    <div class="text-white text-xs">📊</div>
                                </div>
                                <div class="bg-gray-700 rounded-b h-2 w-32"></div>
                            </div>
                        </div>
                        
                        <!-- Camion de livraison -->
                        <div class="absolute -top-4 -right-4 transform rotate-12">
                            <div class="bg-yellow-400 rounded-lg p-2 shadow-lg">
                                <div class="text-xs">🚚</div>
                            </div>
                        </div>
                        
                        <!-- Boîtes de colis -->
                        <div class="flex space-x-2 mb-4">
                            <div class="bg-orange-400 rounded shadow-md p-2 transform -rotate-3">
                                <div class="text-xs">📦</div>
                            </div>
                            <div class="bg-red-400 rounded shadow-md p-2 transform rotate-6">
                                <div class="text-xs">📦</div>
                            </div>
                            <div class="bg-green-400 rounded shadow-md p-2 transform -rotate-2">
                                <div class="text-xs">📦</div>
                            </div>
                        </div>
                        
                        <!-- Personnes -->
                        <div class="flex justify-between items-end">
                            <div class="bg-blue-600 rounded-full w-8 h-8 flex items-center justify-center shadow-lg">
                                <div class="text-white text-xs">👤</div>
                            </div>
                            <div class="bg-purple-600 rounded-full w-8 h-8 flex items-center justify-center shadow-lg">
                                <div class="text-white text-xs">👤</div>
                            </div>
                        </div>
                        
                        <!-- Éléments volants -->
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                            <div class="bg-white bg-opacity-80 rounded-full p-1 shadow-lg animate-bounce">
                                <div class="text-xs">💭</div>
                            </div>
                        </div>
                        
                        <div class="absolute -bottom-2 -left-2">
                            <div class="bg-white bg-opacity-80 rounded-full p-1 shadow-lg">
                                <div class="text-xs">📍</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section formulaire droite -->
        <div class="flex-1 flex items-center justify-center px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <div class="bg-white rounded-2xl card-shadow p-8 lg:p-10">
                    <!-- En-tête -->
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-2">Login</h2>
                        <p class="text-sm text-gray-600">Connectez-vous à votre compte</p>
                    </div>
                    
                    <!-- Formulaire -->
                    <form class="space-y-6" onsubmit="handleLogin(event)">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email
                            </label>
                            <input 
                                id="email" 
                                name="email" 
                                type="email" 
                                required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none input-focus transition-all duration-200 bg-gray-50 hover:bg-white"
                                placeholder="votre@email.com"
                            >
                        </div>
                        
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                                Password
                            </label>
                            <input 
                                id="password" 
                                name="password" 
                                type="password" 
                                required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none input-focus transition-all duration-200 bg-gray-50 hover:bg-white"
                                placeholder="••••••••"
                            >
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input 
                                    id="remember-me" 
                                    name="remember-me" 
                                    type="checkbox" 
                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                >
                                <label for="remember-me" class="ml-2 block text-sm text-gray-600">
                                    Se souvenir de moi
                                </label>
                            </div>
                            
                            <div class="text-sm">
                                <a href="#" class="text-blue-600 hover:text-blue-500 font-medium transition-colors">
                                    Mot de passe oublié?
                                </a>
                            </div>
                        </div>
                        
                        <div>
                            <button 
                                type="submit" 
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-200 btn-hover focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                            >
                                Sign in
                            </button>
                        </div>
                        
                        <div class="text-center">
                            <p class="text-sm text-gray-600">
                                Pas encore de compte? 
                                <a href="#" class="text-blue-600 hover:text-blue-500 font-medium transition-colors">
                                    Créer un compte
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function handleLogin(event) {
            event.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Simulation d'une connexion
            if (email && password) {
                alert('Connexion réussie! (Simulation)');
            }