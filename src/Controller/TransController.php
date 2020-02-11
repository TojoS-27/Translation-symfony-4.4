<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sympfony\Component\HttpFoundation\Request;

class TransController extends AbstractController
{
    public function index()
    {
        return $this->render('trans/index.html.twig', [
          ]);
    }

    public function changePage()
    {
        return $this->render('trans/change_Page.html.twig', []);
    }
}
