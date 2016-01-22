<?php

namespace PointWeb\MapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class mapType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('title', 'text', array(
                "label" => "Titre * :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('code', 'textarea', array(
                "label" => "Code d'intégration * :",
                'required' => false,
                'attr' => array('class' => 'form-control','placeholder' => "<iframe src='https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22262.34021431216!2d4.85473065!3d45.77534805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1452005871305' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>"),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('description', 'textarea', array(
                "label" => "Description :",
                'required' => false,
                'attr' => array('class' => 'ckeditor form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('position', 'integer', array(
                "label" => "Position :",
                'attr' => array('class' => 'form-control','min' => '0'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
                'required' => false,
            ))
            ->add('online', 'choice', array(
                'label' => 'En ligne ?',
                'required' => false,
                'placeholder' => false,
                'choices' => array(
                    '1' => 'Oui',
                    '0' => 'Non'
                ),
                //'data' => '0',
                'multiple' => false,
                'expanded' => true,
                'attr' => array('class' => 'radio'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
           ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PointWeb\MapBundle\Entity\map'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pointweb_mapbundle_map';
    }
}
