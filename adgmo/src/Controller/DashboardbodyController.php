<?php

namespace App\Controller;

use  Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardbodyController extends AbstractController
{
    #[Route('/homepage')]
    public function number(): Response
    {
       $Date = 'Tues, 19 July 2022 ';
       $Profilename = 'Harrison';


        return $this->render('Dashboard/Dashboard.html.twig', [
            'Profile_name' => $Profilename,
            'Date' => $Date
        ]);
    }
}