<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Personne
{
    public $nom;
    public $prenom;
    public $age;
    public $password;
    public $adresse;
    
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAge() {
        return $this->age;
    }

    public function setNom($nom) {
        if(is_string($nom))
        {
           $this->nom = $nom;
        }
        else
        {
           throw new InvalidArgumentException("Le nom entré est invalide");
        }
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setAge($age) {
        $this->age = $age;
    }
     
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse(Adresse $adresse) {
        $this->adresse = $adresse;
    }



}
