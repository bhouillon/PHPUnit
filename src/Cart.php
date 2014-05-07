<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cart
 *
 * @author Atchoum
 */
class Cart {

    private $date;
    private $product;
    private $prixtotal;
    private $products = array();

    public function getDate() {
        return $this->date;
    }

    public function getProduct() {
    return $this->product;
    }

    public function getPrixtotal() {
        return $this->prixtotal;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setProduct(Product $product) {
        $this->product = $product;
    }

    public function setPrixtotal($prixtotal) {
        $this->prixtotal = $prixtotal;
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function deleteProduct($i) {
        unset($this->products[$i]);
    }

    public function clearCart() {
        unset($this->product);
    }
    public function getProducts() {
        return $this->products;
    }

    public function setProducts($products) {
        $this->products = $products;
    }


    

}
