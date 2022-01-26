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

    //Récupéré les éléments selon un mot clé qui correspond au titre français, au titre original
    public function findBySearch(Search $search)
    {
        $qb = $this->createQueryBuilder('m')
            ->where('m.frenchTitle LIKE :keyword')
            ->orderBy('m.frenchTitle', 'ASC')
            ->orWhere('m.originalTitle LIKE :keyword')
            ->setParameter('keyword', '%' . $search->getKeyword() . '%');

        //SI statut compté, on recherche selon le statut
        if (count($search->getStatuts())) {
            $qb->andWhere('m.statut in (:statuts)')
                ->setParameter('statuts', $search->getStatuts());
        }
        //SI genre compté, on recherche selon le genre
        if (count($search->getGenres())) {
            $qb->andWhere('m.genre in (:genres)')
                ->setParameter('genres', $search->getGenres());
        }
        //Si on demande que l'anime est vrai alors on affiche les éléments correspondants
        if ($search->getAnimes() == true) {
            $qb->andWhere('m.anime in (:animes)')
                ->setParameter('animes', $search->getAnimes());
        }

        //SI classifications compté, on recherche selon la classification
        if (count($search->getClassifications())) {

            $qb->andWhere('m.classification in (:classifications)')
                ->setParameter('classifications', $search->getClassifications());
        }

        //Si on choisi un éditeur, alors on recherche selon l'éditeur choisis
        if ($search->getEditors()) {
            $qb->andWhere('m.editor in (:editors)')
                ->setParameter('editors', $search->getEditors());
        }

        return $qb->getQuery()->getResult();
    }

    //On recherche les mangas grâce a leur slug et leurs tomes trié selon le numéro des tomes
    public function findWithTomes($slug)
    {
        $qb = $this->createQueryBuilder('m')
            ->where('m.slug = :slug')
            ->leftJoin('m.tomes', 'tomes')
            ->orderBy('tomes.number', 'ASC')
            ->addSelect('tomes')
            ->setParameter('slug', $slug);
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
