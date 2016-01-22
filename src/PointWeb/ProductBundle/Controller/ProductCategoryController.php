<?php

namespace PointWeb\ProductBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Collections\ArrayCollection;
use PointWeb\ProductBundle\Entity\ProductCategory;
use PointWeb\ProductBundle\Form\ProductCategoryType;

/**
 * ProductCategory controller.
 *
 */
class ProductCategoryController extends Controller
{

    /**
     * Lists all ProductCategory entities.
     *
     */
    /*public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('PointWebProductBundle:ProductCategory')->findAll(array('position' => 'ASC'));
        //$entities = $em->getRepository('PointWebProductBundle:ProductCategory')->findBy(array('parent' => null), array('position' => 'ASC'));
        // Je déclare le délete
        $deleteForms = array();
        //bt delete dans l'index
        foreach ($entities as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        return $this->render('PointWebProductBundle:ProductCategory:index.html.twig', array(
            'entities' => $entities,
            'deleteForms' => $deleteForms,
        ));
    }*/
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $doctrine = $this->container->get('doctrine');
        $repository   =  $doctrine->getRepository('PointWebProductBundle:ProductCategory');
        $entities = $repository->childrenHierarchy();
            /* VERSION DETAILLEE
            $options = array();
            // HERE IS SOLUTION
            $query = $repository
                ->createQueryBuilder('r')
                ->orderBy('r.lvl', 'ASC')
                ->getQuery();
            //$entities = $query->getResult();
            //$entities = $repository->buildTree($query->getArrayResult(), $options);
            */
        //var_dump($entities[0]['id']);die;
        $deleteForms = array();
        $pictures = array();
        $selectAll = $em->getRepository('PointWebProductBundle:ProductCategory')->findAll();
        foreach ($selectAll as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
            $pictures[$entity->getId()] = $entity->getPictures();
        }
        return $this->render('PointWebProductBundle:ProductCategory:index.html.twig', array(
            'entities' => $entities,
            'deleteForms' => $deleteForms,
            'pictures' => $pictures,
        ));
    }
    /**
     * Creates a new ProductCategory entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ProductCategory('');
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Enregistrement réussie !');
            return $this->redirect($this->generateUrl('admin_product_category'));
        }

        return $this->render('PointWebProductBundle:ProductCategory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ProductCategory entity.
     *
     * @param ProductCategory $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ProductCategory $entity)
    {
        $form = $this->createForm(new ProductCategoryType(''), $entity, array(
            'action' => $this->generateUrl('admin_product_category_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit',
            array(
                'label' => 'Enregistrer',
                'attr' => array('class' => 'btn btn-success')
            ));

        return $form;
    }

    /**
     * Displays a form to create a new ProductCategory entity.
     *
     */
    public function newAction()
    {
        $entity = new ProductCategory();
        $form   = $this->createCreateForm($entity);

        return $this->render('PointWebProductBundle:ProductCategory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ProductCategory entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebProductBundle:ProductCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProductCategory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebProductBundle:ProductCategory:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ProductCategory entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebProductBundle:ProductCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProductCategory entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebProductBundle:ProductCategory:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a ProductCategory entity.
     *
     * @param ProductCategory $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(ProductCategory $entity)
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('PointWebProductBundle:ProductCategory')->findAll();
        $id_search = $entity->getId();
        foreach ($categories as $cat) {
            $levels[] = $cat->getLevel($id_search);
        }
        $values = array_filter($levels);
        //$values = array($entity->getId(),$entity->getRoot(),$entity->getParentId()->getId(),$entity->getLvl());
        $form = $this->createForm(new ProductCategoryType($values), $entity, array(
            'action' => $this->generateUrl('admin_product_category_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form
            ->add('submit', 'submit',
            array(
                'label' => 'Enregistrer',
                'attr' => array('class' => 'btn btn-success')
            ));

        return $form;
    }

    /**
     * Edits an existing ProductCategory entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebProductBundle:ProductCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProductCategory entity.');
        }

        $originalPictures = new ArrayCollection();
        foreach ($entity->getPictures() as $picture) {
            $originalPictures->add($picture);
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            foreach ($originalPictures as $picture) {
                if ($entity->getPictures()->contains($picture) == false) {
                    $entity->getPictures()->removeElement($picture);
                    $em->remove($picture);
                }
            }
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Enregistrement réussie !');
            return $this->redirect($this->generateUrl('admin_product_category'));
        }

        return $this->render('PointWebProductBundle:ProductCategory:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ProductCategory entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $entitiesSsCat = $em->getRepository('PointWebProductBundle:Product')->findBy(
                array('product_category' => $id)
            );
            // supression des partner liés à la catégorie
            foreach ($entitiesSsCat as $entitySsCat) {
                $em->remove($entitySsCat);
                $em->flush();
            }
            $entity = $em->getRepository('PointWebProductBundle:ProductCategory')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ProductCategory entity.');
            }

            $em->remove($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Suppression réussie !');
        }

        return $this->redirect($this->generateUrl('admin_product_category'));
    }

    /**
     * Creates a form to delete a ProductCategory entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_product_category_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit',
                array(
                    'label' => 'Supprimer',
                    'attr' => array('class' => 'btn btn-danger')
                ))
            ->getForm()
            ;
    }

    /**
     * Get submenu by ajax.
     *
     */
    public function submenuAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var ProductCategory $entity */
        $entity = $em->getRepository('PointWebProductBundle:ProductCategory')->find($id);

        $response = new JsonResponse(
            array(
                'render' => $this->renderView('PointWebProductBundle:ProductCategory:sub.html.twig', array(
                    'entity' => $entity
                )),
                'id' => $id,
                'lastId' => ($entity->getParent() ? $entity->getParent()->getId() : null)
            )
        );
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function downAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('PointWebProductBundle:ProductCategory');
        $category_id = $repo->findOneById($id);
        if ($category_id->getParent()){
            $repo->moveDown($category_id);
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'déplacement réussie !');
        }
        return $this->redirect($this->generateUrl('admin_product_category'));
    }
    public function upAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('PointWebProductBundle:ProductCategory');
        $category_id = $repo->findOneById($id);
        if ($category_id->getParent()){
            $repo->moveUp($category_id);
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'déplacement réussie !');
        }
        return $this->redirect($this->generateUrl('admin_product_category'));
    }


}
