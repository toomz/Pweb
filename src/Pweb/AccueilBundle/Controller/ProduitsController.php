<?php

namespace Pweb\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{

	public function indexAction()
  	{
  		//$logger = $this->get('my_logger');
  		//$logger->info('Entrée dans Produits:indexAction()');

	    $em = $this->getDoctrine()->getEntityManager();
		$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array(), array('libelleProd'=>'asc'));
		//$logger->info('On récupère tous les produits');

	    $marques = $em->getRepository('PwebAccueilBundle:Marque')->findBy(array(), array('libelleMar'=>'asc'));
	    $cat = $em->getRepository("PwebAccueilBundle:Categorie")->findBy(array(), array('libelleCat'=>'asc'));
	    //$logger->info('On récupère toutes les marques et catégories');

	    return $this->render('PwebAccueilBundle:Produits:index.html.twig', array('prod' => $prod, 'marque' => $marques, 'cat' => $cat));
	}
  		

	public function showInfoAction($idProd)
	{
		//$logger = $this->get('my_logger');
		//$logger->info('Entrée dans Produits:showInfoAction()');
		$em = $this->getDoctrine()->getEntityManager();
		
		$prod = $em->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('id' => $idProd));
		//$logger->info('On récupère le produit');

		return $this->render('PwebAccueilBundle:Produits:show.html.twig', array('prod' => $prod));
	}

	public function triAction($id, $type)
	{
		//$logger = $this->get('my_logger');
		//$logger->info('Entrée dans Produits:triAction()');
		$em = $this->getDoctrine()->getEntityManager();

		switch($type){
			case "mar":
				$m = $em->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('id' => $id));
				$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array('marque' => $m), array('prix'=>'asc'));
				//$logger->info('Tri en fonction de la marque');
				break;
			case "cat":
				$m = $em->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('id' => $id));
				$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array('categorie' => $m), array('prix'=>'asc'));
				//$logger->info('Tri en fonction de la catégorie');
				break;
			case "cr":
				$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array(), array('prix'=>'asc'));
				//$logger->info('Tri prix croissant');
				break;
			case "de":
				$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array(), array('prix'=>'desc'));
				//$logger->info('Tri prix decroissant');
				break;
			default:
				$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array(), array('prix'=>'asc'));
				//$logger->info('Tri par défaut, prix croissant');
				break;
		}

		$marques = $em->getRepository('PwebAccueilBundle:Marque')->findBy(array(), array('libelleMar'=>'asc'));
	    $cat = $em->getRepository("PwebAccueilBundle:Categorie")->findBy(array(), array('libelleCat'=>'asc'));

		return $this->render('PwebAccueilBundle:Produits:index.html.twig', array('prod' => $prod, 'marque' => $marques, 'cat' => $cat));
	}

}
