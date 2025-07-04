<?php
namespace Src\repository;

use PDO;
use PDOException;

abstract class Repository
{
    protected PDO $pdo;

    public function __construct(?PDO $pdo = null)
    {
        if ($pdo) {
            $this->pdo = $pdo;
        } else {
            $this->pdo = self::connectToDatabase();
        }
    }

    public static function connectToDatabase(): ?PDO
    {
        try {
            $dsn = "mysql:host=localhost;dbname=Gestion_commerciale";
            $pdo = new PDO(
                $dsn,
                'laye',
                'Laye_2024!',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );
            return $pdo;
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    public function findAll(string $table): array
    {
        $sql = "SELECT * FROM {$table}";
        $cursor = $this->pdo->prepare($sql);
        $cursor->execute();
        return $cursor->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findAllClause(array $clause, string $table): array
    {
        if (!$clause || empty($clause)) {
            return [];
        }
        $where = implode(' AND ', $clause);
        $sql = "SELECT * FROM {$table} WHERE {$where}";
        $cursor = $this->pdo->prepare($sql);
        $cursor->execute();
        return $cursor->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert(string $table, array $data): int
    {
        if (!$data || empty($data)) {
            return 0;
        }
        $columns = implode(',', array_keys($data));
        $donnees = implode(',', array_map(fn($key) => ":{$key}", array_keys($data)));
        $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$donnees})";
        $cursor = $this->pdo->prepare($sql);
        $cursor->execute($data);
        return (int)$this->pdo->lastInsertId();
    }

    public function findById(string $table, int $id): ?array
    {
        $sql = "SELECT * FROM {$table} WHERE id = :id";
        $cursor = $this->pdo->prepare($sql);
        $cursor->execute(['id' => $id]);
        $result = $cursor->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }
}