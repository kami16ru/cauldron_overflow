<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('Hello from question controller!');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug): Response
    {
        return new Response(sprintf(
            'Future page to show the question "%s"!',
            ucwords(str_replace('-',' ', $slug))
        ));
    }
}