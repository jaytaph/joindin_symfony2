<?php

namespace joindin\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class DashboardController extends Controller
{

    public function mainAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();

        return $this->render('joindinUserBundle:Dashboard:main.html.twig', array('user' => $user));
    }

    public function adminAction() {

    }

    public function manageAction() {

    }

}
