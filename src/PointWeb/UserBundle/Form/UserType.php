<?php

namespace PointWeb\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use PointWeb\AdminBundle\Form\ImageType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder
            ->add('username', 'text', array(
                "label" => "Nom d'utilisateur :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('image', new ImageType(), array(
                'label' => 'Avatar :',
                'required' => false,
                'label_attr' => array('class' => 'col-lg-2 control-label')
            ))
            ->add('firstName', 'text', array(
                "label" => "Prénom :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('lastName', 'text', array(
                "label" => "Nom :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('email', 'text', array(
                "label" => "Email :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('password', 'repeated', array(
                'type' => 'password',
                'invalid_message' => 'Les mots de passe ne correspondent pas',
                'first_options' => array(
                    'label' => 'Mot de passe',
                    'attr' => array('class' => 'form-control'),
                    'label_attr' => array('class' => 'col-lg-2 control-label')
                ),
                'second_options' => array(
                    'label' => 'Mot de passe (validation)',
                    'attr' => array('class' => 'form-control'),
                    'label_attr' => array('class' => 'col-lg-2 control-label')
                )
            ))
            ->add('roles', 'choice', array(
                'label' => 'Roles :',
                'choices' => array(
                    'ROLE_SUPER_ADMIN' => 'Super Admin',
                    'ROLE_ADMIN' => 'Admin',
                    'ROLE_USER' => 'Utilisateur',
                ),
                'multiple' => true,
                'expanded' => true,
                'attr' => array('class' => 'checkbox'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('enabled', 'choice', array(
                'label' => 'Actif ?',
                'required' => false,
                'placeholder' => false,
                'choices' => array(
                    '1' => 'Oui',
                    '0' => 'Non'
                ),
                'multiple' => false,
                'expanded' => true,
                'attr' => array('class' => 'radio'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PointWeb\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pointweb_userbundle_user';
    }
}
