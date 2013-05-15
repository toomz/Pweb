<?php

namespace Pweb\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{

	public function indexAction()
  	{
	    $em = $this->getDoctrine()->getEntityManager();
	    
	    $prod = $em->getRepository("PwebAccueilBundle:Produit")->findAll();
	    //$prod = $em->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => "Samsung Galaxy S3"));
	    $marques = $em->getRepository('PwebAccueilBundle:Marque')->findBy(array(), array('libelleMar'=>'asc'));
	    $cat = $em->getRepository("PwebAccueilBundle:Categorie")->findBy(array(), array('libelleCat'=>'asc'));

	    return $this->render('PwebAccueilBundle:Produits:index.html.twig', array('prod' => $prod, 'marque' => $marques, 'cat' => $cat));
	}

	public function showInfoAction($idProd)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$prod = $em->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('id' => $idProd));

		return $this->render('PwebAccueilBundle:Produits:show.html.twig', array('prod' => $prod));
	}

}
