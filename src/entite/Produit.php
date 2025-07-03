<?php

namespace Src\entite;

class Produit extends AbstractEntity {
    private $id;
    private $libelle;
    private $qteStock;
    private $prix;

    public function __construct($id, $libelle, $qteStock, $prix) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->qteStock = $qteStock;
        $this->prix = $prix;
    }

    public static function toObject(array $data = []) {
        return new self(
            $data['id'] ?? null,
            $data['libelle'] ?? null,
            $data['qteStock'] ?? null,
            $data['prix'] ?? null
        );
    }

    public function toJson() {
        return json_encode($this->toArray());
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'libelle' => $this->libelle,
            'qteStock' => $this->qteStock,
            'prix' => $this->prix
        ];
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getQteStock()
    {
        return $this->qteStock;
    }
    
    public function setQteStock($qteStock)
    {
        $this->qteStock = $qteStock;

        return $this;
    }

    
    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}