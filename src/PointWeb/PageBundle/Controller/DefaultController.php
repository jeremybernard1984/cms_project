<?php

namespace PointWeb\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{

    public function allPagesAction()
    {
        return $this->render('PointWebPageBundle:Default:index.html.twig');
    }

    public function pageDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PointWebPageBundle:Page')->find($id);
        return $this->render('PointWebPageBundle:Default:show.html.twig', array(
            'entity' => $entity
        ));
    }

    public function homePageAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PointWebPageBundle:Page')->find($id);
        return $this->render('PointWebPageBundle:Default:home_page.html.twig', array(
            'entity' => $entity
        ));
    }
    public function contactPageAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PointWebPageBundle:Page')->find($id);
        return $this->render('PointWebPageBundle:Default:contact_page.html.twig', array(
            'entity' => $entity
        ));
    }
}
