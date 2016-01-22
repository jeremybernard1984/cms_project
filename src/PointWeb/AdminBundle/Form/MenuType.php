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
    private $levels;
    private $select_routes;
    private $em;
    private $pathId;

    public function __construct($levels,$select_routes,$em,$pathId,$pathTitle)
    {
        $this->levels = $levels;
        $this->select_routes = $select_routes;
        $this->em = $em;
        $this->pathId = $pathId;
        $this->pathTitle = $pathTitle;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
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
                    $levels = $this->levels ;
                    if ($levels){
                        return $er->createQueryBuilder('c')
                            ->where("c.id NOT IN(:val)")
                            ->setParameter('val', $levels) // liste des id a ne pas afficher
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
                "label" => "Choix de la route * :",
                'choices'=>$this->select_routes,
                'attr' => array('class' => 'form-control'),
                'label_attr' => array('class' => 'col-lg-2 control-label'),
                'empty_value' => 'Sélectionner une "route"',
            ))
            ->add('pathId','choice',array(
                'multiple'=>false,
                "label" => false,
                'attr' => array('class' => 'form-control'),
                'choices' => array($this->pathId => $this->pathId.': '.$this->pathTitle),
                'empty_value' => 'Sélectionner une "cible"',
                'required' => false,
            ))
            ->add('pathTitle', 'hidden', array(
                "label" => false,
                'required' => false,
                'data' => $this->pathTitle
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
            ->add('main_menu', 'choice', array(
                'label' => 'Visble dans le menu principal En ligne ?',
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
        $pathPathId = function(FormInterface $form, $entitySelect) {
        //var_dump($entitySelect);die;
            if($entitySelect){
                // dabors si $entitySelect contient '_of',
                // je rajoute 'Category' a ma chaine à la fin
                if(preg_match("/_of/", $entitySelect)){
                    $category = 'Category';
                }else{
                    $category = '';
                }

                //Je vérifie que ce n'est pas un _all
                if(preg_match("/all_/", $entitySelect)){
                    //si ce all contient "ies" je transforme en "y" pour collé au nom de l'entité
                    $entitySelect = str_replace('all_', '', $entitySelect);
                    $entitySelect = str_replace('ies', 'y', $entitySelect); // pour galleries
                        $derniereLettre = $entitySelect{strlen($entitySelect)-1}; // Verif si derniere lettre est un s
                        if($derniereLettre == "s" and !preg_match("/news/", $entitySelect)){
                            $entitySelect = substr($entitySelect,0,-1);
                        }
                    $entitySelect = ucfirst($entitySelect);
                }else{
                    // Je supprime tous apres le underscore puis 1ere lettre en CAP = 'Entity' en cours
                    $supprAndCap = preg_replace( '/_.*/', '' ,$entitySelect) ;
                    $entitySelect = ucfirst($supprAndCap);
                }
                $entitySelect = 'PointWeb'.$entitySelect.'Bundle:'.$entitySelect.$category;
                $req = $this->em->getRepository($entitySelect)->findAll();
                if ($req) {
                    $choices = array();
                    foreach($req as $p) {
                        $choices[$p->getId()] = $p->getTitle();
                    }
                }
            }else{
                $choices = array($this->pathId => $this->pathTitle);
                //$form->add('pathId','choice',array('choices' => array($this->pathId => $this->pathId)));
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