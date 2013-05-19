<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\Security\Core\SecurityContext;
use Pweb\CompteBundle\Entity\Acheteur;
use Pweb\UserBundle\Entity\User;

class CompteController extends Controller{

	public function indexAction(){

		$em = $this->getDoctrine()->getEntityManager();
		
		$user = $this->container->get('security.context')->getToken()->getUser();
		$acheteur = $em->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user->getUsername()));
		
		return $this->render('PwebCompteBundle:Compte:index.html.twig', array('acheteur' => $acheteur));
		
	}

	public function modifAction(){

		return $this->render('PwebCompteBundle:Compte:modif.html.twig');

	}

	public function commandeAction(){

		return $this->render('PwebCompteBundle:Compte:commande.html.twig');

	}

	public function panierAction(){

		return $this->render('PwebCompteBundle:Compte:panier.html.twig');

	}

}
