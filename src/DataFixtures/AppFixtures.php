<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\CategoryMessage;
use App\Entity\Classification;
use App\Entity\Editor;
use App\Entity\Genre;
use App\Entity\Manga;
use App\Entity\Message;
use App\Entity\Photo;
use App\Entity\Statut;
use App\Entity\Tomes;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AppFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }


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

        $editorNames=["Aaltaïr", "Glénat", "Kana", "Kazé", "Ohayo", "Panini", "Ki-oon" ];
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

        $photo1 = new Photo();
        $photo1->setUrl('medium_20211030c005e7c206-61b8a124e747b.jpg');
        $manager->persist($photo1);

        $photo2 = new Photo();
        $photo2->setUrl('bleachmangaanime-61b8a2c941226.jpg');
        $manager->persist($photo2);

        $photo3 = new Photo();
        $photo3->setUrl('mhatome1-61bb140d48eab.jpg');
        $manager->persist($photo3);

        $admin = new User();
        $admin->setUsername("Julene1002");
        $admin->setLastname("Delvaux");
        $admin->setFirstname("Julène");
        $admin->setBirthday(new \DateTime('02/10/1994'));
        $admin->setPassword($this->encoder->encodePassword($admin, "Arthnhoa2812"));
        $admin->setEmail("julene.delvaux@gmail.com");
        $admin->setRoles(["ROLE_ADMIN"]);
        $manager->persist($admin);

        $manga1 = new Manga();
        $manga1->setOriginalTitle('Boku No Hiro Akademia');
        $manga1->setFrenchTitle('My Hero Academia');
        $manga1->setSummary('Dans un monde où 80 % de la population mondiale possède des super-pouvoirs, ici nommés « Alters » (個性, Kosei?), on suit les aventures de Izuku Midoriya, « Deku », l\'un des rares humains ne possédant pas d\'Alter. Malgré cela, Izuku rêve pourtant de rejoindre la filière super-héroïque de la grande académie Yuei (勇井高校, Yūei Kōkō?) et de devenir un jour un des plus grands héros de son époque. 
        Un jour, Izuku eût la chance de rencontrer son idole de toujours, All Might, numéro 1 des super-héros. Celui-ci va léguer à Izuku son Alter, le One For All.');
        $manga1->setAnime(1);
        $manga1->setGenre($genres[1]);
        $manga1->setEditor($editors[6]);
        $manga1->setClassification($classifications[3]);
        $manga1->setAuthor($author1);
        $manga1->setStatut($statuts[0]);
        $manga1->setPhoto($photo1);
        $manager->persist($manga1);

        $manga2 = new Manga();
        $manga2->setOriginalTitle('Burichi');
        $manga2->setFrenchTitle('Bleach');
        $manga2->setSummary('Le récit commence en 2001 au Japon dans la ville fictive de Karakura. Ichigo Kurosaki, lycéen de 15 ans, arrive à voir, entendre et toucher les âmes des morts depuis qu\'il est tout petit. 
        Un soir, sa routine quotidienne vient à être bouleversée à la suite de sa rencontre avec une shinigami (死神?, littéralement « dieu de la mort »), Rukia Kuchiki, et la venue d\'un monstre appelé hollow. 
        Ce dernier étant venu dévorer les âmes de sa famille et la shinigami venue le protéger ayant été blessée par sa faute, Ichigo accepte de devenir lui-même un shinigami afin de les sauver. Cependant, le transfert de pouvoir, censé être temporaire et partiel, est complet et ne s\'achève pas. 
        Ichigo est forcé de prendre la responsabilité de la tâche incombant à Rukia Kuchiki. Il commence donc la chasse aux hollows tout en protégeant les âmes humaines. Le début est centré sur une chasse aux mauvais esprits relativement peu puissants, avec un simple sabre. 
        L\'histoire va peu à peu se diriger vers un vaste complot mystico-politique après l\'apparition des premiers autres shinigami. Les batailles au sabre du commencement vont alors se métamorphoser en combats dantesques avec des armes aux pouvoirs surprenants et variés, et parfois aux proportions gigantesques.');
        $manga2->setAnime(1);
        $manga2->setGenre($genres[5]);
        $manga2->setEditor($editors[1]);
        $manga2->setClassification($classifications[3]);
        $manga2->setAuthor($author3);
        $manga2->setStatut($statuts[3]);
        $manga2->setPhoto($photo2);
        $manager->persist($manga2);

        $message1= new Message();
        $message1->setTitle('My Hero Academia');
        $message1->setContent('il y a une erreur dans la photo de couverture');
        $message1->setCategory($categories_message[3]);
        $manager->persist($message1);

        $tome1 = new Tomes();
        $tome1->setManga($manga1);
        $tome1->setNumber(1);
        $tome1->setTitle('Izuku Midoriya, les origines');
        $tome1->setSummary('Izuku Midoriya a 15 ans, il rêve depuis son enfance de devenir un super-héros. Il faut dire que dans le monde ou il vit 80 % de la population a des super-pouvoirs et ce n\'est malheureusement pas son cas ! Toutefois, il est persévérant et doté d\'un sérieux sens du devoir. Ainsi, quand il décide de venir en aide à son camarade de classe Katsuki, attaqué par une étrange créature qui veut prendre possession de son corps il se fait remarquer par le super héros ultime "All might" qui lui propose ensuite de lui donner une partie de son pouvoir, afin de l\'encourager.
                                    En même temps, Izuku tente d\'entrer à la prestigieuse Hero Academia et ce nouveau pouvoir est la chance qu\'il attendait... cependant, il ne le maîtrise pas beaucoup et son corps est très fortement affecté chaque fois qu\'il l\'utilise... Et l\'année ne fait que commencer...');
        $tome1->setRelDate(new \DateTime('2016-04-14'));
        $tome1->setPhoto($photo3);
        $manager->persist($tome1);

        $manager->flush();
    }
}
