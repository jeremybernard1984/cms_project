<?php

namespace PointWeb\AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Doctrine\ORM\Entitymanager;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder
{
    private $factory;
    private $em;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory, Entitymanager $em)
    {
        $this->factory = $factory;
        $this->em = $em;
    }

    public function createMainMenu()
    {

        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');

        // Récupération de la liste des menus.
        $listMenuAll = $this->em->getRepository('PointWebAdminBundle:Menu')->childrenHierarchy();
        // Démarrage à partir de la racine
        foreach ($listMenuAll[0]['__children'] as $listMenuLv1) {
            if ($listMenuLv1['mainMenu'] == 1){
            // Lvl 1
            if (empty($listMenuLv1['__children'])) {
                $enfants = false;
            } else {
                $enfants = true;
            }
            $menu->addChild($listMenuLv1['title'], array(
                'route' => $listMenuLv1['path'],
                'routeParameters' => array('id' => $listMenuLv1['pathId'])
            ))
                ->setAttribute('dropdown', $enfants);
            //->setAttribute('icon', 'icon-user')
            foreach ($listMenuLv1['__children'] as $listMenuLv2) {
                // Lvl 2
                if (empty($listMenuLv2['__children'])) {
                    $subEnfants = false;
                } else {
                    $subEnfants = true;
                }
                //{{ path('category_show',  { 'id': item.id }) }}
                $Lv2 = $menu[$listMenuLv1['title']]->addChild($listMenuLv2['title'], array(
                    'route' => $listMenuLv2['path'],
                    'routeParameters' => array('id' => $listMenuLv2['pathId'])
                ))
                    ->setAttribute('sub_dropdown', $subEnfants);
                foreach ($listMenuLv2['__children'] as $listMenuLv3) {
                    // Lvl 3
                    if (empty($listMenuLv3['__children'])) {
                        $subEnfants = false;
                    } else {
                        $subEnfants = true;
                    }
                    $Lv3 = $Lv2->addChild($listMenuLv3['title'], array(
                        'route' => $listMenuLv3['path'],
                        'routeParameters' => array('id' => $listMenuLv3['pathId'])
                    ))
                        ->setAttribute('sub_dropdown', $subEnfants);
                    foreach ($listMenuLv3['__children'] as $listMenuLv4) {
                        // Lvl 4
                        if (empty($listMenuLv4['__children'])) {
                            $subEnfants = false;
                        } else {
                            $subEnfants = true;
                        }
                        $Lv4 = $Lv3->addChild($listMenuLv4['title'], array('route' => $listMenuLv4['path']))
                            ->setAttribute('sub_dropdown', $subEnfants);
                        foreach ($listMenuLv4['__children'] as $listMenuLv5) {
                            // Lvl 5
                            if (empty($listMenuLv5['__children'])) {
                                $subEnfants = false;
                            } else {
                                $subEnfants = true;
                            }
                            $Lv5 = $Lv4->addChild($listMenuLv5['title'], array('route' => $listMenuLv5['path']))
                                ->setAttribute('sub_dropdown', $subEnfants);
                            foreach ($listMenuLv5['__children'] as $listMenuLv6) {
                                // Lvl 6
                                if (empty($listMenuLv6['__children'])) {
                                    $subEnfants = false;
                                } else {
                                    $subEnfants = true;
                                }
                                $Lv6 = $Lv5->addChild($listMenuLv6['title'], array('route' => $listMenuLv6['path']))
                                    ->setAttribute('sub_dropdown', $subEnfants);
                                foreach ($listMenuLv6['__children'] as $listMenuLv7) {
                                    // Lvl 7
                                    if (empty($listMenuLv7['__children'])) {
                                        $subEnfants = false;
                                    } else {
                                        $subEnfants = true;
                                    }
                                    $Lv7 = $Lv6->addChild($listMenuLv7['title'], array('route' => $listMenuLv7['path']))
                                        ->setAttribute('sub_dropdown', $subEnfants);
                                    foreach ($listMenuLv7['__children'] as $listMenuLv8) {
                                        // Lvl 8
                                        if (empty($listMenuLv8['__children'])) {
                                            $subEnfants = false;
                                        } else {
                                            $subEnfants = true;
                                        }
                                        $Lv8 = $Lv7->addChild($listMenuLv8['title'], array('route' => $listMenuLv8['path']))
                                            ->setAttribute('sub_dropdown', $subEnfants);
                                        foreach ($listMenuLv8['__children'] as $listMenuLv9) {
                                            // Lvl 9
                                            if (empty($listMenuLv9['__children'])) {
                                                $subEnfants = false;
                                            } else {
                                                $subEnfants = true;
                                            }
                                            $Lv9 = $Lv8->addChild($listMenuLv9['title'], array('route' => $listMenuLv9['path']))
                                                ->setAttribute('sub_dropdown', $subEnfants);
                                            foreach ($listMenuLv9['__children'] as $listMenuLv10) {
                                                // Lvl 10
                                                if (empty($listMenuLv10['__children'])) {
                                                    $subEnfants = false;
                                                } else {
                                                    $subEnfants = true;
                                                }
                                                $Lv10 = $Lv9->addChild($listMenuLv10['title'], array('route' => $listMenuLv10['path']))
                                                    ->setAttribute('sub_dropdown', $subEnfants);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        }
        //Ajout de la page contact
        $menu->addChild('Contact', array('route' => 'point_web_app_contact'));
        return $menu;
    }


    public function createBreadcrumbMenu(Request $request)
    {

        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'breadcrumb');
        $menu->addChild('Accueil', array('route' => 'point_web_app_homepage'));

        $current_route = $request->get('_route');

        //var_dump($current_route." Current");
        $listMenuAll = $this->em->getRepository('PointWebAdminBundle:Menu')->childrenHierarchy();
        // Démarrage à partir de la racine
        foreach ($listMenuAll[0]['__children'] as $listMenuLv1) {
            if ($listMenuLv1['mainMenu'] == 1){
                //var_dump($listMenuLv1);
                // Lvl 1
                if (empty($listMenuLv1['__children'])) {
                    $enfants = false;
                } else {
                    $enfants = true;
                }
                $menu->addChild($listMenuLv1['title'], array(
                    'route' => $listMenuLv1['path'],
                    'routeParameters' => array('id' => $listMenuLv1['pathId'])
                ));
                //->setAttribute('icon', 'icon-user')
                foreach ($listMenuLv1['__children'] as $listMenuLv2) {
                    // Lvl 2
                    if (empty($listMenuLv2['__children'])) {
                        $subEnfants = false;
                    } else {
                        $subEnfants = true;
                    }
                    //{{ path('category_show',  { 'id': item.id }) }}
                    $Lv2 = $menu[$listMenuLv1['title']]->addChild($listMenuLv2['title'], array(
                        'route' => $listMenuLv2['path'],
                        'routeParameters' => array('id' => $listMenuLv2['pathId'])
                    ));

                }
            }
        }
        return $menu;
    }





}