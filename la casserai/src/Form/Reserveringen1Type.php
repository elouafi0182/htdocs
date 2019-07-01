<?php

namespace App\Form;

use App\Entity\Reserveringen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Reserveringen1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('checkinDate')
            ->add('checkoutDate')
            ->add('betaalid')
            ->add('betaalmethode')
            ->add('room_id')
            ->add('user_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reserveringen::class,
        ]);
    }
}
