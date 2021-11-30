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
            ->add('originalTitle')
            ->add('frenchTitle')
            ->add('author', EntityType::class, ['class' => Author::class])
//                ->add('Editor', EntityType::class, ['class'=> Editor::class])
            ->add('genre', EntityType::class, ['class'=>Genre::class])
            ->add('classification', EntityType::class, ['class'=> Classification::class])
            ->add('summary', TextareaType::class)
            ->add('anime')
            ->add('statut', EntityType::class, ['class'=> Statut::class])
            ->add('image', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new Image([
                        'maxSize' => '1024k'
                    ])
                ],
            ])
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
