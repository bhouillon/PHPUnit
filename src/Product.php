<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author Atchoum
 */
class Product {
   
    private $nom;
    private $prix;
    
    public function __construct($nom, $prix) {
        $this->setNom($nom);
        $this->setPrix($prix);
    }
    
    public function getNom() {
        return $this->nom;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }
}
