<?php

namespace Src\entite;

class Facture extends AbstractEntity {
    private $id;
    private $numero;
    private $date;
    private $montant;
    private $statut;
    private $montantRestant;
    private $commande;
    private $paiements = []; 

    public function __construct($id, $numero, $date, $montant, $statut, $montantRestant, $commande, $paiements = []) {
        $this->id = $id;
        $this->numero = $numero;
        $this->date = $date;
        $this->montant = $montant;
        $this->statut = $statut;
        $this->montantRestant = $montantRestant;
        $this->commande = $commande;
        $this->paiements = $paiements;
    }

    public static function toObject(array $data = []) {
        return new self(
            $data['id'] ?? null,
            $data['numero'] ?? null,
            $data['date'] ?? null,
            $data['montant'] ?? null,
            $data['statut'] ?? null,
            $data['montantRestant'] ?? null,
            $data['commande'] ?? null,
            $data['paiements'] ?? []
        );
    }

    public function toJson() {
        return json_encode($this->toArray());
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'numero' => $this->numero,
            'date' => $this->date,
            'montant' => $this->montant,
            'statut' => $this->statut,
            'montantRestant' => $this->montantRestant,
            'commande' => $this->commande,
            'paiements' => $this->paiements
        ];
    }

    public function setCommande($commande) { $this->commande = $commande; }
    public function getCommande() { return $this->commande; }

    public function setPaiements($paiements) { $this->paiements = $paiements; }
    public function getPaiements() { return $this->paiements; }
}