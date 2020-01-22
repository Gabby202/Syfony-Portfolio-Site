<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/angular", name="angular_")
 */
class AngularController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('angular/index.html.twig', [
            'controller_name' => 'AngularController',
        ]);
    }
}
