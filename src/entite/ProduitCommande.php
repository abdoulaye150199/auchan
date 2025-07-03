<?php

namespace Src\entite;

class ProduitCommande {
    private $produit;
    private $qteCommande;
    private $commande;
    private $montant;

    public function __construct($produit, $commande, $qteCommande, $montant) {
        $this->produit = $produit;
        $this->commande = $commande;
        $this->qteCommande = $qteCommande;
        $this->montant = $montant;
    }

    public function getProduit()
    {
        return $this->produit;
    }


    public function setProduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }

    public function getQteCommande()
    {
        return $this->qteCommande;
    }

    public function setQteCommande($qteCommande)
    {
        $this->qteCommande = $qteCommande;

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
    public function getCommande()
    {
        return $this->commande;
    }
    public function setCommande($commande)
    {
        $this->commande = $commande;

        return $this;
    }
}