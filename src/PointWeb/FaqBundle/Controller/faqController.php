<?php

namespace PointWeb\FaqBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PointWeb\FaqBundle\Entity\Faq;
use PointWeb\FaqBundle\Form\FaqType;

/**
 * faq controller.
 *
 */
class faqController extends Controller
{

    /**
     * Lists all faq entities.
     *
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $maxPerPage = 20;
        /** @var FaqRepository $FaqRepo */
        $FaqRepo = $em->getRepository('PointWebFaqBundle:Faq');
        $countTotal = $FaqRepo->count();
        if ($maxPerPage >= $countTotal){ $affiche = false; }else{ $affiche=true; }
        $pagination = array(
            'page' => $page,
            'route' => 'admin_faq',
            'pages_count' => ceil($countTotal / $maxPerPage),
            'route_params' => array(),
            'affiche' => $affiche,
        );
        $entities = $FaqRepo->pager('position', $page, $maxPerPage );
        // Je déclare le délete
        $deleteForms = array();
        //bt delete dans l'index
        foreach ($entities as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }

        return $this->render('PointWebFaqBundle:Faq:index.html.twig', array(
            'entities' => $entities,
            'pagination' => $pagination,
            'deleteForms' => $deleteForms,
        ));
    }
    /**
     * Creates a new Faq entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Faq();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Enregistrement réussie !');
            return $this->redirect($this->generateUrl('admin_faq'));
        }

        return $this->render('PointWebFaqBundle:Faq:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Faq entity.
     *
     * @param Faq $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Faq $entity)
    {
        $form = $this->createForm(new FaqType(), $entity, array(
            'action' => $this->generateUrl('admin_faq_create'),
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
     * Displays a form to create a new faq entity.
     *
     */
    public function newAction()
    {
        $entity = new Faq();
        $form   = $this->createCreateForm($entity);

        return $this->render('PointWebFaqBundle:Faq:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Faq entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebFaqBundle:Faq')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find faq entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebFaqBundle:Faq:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Faq entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebFaqBundle:Faq')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find faq entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebFaqBundle:Faq:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a faq entity.
    *
    * @param faq $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Faq $entity)
    {
        $form = $this->createForm(new FaqType(), $entity, array(
            'action' => $this->generateUrl('admin_faq_update', array('id' => $entity->getId())),
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
     * Edits an existing faq entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebFaqBundle:Faq')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find faq entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Enregistrement réussie !');
            return $this->redirect($this->generateUrl('admin_faq'));
        }

        return $this->render('PointWebFaqBundle:Faq:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a faq entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PointWebFaqBundle:Faq')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find faq entity.');
            }

            $em->remove($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Suppression réussie !');
        }

        return $this->redirect($this->generateUrl('admin_faq'));
    }

    /**
     * Creates a form to delete a faq entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_faq_delete', array('id' => $id)))
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
        /** @var Faq $entity */
        $entity = $em->getRepository('PointWebFaqBundle:Faq')->find($id);
        $entity->setPosition($value);
        $em->persist($entity);
        $em->flush();
        return new JsonResponse(array('result' => 'OK'));
    }
}
