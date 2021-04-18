<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
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
        $answers = [
          'Make sure your cat is sitting purrrfectly still :D',
          'Honestly, I like furry shoes better than MY cat',
          'Maybe... try saying the spell backwards?'
        ];

        dump($this);

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);
    }
}