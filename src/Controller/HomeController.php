<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return new Response(content:"<h1>hello world</h1>")
        ;
    }
    #[Route("/about", name:"app_about")]
    public function about(): Response {
        return new Response(content:"hello world 2");
    }
}