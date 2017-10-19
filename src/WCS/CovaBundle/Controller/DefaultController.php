<?php

namespace WCS\CovaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WCSCovaBundle:Default:index.html.twig');
    }
}
