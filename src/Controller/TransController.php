<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sympfony\Component\HttpFoundation\Request;

class TransController extends AbstractController
{
    
    public function index()
    {
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/TransController.php',
        // ]);
        // $form = $this->createFormBuilder(null);
        
        $lang = ['en', 'fr', 'cz'];

        return $this->render('trans/index.html.twig', [
            'name_title' => 'Je suis Symfony Translation',
            'lang' => $lang,
        ]);
    }
}
