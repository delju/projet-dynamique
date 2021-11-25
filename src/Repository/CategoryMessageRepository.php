<?php

namespace App\Repository;

use App\Entity\CategoryMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategoryMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryMessage[]    findAll()
 * @method CategoryMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryMessage::class);
    }

    // /**
    //  * @return CategoryMessage[] Returns an array of CategoryMessage objects
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
    public function findOneBySomeField($value): ?CategoryMessage
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
