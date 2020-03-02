<?php

namespace App\Service;

use App\Entity\User;
use App\Form\UserType;
use Sympfony\Component\HttpFoundation\Request;
use App\Repository\UserParamRepository;
use Doctrine\ORM\EntityManagerInterface;

class UserService{
    
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    
    public function register()
    {
        $user = new User();

        if(isset($_POST['register'])){
            $user->setLastname($_POST['lastname']);
            $user->setLastname($_POST['firstname']);
            $user->setLastname($_POST['email']);
            $user->setLastname($_POST['address']);
            $user->setLastname($_POST['biography']);

        }
    }
}