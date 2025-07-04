<?php
namespace Src\repository;

use PDO;

class ClientRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    // On ne redéfinit PAS findAll(string $table)
    // On crée une méthode spécifique pour les clients :
    public function findAllClients(): array
    {
        return $this->findAll('personne');
    }
}