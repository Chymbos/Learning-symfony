<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BobiTeach extends AbstractController
{

    #[Route(path: '/')]
    public function users(): Response
    {
        $userFirstName = 'Boba';
        $userNotifications = ['y', 'n'];

       return $this->render('@templates\index.html.twig', [
        'user_first_name' => $userFirstName,
        'notifications' => $userNotifications,
    ]);
    }
}

/**
 * TODO: трейты trait
 * TODO: twig шаблонизатор
 * TODO: работа с базой данных в symfony и конфигурация doctrine в symfony
 * TODO: подключение новых пакетов через composer
 * Дополнительно
 * TODO: Почитать про ParamConverter в symfony
 * TODO: Почитать про doctrine
 */
