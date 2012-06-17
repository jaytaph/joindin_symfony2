<?php

namespace joindin\defaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ContactController extends Controller
{

    public function indexAction()
    {
        return $this->render('joindindefaultBundle:Contact:contact.html.twig');
    }

}
