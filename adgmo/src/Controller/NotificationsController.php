<?php

namespace App\Controller;

use  Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NotificationsController extends AbstractController
{
    #[Route('/Notifications')]
    public function number(): Response
    {
        $Date = 'Tues, 19 July 2022 ';
        $Profilename = 'Harrison';

        return $this->render('Notifications/Notifications.html.twig', [
            'Profile_name' => $Profilename,
            'Date' => $Date
        ]);
    }
}