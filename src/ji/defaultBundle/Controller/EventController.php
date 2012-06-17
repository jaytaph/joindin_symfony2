<?php

namespace ji\defaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class EventController extends Controller
{

    public function hotAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('jidefaultBundle:Events')->findHotEvents(5);
        return $this->render('jidefaultBundle:Event:hot.html.twig', array('events' => $events));
    }

    public function upcomingAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('jidefaultBundle:Events')->findUpcomingEvents(5);
        return $this->render('jidefaultBundle:Event:upcoming.html.twig', array('events' => $events));
    }

    public function pastAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('jidefaultBundle:Events')->findUpcomingEvents(5);
        return $this->render('jidefaultBundle:Event:past.html.twig', array('events' => $events));
    }

    public function allAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('jidefaultBundle:Events')->findUpcomingEvents(5);
        return $this->render('jidefaultBundle:Event:all.html.twig', array('events' => $events));
    }

}
