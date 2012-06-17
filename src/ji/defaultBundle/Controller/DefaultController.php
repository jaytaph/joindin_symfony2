<?php

namespace ji\defaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('jidefaultBundle:Events')->findHotEvents(5);
        return $this->render('jidefaultBundle:Event:hot.html.twig', array('events' => $events));
    }

}
