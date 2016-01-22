<?php

namespace PointWeb\MapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function allMapsAction()
    {
        $list = $this->getDoctrine()->getRepository('PointWebMapBundle:map')->findAll();
        return $this->render('PointWebMapBundle:Default:index.html.twig', array('list' => $list));
    }

    public function mapDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $detail = $em->getRepository('PointWebMapBundle:map')->find($id);
        return $this->render('PointWebMapBundle:Default:show.html.twig', array('detail' => $detail));
    }
}
