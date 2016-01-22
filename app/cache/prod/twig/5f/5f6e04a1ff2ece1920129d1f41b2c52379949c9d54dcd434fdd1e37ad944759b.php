<?php

/* PointWebPartnerBundle:Default:all_partners.html.twig */
class __TwigTemplate_cce63858791f9fd160201a0cb5fb93735791a7f5e69f3b6a266c1a2d8323f538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebPartnerBundle:Default:all_partners.html.twig", 1);
        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e945df062cccad7eb155a2e59859f9fb1c3d33f2b4d81d29c92f7d5dda1845ab = $this->env->getExtension("native_profiler");
        $__internal_e945df062cccad7eb155a2e59859f9fb1c3d33f2b4d81d29c92f7d5dda1845ab->enter($__internal_e945df062cccad7eb155a2e59859f9fb1c3d33f2b4d81d29c92f7d5dda1845ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:Default:all_partners.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e945df062cccad7eb155a2e59859f9fb1c3d33f2b4d81d29c92f7d5dda1845ab->leave($__internal_e945df062cccad7eb155a2e59859f9fb1c3d33f2b4d81d29c92f7d5dda1845ab_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_7660db8bc6f4cb5bffe90301f6c142d8b1910a562753cd1753d4bea8b4a9922c = $this->env->getExtension("native_profiler");
        $__internal_7660db8bc6f4cb5bffe90301f6c142d8b1910a562753cd1753d4bea8b4a9922c->enter($__internal_7660db8bc6f4cb5bffe90301f6c142d8b1910a562753cd1753d4bea8b4a9922c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "
";
        
        $__internal_7660db8bc6f4cb5bffe90301f6c142d8b1910a562753cd1753d4bea8b4a9922c->leave($__internal_7660db8bc6f4cb5bffe90301f6c142d8b1910a562753cd1753d4bea8b4a9922c_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_98c3409e2cfca6b5158f48e8d9ef3482493cb898c9a5f860c7e188c8c1c3b3fc = $this->env->getExtension("native_profiler");
        $__internal_98c3409e2cfca6b5158f48e8d9ef3482493cb898c9a5f860c7e188c8c1c3b3fc->enter($__internal_98c3409e2cfca6b5158f48e8d9ef3482493cb898c9a5f860c7e188c8c1c3b3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_menu"]) ? $context["current_menu"] : $this->getContext($context, "current_menu")), "title", array()), "html", null, true);
        echo "
                </h1>

                ";
        // line 14
        echo "                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\">Accueil</a></li>
                    <li class=\"active\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_menu"]) ? $context["current_menu"] : $this->getContext($context, "current_menu")), "title", array()), "html", null, true);
        echo "</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
    <div class=\"row\">
        <section class=\"filter-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-xs-12\">
                        <div class=\"filter-container isotopeFilters\">
                            <ul class=\"list-inline filter\">
                                <li class=\"active\"><a href=\"#\" data-filter=\"*\">All </a><span>/</span></li>
                                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 30
            echo "                                    <li><a href=\"#\" data-filter=\".filter";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "</a><span>/</span></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class=\"portfolio-section port-col\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"isotopeContainer\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 45
            echo "                        <div class=\"col-sm-3 isotopeSelector filter";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "partnerCategory", array()), "html", null, true);
            echo "\">
                            <article class=\"\">
                                <figure>
                                    <img class=\"img-responsive\" src=\"../../web/";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "AssetPath", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "name", array()), "html", null, true);
            echo "\">
                                    <div class=\"overlay-background\">
                                        <div class=\"inner\"></div>
                                    </div>
                                    <div class=\"overlay\">
                                        <div class=\"inner-overlay\">
                                            <div class=\"inner-overlay-content with-icons\">
                                                <i class=\"fa fa-search\"></i>
                                                <a href=\"#\"><i class=\"fa fa-link\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                                <div class=\"article-title\"><a href=\"#\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</a></div>
                            </article>
                        </div>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "

                    </div>
                </div>
            </div>
        </section>

        <!-- /4 Column Portfolio -->
    </div> <!--end row -->
<!-- /.row -->
";
        
        $__internal_98c3409e2cfca6b5158f48e8d9ef3482493cb898c9a5f860c7e188c8c1c3b3fc->leave($__internal_98c3409e2cfca6b5158f48e8d9ef3482493cb898c9a5f860c7e188c8c1c3b3fc_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:Default:all_partners.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 65,  148 => 61,  130 => 48,  123 => 45,  119 => 44,  105 => 32,  94 => 30,  90 => 29,  74 => 16,  70 => 15,  67 => 14,  61 => 10,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block slider %}*/
/* */
/* {% endblock %}*/
/* {% block content %}*/
/*         <!-- Page Heading/Breadcrumbs -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">*/
/*                     {{ current_menu.title }}*/
/*                 </h1>*/
/* */
/*                 {#{ knp_menu_render('breadcrumb', {'currentClass': 'active'}) }#}*/
/*                 <ol class="breadcrumb">*/
/*                     <li><a href="{{ path('point_web_app_homepage')}}">Accueil</a></li>*/
/*                     <li class="active">{{ current_menu.title }}</li>*/
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/*     <div class="row">*/
/*         <section class="filter-section">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-12 col-xs-12">*/
/*                         <div class="filter-container isotopeFilters">*/
/*                             <ul class="list-inline filter">*/
/*                                 <li class="active"><a href="#" data-filter="*">All </a><span>/</span></li>*/
/*                                 {% for category in categories %}*/
/*                                     <li><a href="#" data-filter=".filter{{ category.title }}">{{ category.title }}</a><span>/</span></li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/* */
/*         <section class="portfolio-section port-col">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="isotopeContainer">*/
/*                     {% for entity in entities %}*/
/*                         <div class="col-sm-3 isotopeSelector filter{{ entity.partnerCategory }}">*/
/*                             <article class="">*/
/*                                 <figure>*/
/*                                     <img class="img-responsive" src="../../web/{{ entity.image.AssetPath }}" alt="{{ entity.image.name }}">*/
/*                                     <div class="overlay-background">*/
/*                                         <div class="inner"></div>*/
/*                                     </div>*/
/*                                     <div class="overlay">*/
/*                                         <div class="inner-overlay">*/
/*                                             <div class="inner-overlay-content with-icons">*/
/*                                                 <i class="fa fa-search"></i>*/
/*                                                 <a href="#"><i class="fa fa-link"></i></a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </figure>*/
/*                                 <div class="article-title"><a href="#">{{ entity.title }}</a></div>*/
/*                             </article>*/
/*                         </div>*/
/*                    {% endfor %}*/
/* */
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/* */
/*         <!-- /4 Column Portfolio -->*/
/*     </div> <!--end row -->*/
/* <!-- /.row -->*/
/* {% endblock %}*/
