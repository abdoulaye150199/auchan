<?php

namespace Src\repository;

use PDO;

class VendeurRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Trouver un vendeur par son login
     */
    public function findByLogin(string $login): ?array
    {
        $sql = "SELECT * FROM personne WHERE login = :login AND type = 'vendeur'";
        $cursor = $this->pdo->prepare($sql);
        $cursor->execute(['login' => $login]);
        $result = $cursor->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }

    /**
     * Trouver tous les vendeurs
     */
    public function findAllVendeurs(): array
    {
        return $this->findAllClause(['type = "vendeur"'], 'personne');
    }

    /**
     * Créer un nouveau vendeur
     */
    public function createVendeur(array $data): int
    {
        $data['type'] = 'vendeur';
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $this->insert('personne', $data);
    }

    /**
     * Mettre à jour le mot de passe d'un vendeur
     */
    public function updatePassword(int $id, string $newPassword): bool
    {
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $sql = "UPDATE personne SET password = :password WHERE id = :id AND type = 'vendeur'";
        $cursor = $this->pdo->prepare($sql);
        return $cursor->execute(['password' => $hashedPassword, 'id' => $id]);
    }
}