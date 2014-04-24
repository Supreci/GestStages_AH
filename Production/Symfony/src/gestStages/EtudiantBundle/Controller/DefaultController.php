<?php

namespace gestStages\EtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('gestStagesEtudiantBundle:Default:index.html.twig', array('name' => $name));
    }
}
