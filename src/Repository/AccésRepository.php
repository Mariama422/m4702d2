<?php

namespace App\Repository;

use App\Entity\Accés;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Accés|null find($id, $lockMode = null, $lockVersion = null)
 * @method Accés|null findOneBy(array $criteria, array $orderBy = null)
 * @method Accés[]    findAll()
 * @method Accés[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccésRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Accés::class);
    }

    // /**
    //  * @return Accés[] Returns an array of Accés objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Accés
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
