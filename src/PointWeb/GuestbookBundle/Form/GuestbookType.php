<?php

namespace PointWeb\GuestbookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GuestbookType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array(
                "label" => "Nom* :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'control-label'),
                'required' => true,
            ))
            ->add('firstname', 'text', array(
                'required' => false,
                "label" => "Prénom :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'control-label'),
            ))
            ->add('email', 'text', array(
                'required' => true,
                "label" => "Email* :",
                'required' => true,
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'control-label'),
            ))

            ->add('comment', 'textarea', array(
                "label" => "Commentaire* :",
                'required' => true,
                'attr' => array('class' => 'tinymce form-control'),
                'label_attr' => array('class' => 'control-label'),
            ))
            ->add('notation', 'number', array(
                'required' => true,
                "label" => "Notation* :",
                'attr' => array(
                    'class' => 'form-control rating',
                    'min' => '0',
                    'max' => '5',
                    'step' => '1',
                    'data-size' => 'sm'
                ),
                'label_attr' => array('class' => 'control-label'),
            ));
        if ($options['back']) {
            $builder

                ->add('online', 'choice', array(
                    'label' => 'En ligne ?',
                    'required' => false,
                    'placeholder' => false,
                    'choices' => array(
                        '1' => 'Oui',
                        '0' => 'Non'
                    ),
                    'data' => '0',
                    'multiple' => false,
                    'expanded' => true,
                    'attr' => array('class' => 'radio'),
                    'label_attr' => array('class' => 'control-label'),
                ));
        }

    }


    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PointWeb\GuestbookBundle\Entity\Guestbook',
            'back' => false
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pointweb_guestbookbundle_guestbook';
    }
}
