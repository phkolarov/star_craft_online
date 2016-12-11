<?php

namespace AppBundle\Form;

use AppBundle\DTO\RegisterUserBindingModel;
use DataBundle\Entity\Players;
use DataBundle\Entity\Test;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', EmailType::class, [
            'attr' => ['class' => 'form-control', 'placeholder' => 'Email']
        ]);
        $builder->add('name', TextType::class, [
            'attr' => ['class' => 'form-control', 'placeholder' => 'Потребителско име']
        ]);
        $builder->add('raceId', ChoiceType::class, [
            'choices' => array( 'ТЕРАН' => 1, 'ПРОТОС' => 2 , 'ЗЕРГ'=> 3),
            'attr' => ['class' => 'form-control', 'placeholder' => 'Раса']
        ]);


        $builder->add('password', RepeatedType::class, array(
            'type' => PasswordType::class,
            'options' => array('attr' => array('class' => 'password-field form-control','placeholder' =>'Парола')),
            'required' => true,
            'first_options'  => array('label' => 'Парола', 'label_attr'=> [ 'class' => 'control-label'], 'invalid_message' => 'Паролите не съвпадат.'),
            'second_options' => array('label' => 'Повтори парола','label_attr'=> [ 'class' => 'control-label']),
            'invalid_message' => 'Паролите не съвпадат.'
        ));
        $builder->setMethod('POST');
        $builder->setAction('register');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class'=> RegisterUserBindingModel::class]);
    }

    public function getName()
    {
        return 'app_bundle_register_user_type';
    }
}
