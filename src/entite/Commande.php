<?php

namespace Src\entite;

class Commande extends AbstractEntity {
    private $id;
    private $numero;
    private $date;
    private $montant;
    private $client; 
    private $produitCommande = []; 
    private $facture; 
    private $vendeur;

    public function __construct($id, $numero, $date, $montant, $client, $vendeur, $produitCommande = [], $facture = null) {
        $this->id = $id;
        $this->numero = $numero;
        $this->date = $date;
        $this->client = $client;
        $this->vendeur = $vendeur;
        $this->produitCommande = $produitCommande;
        $this->facture = $facture;
    }

    public static function toObject(array $data = []) {
        return new self(
            $data['id'] ?? null,
            $data['numero'] ?? null,
            $data['date'] ?? null,
            $data['client'] ?? null,
            $data['vendeur'] ?? null,
            $data['produitCommande'] ?? [],
            $data['facture'] ?? null
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
            'client' => $this->client,
            'vendeur' => $this->vendeur,
            'produitCommande' => $this->produitCommande,
            'facture' => $this->facture
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

        public function getNumero()
        {
                return $this->numero;
        }

        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }

        public function getDate()
        {
                return $this->date;
        }

        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }

        public function getMontant()
        {
                return $this->montant;
        }
        public function setMontant($montant)
        {
                $this->montant = $montant;

                return $this;
        }
 

        public function getFacture()
        {
                return $this->facture;
        }

        public function setFacture($facture)
        {
                $this->facture = $facture;

                return $this;
        }

        public function getVendeur()
        {
                return $this->vendeur;
        }

        public function setVendeur($vendeur)
        {
                $this->vendeur = $vendeur;

                return $this;
        }

        public function getProduitCommande()
        {
                return $this->produitCommande;
        }
}