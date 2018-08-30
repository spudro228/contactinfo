<?php

namespace App\Controller;

use Enqueue\Client\ProducerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ProducerInterface $producer)
    {
        return $this->redirectToRoute('contact_info_new');
    }
}
