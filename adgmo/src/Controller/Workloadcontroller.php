<?php

namespace App\Controller;

use  Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class Workloadcontroller extends AbstractController
{
    #[Route('/workload')]
    public function number(): Response
    {
       $Date = 'Tues, 19 July 2022 ';
       $Profilename = 'Harrison';



        return $this->render('Workload/Workload.html.twig', [
            'Profile_name' => $Profilename,
            'Date' => $Date
        ]);
    }

    #[Route('/workload_overview')]
    public function number1(): Response
    {
       $Date = 'Tues, 19 July 2022 ';
       $Profilename = 'Harrison';



        return $this->render('popupforms/PopupDecline_request.html.twig', [
            'Profile_name' => $Profilename,
            'Date' => $Date
        ]);
    }

    #[Route('/createRequest')]
    public function number2(): Response
    {
       $Date = 'Tues, 19 July 2022 ';
       $Profilename = 'Harrison';



        return $this->render('Codilar/Components/CreateRequest/createrequest.html.twig', [
            'Profile_name' => $Profilename,
            'Date' => $Date
        ]);
    }

    #[Route('/createRequestform')]
    public function number3(): Response
    {
       $Date = 'Tues, 19 July 2022 ';
       $Profilename = 'Harrison';



        return $this->render('Codilar/Components/OverViewForm/overView.html.twig', [
            'Profile_name' => $Profilename,
            'Date' => $Date
        ]);
    }

    #[Route('/createrequest')]
    public function number4(): Response
    {
       $Date = 'Tues, 19 July 2022 ';
       $Profilename = 'Harrison';



        return $this->render('OverViewForm/overView.html.twig', [
            'Profile_name' => $Profilename,
            'Date' => $Date
        ]);
    }

    #[Route('/createrequestmain')]
    public function number5(): Response
    {
       $Date = 'Tues, 19 July 2022 ';
       $Profilename = 'Harrison';



        return $this->render('Create_Request/Create_Request.html.twig', [
            'Profile_name' => $Profilename,
            'Date' => $Date
        ]);
    }

    
}