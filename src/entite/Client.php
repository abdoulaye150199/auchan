<?php

namespace Src\entite;

class ClientEntity extends Personne {
    private $telephone;
    private $commandes = [];

    public function __construct($telephone, $commandes = []) {
        $this->telephone = $telephone;
        $this->commandes = $commandes;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
        return $this;
    }

    public function getCommandes() {
        return $this->commandes;
    }

    public function setCommandes($commandes) {
        $this->commandes = $commandes;
        return $this;
    }

    public function addCommande($commande) {
        $this->commandes[] = $commande;
        return $this;
    }

        public static function toObject($data = []) {
        return new self(
            $data['telephone'] ?? null,
            $data['commandes'] ?? []
        );
    }

    public function toArray() {
        return array_merge(parent::toArray(),
        [
            'telephone' => $this->telephone,
            'commandes' => $this->commandes 
        ]);
    }

    
}