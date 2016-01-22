<?php

namespace PointWeb\AdminBundle\Form;

use PointWeb\AdminBundle\Form\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReglageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('backgroundStyle', 'choice', array(
                'label' => "Couleur de l'administration :",
                'required' => false,
                'placeholder' => false,
                'choices' => array(
                    // http://www.lavishbootstrap.com
                    '0' => 'Normal',
                    '1' => 'Style 1 : Marron, bleu',
                    '2' => 'Style 2 : Fushia',
                    '3' => 'Style 3 : Marron, rose',
                    '4' => 'Style 4 : Bleu, gris',
                    '5' => 'Style 5 : Rose, violet',
                    '6' => 'Style 6 : Vert, bleu'
                ),
                'multiple' => false,
                'expanded' => true,
                'attr' => array('class' => 'radio'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('logo', new ImageType(), array(
                'label' => 'Logo :',
                'required' => false,
                'label_attr' => array('class' => 'col-lg-2 control-label')
            ))
            ->add('clientName', 'text', array(
                "label" => "Nom de l'entreprise * :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('facebookLink', 'text', array(
                "label" => "Lien facebook :",
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('googleplusLink', 'text', array(
                "label" => "Lien Google Plus :",
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('metadescription', 'textarea', array(
                "label" => "Méta description :",
                'required' => false,
                'attr' => array('class' => 'tinymce form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('keyword', 'textarea', array(
                "label" => "Keywords :",
                'required' => false,
                'attr' => array('class' => 'tinymce form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('googleanalitics', 'textarea', array(
                "label" => "Google Analytics :",
                'required' => false,
                'attr' => array('class' => 'tinymce form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('menuProduct', 'checkbox', array('required' => false,))
            ->add('menuNews', 'checkbox', array('required' => false,))
            ->add('menuPartner', 'checkbox', array('required' => false,))
            ->add('menuGuestBook', 'checkbox', array('required' => false,))
            ->add('menuFaq', 'checkbox', array('required' => false,))
            ->add('menuGallery', 'checkbox', array('required' => false,))
            ->add('menuFolder', 'checkbox', array('required' => false,))
            ->add('menuMap', 'checkbox', array('required' => false,))
            ->add('menuPage', 'checkbox', array('required' => false,))
;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PointWeb\AdminBundle\Entity\Reglage'
        ));
    }
}
