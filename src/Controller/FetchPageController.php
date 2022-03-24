<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class FetchPageController extends AbstractController
{
    
    #[Route('/admin')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
    #[Route('/{slug}')]
    public function home(string $slug = null): Response
    {
        $page = file_get_contents('https://development.coinrivet.com/'.$slug);
        return $this->render('home.html.twig', [ 'page' => $page ]);
    }

}


?>