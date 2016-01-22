<?php

namespace PointWeb\GuestbookBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PointWeb\GuestbookBundle\Entity\Guestbook;
use PointWeb\GuestbookBundle\Form\GuestbookType;

class DefaultController extends Controller
{
    public function allGuestbookAction(Request $request, $page)
    {

        $em = $this->getDoctrine()->getManager();
        $currentRoute = $request->attributes->get('_route');
        $current_menu = $em->getRepository('PointWebAdminBundle:Menu')->findOneBy(array('path' => $currentRoute));

        $maxPerPage = 6;
        $coutReq = $em->getRepository('PointWebGuestbookBundle:Guestbook')->findBy(array('online' => 1));
        $countTotal = count($coutReq);
        if ($maxPerPage >= $countTotal){ $affiche = false; }else{ $affiche=true; }
        $pagination = array(
            'page' => $page,
            'route' => 'all_guestbook',
            'pages_count' => ceil($countTotal / $maxPerPage),
            'route_params' => array(),
            'affiche' => $affiche,
        );
        $repo = $em->getRepository('PointWebGuestbookBundle:Guestbook');
        $entities = $repo->pagerClassic('position', $page, $maxPerPage );
        $entity = new Guestbook();
        $form   = $this->createCreateForm($entity);

        return $this->render('PointWebGuestbookBundle:Default:all_guestbook.html.twig', array(
            'entities' => $entities,
            'entity' => $entity,
            'pagination' => $pagination,
            'form'   => $form->createView(),
            'current_menu' => $current_menu
        ));

    }


    /**
     * Creates a new Guestbook entity.
     *
     */
    public function createAction(Request $request)
    {
        $session = $request->getSession();
        $entity = new Guestbook();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $message = \Swift_Message::newInstance()
                ->setSubject('Commentaire site')
                ->setFrom($entity->getEmail())
                ->setTo($this->container->getParameter('mail_to'))
                ->setBody($this->renderView('PointWebAppBundle:Mail:guestbook.txt.twig', array(
                    'entity' => $entity
                )));
            $this->get('mailer')->send($message);

           // return $this->redirect($this->generateUrl('point_web_app_thanks'));
            // message de retour
            $session->getFlashBag()->add('info', "Merci ! Votre commentaire a été envoyé.");

            return $this->redirect($this->generateUrl('all_guestbook'));
        }else{

        }
        $this->get('session')->getFlashBag()->add(
            'notice',
            'Votre commentaire à été pris en compte, merci.'
        );
        return $this->redirect($this->generateUrl('all_guestbook'));
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
            'action' => $this->generateUrl('guestbook_create_invisible'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit',
            array(
                'label' => 'Enregistrer',
                'attr' => array('class' => 'btn btn-success')
            ));

        return $form;
    }


}
