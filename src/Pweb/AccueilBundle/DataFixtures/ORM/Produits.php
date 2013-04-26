<?php
 
namespace Pweb\UserBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pweb\AccueilBundle\Entity\Produit; 
use Pweb\AccueilBundle\Entity\Image; 
use Pweb\AccueilBundle\Entity\Categorie; 

class Produits extends AbstractFixture implements OrderedFixtureInterface{

    public function load(ObjectManager $manager){
 
      // premier
      $prod = new Produit();
      $prod->setLibelle("Samsung Galaxy S3");
      $prod->setDescription("Une des dernières trouvailles de samsungs");
      $prod->setPrix(300);
      $prod->setPoids(132);
      
      $image = new Image();
      $image->setUrl("/Pweb/images/samsung-galaxy-s3.jpg");
      $image->setAlt("alt");
      $manager->persist($image);
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelle' => "smartphone"));
      
      $prod->setImage($image);
      $prod->setCategorie($cat);
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
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelle' => "old-school"));
      
      $prod->setImage($image);
      $prod->setCategorie($cat);
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
      
      $prod->setImage($image);
      $prod->setCategorie($cat);
      $manager->persist($prod);
      
      $manager->flush();

  }

  public function getOrder(){
    return 2; // the order in which fixtures will be loaded
  }

}

?>
