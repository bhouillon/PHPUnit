<?php


class PersonneTest extends \PHPUnit_Framework_TestCase
{
    
    /**
     * 
     * @dataProvider adresseProvider
     */
    public function testAdresse($numero, $rue, $codepostal, $ville)
    {
        $adresse = new Adresse($numero, $rue, $codepostal, $ville);
        $personne=new Personne();
        $personne->setAdresse($adresse);
        $this->assertEquals($adresse, $personne->getAdresse($adresse));
    }
    
    public function adresseProvider()
    {
          return array(
          array("68 bis", "rue du pet", 75012, "Paris"),
          array("68 bis", "rue du prout", 75013, "Paris 13"),
          array("68 bis", "rue du pet", 75012, "Paris"),
          array("68", "rue du pet", 75012, "Paris")
        );
    }
}