<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\Security\Core\SecurityContext;
use Pweb\AccueilBundle\Entity\Produit;
use Pweb\AccueilBundle\Entity\Categorie;
use Pweb\AccueilBundle\Entity\Marque;

class ProdController extends Controller{

	public function indexAction(){	
		
    	$em = $this->getDoctrine()->getEntityManager();
    	$query = $em->createQuery('SELECT p.libelleProd, p.description, c.libelleCat, m.libelleMar, p.prix, p.poids FROM PwebAccueilBundle:Produit p LEFT JOIN p.categorie c LEFT JOIN p.marque m');
		$produit_list = $query->getResult();
		return $this->render('PwebCompteBundle:Prod:index.html.twig', array('produit_list' => $produit_list));

	}

}