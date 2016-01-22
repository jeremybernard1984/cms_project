<?php

namespace PointWeb\MapBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PointWeb\MapBundle\Entity\map;
use PointWeb\MapBundle\Form\mapType;

/**
 * map controller.
 *
 */
class mapController extends Controller
{

    /**
     * Lists all map entities.
     *
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $maxPerPage = 20;
        /** @var MapRepository $MapRepo */
        $MapRepo = $em->getRepository('PointWebMapBundle:Map');
        $countTotal = $MapRepo->count();
        if ($maxPerPage >= $countTotal){ $affiche = false; }else{ $affiche=true; }
        $pagination = array(
            'page' => $page,
            'route' => 'admin_map',
            'pages_count' => ceil($countTotal / $maxPerPage),
            'route_params' => array(),
            'affiche' => $affiche,
        );
        $entities = $MapRepo->pager('position', $page, $maxPerPage );
        // Je déclare le délete
        $deleteForms = array();
        //bt delete dans l'index
        foreach ($entities as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }

        return $this->render('PointWebMapBundle:Map:index.html.twig', array(
            'entities' => $entities,
            'pagination' => $pagination,
            'deleteForms' => $deleteForms,
        ));
    }
    /**
     * Creates a new map entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new map();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Enregistrement réussie !');
            return $this->redirect($this->generateUrl('admin_map'));
        }

        return $this->render('PointWebMapBundle:Map:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a map entity.
     *
     * @param map $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(map $entity)
    {
        $form = $this->createForm(new mapType(), $entity, array(
            'action' => $this->generateUrl('admin_map_create'),
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
     * Displays a form to create a new map entity.
     *
     */
    public function newAction()
    {
        $entity = new map();
        $form   = $this->createCreateForm($entity);

        return $this->render('PointWebMapBundle:Map:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a map entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebMapBundle:Map')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find map entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebMapBundle:Map:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing map entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebMapBundle:Map')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find map entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebMapBundle:Map:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a map entity.
    *
    * @param map $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(map $entity)
    {
        $form = $this->createForm(new mapType(), $entity, array(
            'action' => $this->generateUrl('admin_map_update', array('id' => $entity->getId())),
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
     * Edits an existing map entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebMapBundle:Map')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find map entity.');
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
            return $this->redirect($this->generateUrl('admin_map'));
        }

        return $this->render('PointWebMapBundle:Map:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a map entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PointWebMapBundle:Map')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find map entity.');
            }

            $em->remove($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Suppression réussie !');
        }

        return $this->redirect($this->generateUrl('admin_map'));
    }

    /**
     * Creates a form to delete a map entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_map_delete', array('id' => $id)))
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
        /** @var Map $entity */
        $entity = $em->getRepository('PointWebMapBundle:Map')->find($id);
        $entity->setPosition($value);
        $em->persist($entity);
        $em->flush();
        return new JsonResponse(array('result' => 'OK'));
    }
}
