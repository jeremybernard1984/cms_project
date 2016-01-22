<?php

namespace PointWeb\AdminBundle\Form;

use PointWeb\AdminBundle\Form\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use PointWeb\AdminBundle\Entity\MenuRepository;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class MenuType extends AbstractType
{
    private $values;
    private $select_routes;
    private $em;

    public function __construct($values,$select_routes,$em)
    {
        $this->values = $values;
        $this->select_routes = $select_routes;
        //$this->rempli_pathid = $rempli_pathid;
        $this->em = $em;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $values = $this->values ;
        $select_routes = $this->select_routes;
        //$rempli_pathid = $this->rempli_pathid;
        //var_dump($rempli_pathid);


        $builder
            ->add('parent', 'entity', array(
                'class' => 'PointWebAdminBundle:Menu',
                'empty_value' => 'Sélectionner le niveau',
                'label' => 'Menu parent * :',
                'label_attr' => array('class' => 'col-lg-2 control-label'),
                'required' => true,
                'attr' => array('class' => 'select_cat form-control'),
                'property' => 'indentedTitle',

                'query_builder' => function($er) {
                    $values = $this->values ;
                    if ($values){
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

            ->add('path','choice',array(
                'multiple'=>false,
                "label" => "Path * :",
                'choices'=>$this->select_routes,
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label path'),
                'empty_value' => 'Sélectionner la route',
            ))
            ->add('pathId','choice',array(
                'multiple'=>false,
                "label" => false,
                'attr' => array('class' => 'form-control'),
                'empty_value' => 'Sélectionner un "path"',
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
        $pathPathId = function(FormInterface $form) {
            $req = $this->em->getRepository('PointWebAdminBundle:Menu')->findAll();
            if ($req) {
                $choices = array();
                foreach($req as $p) {
                    $choices[$p->getId()] = $p->getTitle();
                }
            } else {
                $choices = null;
            }
            $form->add('pathId','choice',array('choices' => $choices));
        };
        $builder->get('path')->addEventListener(FormEvents::POST_SUBMIT,
            function(FormEvent $event) use ($pathPathId) {
            $pathPathId($event->getForm()->getParent(),$event->getForm()->getData());
        });




    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PointWeb\AdminBundle\Entity\Menu'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pointweb_adminbundle_menu';
    }
}