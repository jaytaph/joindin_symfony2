<?php

namespace joindin\defaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('joindinEventBundle:Events')->findHotEvents(5);
        //$events = $em->getRepository('joindinEventBundle:Events')->findUpcomingevents(5);
        //$events = $em->getRepository('joindinEventBundle:Events')->findPastEvents(5);
        return $this->render('joindinEventBundle:Default:hot.html.twig', array('events' => $events));
    }

}
