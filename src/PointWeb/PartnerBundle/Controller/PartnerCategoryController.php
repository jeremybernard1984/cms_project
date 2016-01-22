<?php

namespace PointWeb\PartnerBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PointWeb\PartnerBundle\Entity\PartnerCategory;
use PointWeb\PartnerBundle\Form\PartnerCategoryType;

/**
 * PartnerCategory controller.
 *
 */
class PartnerCategoryController extends Controller
{

    /**
     * Lists all PartnerCategory entities.
     *
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        //$entities = $em->getRepository('PointWebPartnerBundle:PartnerCategory')->findAll();
        $maxPerPage = 30;
        $PartnerCategoryRepo = $em->getRepository('PointWebPartnerBundle:PartnerCategory');
        $countTotal = $PartnerCategoryRepo->count();

        if ($maxPerPage >= $countTotal){ $affiche = false; }else{ $affiche=true; }
        $pagination = array(
            'page' => $page,
            'route' => 'admin_news',
            'pages_count' => ceil($countTotal / $maxPerPage),
            'route_params' => array(),
            'affiche' => $affiche,
        );
        $entities = $PartnerCategoryRepo->pager('position', $page, $maxPerPage );
        // Je déclare le délete
        $deleteForms = array();
        //bt delete dans l'index
        foreach ($entities as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        return $this->render('PointWebPartnerBundle:PartnerCategory:index.html.twig', array(
            'entities' => $entities,
            'pagination' => $pagination,
            'deleteForms' => $deleteForms,
        ));
    }
    /**
     * Creates a new PartnerCategory entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PartnerCategory();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Enregistrement réussie !');
            return $this->redirect($this->generateUrl('admin_partner_category'));
        }

        return $this->render('PointWebPartnerBundle:PartnerCategory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a PartnerCategory entity.
     *
     * @param PartnerCategory $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PartnerCategory $entity)
    {
        $form = $this->createForm(new PartnerCategoryType(), $entity, array(
            'action' => $this->generateUrl('admin_partner_category_create'),
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
     * Displays a form to create a new PartnerCategory entity.
     *
     */
    public function newAction()
    {
        $entity = new PartnerCategory();
        $form   = $this->createCreateForm($entity);

        return $this->render('PointWebPartnerBundle:PartnerCategory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PartnerCategory entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebPartnerBundle:PartnerCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PartnerCategory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebPartnerBundle:PartnerCategory:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PartnerCategory entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebPartnerBundle:PartnerCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PartnerCategory entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebPartnerBundle:PartnerCategory:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PartnerCategory entity.
    *
    * @param PartnerCategory $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PartnerCategory $entity)
    {
        $form = $this->createForm(new PartnerCategoryType(), $entity, array(
            'action' => $this->generateUrl('admin_partner_category_update', array('id' => $entity->getId())),
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
     * Edits an existing PartnerCategory entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebPartnerBundle:PartnerCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PartnerCategory entity.');
        }


        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Enregistrement réussie !');
            return $this->redirect($this->generateUrl('admin_partner_category'));
        }

        return $this->render('PointWebPartnerBundle:PartnerCategory:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PartnerCategory entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entitiesSsCat = $em->getRepository('PointWebPartnerBundle:Partner')->findBy(
                array('partner_category' => $id)
            );
            // supression des partner liés à la catégorie
            foreach ($entitiesSsCat as $entitySsCat) {
                $em->remove($entitySsCat);
                $em->flush();
            }
            $entity = $em->getRepository('PointWebPartnerBundle:PartnerCategory')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PartnerCategory entity.');
            }

            $em->remove($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Suppression réussie !');
        }

        return $this->redirect($this->generateUrl('admin_partner_category'));
    }

    /**
     * Creates a form to delete a PartnerCategory entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_partner_category_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit',
                array(
                    'label' => 'Supprimer',
                    'attr' => array('class' => 'btn btn-danger')
                ))
            ->getForm()
        ;
    }

    public function sortAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $value = $request->get('value');
        //var_dump($value);die;
        /** @var PartnerCategory $entity */
        $entity = $em->getRepository('PointWebPartnerBundle:PartnerCategory')->find($id);
        $entity->setPosition($value);
        $em->persist($entity);
        $em->flush();
        return new JsonResponse(array('result' => 'OK'));
    }


}
