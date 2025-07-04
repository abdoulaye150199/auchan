<?php
namespace Src\repository;

use PDO;

class CommandeRepository
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=Gestion_commerciale', 'laye', 'Laye_2024!');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function enregistrerCommande(array $data): int
    {
        $stmt = $this->pdo->prepare("INSERT INTO commande (numero, date, montant, client_id, vendeur_id) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([
            $data['numero'],
            $data['date'],
            $data['montant'],
            $data['client_id'] ?? 0,
            $data['vendeur_id'] ?? 0
        ]);
        return $this->pdo->lastInsertId();
    }

    public function findAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM commande");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById(int $id): ?array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM commande WHERE id = ?");
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }

    public function enregistrerCommandeProduits(array $commandeData, array $produits): int
    {
        $commandeId = $this->enregistrerCommande($commandeData);

        foreach ($produits as $produit) {
            $stmt = $this->pdo->prepare("INSERT INTO produit_commande (commande_id, produit_id, qteCommande, montant) VALUES (?, ?, ?, ?)");
            $stmt->execute([
                $commandeId,
                $produit['produit_id'],
                $produit['qte'],
                $produit['montant']
            ]);
        }

        return $commandeId;
    }
}