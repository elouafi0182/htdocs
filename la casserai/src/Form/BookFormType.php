<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Reservation;
class BookFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('checkin', DateType::class ,['widget' => 'single_text', 'attr' => ['class' => 'js-datepicker form', 'min' => date('Y-m-d')]])
        ->add('checkOut', DateType::class ,['widget' => 'single_text', 'attr' => ['class' => 'js-datepicker form', 'min' => date('Y-m-d')]])
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}