<?php

namespace App\Search;

use App\Entity\Classification;
use App\Entity\Editor;
use App\Entity\Genre;
use App\Entity\Statut;
use App\Search\Search;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchFullType extends SearchType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('keyword')
            ->add('statuts', EntityType::class, ['class'=>Statut::class])
            ->add('genres', EntityType::class, ['class'=>Genre::class, 'expanded' => true])
            ->add('editors', EntityType::class, ['class'=>Editor::class])
            ->add('classifications', EntityType::class, ['class'=>Classification::class, 'expanded' =>true])
            ->add('animes', CheckboxType::class, ['label' => 'Oui'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Search::class,
        ]);
    }
}
