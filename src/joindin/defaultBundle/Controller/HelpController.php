<?php

namespace joindin\defaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HelpController extends Controller
{

    public function indexAction()
    {
        return $this->forward("joindindefaultBundle:Help:page", array("what" => "index"));
    }

    public function pageAction($what) {
        return $this->render('joindindefaultBundle:Help:'.$what.'.html.twig');
    }

}
