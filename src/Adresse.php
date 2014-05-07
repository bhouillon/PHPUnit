<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Adresse
 *
 * @author Atchoum
 */
class Adresse {

    public $numero;
    public $rue;
    public $codepostal;
    public $ville;

    public function __construct($numero, $rue, $codepostal, $ville) {
        $this->setNumero($numero);
        $this->setRue($rue);
        $this->setCodepostal($codepostal);
        $this->setVille($ville);
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getRue() {
        return $this->rue;
    }

    public function getCodepostal() {
        return $this->codepostal;
    }

    public function getVille() {
        return $this->ville;
    }

    public function setNumero($numero) {
        if (is_string($numero)) {
            $this->numero = $numero;
        } else {
            throw new InvalidArgumentException("Le numéro de la rue est invalide");
        }
    }

    public function setRue($rue) {
        if (is_string($rue)) {
            $this->rue = $rue;
        } else {
            throw new InvalidArgumentException("le nom de la rue n'est pas valide");
        }
    }

    public function setCodepostal($codepostal) {
        if (is_int($codepostal)) {
            $this->codepostal = $codepostal;
        } else {
            throw new InvalidArgumentException("le code postal n'est pas valide");
        }
    }

    public function setVille($ville) {
        if (is_string($ville)) {
            $this->ville = $ville;
        } else {
            throw new InvalidArgumentException("le nom de la ville n'est pas correct");
        }
    }

}
