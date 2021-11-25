<?php

namespace App\Repository;

use App\Entity\Tomes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tomes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tomes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tomes[]    findAll()
 * @method Tomes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TomesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tomes::class);
    }

    // /**
    //  * @return Tomes[] Returns an array of Tomes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tomes
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
