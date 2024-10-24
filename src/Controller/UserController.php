<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController {

    #[Route('/api/users/{id}', methods: ['GET'])]
    public function getUsers(int $id): Response {
        $user = [
            'id' => $id,
            'name' => 'Timo',
            'age' => '20',
        ];

        return $this->json($user);
    }
}