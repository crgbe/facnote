<?php


namespace FacnoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Client controller.
 *
 */
class HomeController extends Controller
{
    public function indexAction(){
        return $this->render('home/index.html.twig');
    }
}