<?php

namespace Src\entite;

class Paiement {
    private $id;
    private $numero;
    private $date;
    private $montantVerse;
    private $facture; 
    private $vendeur; 

    public function __construct($id, $numero, $date, $montantVerse, $facture, $vendeur) {
        $this->id = $id;
        $this->numero = $numero;
        $this->date = $date;
        $this->montantVerse = $montantVerse;
        $this->facture = $facture;
        $this->vendeur = $vendeur;
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
}