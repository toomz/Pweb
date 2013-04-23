<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompteController extends Controller{

	public function indexAction(){

		return $this->render('PwebCompteBundle:Compte:index.html.twig');
		
	}

}
