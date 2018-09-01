<?php

namespace Inanzzz\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InanzzzHelloBundle:Default:index.html.twig');
    }
}
