<?php

namespace joindin\TalkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('joindinTalkBundle:Talks');

        return $this->render('joindinTalkBundle:Default:index.html.twig', array("recent" => $repository->findRecentPopularTalks(),
                                                                                "alltime" => $repository->findAllTimePopularTalks()));
    }
}
