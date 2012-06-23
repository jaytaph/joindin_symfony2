<?php

namespace joindin\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class ViewController extends Controller
{

    /**
     * Returns user information
     *
     * @ParamConverter("user", class="joindinUserBundle:User")
     */
    public function indexAction(\joindin\UserBundle\Entity\User $user, $sort)
    {
        return $this->render('joindinUserBundle:View:index.html.twig', array('user' => $user));
    }

}
