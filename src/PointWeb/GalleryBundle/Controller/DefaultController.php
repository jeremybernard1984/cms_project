<?php

namespace PointWeb\GalleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function allGalleriesAction()
    {
        return $this->render('PointWebGalleryBundle:Default:index.html.twig');
    }

    public function galleryDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        /** @var Gallery $entity */
        $entity = $em->getRepository('PointWebGalleryBundle:Gallery')->find($id);
        return $this->render('PointWebGalleryBundle:Default:show.html.twig', array(
            'entity' => $entity
        ));
    }

    public function gallerySliderHomeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PointWebGalleryBundle:Gallery')->find($id);
        return $this->render('PointWebGalleryBundle:Default:slider_home.html.twig', array(
            'entity' => $entity
        ));
    }
}
