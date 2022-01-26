<?php

namespace App\Repository;

use App\Entity\CommentFlag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommentFlag|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommentFlag|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommentFlag[]    findAll()
 * @method CommentFlag[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentFlagRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommentFlag::class);
    }

    // /**
    //  * @return CommentFlag[] Returns an array of CommentFlag objects
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
    public function findOneBySomeField($value): ?CommentFlag
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
