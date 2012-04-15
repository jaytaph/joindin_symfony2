<?php

namespace ji\defaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * CRUD controller for blogposts (/blog)
 */
class BlogController extends Controller
{

    public function indexAction()
    {
        // Display all blog posts
        return $this->render('jidefaultBundle:Blog:index.html.twig');
    }

    public function deleteAction()
    {
        // Delete blog post
        return $this->render('jidefaultBundle:Blog:index.html.twig');
    }

    public function editAction()
    {
        // Edit blog post
        return $this->render('jidefaultBundle:Blog:index.html.twig');
    }

    public function addAction()
    {
        // Edit blog post
        return $this->render('jidefaultBundle:Blog:index.html.twig');
    }

}
