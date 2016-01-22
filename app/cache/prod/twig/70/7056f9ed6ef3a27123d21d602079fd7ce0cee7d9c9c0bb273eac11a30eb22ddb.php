<?php

/* PointWebProductBundle:Default:product_of_category.html.twig */
class __TwigTemplate_0d3a63f42b0272fb2a2b39bb83d8a2fee92f6c269054d42e9dca158eded3c06d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebProductBundle:Default:product_of_category.html.twig", 1);
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
        $__internal_b386cd0276372ed0e0d646b50493ced50e359d544824937df114fba73525080e = $this->env->getExtension("native_profiler");
        $__internal_b386cd0276372ed0e0d646b50493ced50e359d544824937df114fba73525080e->enter($__internal_b386cd0276372ed0e0d646b50493ced50e359d544824937df114fba73525080e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Default:product_of_category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b386cd0276372ed0e0d646b50493ced50e359d544824937df114fba73525080e->leave($__internal_b386cd0276372ed0e0d646b50493ced50e359d544824937df114fba73525080e_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_9160eac27b2210a718ff5d18252fdb9bbd35b3cb328ff25d4176dee3121e4d3c = $this->env->getExtension("native_profiler");
        $__internal_9160eac27b2210a718ff5d18252fdb9bbd35b3cb328ff25d4176dee3121e4d3c->enter($__internal_9160eac27b2210a718ff5d18252fdb9bbd35b3cb328ff25d4176dee3121e4d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "
";
        
        $__internal_9160eac27b2210a718ff5d18252fdb9bbd35b3cb328ff25d4176dee3121e4d3c->leave($__internal_9160eac27b2210a718ff5d18252fdb9bbd35b3cb328ff25d4176dee3121e4d3c_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b8a7ced1546c8650d4a04b38e76d361b64ac8469589ae977ab30204776d97a9 = $this->env->getExtension("native_profiler");
        $__internal_2b8a7ced1546c8650d4a04b38e76d361b64ac8469589ae977ab30204776d97a9->enter($__internal_2b8a7ced1546c8650d4a04b38e76d361b64ac8469589ae977ab30204776d97a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title", array()), "html", null, true);
        echo "
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\">Accueil</a>
                </li>
                <li class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title", array()), "html", null, true);
        echo "</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class=\"row\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "        <div class=\"col-md-4 img-portfolio\">
            <a href=\"portfolio-item.html\">
                ";
            // line 26
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "pictures", array())) > 0)) {
                // line 27
                echo "                    <img class=\"img-responsive img-hover\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "name", array()), "html", null, true);
                echo "\">
                ";
            } else {
                // line 29
                echo "                    <img class=\"img-responsive img-hover\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/sans_image_700x450.jpg"), "html", null, true);
                echo "\" alt=\"http://placehold.it/700x450\">
                ";
            }
            // line 31
            echo "            </a>
            <h3>
                <a href=\"portfolio-item.html\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</a>
            </h3>
            <p>";
            // line 35
            echo twig_truncate_filter($this->env, $this->getAttribute($context["entity"], "resum", array()), 200, false, "...");
            echo "</p>
        </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>
    ";
        // line 40
        $this->loadTemplate("PointWebAppBundle::_pager.html.twig", "PointWebProductBundle:Default:product_of_category.html.twig", 40)->display($context);
        // line 41
        echo "    <!-- /.row -->

";
        
        $__internal_2b8a7ced1546c8650d4a04b38e76d361b64ac8469589ae977ab30204776d97a9->leave($__internal_2b8a7ced1546c8650d4a04b38e76d361b64ac8469589ae977ab30204776d97a9_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Default:product_of_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 41,  129 => 40,  126 => 39,  116 => 35,  111 => 33,  107 => 31,  101 => 29,  93 => 27,  91 => 26,  87 => 24,  83 => 23,  72 => 15,  67 => 13,  61 => 10,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block slider %}*/
/* */
/* {% endblock %}*/
/* {% block content %}*/
/*     <!-- Page Heading/Breadcrumbs -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1 class="page-header">*/
/*                 {{ category.title }}*/
/*             </h1>*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="{{ path('point_web_app_homepage')}}">Accueil</a>*/
/*                 </li>*/
/*                 <li class="active">{{ category.title }}</li>*/
/*             </ol>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.row -->*/
/* */
/*     <!-- Projects Row -->*/
/*     <div class="row">*/
/*         {% for entity in entities %}*/
/*         <div class="col-md-4 img-portfolio">*/
/*             <a href="portfolio-item.html">*/
/*                 {% if entity.pictures|length >0 %}*/
/*                     <img class="img-responsive img-hover" src="{{ asset(entity.pictures[0].getWebPath(base)) }}" alt="{{ entity.pictures[0].name }}">*/
/*                 {% else %}*/
/*                     <img class="img-responsive img-hover" src="{{ asset('images/sans_image_700x450.jpg') }}" alt="http://placehold.it/700x450">*/
/*                 {% endif %}*/
/*             </a>*/
/*             <h3>*/
/*                 <a href="portfolio-item.html">{{ entity.title }}</a>*/
/*             </h3>*/
/*             <p>{{ entity.resum | truncate(200, false, '...') | raw }}</p>*/
/*         </div>*/
/* */
/*         {% endfor %}*/
/*     </div>*/
/*     {% include 'PointWebAppBundle::_pager.html.twig' %}*/
/*     <!-- /.row -->*/
/* */
/* {% endblock %}*/
/* */
