<?php

namespace Atelier\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('AtelierCoreBundle:Core:index.html.twig');
    }
}
