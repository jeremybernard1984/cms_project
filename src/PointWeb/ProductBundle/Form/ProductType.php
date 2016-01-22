<?php

namespace PointWeb\ProductBundle\Form;

use PointWeb\AdminBundle\Form\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder


            ->add('product_category', 'entity', array(
                'class' => 'PointWebProductBundle:ProductCategory',
                'property' => 'title',
                'empty_value' => 'Catégorie',
                'label' => 'Choix de la catégorie :',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
                'query_builder' => function($er) {
                    return $er->createQueryBuilder('c')
                        ->where("c.lvl != 0")
                        ->orderBy('c.root', 'ASC')
                        ->addOrderBy('c.lft', 'ASC');
                }
            ))
            ->add('title', 'text', array(
                "label" => "Titre * :",
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('urlLink', 'url', array(
                "label" => "Lien vidéo :",
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('reference', 'text', array(
                "label" => "Référence :",
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('price', 'money', array(
                'currency' => false,
                'precision' => 2,
                'required' => false,
                "label" => "Prix :",
                'required' => false,
                'attr' => array('class' => 'form-control form-price','min' => '0','step' => '0.01','pattern' => '[0-9]+([\,|\.][0-9]+)?'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('promotionPrice', 'money', array(
                'currency' => false,
                'precision' => 2,
                'required' => false,
                "label" => "Prix promo :",
                'attr' => array('class' => 'form-control form-price','min' => '0','step' => '0.01','pattern' => '[0-9]+([\,|\.][0-9]+)?'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('resum', 'textarea', array(
                "label" => "Résumé :",
                'required' => false,
                'attr' => array('class' => 'ckeditor form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('description', 'textarea', array(
                "label" => "Description :",
                'required' => false,
                'attr' => array('class' => 'ckeditor form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))

            ->add('online', 'choice', array(
                'label' => 'En ligne ?',
                'required' => false,
                'placeholder' => false,
                'choices' => array(
                    '1' => 'Oui',
                    '0' => 'Non'
                ),
                'data' => '1',
                'multiple' => false,
                'expanded' => true,
                'attr' => array('class' => 'radio'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('layout', 'choice', array(
                'label' => 'Position des images',
                'required' => false,
                'placeholder' => false,
                'choices' => array(
                    '0' => 'Cacher',
                    '1' => 'slider',
                    '2' => 'Images',
                ),
                'multiple' => false,
                'expanded' => true,
                'attr' => array('class' => 'radio'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('promotionStartDate', 'date', array(
                'label' => "Date de début de la promotion :",
                'widget' => 'single_text',
                'input' => 'datetime',
                'required' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => array('class' => 'form-control date_picker'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('promotionEndDate', 'date', array(
                'label' => "Date de fin de la promotion :",
                'widget' => 'single_text',
                'input' => 'datetime',
                'required' => false,
                'format' => 'dd/MM/yyyy',
                'attr' => array('class' => 'form-control date_picker'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
            ))
            ->add('position', 'integer', array(
                "label" => "Position :",
                'attr' => array('class' => 'form-control','min' => '0'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
                'required' => false,
            ))
            ->add('pictures', 'collection', array(
                'label' => 'Images',
                'type' => new FileType(),
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'required' => false
            ))
            ->add('position', 'integer', array(
                "label" => "Position :",
                'attr' => array('class' => 'form-control','min' => '0'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
                'required' => false,
            ))
        ;


        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PointWeb\ProductBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pointweb_productbundle_product';
    }
}
