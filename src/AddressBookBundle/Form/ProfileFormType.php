<?php

namespace AddressBookBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{

    public function getName()
    {
        return 'app_user_profile';
    }

    public function getParent()
    {
        return 'fos_user_profile';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('addresse')
            ->add('telephone')
            ->add('siteweb');
        ;
    }
}