<?php

namespace PointWeb\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PointWeb\AppBundle\Entity\Contact;
use PointWeb\AppBundle\Form\ContactType;

/**
 * Contact controller.
 *
 */
class ContactController extends Controller
{

    /**
     * Lists all Contact entities.
     *
     */
    /*public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PointWebAppBundle:Contact')->findBy(
            array(),
            array('createDate' => 'DESC')
        );

        return $this->render('PointWebAppBundle:Contact:index.html.twig', array(
            'entities' => $entities,
        ));
    }*/
    public function indexAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $maxPerPage = 10;
        $newsRepo = $em->getRepository('PointWebAppBundle:Contact');
        $countTotal = $newsRepo->count();

        if ($maxPerPage >= $countTotal){ $affiche = false; }else{ $affiche=true; }
        $pagination = array(
            'page' => $page,
            'route' => 'admin_contact',
            'pages_count' => ceil($countTotal / $maxPerPage),
            'route_params' => array(),
            'affiche' => $affiche,
        );
        $entities = $newsRepo->pager('createDate', $page, $maxPerPage );
        // Je déclare le délete
        $deleteForms = array();
        //bt delete dans l'index
        foreach ($entities as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        return $this->render('PointWebAppBundle:Contact:index.html.twig', array(
            'entities' => $entities,
            'pagination' => $pagination,
            'deleteForms' => $deleteForms,
        ));
    }

    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PointWebAppBundle:Contact')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find News entity.');
            }

            $em->remove($entity);
            $em->flush();
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'Suppression réussie !');
        }

        return $this->redirect($this->generateUrl('admin_contact'));
    }

    /**
     * Finds and displays a Contact entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebAppBundle:Contact')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contact entity.');
        }

        return $this->render('PointWebAppBundle:Contact:show.html.twig', array(
            'entity'      => $entity
        ));
    }


    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_contact_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit',
                array(
                    'label' => 'Supprimer',
                    'attr' => array('class' => 'btn btn-danger')
                ))
            ->getForm();
    }
}
