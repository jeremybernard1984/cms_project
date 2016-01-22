<?php

namespace PointWeb\ProductBundle\Form;

use PointWeb\AdminBundle\Form\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use PointWeb\ProductBundle\Entity\ProductCategoryRepository;

class ProductCategoryType extends AbstractType
{
    public function __construct($values)
    {
        //var_dump($values);
        $this->values = $values;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $values = $this->values ;

        $builder
            ->add('parent', 'entity', array(
                'class' => 'PointWebProductBundle:ProductCategory',
                'empty_value' => 'Sélectionner',
                'label' => 'Menu parent * :',
                'label_attr' => array('class' => 'col-lg-2 control-label'),
                'required' => true,
                'attr' => array('class' => 'select_cat form-control'),
                'property' => 'indentedTitle',
                /*'label_attr' => array('class' => 'col-lg-2 control-label'),
                   'query_builder' => function(\Gedmo\Tree\Entity\Repository\NestedTreeRepository $er)  use ($values) {
                       return $er->getSelectList($values);
               },*/
               'query_builder' => function($er) {
                   $values = $this->values ;
                   if ($values){
                      /* return $er->createQueryBuilder('c')
                           ->where('c.id != :val0')
                           ->andwhere('c.lvl <= :val3 AND c.parent = :val0')
                           ->orwhere('c.root = :val1')
                           ->setParameter('val0', $values[0]) // id
                           ->setParameter('val1', $values[1]) // root
                           //->setParameter('val2', $values[2]) // parent
                           ->setParameter('val3', $values[3]) // level
                           ->orderBy('c.root', 'ASC')
                           ->addOrderBy('c.lft', 'ASC');
                       //$er->getDQL();die;
                      */
                       return $er->createQueryBuilder('c')
                           ->where("c.id NOT IN(:val)")
                           ->setParameter('val', $values) // liste des id a ne pas afficher
                           ->orderBy('c.root', 'ASC')
                           ->addOrderBy('c.lft', 'ASC');
                   }else{
                       return $er->createQueryBuilder('c')
                           ->orderBy('c.root', 'ASC')
                           ->addOrderBy('c.lft', 'ASC');
                   }

               },

            ))

            ->add('title', 'text', array(
                "label" => "Titre * :",
                'attr' => array('class' => 'form-control'),
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

            ->add('pictures', 'collection', array(
                'label' => 'Images',
                'type' => new FileType(),
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'required' => false
            ))


        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PointWeb\ProductBundle\Entity\ProductCategory'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pointweb_productbundle_product_category';
    }
}
