<?php

namespace App\Controller;


use App\Service\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class BobiTeach extends AbstractController
{
    #[Route(path: '/')]
    public function users(): Response
    {
        $usersparams = new User(
                'vaim',
                'veselov',
                'vladimirovich',
                '@mail.ru',
                'chumba',
                '123321'
        );

        return new Response('<H2>User:</H2>name: ' .$usersparams->getName().
                                    '<br> surname: ' .$usersparams->getSurname().
                                    '<br> patronymic: ' .$usersparams->getPatronymic().
                                    '<br> email: ' .$usersparams->getEmail().
                                    '<br> login: ' .$usersparams->getLogin().
                                    '<br> password: ' .$usersparams->getPassword());

    }

}



