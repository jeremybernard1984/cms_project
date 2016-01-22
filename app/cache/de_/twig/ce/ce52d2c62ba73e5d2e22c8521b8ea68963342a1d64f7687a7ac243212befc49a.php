<?php

/* @PointWebAdmin/_left_admin.html.twig */
class __TwigTemplate_dbf87ffcf70d2487d517020a321f57430a59ef1fa9b4e568f9ac3e3bfed9c67a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eab840d7f5781f42dcc19863fd5571089433b7b2d7547db75eeeb710547d5d6b = $this->env->getExtension("native_profiler");
        $__internal_eab840d7f5781f42dcc19863fd5571089433b7b2d7547db75eeeb710547d5d6b->enter($__internal_eab840d7f5781f42dcc19863fd5571089433b7b2d7547db75eeeb710547d5d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebAdmin/_left_admin.html.twig"));

        // line 1
        echo "<div class=\"navbar-default sidebar\" role=\"navigation\">
    <div class=\"sidebar-nav navbar-collapse\">
        <ul class=\"nav\" id=\"side-menu\">
            ";
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAdminBundle:Default:userInfoAdmin"));
        echo "
            <!--
            <li class=\"sidebar-search\">
                <div class=\"input-group custom-search-form\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                </div>

            </li>
            -->
            ";
        // line 18
        $this->loadTemplate("PointWebAdminBundle::menu_admin.html.twig", "@PointWebAdmin/_left_admin.html.twig", 18)->display($context);
        // line 19
        echo "

            <!-- EXEMPLE MENU 3 NIVEAUX
            <li>
                <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Multi-Level Dropdown<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"#\">Second Level Item</a>
                    </li>
                    <li>
                        <a href=\"#\">Third Level <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-third-level\">
                            <li>
                                <a href=\"#\">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level
                    </li>
                </ul>
                <!-- /.nav-second-level
            </li>
            -->

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->";
        
        $__internal_eab840d7f5781f42dcc19863fd5571089433b7b2d7547db75eeeb710547d5d6b->leave($__internal_eab840d7f5781f42dcc19863fd5571089433b7b2d7547db75eeeb710547d5d6b_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebAdmin/_left_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 19,  44 => 18,  27 => 4,  22 => 1,);
    }
}
/* <div class="navbar-default sidebar" role="navigation">*/
/*     <div class="sidebar-nav navbar-collapse">*/
/*         <ul class="nav" id="side-menu">*/
/*             {{ render(controller("PointWebAdminBundle:Default:userInfoAdmin")) }}*/
/*             <!--*/
/*             <li class="sidebar-search">*/
/*                 <div class="input-group custom-search-form">*/
/*                     <input type="text" class="form-control" placeholder="Search...">*/
/*                                 <span class="input-group-btn">*/
/*                                 <button class="btn btn-default" type="button">*/
/*                                     <i class="fa fa-search"></i>*/
/*                                 </button>*/
/*                             </span>*/
/*                 </div>*/
/* */
/*             </li>*/
/*             -->*/
/*             {%  include 'PointWebAdminBundle::menu_admin.html.twig' %}*/
/* */
/* */
/*             <!-- EXEMPLE MENU 3 NIVEAUX*/
/*             <li>*/
/*                 <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>*/
/*                 <ul class="nav nav-second-level">*/
/*                     <li>*/
/*                         <a href="#">Second Level Item</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">Third Level <span class="fa arrow"></span></a>*/
/*                         <ul class="nav nav-third-level">*/
/*                             <li>*/
/*                                 <a href="#">Third Level Item</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <!-- /.nav-third-level*/
/*                     </li>*/
/*                 </ul>*/
/*                 <!-- /.nav-second-level*/
/*             </li>*/
/*             -->*/
/* */
/*         </ul>*/
/*     </div>*/
/*     <!-- /.sidebar-collapse -->*/
/* </div>*/
/* <!-- /.navbar-static-side -->*/
