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
 
      // premier
      $com = new Commande();
      $com->setDate(new \DateTime);
      
      $stat = $manager->getRepository("PwebCompteBundle:StatutCom")->findOneBy(array('libelle' => "en cours"));
      $com->setStatut($stat);
      
      $prod = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelle' => "Samsung Galaxy S3"));
      $prod2 = $manager->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelle' => "Sony Ericsson w995"));
      $com->addProduits($prod);
      $com->addProduits($prod2);
      
      $manager->persist($com);
      /*
      $prod->setLibelle("Samsung Galaxy S3");
      $prod->setDescription("Une des dernières trouvailles de samsungs");
      $prod->setPrix(300);
      $prod->setPoids(132);
      
      $image = new Image();
      $image->setUrl("/Pweb/images/samsung-galaxy-s3.jpg");
      $image->setAlt("alt");
      $manager->persist($image);
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelle' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelle' => "Samsung"));
      
      $prod->setImage($image);
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
     
      //  troisième
      $prod = new Produit();
      $prod->setLibelle("Sony Ericsson w995");
      $prod->setDescription("Une des dernières trouvailles de sony");
      $prod->setPrix(150);
      $prod->setPoids(104);
      
      $image = new Image();
      $image->setUrl("/Pweb/images/sony-ericsson-w995.jpg");
      $image->setAlt("alt");
      $manager->persist($image);
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelle' => "portable"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelle' => "Sony Ericsson"));
      
      $prod->setImage($image);
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
      $prod = new Produit();
      $prod->setLibelle("Nokia Lumia 920");
      $prod->setDescription("Une des dernières trouvailles de microsoft");
      $prod->setPrix(250);
      $prod->setPoids(185);
      
      $image = new Image();
      $image->setUrl("/Pweb/images/nokia-lumia-920-yellow.jpg");
      $image->setAlt("alt");
      $manager->persist($image);
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelle' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelle' => "Nokia"));
      
      $prod->setImage($image);
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      * */
      
      $manager->flush();

  }

  public function getOrder(){
    return 3; // the order in which fixtures will be loaded
  }

}

?>

