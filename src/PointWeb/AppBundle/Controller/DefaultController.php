<?php

namespace PointWeb\AppBundle\Controller;

use PointWeb\AppBundle\Entity\Contact;
use PointWeb\AppBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function headerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reglage = $em->getRepository('PointWebAdminBundle:Reglage')->find(1);
        return $this->render('PointWebAppBundle::_header.html.twig', array(
            'reglage' => $reglage,
        ));
    }

    public function logoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $logo = $em->getRepository('PointWebAdminBundle:Reglage')->find(1)->getLogo();
        return $this->render('PointWebAppBundle::_logo.html.twig', array(
            'logo' => $logo,
        ));
    }

    public function indexAction()
    {
        return $this->render('PointWebAppBundle:Default:index.html.twig');
    }

    public function legalAction()
    {
        return $this->render('PointWebAppBundle:Default:legal.html.twig');
    }

    public function contactAction(Request $request)
    {
        $session = $request->getSession();
        $entity = new Contact();

        $form = $this->createForm(new ContactType(), $entity, array(
            'method' => 'POST',
        ));

        $form->add('submit', 'submit',
            array(
                'label' => 'Envoyer le message',
                'attr' => array('class' => 'btn btn-primary pull')
            ));
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $message = \Swift_Message::newInstance()
                ->setSubject('Contact site')
                ->setFrom($entity->getEmail())
                ->setTo($this->container->getParameter('mail_to'))
                ->setBody($this->renderView('PointWebAppBundle:Mail:contact.txt.twig', array(
                    'entity' => $entity
                )));
            $this->get('mailer')->send($message);

            $session->getFlashBag()->add('info', "Merci ! Votre message a été envoyé.");
            return $this->redirect($this->generateUrl('point_web_app_contact'));
            //return $this->redirect($this->generateUrl('point_web_app_thanks'));
        }else{
            $session->getFlashBag()->add('alert', "Désolé ! Votre message n'a pas pu être envoyé.");
        }

        return $this->render('PointWebAppBundle:Default:contact.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    public function thanksAction()
    {
        return $this->render('PointWebAppBundle:Default:thanks.html.twig');
    }

    public function sitemapAction()
    {
        $routes = $this->getAllRoutes();
        return $this->render('PointWebAppBundle:Default:sitemap.html.twig', array(
            'routes' => $routes
        ));
    }


}
