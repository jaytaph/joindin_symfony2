<?php

namespace joindin\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use joindin\EventBundle\Form as Form;
use joindin\EventBundle\Entity as Entity;


class SubmitController extends Controller
{

    // @TODO: Add ajax calls to fetch / validate stuff?
    // Validate: TAGS

    public function indexAction() {
        $event = new Entity\Events();
        $form = $this->createForm(new Form\Event(), $event);

        return $this->render('joindinEventBundle:Submit:index.html.twig', array("form" => $form->createView()));
    }
}
