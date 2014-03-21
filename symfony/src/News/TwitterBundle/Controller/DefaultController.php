<?php

namespace News\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NewsTwitterBundle:Default:index.html.twig', array('name' => $name));
    }
}
