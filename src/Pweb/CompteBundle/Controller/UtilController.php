<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Pweb\UserBundle\Entity\User;
use Symfony\Component\Security\Core\SecurityContext;

class UtilController extends Controller{

	public function indexAction(){
		
		$em = $this->getDoctrine()->getEntityManager();
    	$user_list = $em->getRepository("PwebUserBundle:User")->findAll();
    	return $this->render('PwebCompteBundle:Util:index.html.twig',array('user_list'=>$user_list));
		
	}

}