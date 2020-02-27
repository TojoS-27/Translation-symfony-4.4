<?php

namespace App\Repository;

use App\Entity\ConstVal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ConstVal|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConstVal|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConstVal[]    findAll()
 * @method ConstVal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConstValRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConstVal::class);
    }

    // /**
    //  * @return ConstVal[] Returns an array of ConstVal objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ConstVal
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
