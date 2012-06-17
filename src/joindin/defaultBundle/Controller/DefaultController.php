<?php

namespace joindin\defaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('joindindefaultBundle:Events')->findHotEvents(5);
        //$events = $em->getRepository('joindindefaultBundle:Events')->findUpcomingevents(5);
        //$events = $em->getRepository('joindindefaultBundle:Events')->findPastEvents(5);
        return $this->render('joindindefaultBundle:Event:hot.html.twig', array('events' => $events));
    }

}
