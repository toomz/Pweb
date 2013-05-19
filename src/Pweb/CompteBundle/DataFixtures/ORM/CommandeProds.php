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
      /*
      $comprod = new CommandeProd();

      $prod = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "Samsung Galaxy S3"));
      $quantite->setQuantite('1');
      $comprod->setProduit($prod);

      $prod2 = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "Sony Ericsson w995"));
      $quantite2->setQuantite('2');
      $comprod->setProduit($prod2);
      
      $com = $manager->getRepository("PwebCompteBundle:Commande")->findOneBy(array(''));
      $comprod->setCommande($com);

      $manager->persist($comprod);
      */
      /**************************************************************/
      $com = new Commande();
      $com->setDate(new \DateTime);
      
      $stat = $manager->getRepository("PwebCompteBundle:StatutCom")->findOneBy(array('libelleStat' => "en cours"));
      $com->setStatut($stat);
      
      $prod = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "HTC One"));
      $prod2 = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "Ipad 5"));
      $com->addProduits($prod);
      $com->addProduits($prod2);
      
      $manager->persist($com);
      
      /**************************************************************/
      $com = new Commande();
      $com->setDate(new \DateTime);
      
      $stat = $manager->getRepository("PwebCompteBundle:StatutCom")->findOneBy(array('libelleStat' => "en cours"));
      $com->setStatut($stat);
      
      $prod = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "Nokia Lumia 920"));
      $prod2 = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "Sony Ericsson w995"));
      $com->addProduits($prod);
      $com->addProduits($prod2);
      
      $manager->persist($com);
      
      
      $manager->flush();

  }

  public function getOrder(){
    return 3; // the order in which fixtures will be loaded
  }

}

?>

