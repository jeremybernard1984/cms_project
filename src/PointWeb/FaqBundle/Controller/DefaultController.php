<?php

namespace PointWeb\FaqBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function allFaqAction(Request $request)
    {
        /*
        $current_menu = $this->getDoctrine()->getRepository('PointWebAdminBundle:Menu')->findBy(
            array(),
            array('path' => $currentRoute)
        );
        */
        $currentRoute = $request->attributes->get('_route');
        $current_menu = $this->getDoctrine()->getRepository('PointWebAdminBundle:Menu')->findOneBy(array('path' => $currentRoute));
        $entities = $this->getDoctrine()->getRepository('PointWebFaqBundle:Faq')->findBy(array('online' => 1));
        return $this->render('PointWebFaqBundle:Default:all_faq.html.twig', array(
            'entities' => $entities,
            'current_menu' => $current_menu
        ));
    }
}
