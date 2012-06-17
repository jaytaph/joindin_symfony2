<?php

namespace ji\defaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AboutController extends Controller
{

    public function indexAction()
    {
        return $this->render('jidefaultBundle:About:about.html.twig');
    }

}
