<?php

namespace gestCont\UserBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->buildUserForm($builder, $options);
       
    }
     public function getParent()
    {
        return 'fos_user_profile';
    }

    public function getName()
    {
        return 'gestCont_user_profile';
    }
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adresse', null, array('label' => 'Adresse', 'translation_domain' => 'FOSUserBundle'))
            ->add('telephone', null, array('label' => 'Telephone', 'translation_domain' => 'FOSUserBundle'))  
            ->add('site', null, array('label' => 'Site Web', 'translation_domain' => 'FOSUserBundle'))
        ;
    }
}


