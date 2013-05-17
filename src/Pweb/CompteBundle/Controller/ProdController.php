<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bridge\Doctrine\Form\ChoiceList\EntityChoiceList;
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

	public function addAction(){

		$produit = new Produit();

  	$entityManager = $this->getDoctrine()->getEntityManager();

    $categories = new EntityChoiceList($entityManager,'Pweb\AccueilBundle\Entity\Categorie');
    $marques = new EntityChoiceList($entityManager,'Pweb\AccueilBundle\Entity\Marque');

    $formBuilder = $this->createFormBuilder($produit);
  	$formBuilder
    	->add('libelleProd','text', array('label' => 'Libellé'))
    	->add('description', 'text', array('label' => 'Description'))
    	->add('prix', 'text', array('label' => 'Prix'))
    	->add('poids', 'text', array('label' => 'Poids'))
    	->add('image', 'text')
      ->add('categorie','choice',array('choice_list'=> $categories))
      ->add('marque','choice',array('choice_list'=> $marques));

  	$form = $formBuilder->getForm();
  	$request = $this->get('request');
  
  	if ($request->getMethod() == 'POST'){
  
  		$form->bind($request);

  		if ($form->isValid()){
      		$em = $this->getDoctrine()->getManager();
      
      		if($em->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd' => $produit->getLibelleProd()))!=NULL)
        		return $this->render('PwebCompteBundle:Prod:add.html.twig',array(
            		'form'=>$form->createView(),
            		'error'=>'Le produit "'.$produit->getLibelleProd().'" n\'a pas été ajouté  : Le nom existe déjà',
            		'success'=>''
          		));
      
      		$em->persist($produit);
      		$em->flush();
    
      		return $this->render('PwebCompteBundle:Prod:add.html.twig',array(
        		'form'=>$form->createView(),
        		'success'=>'Le produit "'.$produit->getLibelleProd().'" a été ajouté.',
        		'error'=>''
      		));       
  		}

  	}

  	return $this->render('PwebCompteBundle:Prod:add.html.twig',array(
    	'form'=>$form->createView(),
      	'error'=>'',
      	'success'=>''
  	));

	}

	public function removeAction(){

    $em = $this->getDoctrine()->getEntityManager();
    $produit_list = $em->getRepository("PwebAccueilBundle:Produit")->findAll();
    $stack = array();
      
    foreach($produit_list as $produit)
      $stack[$produit->getlibelleProd()] = $produit->getLibelleProd();
      
    $produit = new Produit();
    $formBuilder = $this->createFormBuilder($produit);
    $formBuilder
      ->add('libelleProd', 'choice', array(
        'choices' => $stack,
        'required' => false,'label'=>'Produits : ','multiple'=>false
      ));

    $form = $formBuilder->getForm();
    $request = $this->get('request');
    
    if ($request->getMethod() == 'POST'){
      
      $form->bind($request);

      if ($form->isValid()){

        unset($stack[$produit->getLibelleProd()]);

        $produit = $em->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd'=>$produit->getLibelleProd()));
        $formBuilder = $this->createFormBuilder($produit);
        $formBuilder
          ->add('libelleProd', 'choice', array(
        'choices' => $stack,
        'required' => false,'label'=>'Produits : ','multiple'=>false
        ));
        
        $form = $formBuilder->getForm();
        $em->remove($produit);
        $em->flush();

        return $this->render('PwebCompteBundle:Prod:remove.html.twig',array(
          'form'=>$form->createView(),
          'success'=>'Le produit "'.$produit->getLibelleProd().'" a été supprimé avec succès.',
          'error'=>''
          ));

      }

      return $this->render('PwebCompteBundle:Prod:remove.html.twig',array(
        'form'=>$form->createView(),
        'success'=>'',
        'error'=>'ERROR : something wrong happened but i don\'t know what ! '
        ));

    }

    return $this->render('PwebCompteBundle:Prod:remove.html.twig',array(
        'form'=>$form->createView(),
        'success'=>'',
        'error'=>''
    ));
    
    }

}