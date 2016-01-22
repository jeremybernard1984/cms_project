<?php

namespace PointWeb\AdminBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PointWeb\AdminBundle\Entity\Menu;
use PointWeb\ProductBundle\Entity\Product;
use PointWeb\ProductBundle\Entity\Partner;
use PointWeb\AdminBundle\Form\MenuType;

/**
 * Menu controller.
 *
 */
class MenuController extends Controller
{

    /**
     * Lists all Menu entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $doctrine = $this->container->get('doctrine');
        $repository   =  $doctrine->getRepository('PointWebAdminBundle:Menu');
        $entities = $repository->childrenHierarchy();
        $deleteForms = array();
        $pictures = array();
        $selectAll = $em->getRepository('PointWebAdminBundle:Menu')->findAll();
        foreach ($selectAll as $entity) {
            $deleteForms[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
            $pictures[$entity->getId()] = $entity->getPictures();
        }
        return $this->render('PointWebAdminBundle:Menu:index.html.twig', array(
            'entities' => $entities,
            'deleteForms' => $deleteForms,
            'pictures' => $pictures,
        ));
    }

    /**
     * Creates a new Menu entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Menu();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_menu'));
        }

        return $this->render('PointWebAdminBundle:Menu:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }


    /**
     * Creates a form to create a Menu entity.
     *
     * @param Menu $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Menu $entity)
    {
        // Pour valider mon select je passe em en paramètre pour récupérer dans mon form
        $em = $this->getDoctrine()->getManager();
        // Je passe les routes à afficher dans le premier select
        $select_routes = $this->SelectRoutes();
        $form = $this->createForm(new MenuType('',$select_routes,$em,'',''), $entity, array(
            'action' => $this->generateUrl('admin_menu_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit',
            array(
                'label' => 'Enregistrer',
                'attr' => array('class' => 'btn btn-success')
            ));

        return $form;
    }

    /**
     * Displays a form to create a new Menu entity.
     *
     */
    public function newAction()
    {
        $entity = new Menu();
        $form = $this->createCreateForm($entity);

        return $this->render('PointWebAdminBundle:Menu:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Menu entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebAdminBundle:Menu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Menu entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebAdminBundle:Menu:show.html.twig', array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Menu entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebAdminBundle:Menu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Menu entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebAdminBundle:Menu:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Menu entity.
     *
     * @param Menu $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Menu $entity)
    {
        $em = $this->getDoctrine()->getManager();
        $menus = $em->getRepository('PointWebAdminBundle:Menu')->findAll();
        // Selection du tableau des categories enfant a enlever de la liste
            $id_search = $entity->getId();
            foreach ($menus as $menu) {
                $levels[] = $menu->getLevel($id_search);
            }
            $levels = array_filter($levels);
        // Selection des routes triées (pas de fos, admin, point_web)...
        $select_routes = $this->SelectRoutes();
        $pathId = $entity->getPathId();
        $pathTitle = $entity->getPathTitle();

        $form = $this->createForm(new MenuType($levels,$select_routes,$em,$pathId,$pathTitle), $entity, array(
            'action' => $this->generateUrl('admin_menu_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->add('submit', 'submit',
            array(
                'label' => 'Enregistrer',
                'attr' => array('class' => 'btn btn-success')
            ));

        return $form;
    }

    /**
     * Edits an existing Menu entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        /** @var Menu $entity */
        $entity = $em->getRepository('PointWebAdminBundle:Menu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Menu entity.');
        }

        $originalPictures = new ArrayCollection();
        foreach ($entity->getPictures() as $picture) {
            $originalPictures->add($picture);
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            foreach ($originalPictures as $picture) {
                if ($entity->getPictures()->contains($picture) == false) {
                    $entity->getPictures()->removeElement($picture);
                    $em->remove($picture);
                }
            }
            $em->persist($entity);
            $em->flush();

           // return $this->redirect($this->generateUrl('admin_menu_show', array('id' => $id)));
            return $this->redirect($this->generateUrl('admin_menu'));
        }

        return $this->render('PointWebAdminBundle:Menu:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Menu entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PointWebAdminBundle:Menu')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Menu entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_menu'));
    }

    /**
     * Creates a form to delete a Menu entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_menu_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array(
                'label' => 'Supprimer',
                'attr' => array('class' => 'btn btn-danger')
            ))
            ->getForm();
    }

    public function downAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('PointWebAdminBundle:Menu');
        $menu_id = $repo->findOneById($id);
        if ($menu_id->getParent()){
            $repo->moveDown($menu_id);
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'déplacement réussie !');
        }
        return $this->redirect($this->generateUrl('admin_menu'));
    }
    public function upAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('PointWebAdminBundle:Menu');
        $menu_id = $repo->findOneById($id);
        if ($menu_id->getParent()){
            $repo->moveUp($menu_id);
            $session = $request->getSession();
            $session->getFlashBag()->add('info', 'déplacement réussie !');
        }
        return $this->redirect($this->generateUrl('admin_menu'));
    }

    private function SelectRoutes()
    {
        $routes = array();
        foreach ($this->container->get('router')->getRouteCollection()->all() as $name => $route) {
            // Je réécrit les titres
            $titre = $name;
            //$titre = str_replace('product', 'produit', $titre);
            $titre = str_replace('_of', 's_of', $titre);
            // je vérifie pour page uniquement :
            //$titre = str_replace('page_detail', 'page', $titre);
            $titre = str_replace('_', ' ', $titre);
            $titre = ucfirst($titre);
            //Prefixes à enlever
            if (
                // Je vérifie que la route ne contient pas
                (!preg_match("/admin_/", $name))
                AND (!preg_match("/point_web/", $name))
                AND (!preg_match("/fos_/", $name))
                AND (!preg_match("/user/", $name))
                AND (!preg_match("/invisible/", $name))
            ){
                //Si la route contient show ou liste, j'ajoute des tirets
                if(preg_match("/_detail/", $name)){
                    if(preg_match("/page_detail/", $name)){
                        $titre = str_replace('page_detail', 'page', $titre);
                        $routes[$name] = array($name => $titre);
                    }else{
                        $routes[$name] = substr_replace($titre,"----",0,0);
                    }
                }elseif(preg_match("/_of_/", $name)){
                    $routes[$name] = substr_replace($titre,"----",0,0);
                }else{
                    $routes[str_replace('all_', ' ', $name)] = array($name => $titre);
                }

            }
        }
        return $routes;
    }


    public function submenuAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var Menu $entity */
        $entity = $em->getRepository('PointWebAdminBundle:Menu')->find($id);
        $response = new JsonResponse(
            array(
                'render' => $this->renderView('PointWebAdminBundle:Menu:sub.html.twig', array(
                    'entity' => $entity
                )),
                'id' => $id,
                'lastId' => ($entity->getParent() ? $entity->getParent()->getId() : null)
            )
        );
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    public function remplipathidAction($entitySelectOk) {
        //die($entitySelectOk);
        //Déclarer un tableau de type Array
        $list_pathId = array();
        $request = $this->container->get('request');
        //vérifier le type de la requête
        if ($this->container->get('request')->isXmlHttpRequest()) {
            //Récuperer le choix que vous fait dans la liste déroulante "Pays : "
            //$entitySelect = $request->request->get('entitySelect');
            $entitySelect = $entitySelectOk;
            // dabors si $entitySelect contient '_of',
            // je rajoute 'Category' a ma chaine à la fin
            if(preg_match("/_of/", $entitySelect)){
                $category = 'Category';
            }else{
                $category = '';
            }
                // Je supprime tous apres le underscore puis 1ere lettre en CAP = 'Entity' en cours
                $supprAndCap = preg_replace( '/_.*/', '' ,$entitySelect) ;
                $entitySelect = ucfirst($supprAndCap);
                $entitySelectOk = 'PointWeb'.$entitySelect.'Bundle:'.$entitySelect.$category;

            $em = $this->getDoctrine()->getManager();
            // Je vérifi si il s'agit des categories de produits pour ordonner la réponse
            if(preg_match("/ProductCategory/", $entitySelectOk)) {
                //$pathId = $em->getRepository($entitySelectOk)->findBy(array('root' =>  '1'), array('lft' => 'ASC'));
                $pathId = $em->getRepository($entitySelectOk)->createQueryBuilder('e')->addOrderBy('e.lft', 'ASC')->getQuery()->execute();
            }else{
                $pathId = $em->getRepository($entitySelectOk)->findAll();
            }
            //Remplir la liste déroulante avec le résultat
            foreach ($pathId as $p) {
                if(preg_match("/ProductCategory/", $entitySelectOk)) {
                    $list_pathId[$p->getLft()] = array($p->getId(), str_repeat("--", $p->getLvl()).$p->getTitle());
                    //$list_pathId[$p->getId()] = str_repeat("--", $p->getLvl()).$p->getTitle();
                }else{
                    $list_pathId[$p->getPosition()] = array($p->getId(), $p->getTitle());
                }
            }
        }
        //Instancier une "réponse" grâce à l'objet "Response"
        $response = new JsonResponse($list_pathId);
        //Lui indiquer le type de format dans le quelle est envoyé la reponse
        $response->headers->set('Content-Type', 'application/json');
        //Retourner le tout à notre liste déroulante
        return $response ;
    }

    public function remplipathidvalidationAction() {
        $response = 'PointWebProductBundle:ProductCategory';
        return $response;
    }


}
