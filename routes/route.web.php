<?php
return [
    // Routes d'authentification
    '/login' => ['controller' => 'AuthController', 'action' => 'showLoginForm'],
    '/auth/login' => ['controller' => 'AuthController', 'action' => 'login'],
    '/logout' => ['controller' => 'AuthController', 'action' => 'logout'],
    
    // Routes des commandes
    '/' => ['controller' => 'CommandeController', 'action' => 'index'],
    '/commandes' => ['controller' => 'CommandeController', 'action' => 'showList'],
    '/commande' => ['controller' => 'CommandeController', 'action' => 'showForm'],
    '/commande/create' => ['controller' => 'CommandeController', 'action' => 'create'],
    '/facture' => ['controller' => 'CommandeController', 'action' => 'showFacture'],
];