<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/android", name="android_")
 */
class AndroidController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('android/index.html.twig', [
            'controller_name' => 'AndroidController',
        ]);
    }
}
