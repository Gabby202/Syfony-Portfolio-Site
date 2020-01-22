<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/unity", name="unity_")
 */
class UnityController extends AbstractController
{
    /**
     * @Route("/unity", name="index")
     */
    public function index()
    {
        return $this->render('unity/index.html.twig', [
            'controller_name' => 'UnityController',
        ]);
    }
}
