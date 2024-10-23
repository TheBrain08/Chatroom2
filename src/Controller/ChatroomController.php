<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class ChatroomController {

    #[Route('/')]
    public function loginpage(): Response
    {
        return new Response('Login');
    }

    #[Route('/regist')]
    public function registpage(): Response
    {
        return new Response('Regist');
    }

    #[Route('/test/{test}')]
    public function testpage(string $test = null): Response
    {
        if($test){
            $title = u(str_replace('-',' ', $test))->title(true);
        } else {
            $title = "Nix da";
        }
        
        return new Response($title);
    }
}