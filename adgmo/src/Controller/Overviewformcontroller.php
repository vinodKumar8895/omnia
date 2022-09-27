<?php

namespace App\Controller;

use  Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Overviewformcontroller extends AbstractController
{
    #[Route('/overwiew')]
    public function number(): Response
    {
       $Date = 'Tues, 19 July 2022 ';
       $Profilename = 'Harrison';


        return $this->render('OverViewForm/overView.html.twig', [
            'Profile_name' => $Profilename,
            'Date' => $Date
        ]);
    }
}