<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Game extends Product {
    private $genere;
    private $materials = [];

    function __construct($_name, $_price, Category $_category, $_materials) {
        parent::__construct($_name, $_price, $_category);

        $this->setMaterials($_materials);
    }

    /**
     * Get the value of materials
     */ 
    public function getMaterials() {
        return $this->materials;
    }

    /**
     * Set the value of materials
     *
     * @return  self
     */ 
    public function setMaterials($materials) {
        $this->materials = $materials;

        return $this;
    }

    /**
     * Get the value of genere
     */ 
    public function getGenere() {
        return $this->genere;
    }

    /**
     * Set the value of genere
     *
     * @return  self
     */ 
    public function setGenere($genere) {
        $this->genere = $genere;

        return $this;
    }
}