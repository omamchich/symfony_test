<?php

namespace News\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = 'some';
        return $this->render('NewsAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
