<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServiceContainer
 *
 * @author Atchoum
 */
class ServiceContainer {
    //put your code here
    
   private $instance;
   
   public function getInstance() {
       
       return $this->instance;
   }

   public function setInstance($instance) {
       if(!isset(self::getInstance()))
       {
       $this->instance = $instance;
       }
       else {
           self::getInstance(); 
       }
       
   }


}
