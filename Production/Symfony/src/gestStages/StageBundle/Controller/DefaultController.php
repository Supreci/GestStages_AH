<?php

namespace gestStages\StageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('gestStagesStageBundle:Default:index.html.twig', array('name' => $name));
    }
}
