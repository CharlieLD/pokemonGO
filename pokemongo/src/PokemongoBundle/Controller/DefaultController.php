<?php

namespace PokemongoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PokemongoBundle:Default:index.html.twig');
    }
}
