<?php
 
namespace Pweb\CompteBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pweb\AccueilBundle\Entity\Produit; 
use Pweb\CompteBundle\Entity\Commande;
use Pweb\CompteBundle\Entity\CommandeProd; 

class CommandeProds extends AbstractFixture implements OrderedFixtureInterface{

    public function load(ObjectManager $manager){
 
      /**************************************************************/
      /**************************************************************/
      $com = new Commande();
      $com->setDate(new \DateTime);
      
      $stat = $manager->getRepository("PwebCompteBundle:StatutCom")->findOneBy(array('libelleStat' => "en cours"));
      $com->setStatut($stat);
      $manager->persist($com);
      $manager->flush();
      
      /** Ajout prod 1 **/
      $comProd = new CommandeProd();
      $prod = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "HTC One"));
    
      $comProd->setCommande($com);
      $comProd->setProduit($prod);
      $comProd->setQuantite(1);
      
      $manager->persist($comProd);

      /** Ajout prod 2 **/
      $comProd = new CommandeProd();
      $prod = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "Ipad 5"));
    
      $comProd->setCommande($com);
      $comProd->setProduit($prod);
      $comProd->setQuantite(3);
      
      $manager->persist($comProd);

      /** Ajout prod 3 **/
      $comProd = new CommandeProd();
      $prod = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "Acer Liquid E1"));
    
      $comProd->setCommande($com);
      $comProd->setProduit($prod);
      $comProd->setQuantite(2);
      
      $manager->persist($comProd);

      /** Ajout prod 4 **/
      $comProd = new CommandeProd();
      $prod = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "HP Slate 7"));
    
      $comProd->setCommande($com);
      $comProd->setProduit($prod);
      $comProd->setQuantite(1);
      
      $manager->persist($comProd);

      /** Ajout prod 5 **/
      $comProd = new CommandeProd();
      $prod = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "Samsung Galaxy Ace"));
    
      $comProd->setCommande($com);
      $comProd->setProduit($prod);
      $comProd->setQuantite(1);
      
      $manager->persist($comProd);

      
      /**************************************************************/
      /**************************************************************/
      $com = new Commande();
      $com->setDate(new \DateTime);
      
      $stat = $manager->getRepository("PwebCompteBundle:StatutCom")->findOneBy(array('libelleStat' => "en cours"));
      $com->setStatut($stat);
      $manager->persist($com);
      $manager->flush();

      /** Ajout prod 1 **/
      $comProd = new CommandeProd();
      $prod = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "Sony Ericsson w995"));
    
      $comProd->setCommande($com);
      $comProd->setProduit($prod);
      $comProd->setQuantite(2);
      
      $manager->persist($comProd);

      /** Ajout prod 2 **/
      $comProd = new CommandeProd();
      $prod = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "Nokia Lumia 920"));
    
      $comProd->setCommande($com);
      $comProd->setProduit($prod);
      $comProd->setQuantite(2);
      
      $manager->persist($comProd);
      
      
      $manager->flush();

  }

  public function getOrder(){
    return 4; // the order in which fixtures will be loaded
  }

}

?>

