<?php

class Category {
    protected $name;
    protected $icon;
    
    function __construct($_name, $_icon = null) {
        $this->setName($_name);
        $this->setIcon($_icon);
    }

    /**
     * Get the value of icon
     */ 
    public function getIcon() {
        return $this->icon;
    }

    /**
     * Set the value of icon
     *
     * @return  self
     */ 
    public function setIcon($icon) {
        if (empty($icon)){
            return;
        }

        $this->icon = $icon;

        return $this;
    }

    public function getIconHtml(){
        return "<i class= 'fas $this->icon />'";
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
        $this->name = $name;

        return $this;
    }
}