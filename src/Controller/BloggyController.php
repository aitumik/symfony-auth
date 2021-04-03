<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BloggyController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $posts = [
            "Hey there this is symfony",
            "Hey there this is symfony",
            "Hey there this is symfony",
            "Hey there this is symfony",
            "Hey there this is symfony",
        ];
        return $this->render('bloggy/index.html.twig', [
            'posts' => $posts,
        ]);
    }
}
