<?php

namespace joindin\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class AttendeesController extends Controller
{

    /**
     * @ParamConverter("event", class="joindinEventBundle:Events")
     */
    public function indexAction(\joindin\EventBundle\Entity\Events $event)
    {
        // @TODO: Make sure this is only callable through an AJAX request
        // if ($this->getRequest()->isXmlHttpRequest()) {

        return $this->render('joindinEventBundle:Attendees:index.html.twig', array('event' => $event));
    }


}
