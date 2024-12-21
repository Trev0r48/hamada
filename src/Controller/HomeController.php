<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Form\PersonneType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    #[Route('/dummy', name: 'app_dummy')]
    public function dummy(): Response
    {
        $text = "hello this is home";
        $tabyear = [2020,2021,2022,2023];

        return $this->render('home/dummy.html.twig',[
            "text" => $text,
            "years" => $tabyear
        ]);
        ;
    }

    #[Route('/displayform', name: 'app_displayform')]
    public function displayForm(Request $request): Response {
        $hamada= new Personne();
        $personneForm = $this->createForm(PersonneType::class,$hamada);
        return $this->render('home/displayForm.html.twig',[
            "form" => $personneForm
        ]);
        ;
    }

}