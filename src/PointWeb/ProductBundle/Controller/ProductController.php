<?php

namespace PointWeb\ProductBundle\Controller;

use PointWeb\AdminBundle\Entity\Reglage;
use Doctrine\Common\Collections\ArrayCollection;
use PointWeb\ProductBundle\Entity\ProductCategory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PointWeb\ProductBundle\Entity\Product;
use PointWeb\ProductBundle\Form\ProductType;

/**
 * Product controller.
 *
 */
class ProductController extends Controller
{

    /**
     * Lists all Product entities.
     *
     */
    /* public function indexAction()
     {
         $em = $this->getDoctrine()->getManager();
         $categoriesParent = $em->getRepository('PointWebProductBundle:ProductCategory')->findBy(
             array('parent' => null)
         );
         $categories = $em->getRepository('PointWebProductBundle:ProductCategory')->findAll();
         //var_dump($categoriesParent);
         $entitiesSansCat = $em->getRepository('PointWebProductBundle:Product')->findBy(
             array('product_category' => null), array('position' => 'ASC')
         );
         // Je déclare le délete
         $deleteForms = array();
         $listProducts = $em->getRepository('PointWebProductBundle:Product')->findAll();
         foreach ($listProducts as $product) {
             $deleteForms[$product->getId()] = $this->createDeleteForm($product->getId())->createView();
         }
         return $this->render('PointWebProductBundle:Product:index.html.twig', array(
             'categories' => $categories,
             'entitiesSansCat' => $entitiesSansCat,
             'categoriesParent' => $categoriesParent,
             'deleteForms' => $deleteForms,
         ));
     }
 */
     public function indexAction()
     {
         $em = $this->getDoctrine()->getManager();
         $repo  = $em->getRepository('PointWebProductBundle:ProductCategory');
         $entitiesSansCat = $em->getRepository('PointWebProductBundle:Product')->findBy(
             array('product_category' => null), array('position' => 'ASC')
         );
         //var_dump($entitiesSansCat);
         $categories = $repo->childrenHierarchy(
             null,
             false
         );
         // Je déclare le délete
         $deleteForms = array();
         $listProducts = $em->getRepository('PointWebProductBundle:Product')->findAllByCatByPos();
         //$listProducts = $em->getRepository('PointWebProductBundle:Product')->findAll();
         foreach ($listProducts as $product) {
             $deleteForms[$product->getId()] = $this->createDeleteForm($product->getId())->createView();
         }
         foreach ($entitiesSansCat as $product) {
             $deleteForms[$product->getId()] = $this->createDeleteForm($product->getId())->createView();
         }
         //var_dump($listProducts);//die;
         return $this->render('PointWebProductBundle:Product:index.html.twig', array(
             'listProducts' => $listProducts,
             'entitiesSansCat' => $entitiesSansCat,
             'categories' => $categories,
             'deleteForms' => $deleteForms,
         ));
     }

    /**
     * Creates a new Product entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Product();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Enregistrement réussie !');
            return $this->redirect($this->generateUrl('admin_product'));
        }

        return $this->render('PointWebProductBundle:Product:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Product entity.
     *
     * @param Product $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Product $entity)
    {
        $form = $this->createForm(new ProductType(), $entity, array(
            'action' => $this->generateUrl('admin_product_create'),
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
     * Displays a form to create a new Product entity.
     *
     */
    public function newAction()
    {
        $entity = new Product();
        $form = $this->createCreateForm($entity);

        return $this->render('PointWebProductBundle:Product:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Product entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebProductBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebProductBundle:Product:show.html.twig', array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Product entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebProductBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebProductBundle:Product:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Product entity.
     *
     * @param Product $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Product $entity)
    {
        $form = $this->createForm(new ProductType(), $entity, array(
            'action' => $this->generateUrl('admin_product_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit',
            array(
                'label' => 'Enregistrer',
                'attr' => array('class' => 'btn btn-success')
            ));

        return $form;
    }

    /**
     * Edits an existing Product entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var Product $entity */
        $entity = $em->getRepository('PointWebProductBundle:Product')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
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
            // Bien sûr, cette méthode devra réellement ajouter l'annonce
            // Mais faisons comme si c'était le cas
            $session->getFlashBag()->add('info', 'Enregistrement réussie !');
            return $this->redirect($this->generateUrl('admin_product'));
        }

        return $this->render('PointWebProductBundle:Product:index.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Product entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PointWebProductBundle:Product')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Product entity.');
            }

            $em->remove($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Suppression réussie !');
        }

        return $this->redirect($this->generateUrl('admin_product'));
    }

    /**
     * Creates a form to delete a Product entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_product_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit',
                array(
                    'label' => 'Supprimer',
                    'attr' => array('class' => 'btn btn-danger')
                ))
            ->getForm();
    }

    /**
     * Get subcat by ajax.
     *
     */
    public function subAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var ProductCategory $entity */
        $entity = $em->getRepository('PointWebProductBundle:ProductCategory')->find($id);
        // Je déclare le délete
        $deleteForms = array();
        $listProducts = $em->getRepository('PointWebProductBundle:Product')->findAll();
        foreach ($listProducts as $product) {
            $deleteForms[$product->getId()] = $this->createDeleteForm($product->getId())->createView();
        }

        $response = new JsonResponse(
            array(
                'render' => $this->renderView('PointWebProductBundle:Product:sub.html.twig', array(
                    'entity' => $entity,
                    'deleteForms' => $deleteForms,
                )),
                'id' => $id,
                'lastId' => ($entity->getParent() ? $entity->getParent()->getId() : null)
            )
        );
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }


    public function sortAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $value = $request->get('value');
        /** @var Product $entity */
        $entity = $em->getRepository('PointWebProductBundle:Product')->find($id);
        $entity->setPosition($value);
        $em->persist($entity);
        $em->flush();
        return new JsonResponse(array('result' => 'OK'));
    }
}

