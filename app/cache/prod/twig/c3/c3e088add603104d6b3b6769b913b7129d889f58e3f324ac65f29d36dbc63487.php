<?php

/* PointWebAdminBundle::_left_admin.html.twig */
class __TwigTemplate_8e496b030d5bb0f5b1656b5bcef8cb0faaade9a6ec7aea92741f94ed5f426c21 extends Twig_Template
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
        $__internal_19b57045d57e94785f98e05b3eae09fd60fd5d8de4d39c8a8aa5587a998f6040 = $this->env->getExtension("native_profiler");
        $__internal_19b57045d57e94785f98e05b3eae09fd60fd5d8de4d39c8a8aa5587a998f6040->enter($__internal_19b57045d57e94785f98e05b3eae09fd60fd5d8de4d39c8a8aa5587a998f6040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::_left_admin.html.twig"));

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
        $this->loadTemplate("PointWebAdminBundle::menu_admin.html.twig", "PointWebAdminBundle::_left_admin.html.twig", 18)->display($context);
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
        
        $__internal_19b57045d57e94785f98e05b3eae09fd60fd5d8de4d39c8a8aa5587a998f6040->leave($__internal_19b57045d57e94785f98e05b3eae09fd60fd5d8de4d39c8a8aa5587a998f6040_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle::_left_admin.html.twig";
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
