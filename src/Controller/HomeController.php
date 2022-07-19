<?php

namespace App\Controller;

use App\Services\HomeServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {
    #[Route('/', name: 'app_home')]
    public function index(HomeServices $HS): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => $HS->getAllDatas(),
        ]);
    }
}
