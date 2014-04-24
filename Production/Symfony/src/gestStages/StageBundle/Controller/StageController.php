<?php

namespace gestStages\StageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use gestStages\StageBundle\Entity\Stage;
use gestStages\StageBundle\Entity\Entreprise;
use gestStages\StageBundle\Form\EntrepriseType;
use gestStages\StageBundle\Form\StageType;

class StageController extends Controller
{
    public function indexAction()
    {
		return new Response("Hello world !!!!!!");
        //return $this->render('gestStagesStageBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function StageConsulterAction()
	{
		$repository = $this->getDoctrine()
					->getManager()
					->getRepository('gestStagesStageBundle:Stage');
		$lesStages = $repository->findAll();
		
		return $this->render('gestStagesStageBundle:Stage:ConsulterStage.html.twig',array('stages'=>$lesStages));
	}
	
	public function StageRechercherAction($parametres)
	{
		return new Response("Recherche de stages avec comme parametre(s): ".$parametres."");
	}
	
	public function StageModifierAction($id)
	{
		return new Response("Modification du stage ".$id."");
	}
	
	public function StageAjouterAction()
	{
		// Etape 0 
		$stage = new Stage();
		$form = $this->createForm(new StageType, $stage);
		
	/**
	***	INSTRUCTIONS DE SOUMISSION DU FORMULAIRE
	**/

	// 1. On récupère la requête HTTP
    	$request = $this->get('request');
   
    // 2. On vérifie qu'elle est de type POST
    if ($request->getMethod() == 'POST') {
      // 3. On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $stage contient les valeurs entrées dans le 	formulaire par le visiteur
      $form->bind($request);
 
      // On vérifie que les valeurs entrées sont correctes
      if ($form->isValid()) {
        // On enregistre notre objet $stage dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->persist($stage);
        $em->flush();
 
        // On redirige vers la page de visualisation de l'article nouvellement créé
  return $this->redirect($this->generateUrl('Stage_consulter', array('id' => $stage->getId())));
      }
    }
 
    // À ce point là :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
 
    return $this->render('gestStagesStageBundle:Stage:AjouterStage.html.twig', array(
    'form' => $form->createView(),
   
     ));
  }
	
	public function EntrepriseAjouterAction()
	{

		$entreprise = new Entreprise ();
		$form = $this->createForm(new EntrepriseType, $entreprise);

		/**
		***	INSTRUCTIONS DE SOUMISSION DU FORMULAIRE
		**/

		// 1. On récupère la requête HTTP
		$request = $this->get('request');

		// 2. On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// 3. On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $entreprise contient les valeurs entrées dans le 	formulaire par le visiteur
			$form->bind($request);

			// On vérifie que les valeurs entrées sont correctes
			if ($form->isValid()) {
				// On enregistre notre objet $entreprise dans la base de données
				$em = $this->getDoctrine()->getManager();
				$em->persist($entreprise);
				$em->flush();

				// On redirige vers la page de consultation des entreprises
				$repository = $this->getDoctrine()
					->getManager()
					->getRepository('gestStagesStageBundle:Entreprise');
				$lesEntreprises = $repository->findAll();
				return $this->render('gestStagesStageBundle:Stage:ConsulterEntreprise.html.twig',array('entreprises'=>$lesEntreprises));
			}
		}

		// À ce point là :
		// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
		// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau

		return $this->render('gestStagesStageBundle:Stage:AjouterEntreprise.html.twig', array('form' => $form->createView()));
	}
	
	public function EntrepriseConsulterAction()
	{
		$repository = $this->getDoctrine()
					->getManager()
					->getRepository('gestStagesStageBundle:Entreprise');
		$lesEntreprises = $repository->findAll();
		return $this->render('gestStagesStageBundle:Stage:ConsulterEntreprise.html.twig',array('entreprises'=>$lesEntreprises));
	}
}
