<?php
 
namespace Pweb\AccueilBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pweb\AccueilBundle\Entity\Marque; 

class Marques extends AbstractFixture implements OrderedFixtureInterface{

    public function load(ObjectManager $manager){

      $marque = new Marque();
      $marque->setLibelleMar("Samsung");
      $manager->persist($marque);

      $marque = new Marque();
      $marque->setLibelleMar("Sony");
      $manager->persist($marque);
      
      $marque = new Marque();
      $marque->setLibelleMar("HTC");
      $manager->persist($marque);
      
      $marque = new Marque();
      $marque->setLibelleMar("Nokia");
      $manager->persist($marque);
      
      $marque = new Marque();
      $marque->setLibelleMar("Apple");
      $manager->persist($marque);
      
      $marque = new Marque();
      $marque->setLibelleMar("Sony Ericsson");
      $manager->persist($marque);
      
      $marque = new Marque();
      $marque->setLibelleMar("LG");
      $manager->persist($marque);
            
      $marque = new Marque();
      $marque->setLibelleMar("Caterpillar");
      $manager->persist($marque);

      $marque = new Marque();
      $marque->setLibelleMar("Acer");
      $manager->persist($marque);

      $marque = new Marque();
      $marque->setLibelleMar("Huawei");
      $manager->persist($marque);

      $marque = new Marque();
      $marque->setLibelleMar("Alcatel");
      $manager->persist($marque);
      
      $marque = new Marque();
      $marque->setLibelleMar("Dell");
      $manager->persist($marque);
      
      $marque = new Marque();
      $marque->setLibelleMar("HP");
      $manager->persist($marque);
                    
      $marque = new Marque();
      $marque->setLibelleMar("Asus");
      $manager->persist($marque);
  
      $marque = new Marque();
      $marque->setLibelleMar("Amazon");
      $manager->persist($marque);

      $marque = new Marque();
      $marque->setLibelleMar("Blackberry");
      $manager->persist($marque);
      
      $marque = new Marque();
      $marque->setLibelleMar("Archos");
      $manager->persist($marque);
      
      $manager->flush();

  }

  public function getOrder(){
    return 1; // the order in which fixtures will be loaded
  }

}

?>


