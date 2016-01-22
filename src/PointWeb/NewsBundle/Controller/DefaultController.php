<?php

namespace PointWeb\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function allNewsAction(Request $request)
    {
        $currentRoute = $request->attributes->get('_route');
        $current_menu = $this->getDoctrine()->getRepository('PointWebAdminBundle:Menu')->findOneBy(array('path' => $currentRoute));
        $entities = $this->getDoctrine()->getRepository('PointWebNewsBundle:News')->findBy(array('online' => 1));

        return $this->render('PointWebNewsBundle:Default:all_news.html.twig', array(
            'entities' => $entities,
            'current_menu' => $current_menu
        ));
    }

    public function newsDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PointWebNewsBundle:News')->find($id);
        return $this->render('PointWebNewsBundle:Default:news_detail.html.twig', array('entity' => $entity));
    }

    public function lastNewsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PointWebNewsBundle:News')->findOneBy(
            array('position' => 'asc'));
        return $this->render('PointWebNewsBundle:Default:last_news.html.twig', array('entity' => $entity));
    }
}
