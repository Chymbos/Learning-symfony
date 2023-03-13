<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BobiTeach extends AbstractController
{
    #[Route(path: '/')]
    public function bobi(): Response
    {
        return new Response('boba gay');
    }
}