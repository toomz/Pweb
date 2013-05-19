<?php
 
namespace Pweb\AccueilBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pweb\AccueilBundle\Entity\Produit; 
use Pweb\AccueilBundle\Entity\Categorie; 

class Produits extends AbstractFixture implements OrderedFixtureInterface{

    public function load(ObjectManager $manager){
 
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy S3");
      $prod->setDescription("Une des dernières trouvailles de samsungs");
      $prod->setPrix(300);
      $prod->setPoids(132);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-s3-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-s3.png");
      $prod->setDateSortie(new \DateTime('28-05-2012'));
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
     
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Sony Ericsson w995");
      $prod->setDescription("Une des dernières trouvailles de sony");
      $prod->setPrix(150);
      $prod->setPoids(104);
      $prod->setImageMin("/Pweb/images/sony-ericsson-w995-black-min.png");
      $prod->setImage("/Pweb/images/sony-ericsson-w995-black.png");
      $prod->setDateSortie(new \DateTime('23-04-2009'));
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "portable"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Sony Ericsson"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Nokia Lumia 920");
      $prod->setDescription("Une des dernières trouvailles de microsoft");
      $prod->setPrix(250);
      $prod->setPoids(185);
      $prod->setImageMin("/Pweb/images/nokia-lumia-920-yellow-min.png");
      $prod->setImage("/Pweb/images/nokia-lumia-920-yellow.png");
      $prod->setDateSortie(new \DateTime('15-10-2012'));
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Nokia"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Ipad 5");
      $prod->setDescription("Une des dernières trouvailles d'Apple");
      $prod->setPrix(500);
      $prod->setPoids(500);
      $prod->setImageMin("/Pweb/images/ipad-5-min.png");
      $prod->setImage("/Pweb/images/ipad-5.png");
      $prod->setDateSortie(new \DateTime('28-08-2013'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));

      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("HTC One");
      $prod->setDescription("Une des dernières trouvailles d'HTC");
      $prod->setPrix(300);
      $prod->setPoids(143);
      $prod->setImageMin("/Pweb/images/htc-one-min.png");
      $prod->setImage("/Pweb/images/htc-one.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "HTC"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("iPhone 4 ");
      $prod->setDescription("Une des trouvailles d'Apple");
      $prod->setPrix(400);
      $prod->setPoids(137);
      $prod->setImageMin("/Pweb/images/iphone-4-min.png");
      $prod->setImage("/Pweb/images/iphone-4.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));
     
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
           
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("iPhone 4S");
      $prod->setDescription("Une des trouvailles d'Apple");
      $prod->setPrix(450);
      $prod->setPoids(140);
      $prod->setImageMin("/Pweb/images/iphone-4s-min.png");
      $prod->setImage("/Pweb/images/iphone-4s.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
       
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy S4");
      $prod->setDescription("Une des dernière trouvailles de Samsung");
      $prod->setPrix(650);
      $prod->setPoids(130);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-s4-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-s4.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
       
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy Note II");
      $prod->setDescription("Une des trouvailles de Samsung");
      $prod->setPrix(530);
      $prod->setPoids(177);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-note-2-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-note-2.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
       
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy S3 Mini");
      $prod->setDescription("Une des trouvailles de Samsung");
      $prod->setPrix(270);
      $prod->setPoids(120);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-s3-mini-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-s3-mini.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
       
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy Ace");
      $prod->setDescription("Une des trouvailles de Samsung");
      $prod->setPrix(170);
      $prod->setPoids(113);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-ace-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-ace.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
       
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy Y");
      $prod->setDescription("Une des trouvailles de Samsung");
      $prod->setPrix(100);
      $prod->setPoids(99);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-y-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-y.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
       
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("LG Optimus L9");
      $prod->setDescription("Une des trouvailles de LG");
      $prod->setPrix(260);
      $prod->setPoids(125);
      $prod->setImageMin("/Pweb/images/lg-optimus-l9-min.png");
      $prod->setImage("/Pweb/images/lg-optimus-l9.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "LG"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    

      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("LG Optimus L5 2");
      $prod->setDescription("Une des trouvailles de LG");
      $prod->setPrix(170);
      $prod->setPoids(110);
      $prod->setImageMin("/Pweb/images/lg-optimus-l5-2-min.png");
      $prod->setImage("/Pweb/images/lg-optimus-l5-2.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "LG"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Nokia Lumia 620");
      $prod->setDescription("Une des trouvailles de Nokia");
      $prod->setPrix(200);
      $prod->setPoids(127);
      $prod->setImageMin("/Pweb/images/nokia-lumia-620-min.png");
      $prod->setImage("/Pweb/images/nokia-lumia-620.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Nokia"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Sony Xperia U");
      $prod->setDescription("Une des trouvailles de Sony");
      $prod->setPrix(170);
      $prod->setPoids(110);
      $prod->setImageMin("/Pweb/images/sony-xperia-u-min.png");
      $prod->setImage("/Pweb/images/sony-xperia-u.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Sony"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Blackberry Curve 9320");
      $prod->setDescription("Une des trouvailles de Blackberry");
      $prod->setPrix(170);
      $prod->setPoids(103);
      $prod->setImageMin("/Pweb/images/blackberry-curve-9320-min.png");
      $prod->setImage("/Pweb/images/blackberry-curve-9320.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Blackberry"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Alcatel One Touch 997 D");
      $prod->setDescription("Une des trouvailles de Alcatel");
      $prod->setPrix(220);
      $prod->setPoids(143);
      $prod->setImageMin("/Pweb/images/alcatel-one-touch-997-d-min.png");
      $prod->setImage("/Pweb/images/alcatel-one-touch-997-d.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Alcatel"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Sony Xperia S");
      $prod->setDescription("Une des trouvailles de Sony");
      $prod->setPrix(350);
      $prod->setPoids(144);
      $prod->setImageMin("/Pweb/images/sony-xperia-s-min.png");
      $prod->setImage("/Pweb/images/sony-xperia-s.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Sony"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("iphone 5");
      $prod->setDescription("Une des trouvailles d'Apple");
      $prod->setPrix(650);
      $prod->setPoids(112);
      $prod->setImageMin("/Pweb/images/iphone-5-min.png");
      $prod->setImage("/Pweb/images/iphone-5.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Sony Xperia T");
      $prod->setDescription("Une des trouvailles de Sony");
      $prod->setPrix(350);
      $prod->setPoids(139);
      $prod->setImageMin("/Pweb/images/sony-xperia-t-min.png");
      $prod->setImage("/Pweb/images/sony-xperia-t.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Sony"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Sony Xperia P");
      $prod->setDescription("Une des trouvailles de Sony");
      $prod->setPrix(270);
      $prod->setPoids(120);
      $prod->setImageMin("/Pweb/images/sony-xperia-p-min.png");
      $prod->setImage("/Pweb/images/sony-xperia-p.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Sony"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("LG optimus L7");
      $prod->setDescription("Une des trouvailles de LG");
      $prod->setPrix(210);
      $prod->setPoids(120);
      $prod->setImageMin("/Pweb/images/lg-optimus-l7-min.png");
      $prod->setImage("/Pweb/images/lg-optimus-l7.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "LG"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Caterpillar CAT B10");
      $prod->setDescription("résiste aux conditions les plus extrêmes");
      $prod->setPrix(350);
      $prod->setPoids(201);
      $prod->setImageMin("/Pweb/images/caterpillar-cat-b10-min.png");
      $prod->setImage("/Pweb/images/caterpillar-cat-b10.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Caterpillar"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Huawei Ascend Mate");
      $prod->setDescription("Une des trouvailles de Huawei");
      $prod->setPrix(390);
      $prod->setPoids(198);
      $prod->setImageMin("/Pweb/images/huawei-ascend-mate-min.png");
      $prod->setImage("/Pweb/images/huawei-ascend-mate.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Huawei"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Acer Liquid E1");
      $prod->setDescription("Une des trouvailles d'Acer");
      $prod->setPrix(160);
      $prod->setPoids(130);
      $prod->setImageMin("/Pweb/images/acer-liquid-e1-min.png");
      $prod->setImage("/Pweb/images/acer-liquid-e1.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Acer"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Alcatel One Touch Tab T20");
      $prod->setDescription("Une des trouvailles de Alcatel");
      $prod->setPrix(180);
      $prod->setPoids(739);
      $prod->setImageMin("/Pweb/images/alcatel-one-touch-tab-t20-min.png");
      $prod->setImage("/Pweb/images/alcatel-one-touch-tab-t20.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Alcatel"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Archos 80 Cobalt");
      $prod->setDescription("Une des trouvailles d'Arcos");
      $prod->setPrix(150);
      $prod->setPoids(470);
      $prod->setImageMin("/Pweb/images/archos-80-cobalt-min.png");
      $prod->setImage("/Pweb/images/archos-80-cobalt.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Archos"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("HP Envy X2");
      $prod->setDescription("Une des trouvailles d'HP");
      $prod->setPrix(890);
      $prod->setPoids(890);
      $prod->setImageMin("/Pweb/images/hp-envy-x2-min.png");
      $prod->setImage("/Pweb/images/hp-envy-x2.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "HP"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy Note 10.1");
      $prod->setDescription("Une des trouvailles de Samsung");
      $prod->setPrix(500);
      $prod->setPoids(587);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-note-10-1-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-note-10-1.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy Tab 2 10.1");
      $prod->setDescription("Une des trouvailles de Samsung");
      $prod->setPrix(350);
      $prod->setPoids(588);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-tab-2-10-1-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-tab-2-10-1.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /*************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Acer Iconia W510");
      $prod->setDescription("Une des trouvailles d'Acer");
      $prod->setPrix(500);
      $prod->setPoids(580);
      $prod->setImageMin("/Pweb/images/acer-iconia-w510-min.png");
      $prod->setImage("/Pweb/images/acer-iconia-w510.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Acer"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Huawei MediaPad 10");
      $prod->setDescription("Une des trouvailles de Huawei");
      $prod->setPrix(450);
      $prod->setPoids(580);
      $prod->setImageMin("/Pweb/images/huawei-mediapad-10-min.png");
      $prod->setImage("/Pweb/images/huawei-mediapad-10.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Huawei"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Asus Transformer Book");
      $prod->setDescription("Une des trouvailles d'Asus");
      $prod->setPrix(500);
      $prod->setPoids(580);
      $prod->setImageMin("/Pweb/images/asus-transformer-book-min.png");
      $prod->setImage("/Pweb/images/asus-transformer-book.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Asus"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
    
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("HP Slate 7");
      $prod->setDescription("Une des trouvailles d'HP");
      $prod->setPrix(150);
      $prod->setPoids(370);
      $prod->setImageMin("/Pweb/images/hp-slate-7-min.png");
      $prod->setImage("/Pweb/images/hp-slate-7.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "HP"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("iPad mini");
      $prod->setDescription("Une des trouvailles d'Apple");
      $prod->setPrix(340);
      $prod->setPoids(308);
      $prod->setImageMin("/Pweb/images/ipad-mini-min.png");
      $prod->setImage("/Pweb/images/ipad-mini.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Nexus 10");
      $prod->setDescription("Une des trouvailles de Samsung");
      $prod->setPrix(400);
      $prod->setPoids(603);
      $prod->setImageMin("/Pweb/images/samsung-nexus-10-min.png");
      $prod->setImage("/Pweb/images/samsung-nexus-10.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Sony Xperia Tablet S");
      $prod->setDescription("Une des trouvailles de Sony");
      $prod->setPrix(400);
      $prod->setPoids(585);
      $prod->setImageMin("/Pweb/images/sony-xperia-tablet-s-min.png");
      $prod->setImage("/Pweb/images/sony-xperia-tablet-s.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Sony"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
  
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Dell XPS 10");
      $prod->setDescription("Une des trouvailles de Dell");
      $prod->setPrix(490);
      $prod->setPoids(635);
      $prod->setImageMin("/Pweb/images/dell-xps-10-min.png");
      $prod->setImage("/Pweb/images/dell-xps-10.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Dell"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
  
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Kindle Fire 8.9");
      $prod->setDescription("Une des trouvailles d'Amazon");
      $prod->setPrix(280);
      $prod->setPoids(567);
      $prod->setImageMin("/Pweb/images/kindle-fire-8-9-min.png");
      $prod->setImage("/Pweb/images/kindle-fire-8-9.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Amazon"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
  
                                            
      $manager->flush();

  }

  public function getOrder(){
    return 2; // the order in which fixtures will be loaded
  }

}

?>
