<?php

namespace joindin\TalkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('joindinTalkBundle:Default:index.html.twig', array('name' => $name));
    }
}
