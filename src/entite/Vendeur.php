<?php

namespace Src\entite;

class VendeurEntity extends Personne {
    private $login;
    private $password;
    private $commande;
    private $paiement;

    public function __construct($login, $password, $commande = [], $paiement = []) {
        $this->login = $login;
        $this->password = $password;
        $this->commande = $commande;
        $this->paiement = $paiement;
    }

    public function getLogin() { return $this->login; }
    public function setLogin($login) { $this->login = $login; return $this; }

    public function getPassword() { return $this->password; }
    public function setPassword($password) { $this->password = $password; return $this; }

    public function getCommande() { return $this->commande; }
    public function AddCommande($commande) { $this->commande = $commande; return $this; }

    public function getPaiement() { return $this->paiement; }
    public function AddPaiement($paiement) { $this->paiement = $paiement; return $this; }

    public static function toObject($data = []) {
        return new self(
            $data['login'] ?? null,
            $data['password'] ?? null,
            $data['commande'] ?? [],
            $data['paiement'] ?? []
        );
    }

    public function toArray() {
        return array_merge (parent::toArray(), 
        [
            'login' => $this->getLogin(),
            'password' => $this->getPassword(),
            'commande' => $this->commande,
            'paiement' => $this->paiement
        ]);
    }

}