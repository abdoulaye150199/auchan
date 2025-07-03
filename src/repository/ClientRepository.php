<?php
namespace Src\repository;

use PDO;

class ClientRepository {
    private $pdo;
    public function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=Gestion_commerciale', 'laye', 'Laye1234!');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function findAll() {
        $stmt = $this->pdo->query("SELECT * FROM personne WHERE type='client'");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}