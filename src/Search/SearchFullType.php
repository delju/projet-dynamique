<?php

namespace App\Search;

use App\Entity\Classification;
use App\Entity\Editor;
use App\Entity\Genre;
use App\Entity\Statut;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchFullType extends SearchType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('statuts', EntityType::class, ['class'=>Statut::class, 'multiple' => true, 'expanded'=>true])
            ->add('genres', EntityType::class, ['class'=>Genre::class,'multiple' => true, 'expanded' => true])
            ->add('editors', EntityType::class, ['class'=>Editor::class])
            ->add('classifications', EntityType::class, ['class'=>Classification::class,'multiple' => true, 'expanded' =>true])
            ->add('animes', CheckboxType::class, ['label' => 'Oui'])
        ;
    }


}
