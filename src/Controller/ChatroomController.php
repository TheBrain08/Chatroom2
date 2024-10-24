<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class ChatroomController  extends AbstractController{


    #[Route('/regist', name:"app_regist")]
    public function registpage(): Response
    {
        return new Response('Regist');
    }


    #[Route('/home', name:"app_home")]
    public function homepage(): Response
    {
        return $this ->render('chatroom/home.html.twig');
    }

    #[Route('/admin', name:"app_adminpanel")]
    public function adminpage(): Response
    {
        return $this ->render('chatroom/adminpanel.html.twig');
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