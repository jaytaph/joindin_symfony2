<?php

namespace joindin\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class DashboardController extends Controller
{

    /**
     * Returns the main dashboard page
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
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
