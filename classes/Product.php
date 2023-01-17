<?php
class Product{
    private $id;
    protected $name;
    protected $price;
    protected $image;
    protected $isAvailable = true;
    protected $quantity = 0;
    protected $category;

    function __construct($_name, $_price, $_category, $_isAvailable = null, $_quantity = null, $_image = null) {
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setCategory($_category);
        $this->setIsAvailable($_isAvailable);
        $this->setQuantity($_quantity);
        $this->setImage($_image);
    }

    /**
     * Get the value of category
     */ 
    public function getCategory() {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category) {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity) {
        if (is_null($quantity)){
            return;
        }

        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of isAvailable
     */ 
    public function getIsAvailable() {
        return $this->isAvailable;
    }

    /**
     * Set the value of isAvailable
     *
     * @return  self
     */ 
    public function setIsAvailable($isAvailable) {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage() {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image) {

        if (is_null($image)){
            return;
        }

        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName() {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name) {

        if (empty($name)){
            return;
        }

        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId() {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id) {
        $this->id = uniqid("prod-");

        return $this;
    }
}


