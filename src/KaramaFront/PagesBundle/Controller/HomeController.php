<?php

namespace App\KaramaFront\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function Index(){
        return $this->render('@PagesTemplate/Home.html.twig');
    }
}