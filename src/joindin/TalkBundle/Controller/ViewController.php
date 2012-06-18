<?php

namespace joindin\TalkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


class ViewController extends Controller
{
    
    /**
     * @ParamConverter("talk", class="joindinTalkBundle:Talks")
     */
    public function indexAction(\joindin\TalkBundle\Entity\Talks $talk)
    {
        return $this->render('joindinTalkBundle:View:index.html.twig', array('talk' => $talk));
    }

}
