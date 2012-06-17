<?php

namespace ji\defaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HelpController extends Controller
{

    public function indexAction()
    {
        return $this->forward("jidefaultBundle:Help:page", array("what" => "index"));
    }

    public function pageAction($what) {
        return $this->render('jidefaultBundle:Help:'.$what.'.html.twig');
    }

}
