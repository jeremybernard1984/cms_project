<?php

namespace PointWeb\GuestbookBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PointWeb\GuestbookBundle\Entity\Guestbook;
use PointWeb\GuestbookBundle\Form\GuestbookType;

/**
 * Guestbook controller.
 *
 */
class GuestbookController extends Controller
{

    /**
     * Lists all Guestbook entities.
     *
     */

    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $maxPerPage = 200;
        /** @var guestBookRepository $guestBookRepo */
        $guestBookRepo = $em->getRepository('PointWebGuestbookBundle:Guestbook');
        $countTotal = $guestBookRepo->count();
        if ($maxPerPage >= $countTotal){ $affiche = false; }else{ $affiche=true; }
        $pagination = array(
            'page' => $page,
            'route' => 'admin_guestbook',
            'pages_count' => ceil($countTotal / $maxPerPage),
            'route_params' => array(),
            'affiche' => $affiche,
        );
        $entities = $guestBookRepo->pager('position', $page, $maxPerPage );
        // Je déclare le délete
        $deleteForms = array();
        //bt delete dans l'index
        foreach ($entities as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }

        return $this->render('PointWebGuestbookBundle:Guestbook:index.html.twig', array(
            'entities' => $entities,
            'pagination' => $pagination,
            'deleteForms' => $deleteForms,
        ));

    }

    /**
     * Creates a new Guestbook entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Guestbook();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Enregistrement réussie !');
            return $this->redirect($this->generateUrl('admin_guestbook'));
        }

        return $this->render('PointWebGuestbookBundle:Guestbook:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Guestbook entity.
     *
     * @param Guestbook $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Guestbook $entity)
    {
        $form = $this->createForm(new GuestbookType(), $entity, array(
            'action' => $this->generateUrl('admin_guestbook_create'),
            'method' => 'POST',
            'back' => true
        ));

        $form->add('submit', 'submit',
            array(
                'label' => 'Enregistrer',
                'attr' => array('class' => 'btn btn-success')
            ));

        return $form;
    }

    /**
     * Displays a form to create a new Guestbook entity.
     *
     */
    public function newAction()
    {
        $entity = new Guestbook();
        $form = $this->createCreateForm($entity);

        return $this->render('PointWebGuestbookBundle:Guestbook:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Guestbook entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebGuestbookBundle:Guestbook')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Guestbook entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebGuestbookBundle:Guestbook:show.html.twig', array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Guestbook entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebGuestbookBundle:Guestbook')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Guestbook entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebGuestbookBundle:Guestbook:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Guestbook entity.
     *
     * @param Guestbook $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Guestbook $entity)
    {
        $form = $this->createForm(new GuestbookType(), $entity, array(
            'action' => $this->generateUrl('admin_guestbook_update', array('id' => $entity->getId())),
            'method' => 'PUT',
            'back' => true
        ));

        $form->add('submit', 'submit',
            array(
                'label' => 'Enregistrer',
                'attr' => array('class' => 'btn btn-success')
            ));

        return $form;
    }

    /**
     * Edits an existing Guestbook entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebGuestbookBundle:Guestbook')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Guestbook entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Suppression réussie !');
            return $this->redirect($this->generateUrl('admin_guestbook'));
        }

        return $this->render('PointWebGuestbookBundle:Guestbook:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Guestbook entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PointWebGuestbookBundle:Guestbook')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Guestbook entity.');
            }

            $em->remove($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Enregistrement réussie !');
        }

        return $this->redirect($this->generateUrl('admin_guestbook'));
    }

    /**
     * Creates a form to delete a Guestbook entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_guestbook_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit',
                array(
                    'label' => 'Supprimer',
                    'attr' => array('class' => 'btn btn-danger')
                ))
            ->getForm();;
    }

    public function sortAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $value = $request->get('value');
        /** @var Guestbook $entity */
        $entity = $em->getRepository('PointWebGuestbookBundle:Guestbook')->find($id);
        $entity->setPosition($value);
        $em->persist($entity);
        $em->flush();
        return new JsonResponse(array('result' => 'OK'));
    }
}
