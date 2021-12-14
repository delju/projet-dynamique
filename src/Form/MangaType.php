<?php

namespace App\Form;

use App\Entity\Author;
use App\Entity\Classification;
use App\Entity\Editor;
use App\Entity\Genre;
use App\Entity\Manga;
use App\Entity\Statut;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;

class MangaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('originalTitle', null, ['label'=>'Titre Original'])
            ->add('frenchTitle', null, ['label' =>'Titre Français'])
            ->add('author', EntityType::class, ['label'=>'Auteur', 'class' => Author::class])
             ->add('editor', EntityType::class, ['label'=>'Editeur','class'=> Editor::class])
            ->add('genre', EntityType::class, ['label'=>'Genre','class'=>Genre::class])
            ->add('classification', EntityType::class, ['label'=>'Classification','class'=> Classification::class])
            ->add('summary', TextareaType::class, ['label'=>'Résumé'])
            ->add('anime')
            ->add('statut', EntityType::class, ['label'=>'Statut', 'class'=> Statut::class])
            ->add('photo', PhotoType::class)
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Manga::class,
        ]);
    }
}
