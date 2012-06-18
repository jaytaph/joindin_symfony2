<?php

namespace joindin\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


class ViewController extends Controller
{

    /**
     * @ParamConverter("event", class="joindinEventBundle:Events")
     */
    public function indexAction(\joindin\EventBundle\Entity\Events $event)
    {
        return $this->render('joindinEventBundle:View:index.html.twig', array('event' => $event));
    }

}
