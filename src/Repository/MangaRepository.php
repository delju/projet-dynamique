<?php

namespace App\Repository;

use App\Entity\Manga;
use App\Search\Search;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Manga|null find($id, $lockMode = null, $lockVersion = null)
 * @method Manga|null findOneBy(array $criteria, array $orderBy = null)
 * @method Manga[]    findAll()
 * @method Manga[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MangaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Manga::class);
    }
    public function findBySearch(Search $search)
    {
        $qb = $this->createQueryBuilder('a')
            ->where('a.frenchTitle LIKE :keyword')
            ->orWhere('a.originalTitle LIKE :keyword')
            ->orWhere('a.author.firstname LIKE :keyword ')
            ->orWhere('a.author.lastname LIKE :keyword')
            ->setParameter('keyword', '%'.$search->getKeyword().'%')
        ;

        if (count($search->getStatuts())) {
            $qb->andWhere('a.statut in (:statuts)')
                ->setParameter('categories', $search->getStatuts());
        }

        if(count($search->getGenres())) {
            $qb->andWhere('a.genre in (:genres)')
                ->setParameter('genres', $search->getGenres());
        }

        if(count($search->getAnimes())){
            $qb->andWhere('a.anime in (:animes)')
            ->setParameter('animes', $search->getAnimes());
        }

        if(count($search->getClassifications())){
            $qb->andWhere('a.classification in (:classifications)')
                ->setParameter('classifications', $search->getClassifications());
        }

        if(count($search->getEditors())){
            $qb->andWhere('a.editor in (:editors)')
                ->setParameter('editors', $search->getEditors());
        }

        return $qb->getQuery()->getResult();
    }

    // /**
    //  * @return Manga[] Returns an array of Manga objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Manga
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
