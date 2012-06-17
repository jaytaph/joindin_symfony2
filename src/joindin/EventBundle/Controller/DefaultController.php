<?php

namespace joindin\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->hotAction();
    }
    
    public function hotAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('joindinEventBundle:Events')->findHotEvents(5);
        return $this->render('joindinEventBundle:Default:hot.html.twig', array('events' => $events));
    }

    public function upcomingAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('joindinEventBundle:Events')->findUpcomingEvents(5);
        return $this->render('joindinEventBundle:Default:upcoming.html.twig', array('events' => $events));
    }

    public function pastAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('joindinEventBundle:Events')->findUpcomingEvents(5);
        return $this->render('joindinEventBundle:Default:past.html.twig', array('events' => $events));
    }

    public function allAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('joindinEventBundle:Events')->findAllEvents(5);
        return $this->render('joindinEventBundle:Default:all.html.twig', array('events' => $events));
    }
}
