<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\CategoryMessage;
use App\Entity\Classification;
use App\Entity\Editor;
use App\Entity\Genre;
use App\Entity\Statut;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $classificationNames =["Kodomo", "Josei", "Seinen", "Shonen", "Shojo"];
        $classifications= [];
        foreach ($classificationNames as $classificationName){
            $classification = new Classification();
            $classification->setName($classificationName);
            $classifications[] = $classification;
            $manager->persist($classification);

        }

        $genreNames = ["Comédie", "Super-Héro", "Horreur", "Romantique", "Thriller", "Fantastique", "Drama", "Tranche de vie" ];
        $genres= [];
        foreach ($genreNames as $genreName){
            $genre= new Genre();
            $genre->setName($genreName);
            $genres[]=$genre;
            $manager->persist($genre);
        }

        $statutNames = ["En cours", "En pause ou arrêté", "One Shot", "Terminé" ];
        $statuts= [];
        foreach ($statutNames as $statutName){
            $statut= new Statut();
            $statut->setName($statutName);
            $statuts[]=$statut;
            $manager->persist($statut);
        }

        $editorNames=["Aaltaïr", "Glénat", "Kana", "Kazé", "Ohayo", "Panini", "ki-oon" ];
        $editors=[];
        foreach ($editorNames as $editorName){
            $editor = new Editor();
            $editor->setName($editorName);
            $editors[]=$editor;
            $manager->persist($editor);
        }

        $author1 = new Author();
        $author1->setFirstname("Kohei");
        $author1->setLastname("Horikoshi");
        $manager->persist($author1);

        $author2 = new Author();
        $author2->setFirstname("Yusei");
        $author2->setLastname("Matsui");
        $manager->persist($author2);

        $author3 = new Author();
        $author3->setFirstname("Tite");
        $author3->setLastname("Kubo");
        $manager->persist($author3);

        $categorieNames_message= ["Ce manga ne s'y trouve pas", "Ce tome ne s'y trouve pas", "Il y a un problème technique", "Il y a une erreur", "Autre"];
        $categories_message=[];
        foreach ($categorieNames_message as $categories_messageName){
            $category_message= new CategoryMessage();
            $category_message->setName($categories_messageName);
            $categories_message[]=$category_message;
            $manager->persist($category_message);
        }

        $manager->flush();
    }
}
