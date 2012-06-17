<?php

namespace joindin\defaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AboutController extends Controller
{

    public function indexAction()
    {
        return $this->render('joindindefaultBundle:About:about.html.twig');
    }

}
