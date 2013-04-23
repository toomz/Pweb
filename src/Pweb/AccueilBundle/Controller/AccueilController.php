<?php

namespace Pweb\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{

	public function indexAction()
  {
		return $this->render('PwebAccueilBundle:Accueil:index.html.twig');
	}

}
