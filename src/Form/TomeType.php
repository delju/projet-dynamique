<?php

namespace App\Form;

use App\Entity\Manga;
use App\Entity\Tomes;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;

class TomeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('manga', EntityType::class, ['class' =>Manga::class])
            ->add('number', null ,['label'=>'Numéro'])
            ->add('title', null, ['label'=>'Titre' ])
            ->add('summary', null, ['label'=>'Résumé' ])
            ->add('rel_date', DateType::class, ['label'=>'Date de sortie' ])
            ->add('photo', PhotoType::class)
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tomes::class,
        ]);
    }
}
