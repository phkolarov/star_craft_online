<?php

namespace AppBundle\Form;

use AppBundle\DTO\LoginUserBindingModel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class LoginUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('username',TextType::class,[
            'label' => 'Username',
            'attr' =>['class'=>'form-control', 'placeholder' => 'Потребителско име']
        ]);

        $builder->add('password',PasswordType::class,[
            'label' => 'Password',
            'attr' =>['class'=>'form-control','placeholder' => 'Парола']
        ]);
        $builder->setMethod('POST');

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class'=> LoginUserBindingModel::class]);
    }

    public function getName()
    {
        return 'app_bundle_login_user_type';
    }
}
