<?php

namespace Pweb\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{

	public function indexAction()
  	{
	    $em = $this->getDoctrine()->getEntityManager();
	    
		$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array(), array('libelleProd'=>'asc'));

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

	public function triAction($id, $type)
	{
		$em = $this->getDoctrine()->getEntityManager();

		switch($type){
			case "mar":
				$m = $em->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('id' => $id));
				$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array('marque' => $m), array('prix'=>'asc'));
				break;
			case "cat":
				$m = $em->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('id' => $id));
				$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array('categorie' => $m), array('prix'=>'asc'));
				break;
			case "cr":
				$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array(), array('prix'=>'asc'));
				break;
			case "de":
				$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array(), array('prix'=>'desc'));
				break;
			default:
				$prod = $em->getRepository("PwebAccueilBundle:Produit")->findBy(array(), array('prix'=>'asc'));
				break;
		}

		$marques = $em->getRepository('PwebAccueilBundle:Marque')->findBy(array(), array('libelleMar'=>'asc'));
	    $cat = $em->getRepository("PwebAccueilBundle:Categorie")->findBy(array(), array('libelleCat'=>'asc'));

		return $this->render('PwebAccueilBundle:Produits:index.html.twig', array('prod' => $prod, 'marque' => $marques, 'cat' => $cat));
	}

}
