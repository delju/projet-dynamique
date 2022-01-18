<?php

namespace App\Search;

use App\Search\Search;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('keyword', null, ['label'=>'Recherche']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'method' => 'GET',
            'csrf_protection'=> false,
            'data_class' => Search::class,
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }

}
