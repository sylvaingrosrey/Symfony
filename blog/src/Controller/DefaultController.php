<?php
// src/Controller/DefaultController.phpphp
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/index", name="app_index")
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'owner' => 'Sylvain'
        ]);
    }

}