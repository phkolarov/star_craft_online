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

        $builder->setAction('security_login');
        $builder->add('username',TextType::class,[
            'label' => 'username',
            'attr' =>['class'=>'form-control', 'placeholder' => 'Потребителско име']
        ]);

        $builder->add('password',PasswordType::class,[
            'label' => 'password',
            'attr' =>['class'=>'form-control','placeholder' => 'Парола']
        ]);
        $builder->setMethod('POST');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class'=> 'DataBundle\Entity\Players']);
    }

    public function getName()
    {
        return 'app_bundle_login_user_type';
    }
}
