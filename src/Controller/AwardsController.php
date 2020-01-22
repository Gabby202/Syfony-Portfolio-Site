<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/awards", name="awards_")
 */
class AwardsController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('awards/index.html.twig', [
            'controller_name' => 'AwardsController',
        ]);
    }
}
