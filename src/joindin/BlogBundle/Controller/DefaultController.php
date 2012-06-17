<?php

namespace joindin\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        // Display all blog posts
        return $this->render('joindinBlogBundle:Default:index.html.twig');
    }

    public function deleteAction()
    {
        // Delete blog post
        return $this->render('joindinBlogBundle:Default:index.html.twig');
    }

    public function editAction()
    {
        // Edit blog post
        return $this->render('joindinBlogBundle:Default:index.html.twig');
    }

    public function addAction()
    {
        // Edit blog post
        return $this->render('joindinBlogBundle:Default:index.html.twig');
    }
}
