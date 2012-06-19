<?php

namespace joindin\defaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $events = $em->getRepository('joindinEventBundle:Events')->findHotEvents(7);
        $talks = $em->getRepository('joindinTalkBundle:Talks')->findRecentPopularTalks(7);

        return $this->render('joindindefaultBundle:Default:index.html.twig', array('events' => $events, 'talks' => $talks));
    }

}
