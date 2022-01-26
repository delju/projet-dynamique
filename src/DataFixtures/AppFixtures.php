<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\CategoryMessage;
use App\Entity\Classification;
use App\Entity\Comment;
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
    private const USER_REFERENCE = 'user-';
    private const TOME_REFERENCE = 'tome-';


    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }


    public function load(ObjectManager $manager): void
    {
        /********* Classifications ********/

        $classificationNames = ["Kodomo", "Josei", "Seinen", "Shonen", "Shojo"];
        $classifications = [];
        foreach ($classificationNames as $classificationName) {
            $classification = new Classification();
            $classification->setName($classificationName);
            $classifications[] = $classification;
            $manager->persist($classification);

        }

        /********* Genres ********/

        $genreNames = ["Comédie", "Super-Héro", "Horreur", "Romantique", "Thriller", "Fantastique", "Drama", "Tranche de vie"];
        $genres = [];
        foreach ($genreNames as $genreName) {
            $genre = new Genre();
            $genre->setName($genreName);
            $genres[] = $genre;
            $manager->persist($genre);
        }

        /********* Statuts ********/

        $statutNames = ["En cours", "En pause ou arrêté", "One Shot", "Terminé"];
        $statuts = [];
        foreach ($statutNames as $statutName) {
            $statut = new Statut();
            $statut->setName($statutName);
            $statuts[] = $statut;
            $manager->persist($statut);
        }

        /********* Editeur ********/

        $editorNames = ["Aaltaïr", "Glénat", "Kana", "Kazé", "Ohayo", "Panini", "Ki-oon", "Pika", "Delcourt/Tonkam"];
        $editors = [];
        foreach ($editorNames as $editorName) {
            $editor = new Editor();
            $editor->setName($editorName);
            $editors[] = $editor;
            $manager->persist($editor);
        }

        /********* Auteur ********/

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

        $author4 = new Author();
        $author4->setFirstname("Kanoko");
        $author4->setLastname("Sakurakoji");
        $manager->persist($author4);

        $author5 = new Author();
        $author5->setFirstname("Lynn");
        $author5->setLastname("Okamoto");
        $manager->persist($author5);

        /********* Catégorie des messages ********/

        $categorieNames_message = ["Ce manga ne s'y trouve pas", "Ce tome ne s'y trouve pas", "Il y a un problème technique", "Il y a une erreur", "Autre"];
        $categories_message = [];
        foreach ($categorieNames_message as $categories_messageName) {
            $category_message = new CategoryMessage();
            $category_message->setName($categories_messageName);
            $categories_message[] = $category_message;
            $manager->persist($category_message);
        }

        /********* Photos ********/


        $photo1 = new Photo();
        $photo1->setUrl('medium_20211030c005e7c206-61b8a124e747b.jpg');
        $manager->persist($photo1);

        $photo2 = new Photo();
        $photo2->setUrl('bleachmangaanime-61b8a2c941226.jpg');
        $manager->persist($photo2);

        $photo3 = new Photo();
        $photo3->setUrl('mhatome1-61bb140d48eab.jpg');
        $manager->persist($photo3);

        $photo4 = new Photo();
        $photo4->setUrl('2-61e6cd806ca57.jpg');
        $manager->persist($photo4);

        $photo5 = new Photo();
        $photo5->setUrl('my_hero_academia_tome_3_all_might787425264432-61e6d1276babf.jpg');
        $manager->persist($photo5);

        $photo6 = new Photo();
        $photo6->setUrl('My-Hero-Academia4.jpg');
        $manager->persist($photo6);

        $photo7 = new Photo();
        $photo7->setUrl('My-Hero-Academia5.jpg');
        $manager->persist($photo7);

        $photo8 = new Photo();
        $photo8->setUrl('black_bird.jpg');
        $manager->persist($photo8);

        $photo9 = new Photo();
        $photo9->setUrl('elfenlied.jpg');
        $manager->persist($photo9);

        $photo10 = new Photo();
        $photo10->setUrl('tome_32_japonjpg1-61f01ad1bfe4c.jpg');
        $manager->persist($photo10);



        /********* Manga ********/

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

        $manga3 = new Manga();
        $manga3->setOriginalTitle('Burakku Bado');
        $manga3->setFrenchTitle('Black Bird');
        $manga3->setSummary('Le jour de son anniversaire, un yôkai lui fait une révélation surprenante : à partir de ce jour, si un monstre boit son sang, il prolonge sa durée de vie ; s\'il mange sa chair, il devient immortel et s\'il fait d\'elle sa femme, il assure la prospérité de son clan !');
        $manga3->setAnime(0);
        $manga3->setGenre($genres[3]);
        $manga3->setEditor($editors[7]);
        $manga3->setClassification($classifications[4]);
        $manga3->setAuthor($author4);
        $manga3->setStatut($statuts[3]);
        $manga3->setPhoto($photo8);
        $manager->persist($manga3);


        $manga4 = new Manga();
        $manga4->setOriginalTitle('Erufen Rito');
        $manga4->setFrenchTitle('Elfen Lied');
        $manga4->setSummary('Lucy, une diclonius, arrive à s\'échapper du laboratoire en massacrant les gardes avant d\'être touchée à la tête par un sniper, ce qui la précipite dans l\'océan. 
    Le lendemain elle se réveille sur une plage et est secourue par un jeune garçon nommé Kôta et sa cousine Yuka, cependant elle à perdu la mémoire.');
        $manga4->setAnime(1);
        $manga4->setGenre($genres[2]);
        $manga4->setEditor($editors[8]);
        $manga4->setClassification($classifications[2]);
        $manga4->setAuthor($author5);
        $manga4->setStatut($statuts[3]);
        $manga4->setPhoto($photo9);
        $manager->persist($manga4);

        /********* TOMES ********/
        $tome1 = new Tomes();
        $tome1->setManga($manga1);
        $tome1->setNumber(1);
        $tome1->setTitle('Izuku Midoriya, les origines');
        $tome1->setSummary('Izuku Midoriya a 15 ans, il rêve depuis son enfance de devenir un super-héros. Il faut dire que dans le monde ou il vit 80 % de la population a des super-pouvoirs et ce n\'est malheureusement pas son cas ! Toutefois, il est persévérant et doté d\'un sérieux sens du devoir. Ainsi, quand il décide de venir en aide à son camarade de classe Katsuki, attaqué par une étrange créature qui veut prendre possession de son corps il se fait remarquer par le super héros ultime "All might" qui lui propose ensuite de lui donner une partie de son pouvoir, afin de l\'encourager.
                                    En même temps, Izuku tente d\'entrer à la prestigieuse Hero Academia et ce nouveau pouvoir est la chance qu\'il attendait... cependant, il ne le maîtrise pas beaucoup et son corps est très fortement affecté chaque fois qu\'il l\'utilise... Et l\'année ne fait que commencer...');
        $tome1->setRelDate(new \DateTime('2016-04-14'));
        $tome1->setPhoto($photo3);
        $this->addReference(self::TOME_REFERENCE.'1', $tome1);

        $manager->persist($tome1);

        $tome2 = new Tomes();
        $tome2->setManga($manga1);
        $tome2->setNumber(2);
        $tome2->setTitle('Déchaine-toi, maudit nerd!');
        $tome2->setSummary('Pris pour cible par un super-vilain, Izuku est secouru de main de maître par son idole en personne ! Il découvre alors qu’All Might, très diminué par une ancienne blessure, ne peut plus utiliser son alter que trois heures par jour... Aussi, lorsque son camarade Katsuki est attaqué quelques instants plus tard, son sang ne fait qu’un tour : malgré sa terreur, il se précipite à la rescousse du jeune garçon ! Témoin de cet acte de bravoure, All Might décide de faire d’Izuku son successeur. Après un entraînement drastique, notre apprenti héros réussit à intégrer le prestigieux lycée Yuei, mais il y a un hic : impossible pour lui de maîtriser le One for All, le pouvoir hérité d’All Might...');
        $tome2->setRelDate(new \DateTime('2016-04-14'));
        $tome2->setPhoto($photo4);
        $this->addReference(self::TOME_REFERENCE.'2', $tome2);
        $manager->persist($tome2);

        $tome3 = new Tomes();
        $tome3->setManga($manga1);
        $tome3->setNumber(3);
        $tome3->setTitle('All might');
        $tome3->setSummary('Pris pour cible par un super-vilain, Izuku est secouru de main de maître par son idole en personne ! Il découvre alors qu’All Might, très diminué par une ancienne blessure, ne peut plus utiliser son alter que trois heures par jour... Aussi, lorsque son camarade Katsuki est attaqué quelques instants plus tard, son sang ne fait qu’un tour : malgré sa terreur, il se précipite à la rescousse du jeune garçon ! Témoin de cet acte de bravoure, All Might décide de faire d’Izuku son successeur. Après un entraînement drastique, notre apprenti héros réussit à intégrer le prestigieux lycée Yuei, mais il y a un hic : impossible pour lui de maîtriser le One for All, le pouvoir hérité d’All Might...');
        $tome3->setRelDate(new \DateTime('2016-06-09'));
        $tome3->setPhoto($photo5);
        $this->addReference(self::TOME_REFERENCE.'3', $tome3);
        $manager->persist($tome3);

        $tome4 = new Tomes();
        $tome4->setManga($manga1);
        $tome4->setNumber(4);
        $tome4->setTitle('Celui qui avait tout');
        $tome4->setSummary('Un nouveau défi attend la Seconde A : le championnat de Yuei, un des événements les plus attendus au Japon ! 
        Pour nos apprentis héros, c\'est l\'occasion rêvée de se faire remarquer par des professionnels... Inutile de dire que la compétition est rude
        Grâce à son talent pour l\'improvisation, Deku se hisse à la première place du classement à la toute fin de l\'épreuve, une course d\'obstacle façon Yuei . Mais parviendra - t - il à conserver son titre lors de la bataille de cavaliers ? Toujours plus loin, plus ultra !');
        $tome4->setRelDate(new \DateTime('2016-07-07'));
        $tome4->setPhoto($photo6);
        $this->addReference(self::TOME_REFERENCE.'4', $tome4);
        $manager->persist($tome4);

        $tome5 = new Tomes();
        $tome5->setManga($manga1);
        $tome5->setNumber(5);
        $tome5->setTitle('Shoto Todoroki: Les origines');
        $tome5->setSummary('Et c\'est parti pour la troisième épreuve du championnat ! Les 16 élèves encore en lice vont s\'affronter lors d\'un tournoi sans merci... Confronté à un alter de contrôle mental, Deku parvient à gagner son premier duel en activant le One for All dans deux de ses doigts avant d\'envoyer son adversaire hors du ring !
        Mais le prochain match s\'annonce ardu, car son opposant n\'est autre que Shoto, et le jeune garçon est bien décidé à l\'emporter. De son côté, Ochaco s\'apprête à se mesurer à Katsuki... Le combat promet d\'être explosif !');
        $tome5->setRelDate(new \DateTime('2016-09-08'));
        $tome5->setPhoto($photo7);
        $this->addReference(self::TOME_REFERENCE.'5', $tome5);
        $manager->persist($tome5);

        $tome6 = new Tomes();
        $tome6->setManga($manga1);
        $tome6->setNumber(32);
        $tome6->setTitle('A ton tour!');
        $tome6->setSummary(' Bientôt dipsonible');
        $tome6->setRelDate(new \DateTime('2022-04-07'));
        $tome6->setPhoto($photo10);
        $manager->persist($tome6);

        /********* Utilisateurs ********/

        $admin = new User();
        $admin->setUsername("Julene1002");
        $admin->setPassword($this->encoder->encodePassword($admin, "Arthnhoa2812"));
        $admin->setEmail("julene.delvaux@gmail.com");
        $admin->setRoles(["ROLE_ADMIN"]);
        $this->addReference(self::USER_REFERENCE.'3', $admin);
        $admin->addMyBook($this->getReference('tome-1'));
        $admin->addMyBook($this->getReference('tome-2'));
        $admin->addMyBook($this->getReference('tome-3'));

        $manager->persist($admin);

        $user1 = new User();
        $user1->setUsername("User");
        $user1->setPassword($this->encoder->encodePassword($user1, "azerty"));
        $user1->setEmail("user@fixture");
        $user1->setRoles(["ROLE_USER"]);
        $manager->persist($user1);

        $user2 = new User();
        $user2->setUsername("Bibi");
        $user2->setPassword($this->encoder->encodePassword($user2, "azerty"));
        $user2->setEmail("user2@fixture");
        $user2->setRoles(["ROLE_USER"]);
        $manager->persist($user2);

        $user3 = new User();
        $user3->setUsername("Zenitsu");
        $user3->setPassword($this->encoder->encodePassword($user3, "azerty"));
        $user3->setEmail("user3@fixture");
        $user3->setRoles(["ROLE_USER"]);
        $user3->addMyBook($this->getReference('tome-1'));
        $manager->persist($user3);

        $prof = new User();
        $prof->setUsername("Jona");
        $prof->setPassword($this->encoder->encodePassword($user3, "azerty"));
        $prof->setEmail("prof@fixture");
        $prof->setRoles(["ROLE_ADMIN"]);
        $prof->addMyBook($this->getReference('tome-1'));
        $prof->addMyBook($this->getReference('tome-2'));
        $prof->addMyBook($this->getReference('tome-3'));
        $manager->persist($prof);


        /********* Messages ********/

        $message1 = new Message();
        $message1->setTitle('My Hero Academia');
        $message1->setContent('il y a une erreur dans la photo de couverture');
        $message1->setCategory($categories_message[3]);
        $manager->persist($message1);

        $message2 = new Message();
        $message2->setTitle('Assassinate CLassroom');
        $message2->setContent('Je ne retrouve pas ce manga . C\'est possible de l\'ajouter?');
        $message2->setCategory($categories_message[0]);
        $manager->persist($message2);

        $message3 = new Message();
        $message3->setTitle('Bleach');
        $message3->setContent('Il manque 2 tomes dans la liste');
        $message3->setCategory($categories_message[1]);
        $manager->persist($message3);

        $message4 = new Message();
        $message4->setTitle('COnnexion');
        $message4->setContent('Je n\'arrive pas à me connecter');
        $message4->setCategory($categories_message[2]);
        $manager->persist($message4);

        $message5 = new Message();
        $message5->setTitle('Elfen Lied');
        $message5->setContent('Les informations ne sont pas affichés');
        $message5->setCategory($categories_message[4]);
        $manager->persist($message5);

        $message6 = new Message();
        $message6->setTitle('Elfen Lied');
        $message6->setContent('Il y a un problème avec celui-ci. Rien ne s\'affiche');
        $message6->setCategory($categories_message[4]);
        $manager->persist($message6);

        $message7 = new Message();
        $message7->setTitle('One piece');
        $message7->setContent('Il manque le tome 7, le tome 19 et le tome 44');
        $message7->setCategory($categories_message[1]);
        $manager->persist($message7);

        $message8 = new Message();
        $message8->setTitle('Shugo Chara');
        $message8->setContent('Je ne retrouve pas ce manga. C\'est possible de l\'ajouter?');
        $message8->setCategory($categories_message[0]);
        $manager->persist($message8);

        $message9 = new Message();
        $message9->setTitle('Ma collection');
        $message9->setContent('Je veux rajouter des manga dans ma collection, mais je n\'y arrive pas');
        $message9->setCategory($categories_message[2]);
        $manager->persist($message9);

        $message10 = new Message();
        $message10->setTitle('Letter Bee');
        $message10->setContent('Pourquoi sa photo de couverture ne correspond pas au manga?');
        $message10->setCategory($categories_message[3]);
        $manager->persist($message10);

        $message11 = new Message();
        $message11->setTitle('Inscription');
        $message11->setContent('Il y a un problème avec l\'inscription');
        $message11->setCategory($categories_message[2]);
        $manager->persist($message11);

        /********* Comment ********/

        $comment1 = new Comment();
        $comment1->setManga($manga1);
        $comment1->setUser($admin);
        $comment1->setDate(new \DateTime());
        $comment1->setMessage('Ce Manga est génial!');
        $manager->persist($comment1);

        $comment2 = new Comment();
        $comment2->setManga($manga1);
        $comment2->setUser($user1);
        $comment2->setDate(new \DateTime());
        $comment2->setMessage('QUand sort le dernier tome?');
        $manager->persist($comment2);

        $comment3 = new Comment();
        $comment3->setManga($manga2);
        $comment3->setUser($user2);
        $comment3->setDate(new \DateTime());
        $comment3->setMessage('Les personnages sont trop! J\'adore Ichigo et Rukia');
        $manager->persist($comment3);

        $comment4 = new Comment();
        $comment4->setManga($manga3);
        $comment4->setUser($user3);
        $comment4->setDate(new \DateTime());
        $comment4->setMessage('Je l\'adore!');
        $manager->persist($comment4);

        $comment5 = new Comment();
        $comment5->setManga($manga2);
        $comment5->setUser($admin);
        $comment5->setDate(new \DateTime());
        $comment5->setMessage('Pour les prochains tomes, vous pouvez aller voir dans les prochaines sorties');
        $manager->persist($comment5);

        $comment6 = new Comment();
        $comment6->setManga($manga3);
        $comment6->setUser($user2);
        $comment6->setDate(new \DateTime());
        $comment6->setMessage('Tellement mignon!');
        $manager->persist($comment6);

        $comment7 = new Comment();
        $comment7->setManga($manga3);
        $comment7->setUser($admin);
        $comment7->setDate(new \DateTime());
        $comment7->setMessage('Il est super, je l\'ai d\'ailleurs dans ma collection');
        $manager->persist($comment7);

        $comment8 = new Comment();
        $comment8->setManga($manga3);
        $comment8->setUser($user2);
        $comment8->setDate(new \DateTime());
        $comment8->setMessage('J\'adore celui-là! Vraiment trop romantique!');
        $manager->persist($comment8);

        $comment9 = new Comment();
        $comment9->setManga($manga4);
        $comment9->setUser($user2);
        $comment9->setDate(new \DateTime());
        $comment9->setMessage('Ce manga est vraiment top! Mais pas pour les enfants!');
        $manager->persist($comment9);

        $comment10 = new Comment();
        $comment10->setManga($manga1);
        $comment10->setUser($user3);
        $comment10->setDate(new \DateTime());
        $comment10->setMessage('J\'ai hâte d\'avoir le prochain dans ma collection');
        $manager->persist($comment10);

        $comment11 = new Comment();
        $comment11->setManga($manga2);
        $comment11->setUser($user1);
        $comment11->setDate(new \DateTime());
        $comment11->setMessage('Il y a trop de personnage trop cool! Je ne saurais pas dire mon préféré');
        $manager->persist($comment11);

        $comment12 = new Comment();
        $comment12->setManga($manga4);
        $comment12->setUser($admin);
        $comment12->setDate(new \DateTime());
        $comment12->setMessage('Ce manga est particulier, ce n\'est pas pour tout le monde');
        $manager->persist($comment12);

        /********* Collection **********/


            $manager->flush();
    }
}
