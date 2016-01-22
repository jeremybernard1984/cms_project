<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ap_DevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ap_DevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/category')) {
                // admin_product_category
                if (rtrim($pathinfo, '/') === '/admin/category') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_product_category');
                    }

                    return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductCategoryController::indexAction',  '_route' => 'admin_product_category',);
                }

                // admin_product_category_show
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_category_show')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductCategoryController::showAction',));
                }

                // admin_product_category_new
                if ($pathinfo === '/admin/category/new') {
                    return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductCategoryController::newAction',  '_route' => 'admin_product_category_new',);
                }

                // admin_product_category_create
                if ($pathinfo === '/admin/category/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_product_category_create;
                    }

                    return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductCategoryController::createAction',  '_route' => 'admin_product_category_create',);
                }
                not_admin_product_category_create:

                // admin_product_category_edit
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_category_edit')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductCategoryController::editAction',));
                }

                // admin_product_category_update
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_product_category_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_category_update')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductCategoryController::updateAction',));
                }
                not_admin_product_category_update:

                // admin_product_category_delete
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_product_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_category_delete')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductCategoryController::deleteAction',));
                }
                not_admin_product_category_delete:

                // admin_product_category_submenu
                if (0 === strpos($pathinfo, '/admin/category/submenu') && preg_match('#^/admin/category/submenu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_product_category_submenu;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_category_submenu')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductCategoryController::subMenuAction',));
                }
                not_admin_product_category_submenu:

                // admin_product_category_sort
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_category_sort')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductCategoryController::sortAction',));
                }

                // admin_product_category_down
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/down$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_category_down')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductCategoryController::downAction',));
                }

                // admin_product_category_up
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/up$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_category_up')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductCategoryController::upAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/product')) {
                // admin_product
                if (rtrim($pathinfo, '/') === '/admin/product') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_product');
                    }

                    return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::indexAction',  '_route' => 'admin_product',);
                }

                // admin_product_show
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_show')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::showAction',));
                }

                // admin_product_new
                if ($pathinfo === '/admin/product/new') {
                    return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::newAction',  '_route' => 'admin_product_new',);
                }

                // admin_product_create
                if ($pathinfo === '/admin/product/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_product_create;
                    }

                    return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::createAction',  '_route' => 'admin_product_create',);
                }
                not_admin_product_create:

                // admin_product_edit
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_edit')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::editAction',));
                }

                // admin_product_update
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_product_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_update')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::updateAction',));
                }
                not_admin_product_update:

                // admin_product_delete
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_product_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_delete')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::deleteAction',));
                }
                not_admin_product_delete:

                // admin_product_subcat
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/sub$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_subcat')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::subAction',));
                }

                // admin_product_sort
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_sort')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::sortAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/product')) {
            // all_products
            if ($pathinfo === '/product/all_products') {
                return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\DefaultController::allProductsAction',  '_route' => 'all_products',);
            }

            // product_of_category
            if (preg_match('#^/product/(?P<id>[^/]++)/product_category(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_of_category')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\DefaultController::productOfCategoryAction',  'page' => 1,));
            }

            // product_detail
            if (preg_match('#^/product/(?P<id>[^/]++)/product_detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_detail')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\DefaultController::productDetailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/f')) {
            if (0 === strpos($pathinfo, '/admin/folder')) {
                // admin_folder
                if (rtrim($pathinfo, '/') === '/admin/folder') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_folder');
                    }

                    return array (  '_controller' => 'PointWeb\\GedBundle\\Controller\\FolderController::indexAction',  '_route' => 'admin_folder',);
                }

                // admin_folder_show
                if (preg_match('#^/admin/folder/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_folder_show')), array (  '_controller' => 'PointWeb\\GedBundle\\Controller\\FolderController::showAction',));
                }

                // admin_folder_new
                if ($pathinfo === '/admin/folder/new') {
                    return array (  '_controller' => 'PointWeb\\GedBundle\\Controller\\FolderController::newAction',  '_route' => 'admin_folder_new',);
                }

                // admin_folder_create
                if ($pathinfo === '/admin/folder/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_folder_create;
                    }

                    return array (  '_controller' => 'PointWeb\\GedBundle\\Controller\\FolderController::createAction',  '_route' => 'admin_folder_create',);
                }
                not_admin_folder_create:

                // admin_folder_edit
                if (preg_match('#^/admin/folder/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_folder_edit')), array (  '_controller' => 'PointWeb\\GedBundle\\Controller\\FolderController::editAction',));
                }

                // admin_folder_update
                if (preg_match('#^/admin/folder/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_folder_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_folder_update')), array (  '_controller' => 'PointWeb\\GedBundle\\Controller\\FolderController::updateAction',));
                }
                not_admin_folder_update:

                // admin_folder_delete
                if (preg_match('#^/admin/folder/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_folder_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_folder_delete')), array (  '_controller' => 'PointWeb\\GedBundle\\Controller\\FolderController::deleteAction',));
                }
                not_admin_folder_delete:

                // admin_folder_sort
                if (preg_match('#^/admin/folder/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_folder_sort')), array (  '_controller' => 'PointWeb\\GedBundle\\Controller\\FolderController::sortAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/faq')) {
                // admin_faq
                if (preg_match('#^/admin/faq/(?P<page>[^/]++)/list$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_faq')), array (  '_controller' => 'PointWeb\\FaqBundle\\Controller\\faqController::indexAction',  'page' => 1,));
                }

                // admin_faq_show
                if (preg_match('#^/admin/faq/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_faq_show')), array (  '_controller' => 'PointWeb\\FaqBundle\\Controller\\faqController::showAction',));
                }

                // admin_faq_new
                if ($pathinfo === '/admin/faq/new') {
                    return array (  '_controller' => 'PointWeb\\FaqBundle\\Controller\\faqController::newAction',  '_route' => 'admin_faq_new',);
                }

                // admin_faq_create
                if ($pathinfo === '/admin/faq/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_faq_create;
                    }

                    return array (  '_controller' => 'PointWeb\\FaqBundle\\Controller\\faqController::createAction',  '_route' => 'admin_faq_create',);
                }
                not_admin_faq_create:

                // admin_faq_edit
                if (preg_match('#^/admin/faq/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_faq_edit')), array (  '_controller' => 'PointWeb\\FaqBundle\\Controller\\faqController::editAction',));
                }

                // admin_faq_update
                if (preg_match('#^/admin/faq/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_faq_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_faq_update')), array (  '_controller' => 'PointWeb\\FaqBundle\\Controller\\faqController::updateAction',));
                }
                not_admin_faq_update:

                // admin_faq_delete
                if (preg_match('#^/admin/faq/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_faq_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_faq_delete')), array (  '_controller' => 'PointWeb\\FaqBundle\\Controller\\faqController::deleteAction',));
                }
                not_admin_faq_delete:

                // admin_faq_sort
                if (preg_match('#^/admin/faq/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_faq_sort')), array (  '_controller' => 'PointWeb\\FaqBundle\\Controller\\FaqController::sortAction',));
                }

            }

        }

        // all_faq
        if ($pathinfo === '/faq/all_faq') {
            return array (  '_controller' => 'PointWeb\\FaqBundle\\Controller\\DefaultController::allFaqAction',  '_route' => 'all_faq',);
        }

        if (0 === strpos($pathinfo, '/admin/gallery')) {
            // admin_gallery
            if (preg_match('#^/admin/gallery/(?P<page>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gallery')), array (  '_controller' => 'PointWeb\\GalleryBundle\\Controller\\GalleryController::indexAction',  'page' => 1,));
            }

            // admin_gallery_show
            if (preg_match('#^/admin/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gallery_show')), array (  '_controller' => 'PointWeb\\GalleryBundle\\Controller\\GalleryController::showAction',));
            }

            // admin_gallery_new
            if ($pathinfo === '/admin/gallery/new') {
                return array (  '_controller' => 'PointWeb\\GalleryBundle\\Controller\\GalleryController::newAction',  '_route' => 'admin_gallery_new',);
            }

            // admin_gallery_create
            if ($pathinfo === '/admin/gallery/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_gallery_create;
                }

                return array (  '_controller' => 'PointWeb\\GalleryBundle\\Controller\\GalleryController::createAction',  '_route' => 'admin_gallery_create',);
            }
            not_admin_gallery_create:

            // admin_gallery_edit
            if (preg_match('#^/admin/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gallery_edit')), array (  '_controller' => 'PointWeb\\GalleryBundle\\Controller\\GalleryController::editAction',));
            }

            // admin_gallery_update
            if (preg_match('#^/admin/gallery/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_gallery_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gallery_update')), array (  '_controller' => 'PointWeb\\GalleryBundle\\Controller\\GalleryController::updateAction',));
            }
            not_admin_gallery_update:

            // admin_gallery_delete
            if (preg_match('#^/admin/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_gallery_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gallery_delete')), array (  '_controller' => 'PointWeb\\GalleryBundle\\Controller\\GalleryController::deleteAction',));
            }
            not_admin_gallery_delete:

            // admin_gallery_sort
            if (preg_match('#^/admin/gallery/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_gallery_sort')), array (  '_controller' => 'PointWeb\\GalleryBundle\\Controller\\GalleryController::sortAction',));
            }

        }

        if (0 === strpos($pathinfo, '/gallery')) {
            // all_galleries
            if ($pathinfo === '/gallery/all_galleries') {
                return array (  '_controller' => 'PointWeb\\GalleryBundle\\Controller\\DefaultController::allGalleriesAction',  '_route' => 'all_galleries',);
            }

            // gallery_detail
            if (preg_match('#^/gallery/(?P<id>[^/]++)/gallery_detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gallery_detail')), array (  '_controller' => 'PointWeb\\GalleryBundle\\Controller\\DefaultController::galleryDetailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/guestbook')) {
            // admin_guestbook
            if (preg_match('#^/admin/guestbook/(?P<page>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_guestbook')), array (  '_controller' => 'PointWeb\\GuestbookBundle\\Controller\\GuestbookController::indexAction',  'page' => 1,));
            }

            // admin_guestbook_show
            if (preg_match('#^/admin/guestbook/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_guestbook_show')), array (  '_controller' => 'PointWeb\\GuestbookBundle\\Controller\\GuestbookController::showAction',));
            }

            // admin_guestbook_new
            if ($pathinfo === '/admin/guestbook/new') {
                return array (  '_controller' => 'PointWeb\\GuestbookBundle\\Controller\\GuestbookController::newAction',  '_route' => 'admin_guestbook_new',);
            }

            // admin_guestbook_create
            if ($pathinfo === '/admin/guestbook/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_guestbook_create;
                }

                return array (  '_controller' => 'PointWeb\\GuestbookBundle\\Controller\\GuestbookController::createAction',  '_route' => 'admin_guestbook_create',);
            }
            not_admin_guestbook_create:

            // admin_guestbook_edit
            if (preg_match('#^/admin/guestbook/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_guestbook_edit')), array (  '_controller' => 'PointWeb\\GuestbookBundle\\Controller\\GuestbookController::editAction',));
            }

            // admin_guestbook_update
            if (preg_match('#^/admin/guestbook/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_guestbook_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_guestbook_update')), array (  '_controller' => 'PointWeb\\GuestbookBundle\\Controller\\GuestbookController::updateAction',));
            }
            not_admin_guestbook_update:

            // admin_guestbook_delete
            if (preg_match('#^/admin/guestbook/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_guestbook_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_guestbook_delete')), array (  '_controller' => 'PointWeb\\GuestbookBundle\\Controller\\GuestbookController::deleteAction',));
            }
            not_admin_guestbook_delete:

            // admin_guestbook_sort
            if (preg_match('#^/admin/guestbook/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_guestbook_sort')), array (  '_controller' => 'PointWeb\\GuestbookBundle\\Controller\\GuestbookController::sortAction',));
            }

        }

        if (0 === strpos($pathinfo, '/guestbook')) {
            // all_guestbook
            if (preg_match('#^/guestbook/(?P<page>[^/]++)/all_guestbook$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'all_guestbook')), array (  '_controller' => 'PointWeb\\GuestbookBundle\\Controller\\DefaultController::allGuestbookAction',  'page' => 1,));
            }

            // guestbook_create_invisible
            if ($pathinfo === '/guestbook/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_guestbook_create_invisible;
                }

                return array (  '_controller' => 'PointWeb\\GuestbookBundle\\Controller\\DefaultController::createAction',  '_route' => 'guestbook_create_invisible',);
            }
            not_guestbook_create_invisible:

        }

        if (0 === strpos($pathinfo, '/admin/partner')) {
            // admin_partner
            if (preg_match('#^/admin/partner/(?P<page>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::indexAction',  'page' => 1,));
            }

            // admin_partner_show
            if (preg_match('#^/admin/partner/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_show')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::showAction',));
            }

            // admin_partner_new
            if ($pathinfo === '/admin/partner/new') {
                return array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::newAction',  '_route' => 'admin_partner_new',);
            }

            // admin_partner_create
            if ($pathinfo === '/admin/partner/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_partner_create;
                }

                return array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::createAction',  '_route' => 'admin_partner_create',);
            }
            not_admin_partner_create:

            // admin_partner_edit
            if (preg_match('#^/admin/partner/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_edit')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::editAction',));
            }

            // admin_partner_update
            if (preg_match('#^/admin/partner/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_partner_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_update')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::updateAction',));
            }
            not_admin_partner_update:

            // admin_partner_delete
            if (preg_match('#^/admin/partner/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_partner_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_delete')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::deleteAction',));
            }
            not_admin_partner_delete:

            // admin_partner_sort
            if (preg_match('#^/admin/partner/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_sort')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::sortAction',));
            }

            if (0 === strpos($pathinfo, '/admin/partner_category')) {
                // admin_partner_category
                if (preg_match('#^/admin/partner_category/(?P<page>[^/]++)/list$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_category')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerCategoryController::indexAction',  'page' => 1,));
                }

                // admin_partner_category_show
                if (preg_match('#^/admin/partner_category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_category_show')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerCategoryController::showAction',));
                }

                // admin_partner_category_new
                if ($pathinfo === '/admin/partner_category/new') {
                    return array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerCategoryController::newAction',  '_route' => 'admin_partner_category_new',);
                }

                // admin_partner_category_create
                if ($pathinfo === '/admin/partner_category/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_partner_category_create;
                    }

                    return array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerCategoryController::createAction',  '_route' => 'admin_partner_category_create',);
                }
                not_admin_partner_category_create:

                // admin_partner_category_edit
                if (preg_match('#^/admin/partner_category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_category_edit')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerCategoryController::editAction',));
                }

                // admin_partner_category_update
                if (preg_match('#^/admin/partner_category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_partner_category_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_category_update')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerCategoryController::updateAction',));
                }
                not_admin_partner_category_update:

                // admin_partner_category_delete
                if (preg_match('#^/admin/partner_category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_partner_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_category_delete')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerCategoryController::deleteAction',));
                }
                not_admin_partner_category_delete:

                // admin_partner_category_submenu
                if (0 === strpos($pathinfo, '/admin/partner_category/submenu') && preg_match('#^/admin/partner_category/submenu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_partner_category_submenu;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_category_submenu')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerCategoryController::subMenuAction',));
                }
                not_admin_partner_category_submenu:

                // admin_partner_category_sort
                if (preg_match('#^/admin/partner_category/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_category_sort')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerCategoryController::sortAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/partner')) {
            // all_partners
            if ($pathinfo === '/partner/all_partners') {
                return array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\DefaultController::allPartnersAction',  '_route' => 'all_partners',);
            }

            // partner_of_category
            if (preg_match('#^/partner/(?P<id>[^/]++)/partner_category$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'partner_of_category')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\DefaultController::partnerOfCategoryAction',));
            }

            // partner_detail
            if (preg_match('#^/partner/(?P<id>[^/]++)/partner_detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'partner_detail')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\DefaultController::partnerDetailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/news')) {
            // admin_news
            if (preg_match('#^/admin/news/(?P<page>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::indexAction',  'page' => 1,));
            }

            // admin_news_show
            if (preg_match('#^/admin/news/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_show')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::showAction',));
            }

            // admin_news_new
            if ($pathinfo === '/admin/news/new') {
                return array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::newAction',  '_route' => 'admin_news_new',);
            }

            // admin_news_create
            if ($pathinfo === '/admin/news/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_news_create;
                }

                return array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::createAction',  '_route' => 'admin_news_create',);
            }
            not_admin_news_create:

            // admin_news_edit
            if (preg_match('#^/admin/news/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_edit')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::editAction',));
            }

            // admin_news_update
            if (preg_match('#^/admin/news/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_news_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_update')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::updateAction',));
            }
            not_admin_news_update:

            // admin_news_delete
            if (preg_match('#^/admin/news/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_news_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_delete')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::deleteAction',));
            }
            not_admin_news_delete:

            // admin_news_sort
            if (preg_match('#^/admin/news/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_sort')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::sortAction',));
            }

        }

        if (0 === strpos($pathinfo, '/news')) {
            // all_news
            if ($pathinfo === '/news/all_news') {
                return array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\DefaultController::allNewsAction',  '_route' => 'all_news',);
            }

            // news_detail
            if (preg_match('#^/news/(?P<id>[^/]++)/news_detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_detail')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\DefaultController::newsDetailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/page')) {
            // admin_page
            if (preg_match('#^/admin/page/(?P<page>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page')), array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::indexAction',  'page' => 1,));
            }

            // admin_page_show
            if (preg_match('#^/admin/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_show')), array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::showAction',));
            }

            // admin_page_new
            if ($pathinfo === '/admin/page/new') {
                return array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::newAction',  '_route' => 'admin_page_new',);
            }

            // admin_page_create
            if ($pathinfo === '/admin/page/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_page_create;
                }

                return array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::createAction',  '_route' => 'admin_page_create',);
            }
            not_admin_page_create:

            // admin_page_edit
            if (preg_match('#^/admin/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_edit')), array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::editAction',));
            }

            // admin_page_update
            if (preg_match('#^/admin/page/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_page_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_update')), array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::updateAction',));
            }
            not_admin_page_update:

            // admin_page_delete
            if (preg_match('#^/admin/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_page_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_delete')), array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::deleteAction',));
            }
            not_admin_page_delete:

            // admin_page_sort
            if (preg_match('#^/admin/page/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_sort')), array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::sortAction',));
            }

        }

        if (0 === strpos($pathinfo, '/page')) {
            // all_pages
            if ($pathinfo === '/page/all_pages') {
                return array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\DefaultController::allPagesAction',  '_route' => 'all_pages',);
            }

            // page_detail
            if (preg_match('#^/page/(?P<id>[^/]++)/page_detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_detail')), array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\DefaultController::pageDetailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/map')) {
            // admin_map
            if (preg_match('#^/admin/map/(?P<page>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_map')), array (  '_controller' => 'PointWebMapBundle:Map:index',  'page' => 1,));
            }

            // admin_map_show
            if (preg_match('#^/admin/map/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_map_show')), array (  '_controller' => 'PointWeb\\MapBundle\\Controller\\MapController::showAction',));
            }

            // admin_map_new
            if ($pathinfo === '/admin/map/new') {
                return array (  '_controller' => 'PointWeb\\MapBundle\\Controller\\MapController::newAction',  '_route' => 'admin_map_new',);
            }

            // admin_map_create
            if ($pathinfo === '/admin/map/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_map_create;
                }

                return array (  '_controller' => 'PointWeb\\MapBundle\\Controller\\MapController::createAction',  '_route' => 'admin_map_create',);
            }
            not_admin_map_create:

            // admin_map_edit
            if (preg_match('#^/admin/map/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_map_edit')), array (  '_controller' => 'PointWeb\\MapBundle\\Controller\\MapController::editAction',));
            }

            // admin_map_update
            if (preg_match('#^/admin/map/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_map_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_map_update')), array (  '_controller' => 'PointWeb\\MapBundle\\Controller\\MapController::updateAction',));
            }
            not_admin_map_update:

            // admin_map_delete
            if (preg_match('#^/admin/map/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_map_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_map_delete')), array (  '_controller' => 'PointWeb\\MapBundle\\Controller\\MapController::deleteAction',));
            }
            not_admin_map_delete:

            // admin_map_sort
            if (preg_match('#^/admin/map/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_map_sort')), array (  '_controller' => 'PointWeb\\MapBundle\\Controller\\MapController::sortAction',));
            }

        }

        if (0 === strpos($pathinfo, '/map')) {
            // all_maps
            if ($pathinfo === '/map/all_maps') {
                return array (  '_controller' => 'PointWeb\\MapBundle\\Controller\\DefaultController::allPartnersAction',  '_route' => 'all_maps',);
            }

            // map_detail
            if (preg_match('#^/map/(?P<id>[^/]++)/map_detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'map_detail')), array (  '_controller' => 'PointWeb\\MapBundle\\Controller\\DefaultController::partnerDetailAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/user')) {
            // admin_user
            if (rtrim($pathinfo, '/') === '/admin/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_user');
                }

                return array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
            }

            // admin_user_show
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::showAction',));
            }

            // admin_user_new
            if ($pathinfo === '/admin/user/new') {
                return array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
            }

            // admin_user_create
            if ($pathinfo === '/admin/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_user_create;
                }

                return array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
            }
            not_admin_user_create:

            // admin_user_edit
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::editAction',));
            }

            // admin_user_update
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_update')), array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_admin_user_update:

            // admin_user_delete
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_admin_user_delete:

        }

        // user
        if (rtrim($pathinfo, '/') === '/profile') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user');
            }

            return array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/menu')) {
                // admin_menu
                if (rtrim($pathinfo, '/') === '/admin/menu') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_menu');
                    }

                    return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::indexAction',  '_route' => 'admin_menu',);
                }

                // admin_menu_show
                if (preg_match('#^/admin/menu/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_show')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::showAction',));
                }

                // admin_menu_new
                if ($pathinfo === '/admin/menu/new') {
                    return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::newAction',  '_route' => 'admin_menu_new',);
                }

                // admin_menu_create
                if ($pathinfo === '/admin/menu/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_menu_create;
                    }

                    return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::createAction',  '_route' => 'admin_menu_create',);
                }
                not_admin_menu_create:

                // admin_menu_edit
                if (preg_match('#^/admin/menu/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_edit')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::editAction',));
                }

                // admin_menu_update
                if (preg_match('#^/admin/menu/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_menu_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_update')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::updateAction',));
                }
                not_admin_menu_update:

                // admin_menu_delete
                if (preg_match('#^/admin/menu/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_menu_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_delete')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::deleteAction',));
                }
                not_admin_menu_delete:

                // admin_menu_submenu
                if (0 === strpos($pathinfo, '/admin/menu/submenu') && preg_match('#^/admin/menu/submenu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_menu_submenu;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_submenu')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::subMenuAction',));
                }
                not_admin_menu_submenu:

                // admin_menu_down
                if (preg_match('#^/admin/menu/(?P<id>[^/]++)/down$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_down')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::downAction',));
                }

                // admin_menu_up
                if (preg_match('#^/admin/menu/(?P<id>[^/]++)/up$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_up')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::upAction',));
                }

                // admin_menu_rempli_pathid
                if (0 === strpos($pathinfo, '/admin/menu/remplipathid') && preg_match('#^/admin/menu/remplipathid/(?P<entitySelectOk>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_rempli_pathid')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::remplipathidAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/reglage')) {
                // admin_reglage
                if (rtrim($pathinfo, '/') === '/admin/reglage') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_reglage');
                    }

                    return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\ReglageController::indexAction',  '_route' => 'admin_reglage',);
                }

                // admin_reglage_show
                if (preg_match('#^/admin/reglage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reglage_show')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\ReglageController::showAction',));
                }

                // admin_reglage_new
                if ($pathinfo === '/admin/reglage/new') {
                    return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\ReglageController::newAction',  '_route' => 'admin_reglage_new',);
                }

                // admin_reglage_create
                if ($pathinfo === '/admin/reglage/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_reglage_create;
                    }

                    return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\ReglageController::createAction',  '_route' => 'admin_reglage_create',);
                }
                not_admin_reglage_create:

                // admin_reglage_edit
                if (preg_match('#^/admin/reglage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reglage_edit')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\ReglageController::editAction',));
                }

                // admin_reglage_update
                if (preg_match('#^/admin/reglage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_reglage_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reglage_update')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\ReglageController::updateAction',));
                }
                not_admin_reglage_update:

                // admin_reglage_delete
                if (preg_match('#^/admin/reglage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_reglage_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reglage_delete')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\ReglageController::deleteAction',));
                }
                not_admin_reglage_delete:

            }

            // point_web_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'point_web_admin_homepage');
                }

                return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'point_web_admin_homepage',);
            }

            // point_web_admin_update
            if ($pathinfo === '/admin/upload') {
                return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\DefaultController::uploadAction',  '_route' => 'point_web_admin_update',);
            }

            // point_web_admin_user_entity
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'point_web_admin_user_entity');
                }

                return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\DefaultController::userEntityAction',  '_route' => 'point_web_admin_user_entity',);
            }

            // point_web_admin_delete_file
            if ($pathinfo === '/admin/delete_file') {
                return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\DefaultController::deletefileAction',  '_route' => 'point_web_admin_delete_file',);
            }

        }

        // point_web_app_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'point_web_app_homepage');
            }

            return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'point_web_app_homepage',);
        }

        // point_web_app_legal
        if ($pathinfo === '/legal') {
            return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\DefaultController::legalAction',  '_route' => 'point_web_app_legal',);
        }

        // point_web_app_sitemap
        if ($pathinfo === '/sitemap') {
            return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\DefaultController::sitemapAction',  '_route' => 'point_web_app_sitemap',);
        }

        // point_web_app_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\DefaultController::contactAction',  '_route' => 'point_web_app_contact',);
        }

        // point_web_app_thanks
        if ($pathinfo === '/thanks') {
            return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\DefaultController::thanksAction',  '_route' => 'point_web_app_thanks',);
        }

        if (0 === strpos($pathinfo, '/admin/contact')) {
            // admin_contact
            if (rtrim($pathinfo, '/') === '/admin/contact') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_contact');
                }

                return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::indexAction',  '_route' => 'admin_contact',);
            }

            // admin_contact_show
            if (preg_match('#^/admin/contact/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contact_show')), array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::showAction',));
            }

            // admin_contact_new
            if ($pathinfo === '/admin/contact/new') {
                return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::newAction',  '_route' => 'admin_contact_new',);
            }

            // admin_contact_create
            if ($pathinfo === '/admin/contact/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_contact_create;
                }

                return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::createAction',  '_route' => 'admin_contact_create',);
            }
            not_admin_contact_create:

            // admin_contact_edit
            if (preg_match('#^/admin/contact/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contact_edit')), array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::editAction',));
            }

            // admin_contact_update
            if (preg_match('#^/admin/contact/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_contact_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contact_update')), array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::updateAction',));
            }
            not_admin_contact_update:

            // admin_contact_delete
            if (preg_match('#^/admin/contact/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_contact_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contact_delete')), array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::deleteAction',));
            }
            not_admin_contact_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
