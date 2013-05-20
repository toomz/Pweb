<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bridge\Doctrine\Form\ChoiceList\EntityChoiceList;
use Pweb\AccueilBundle\Entity\Categorie;

class CatController extends Controller{

	public function indexAction(){	
		
    $logger = $this->get('my_logger');
    $logger->info('Entrée dans Cat:indexAction()');

    $em = $this->getDoctrine()->getEntityManager();
    $categorie_list = $em->getRepository("PwebAccueilBundle:Categorie")->findAll();
    $logger->info('récupération des catégories');
		return $this->render('PwebCompteBundle:Cat:index.html.twig', array('categorie_list' => $categorie_list));

	}

	public function addAction(){

    $logger = $this->get('my_logger');
    $logger->info('Entrée dans Cat:addAction()');

		$categorie = new Categorie();

  	$entityManager = $this->getDoctrine()->getEntityManager();

    $formBuilder = $this->createFormBuilder($categorie);
  	$formBuilder
    	->add('libelleCat','text', array('label' => 'Libellé'));

  	$form = $formBuilder->getForm();
  	$request = $this->get('request');
    $logger->info('création formulaire ajout catégorie');
  
  	if ($request->getMethod() == 'POST'){
  
  		$form->bind($request);

  		if ($form->isValid()){
          $logger->info('formulaire valide');
      		$em = $this->getDoctrine()->getManager();
      
      		if($em->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => $categorie->getLibelleCat()))!=NULL){
            $logger->info('ajout d une catégorie déjà existante');
        		return $this->render('PwebCompteBundle:Cat:add.html.twig',array(
            		'form'=>$form->createView(),
            		'error'=>'La catégorie "'.$categorie->getLibelleCat().'" n\'a pas été ajoutée  : Le nom existe déjà',
            		'success'=>''
          		));
          }
      
      		$em->persist($categorie);
      		$em->flush();
          
          $logger->info('ajout de la catégorie');
      		return $this->render('PwebCompteBundle:Cat:add.html.twig',array(
        		'form'=>$form->createView(),
        		'success'=>'La catégorie "'.$categorie->getLibelleCat().'" a été ajoutée.',
        		'error'=>''
      		));       
  		}
      $logger->info('formulaire non valide');

  	}

  	return $this->render('PwebCompteBundle:Cat:add.html.twig',array(
    	'form'=>$form->createView(),
      'error'=>'',
      'success'=>''
  	));

	}

	public function removeAction(){

    $logger = $this->get('my_logger');
    $logger->info('Entrée dans Cat:removeAction()');

    $em = $this->getDoctrine()->getEntityManager();
    $categorie_list = $em->getRepository("PwebAccueilBundle:Categorie")->findAll();
    $stack = array();
      
    foreach($categorie_list as $categorie)
      $stack[$categorie->getlibelleCat()] = $categorie->getLibelleCat();
      
    $categorie = new Categorie();
    $formBuilder = $this->createFormBuilder($categorie);
    $formBuilder
      ->add('libelleCat', 'choice', array(
        'choices' => $stack,
        'required' => false,'label'=>'Catégories : ','multiple'=>false
      ));

    $form = $formBuilder->getForm();
    $request = $this->get('request');

    $logger->info('création formulaire suppression catégorie');
    
    if ($request->getMethod() == 'POST'){
      
      $form->bind($request);

      if ($form->isValid()){

        $logger->info('formulaire valide -> suppression catégorie');
        unset($stack[$categorie->getLibelleCat()]);

        $categorie = $em->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat'=>$categorie->getLibelleCat()));
        $formBuilder = $this->createFormBuilder($categorie);
        $formBuilder
          ->add('libelleCat', 'choice', array(
        'choices' => $stack,
        'required' => false,'label'=>'Catégories : ','multiple'=>false
        ));
        
        $form = $formBuilder->getForm();
        $em->remove($categorie);
        $em->flush();

        return $this->render('PwebCompteBundle:Cat:remove.html.twig',array(
          'form'=>$form->createView(),
          'success'=>'La catégorie "'.$categorie->getLibelleCat().'" a été supprimée avec succès.',
          'error'=>''
          ));

      }

      $logger->info('formulaire non valide');
      return $this->render('PwebCompteBundle:Cat:remove.html.twig',array(
        'form'=>$form->createView(),
        'success'=>'',
        'error'=>'ERROR : something wrong happened but i don\'t know what ! '
        ));

    }

    return $this->render('PwebCompteBundle:Cat:remove.html.twig',array(
        'form'=>$form->createView(),
        'success'=>'',
        'error'=>''
    ));
    
  }

}