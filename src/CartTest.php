<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CartTest
 *
 * @author Atchoum
 */
class CartTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @dataProvider cartProvider
     */
    public  function testCart($nom, $prix) {
        $product = new Product($nom, $prix);
        $cart = new Cart();
        $cart->addProduct($product);
        $this->assertCount(3,  $cart->getProducts());
    }
    
    public function cartProvider()
    {
          return array(
          array("Produit 1", 339),
          array("Produit 2", 359),
          array("Produit 3", 399),
          array("Produit 4", 259)
        );
    }
    
}
