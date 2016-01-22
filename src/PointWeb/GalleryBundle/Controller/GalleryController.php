<?php

namespace PointWeb\GalleryBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PointWeb\GalleryBundle\Entity\Gallery;
use PointWeb\GalleryBundle\Form\GalleryType;

/**
 * Gallery controller.
 *
 */
class GalleryController extends Controller
{

    /**
     * Lists all Gallery entities.
     *
     */
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $maxPerPage = 10;
        /** @var GalleryRepository $GalleryRepo */
        $GalleryRepo = $em->getRepository('PointWebGalleryBundle:Gallery');
        $countTotal = $GalleryRepo->count();

        if ($maxPerPage >= $countTotal){ $affiche = false; }else{ $affiche=true; }
        $pagination = array(
            'page' => $page,
            'route' => 'admin_news',
            'pages_count' => ceil($countTotal / $maxPerPage),
            'route_params' => array(),
            'affiche' => $affiche,
        );
        $entities = $GalleryRepo->pager('position', $page, $maxPerPage );
        // Je déclare le délete
        $deleteForms = array();
        //bt delete dans l'index
        foreach ($entities as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        return $this->render('PointWebGalleryBundle:Gallery:index.html.twig', array(
            'entities' => $entities,
            'pagination' => $pagination,
            'deleteForms' => $deleteForms,
        ));
    }

    /**
     * Creates a new Gallery entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Gallery();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Enregistrement réussie !');
            return $this->redirect($this->generateUrl('admin_gallery'));
        }

        return $this->render('PointWebGalleryBundle:Gallery:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Gallery entity.
     *
     * @param Gallery $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Gallery $entity)
    {
        $form = $this->createForm(new GalleryType(), $entity, array(
            'action' => $this->generateUrl('admin_gallery_create'),
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
     * Displays a form to create a new Gallery entity.
     *
     */
    public function newAction()
    {
        $entity = new Gallery();
        $form = $this->createCreateForm($entity);

        return $this->render('PointWebGalleryBundle:Gallery:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Gallery entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebGalleryBundle:Gallery')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gallery entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebGalleryBundle:Gallery:show.html.twig', array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Gallery entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebGalleryBundle:Gallery')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gallery entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebGalleryBundle:Gallery:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Gallery entity.
     *
     * @param Gallery $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Gallery $entity)
    {
        $form = $this->createForm(new GalleryType(), $entity, array(
            'action' => $this->generateUrl('admin_gallery_update', array('id' => $entity->getId())),
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
     * Edits an existing Gallery entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        /** @var Gallery $entity */
        $entity = $em->getRepository('PointWebGalleryBundle:Gallery')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gallery entity.');
        }

        // ICI SUPRESSION DES IMAGES A PARTIR DU CONTROLLER 1/2
        $originalPictures = new ArrayCollection();
        foreach ($entity->getPictures() as $picture) {
            $originalPictures->add($picture);
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            //ICI SUPRESSION DES IMAGES A PARTIR DU CONTROLLER 2/2
            foreach ($originalPictures as $picture) {
                if ($entity->getPictures()->contains($picture) == false) {
                    $entity->getPictures()->removeElement($picture);
                    $em->remove($picture);
                }
            }
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Enregistrement réussie !');
            return $this->redirect($this->generateUrl('admin_gallery'));
        }

        return $this->render('PointWebGalleryBundle:Gallery:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Gallery entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PointWebGalleryBundle:Gallery')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Gallery entity.');
            }

            $em->remove($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Suppression réussie !');
        }

        return $this->redirect($this->generateUrl('admin_gallery'));
    }

    /**
     * Creates a form to delete a Gallery entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_gallery_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit',
                array(
                    'label' => 'Supprimer',
                    'attr' => array('class' => 'btn btn-danger')
                ))
            ->getForm();
    }

    public function sortAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $value = $request->get('value');
        /** @var Gallery $entity */
        $entity = $em->getRepository('PointWebGalleryBundle:Gallery')->find($id);
        $entity->setPosition($value);
        $em->persist($entity);
        $em->flush();
        return new JsonResponse(array('result' => 'OK'));
    }
}