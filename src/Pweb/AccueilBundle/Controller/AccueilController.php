<?php

namespace Pweb\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{

	public function indexAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
		$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array(), array('dateSortie'=>'desc'));
		$marques = $em->getRepository('PwebAccueilBundle:Marque')->findBy(array(), array('libelleMar'=>'asc'));
		return $this->render('PwebAccueilBundle:Accueil:index.html.twig',array('prod' => $prod, 'marque' => $marques));
	}

}
