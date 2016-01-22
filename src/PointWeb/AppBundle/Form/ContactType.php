<?php

namespace PointWeb\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastname', 'text', array(
                "label" => "Nom* :",
                'attr' => array('class' => 'form-control', 'placeholder' => 'Entrer votre nom'),
                'label_attr' => array('class' => 'control-label'),
                'required' => true,
            ))
            ->add('firstname', 'text', array(
                "label" => "Prénom :",
                'attr' => array('class' => 'form-control', 'placeholder' => 'Entrer votre prénom'),
                'label_attr' => array('class' => 'control-label'),
                'required' => false,
            ))
            ->add('phone', 'text', array(
                "label" => "Téléphone :",
                'attr' => array('class' => 'form-control', 'placeholder' => 'Entrer votre numéro de téléphone'),
                'label_attr' => array('class' => 'control-label'),
                'required' => false,
            ))
            ->add('email', 'text', array(
                "label" => "Email* :",
                'attr' => array('class' => 'form-control', 'placeholder' => 'Entrer votre email'),
                'label_attr' => array('class' => 'control-label'),
                'required' => true,
            ))
            ->add('address', 'text', array(
                "label" => "Adresse :",
                'attr' => array('class' => 'form-control', 'placeholder' => 'Entrer votre adresse'),
                'label_attr' => array('class' => 'control-label'),
                'required' => false,
            ))
            ->add('zipCode', 'text', array(
                "label" => "Code postal :",
                'attr' => array('class' => 'form-control', 'placeholder' => 'Entrer votre code postal'),
                'label_attr' => array('class' => 'control-label'),
                'required' => false,
            ))
            ->add('city', 'text', array(
                "label" => "Ville :",
                'attr' => array('class' => 'form-control', 'placeholder' => 'Entrer votre ville'),
                'label_attr' => array('class' => 'control-label'),
                'required' => false,
            ))
            ->add('message', 'textarea', array(
                "label" => "Message* :",
                'required' => true,
                'attr' => array('class' => 'form-control', 'rows' => '6'),
                'label_attr' => array('class' => 'control-label'),
            ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PointWeb\AppBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pointweb_appbundle_contact';
    }
}
