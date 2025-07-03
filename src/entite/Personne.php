<?php

namespace Src\entite;

abstract class Personne extends AbstractEntity{
    protected $id;
    protected $nom;
    protected $type;
    public function __construct($id, $nom, $type) {
        $this->id = $id;
        $this->nom = $nom;
        $this->type = $type;
    }
   public static function toObject($array = []) {
        $instance = new static($array['id'] ?? null, $array['nom'] ?? null, $array['type'] ?? null);
        return $instance;
    }

   

    public function toArray() {
        return [
            'id'=>$this->id,
            'nom'=>$this->nom,
            'type'=>$this->type
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

        public function getNom()
        {
                return $this->nom;
        }

        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

        public function getType()
        {
                return $this->type;
        }

        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }
        // lorsque la methode produit un resultat un objet 
        // on convert un tableau en toObject static

        // si c'est un objet que l'on convertie est instance



    
}