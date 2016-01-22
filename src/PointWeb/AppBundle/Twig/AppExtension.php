<?php
/**
 * Created by PhpStorm.
 * User: a.verilhac
 * Date: 16/07/2015
 * Time: 11:34
 */

namespace PointWeb\AppBundle\Twig;

use PointWeb\AdminBundle\Entity\File;
use PointWeb\AdminBundle\Entity\Menu;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('displayMenu', array($this, 'displayMenu')),
        );
    }

    public function displayMenu($menus, $displayPictures = false)
    {
        $menu_twig = "<ul>";
        /** @var Menu $menu */
        foreach ($menus as $menu) {
            $menu_twig .= "<li>";
            if ($displayPictures && count($menu->getPictures()) > 0) {
                /** @var File $picture */
                foreach ($menu->getPictures() as $picture) {
                    $menu_twig .= "<img src='" . $picture->getWebPath($this->container->getParameter('base')) . "' alt='" . $picture->getName() . "' />";
                }
            }

            $menu_twig .= "<a href='" . $menu->getPath() . "'>" . $menu->getTitle() . "</a>";
            if (count($menu->getChildrens()) > 0) {
                $menu_twig .= $this->displayMenu($menu->getChildrens(), $displayPictures);
            }
            $menu_twig .= "</li>";

        }
        return $menu_twig;
    }

    public function getName()
    {
        return 'app_extension';
    }
}