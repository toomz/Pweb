<?php

namespace Pweb\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{

	public function indexAction()
	{
		//$logger = $this->get('my_logger');
		//$logger->info('Entrée dans Accueil:indexAction()');

		$em = $this->getDoctrine()->getEntityManager();
		$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array(), array('dateSortie'=>'desc'));
		$marques = $em->getRepository('PwebAccueilBundle:Marque')->findBy(array(), array('libelleMar'=>'asc'));
		//$logger->info('On a récupéré les produits et les marques');

		return $this->render('PwebAccueilBundle:Accueil:index.html.twig',array('prod' => $prod, 'marque' => $marques));
	}

}
