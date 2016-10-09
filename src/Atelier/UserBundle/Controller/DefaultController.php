<?php

namespace Atelier\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AtelierUserBundle:Default:index.html.twig');
    }
}
