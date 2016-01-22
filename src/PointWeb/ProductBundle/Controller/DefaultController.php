<?php

namespace PointWeb\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{

    public function allProductsAction(Request $request)
    {
        $currentRoute = $request->attributes->get('_route');
        $current_menu = $this->getDoctrine()->getRepository('PointWebAdminBundle:Menu')->findOneBy(array('path' => $currentRoute));

        $em = $this->getDoctrine()->getManager();
        $repo  = $em->getRepository('PointWebProductBundle:ProductCategory');
        $categories = $repo->childrenHierarchy(null,false);
        $listProducts = $em->getRepository('PointWebProductBundle:Product')->findAllByCatByPosVisible();
        return $this->render('PointWebProductBundle:Default:all_products.html.twig', array(
            'listProducts' => $listProducts,
            'categories' => $categories,
            'current_menu' => $current_menu
        ));
    }

    public function productOfCategoryAction(Request $request, $id, $page)
    {
        $currentRoute = $request->attributes->get('_route');
        $current_menu = $this->getDoctrine()->getRepository('PointWebAdminBundle:Menu')->findOneBy(array('path' => $currentRoute));

        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('PointWebProductBundle:ProductCategory')->findOneBy(array(
                'online' => 1,
                'id' => $id
            ));
        $maxPerPage = 3;
        $coutReq = $em->getRepository('PointWebProductBundle:Product')->findBy(
            array('product_category' => $id, 'online' => 1));
        $countTotal = count($coutReq);
        if ($maxPerPage >= $countTotal){ $affiche = false; }else{ $affiche=true; }
        $pagination = array(
            'page' => $page,
            'id' => $id,
            'route' => 'product_of_category',
            'pages_count' => ceil($countTotal / $maxPerPage),
            'route_params' => array(),
            'affiche' => $affiche,
        );
        $repo = $em->getRepository('PointWebProductBundle:Product');
        $entities = $repo->pagerCategory('position', $page, $maxPerPage, $id );
        //var_dump($category);
        return $this->render('PointWebProductBundle:Default:product_of_category.html.twig', array(
            'entities' => $entities,
            'pagination' => $pagination,
            'category' => $category,
            'current_menu' => $current_menu
        ));
    }

    public function productDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('PointWebProductBundle:Product')->find($id);
        return $this->render('PointWebProductBundle:Default:product_detail.html.twig', array('entity' => $entity));
    }


    // Listing de toutes les categories
    public function categoriesThumbnailsAction()
    {
        $entities = $this->getDoctrine()->getRepository('PointWebProductBundle:ProductCategory')->findAll();
        return $this->render('PointWebProductBundle:Default:categories_thumbnails.html.twig', array('entities' => $entities));
    }


}

