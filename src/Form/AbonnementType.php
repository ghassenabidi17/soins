<?php

namespace App\Form;

use App\Entity\Abonnement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomprenom')
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices' => [
                    'male' => 'male',
                    'female' => 'female',
                    
                ],
                'expanded' => false,
                'multiple' => false,
            ])
            ->add('age')
            ->add('nbplace')
            ->add('idKine')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Abonnement::class,
        ]);
    }
}
