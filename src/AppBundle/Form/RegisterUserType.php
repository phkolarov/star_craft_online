<?php

namespace AppBundle\Form;

use AppBundle\DTO\RegisterUserBindingModel;
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
        $builder->add('username', TextType::class, [
            'attr' => ['class' => 'form-control', 'placeholder' => 'Потребителско име']
        ]);
        $builder->add('race', ChoiceType::class, [
            'choices' => array('Избери раса'=>'','ТЕРАН' => 1, 'ПРОТОС' => 2 , 'ЗЕРГ'=> 3),
            'attr' => ['class' => 'form-control', 'placeholder' => 'Раса']
        ]);


        $builder->add('password', RepeatedType::class, array(
            'type' => PasswordType::class,
            'invalid_message' => 'Паролите не съвпадат.',
            'options' => array('attr' => array('class' => 'password-field form-control')),
            'required' => true,
            'first_options'  => array('label' => 'Парола', 'label_attr'=> [ 'class' => 'control-label']),
            'second_options' => array('label' => 'Повтори парола','label_attr'=> [ 'class' => 'control-label']),
        ));
        $builder->setMethod('POST');
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
