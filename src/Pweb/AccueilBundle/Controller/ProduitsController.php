<?php

namespace Pweb\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{

	public function indexAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    //$produits = array("Trousse de maquillage","Pinceau à tapisserie","Rollers","Rideau en tafta","Pot Haagen Dazs");
    $prod = $em->getRepository("PwebAccueilBundle:Produit")->findAll();
		return $this->render('PwebAccueilBundle:Produits:index.html.twig', array('prod' => $prod));
	}

}
