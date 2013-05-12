<?php

namespace Pweb\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{

	public function indexAction()
  {
    $em = $this->getDoctrine()->getEntityManager();
    
    //$prod = $em->getRepository("PwebAccueilBundle:Produit")->findAll();
    $prod = $em->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "Samsung Galaxy S3"));
    
    return $this->render('PwebAccueilBundle:Produits:index.html.twig', array('prod' => $prod));
	}

}
