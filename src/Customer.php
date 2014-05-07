<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author Atchoum
 */
class Customer {
    
    private $firstname;
    private $lastname;
    private $email;
    private $cart;
    
    
    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    
    
    public function getCart() {
        return $this->cart;
    }

    public function setCart(Cart $cart) {
        $this->cart = $cart;
    }


}
