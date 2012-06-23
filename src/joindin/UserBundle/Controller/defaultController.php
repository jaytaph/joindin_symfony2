<?php

namespace joindin\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;

class defaultController extends Controller
{

    /**
     * Returns a simple CRSF token. This is needed to make sure that the login sidebar box
     * works correctly.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getTokenAction()
    {
        return new Response($this->container->get('form.csrf_provider')
                                ->generateCsrfToken('authenticate'));
    }


}
