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
    
}