<?php

namespace PointWeb\PartnerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function allPartnersAction(Request $request)
    {
        $currentRoute = $request->attributes->get('_route');
        $current_menu = $this->getDoctrine()->getRepository('PointWebAdminBundle:Menu')->findOneBy(array('path' => $currentRoute));

        $categories = $this->getDoctrine()->getRepository('PointWebPartnerBundle:PartnerCategory')->findBy(array(
            'online' => 1
        ));
        $entities = $this->getDoctrine()->getRepository('PointWebPartnerBundle:Partner')->findBy(array(
            'online' => 1
        ));
        //var_dump($entities);die;
        return $this->render('PointWebPartnerBundle:Default:all_partners.html.twig', array(
            'entities' => $entities,
            'categories' => $categories,
            'current_menu' => $current_menu
        ));
    }

    public function partnerOfCategoryAction($id)
    {
        $list = $this->getDoctrine()->getRepository('PointWebPartnerBundle:Partner')->findAll();
        return $this->render('PointWebPartnerBundle:Default:index.html.twig', array('list' => $list));
    }

    public function partnerDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $detail = $em->getRepository('PointWebPartnerBundle:Partner')->find($id);
        return $this->render('PointWebPartnerBundle:Default:show.html.twig', array('detail' => $detail));
    }

}
