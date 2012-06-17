<?php

namespace joindin\defaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class EventController extends Controller
{

    public function hotAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('joindindefaultBundle:Events')->findHotEvents(5);
        return $this->render('joindindefaultBundle:Event:hot.html.twig', array('events' => $events));
    }

    public function upcomingAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('joindindefaultBundle:Events')->findUpcomingEvents(5);
        return $this->render('joindindefaultBundle:Event:upcoming.html.twig', array('events' => $events));
    }

    public function pastAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('joindindefaultBundle:Events')->findUpcomingEvents(5);
        return $this->render('joindindefaultBundle:Event:past.html.twig', array('events' => $events));
    }

    public function allAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('joindindefaultBundle:Events')->findUpcomingEvents(5);
        return $this->render('joindindefaultBundle:Event:all.html.twig', array('events' => $events));
    }

}
