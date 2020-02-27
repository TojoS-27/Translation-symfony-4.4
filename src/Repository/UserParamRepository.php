<?php

namespace App\Repository;

use App\Entity\UserParam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserParam|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserParam|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserParam[]    findAll()
 * @method UserParam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserParamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserParam::class);
    }

    // /**
    //  * @return UserParam[] Returns an array of UserParam objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserParam
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
