<?php
require_once __DIR__ . '/../src/repository/ClientRepository.php';
require_once __DIR__ . '/../src/repository/ProduitRepository.php';

use Src\repository\ClientRepository;
use Src\repository\ProduitRepository;

$clientRepo = new ClientRepository();
$produitRepo = new ProduitRepository();

$clients = $clientRepo->findAll();
$produits = $produitRepo->findAll();

include __DIR__ . '/../template/commande.html.php';