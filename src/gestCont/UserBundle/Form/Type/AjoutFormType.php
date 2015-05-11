<?php

 namespace gestCont\UserBundle\Form\Type;
 use Symfony\Component\Form\AbstractType;
 use Symfony\Component\Form\FormBuilderInterface;
 
class AjoutFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('adresse');
         $builder->add('telephone');
         $builder->add('site');
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'gestCont_user_registration';
    }
}