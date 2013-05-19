<?php
 
namespace Pweb\CompteBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pweb\AccueilBundle\Entity\Produit; 
use Pweb\CompteBundle\Entity\Commande;
use Pweb\CompteBundle\Entity\StatutCom; 

class Commandes extends AbstractFixture implements OrderedFixtureInterface{

    public function load(ObjectManager $manager){
 
      /**************************************************************/
      $com = new Commande();
      $com->setDate(new \DateTime);
      
      $stat = $manager->getRepository("PwebCompteBundle:StatutCom")->findOneBy(array('libelleStat' => "en cours"));
      $com->setStatut($stat);
      
      $manager->persist($com);
      
      /**************************************************************/
      $com = new Commande();
      $com->setDate(new \DateTime);
      
      $stat = $manager->getRepository("PwebCompteBundle:StatutCom")->findOneBy(array('libelleStat' => "en cours"));
      $com->setStatut($stat);
    
      $manager->persist($com);
      
      /**************************************************************/
      $com = new Commande();
      $com->setDate(new \DateTime);
      
      $stat = $manager->getRepository("PwebCompteBundle:StatutCom")->findOneBy(array('libelleStat' => "en cours"));
      $com->setStatut($stat);
        
      $manager->persist($com);
      
      
      $manager->flush();

  }

  public function getOrder(){
    return 3; // the order in which fixtures will be loaded
  }

}

?>

