<?php

namespace Pweb\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{

	public function indexAction()
  {
    $produits = array("Trousse de maquillage","Pinceau à tapisserie","Rollers","Rideau en tafta","Pot Haagen Dazs");
		return $this->render('PwebAccueilBundle:Produits:index.html.twig', array('prod' => $produits));
	}

}
