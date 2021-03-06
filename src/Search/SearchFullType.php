<?php

namespace App\Search;

use App\Search\Search;
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
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchFullType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('keyword', null, ['label' => 'Recherche', 'required' => false])
            ->add('statuts', EntityType::class, ['class'=>Statut::class,  'multiple' => true, 'expanded'=>true])
            ->add('genres', EntityType::class, ['class'=>Genre::class, 'required'=> false, 'multiple' => true, 'expanded' => true])
            ->add('editors', EntityType::class, ['class'=>Editor::class, 'required'=> false])
            ->add('classifications', EntityType::class, ['class'=>Classification::class, 'required'=> false, 'multiple' => true, 'expanded' =>true])
            ->add('animes', CheckboxType::class, ['label' => 'Oui', 'required'=> false])
            ->add('submit', SubmitType::class, ['label' => 'Rechercher'])
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'method' => 'GET',
            'csrf_protection'=> false,
            'data_class' => Search::class,
        ]);
    }

    //détermine le préfix
    public function getBlockPrefix()
    {
        return '';
    }

}
