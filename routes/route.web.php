<?php
return [
    '/' => ['controller' => 'CommandeController', 'action' => 'showList'],
    '/commandes' => ['controller' => 'CommandeController', 'action' => 'showList'],
    '/commande' => ['controller' => 'CommandeController', 'action' => 'showForm'],
    '/commande/create' => ['controller' => 'CommandeController', 'action' => 'create'],
    '/facture' => ['controller' => 'CommandeController', 'action' => 'showFacture'],
];
