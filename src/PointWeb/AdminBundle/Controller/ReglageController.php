<?php

namespace PointWeb\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PointWeb\AdminBundle\Entity\Reglage;
use PointWeb\AdminBundle\Form\ReglageType;

/**
 * Reglage controller.
 *
 */
class ReglageController extends Controller
{

    /**
     * Lists all Reglage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PointWebAdminBundle:Reglage')->findAll();

        return $this->render('PointWebAdminBundle:Reglage:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Reglage entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Reglage();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_reglage_show', array('id' => $entity->getId())));
        }

        return $this->render('PointWebAdminBundle:Reglage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Reglage entity.
     *
     * @param Reglage $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Reglage $entity)
    {
        $form = $this->createForm(new ReglageType(), $entity, array(
            'action' => $this->generateUrl('admin_reglage_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Reglage entity.
     *
     */
    public function newAction()
    {
        $entity = new Reglage();
        $form   = $this->createCreateForm($entity);

        return $this->render('PointWebAdminBundle:Reglage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Reglage entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebAdminBundle:Reglage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reglage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebAdminBundle:Reglage:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Reglage entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebAdminBundle:Reglage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reglage entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebAdminBundle:Reglage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Reglage entity.
    *
    * @param Reglage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Reglage $entity)
    {
        $form = $this->createForm(new ReglageType(), $entity, array(
            'action' => $this->generateUrl('admin_reglage_update', array('id' => $entity->getId())),
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
     * Edits an existing Reglage entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebAdminBundle:Reglage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reglage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Modifications réussie !');
            return $this->redirect($this->generateUrl('admin_reglage_edit', array('id' => $id)));
        }

        return $this->render('PointWebAdminBundle:Reglage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Reglage entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PointWebAdminBundle:Reglage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Reglage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_reglage'));
    }

    /**
     * Creates a form to delete a Reglage entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_reglage_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
