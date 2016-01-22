<?php

/* PointWebProductBundle:Default:product_of_category.html.twig */
class __TwigTemplate_2b34cfa860523b23f4f62c31c8b8245c2ebcc9849875493c525b346fc05785bc extends Twig_Template
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
        $__internal_0d45fa67c7f5ad61946e6f71dd8bcf0a9938681025e76975a87e56e1fe56914e = $this->env->getExtension("native_profiler");
        $__internal_0d45fa67c7f5ad61946e6f71dd8bcf0a9938681025e76975a87e56e1fe56914e->enter($__internal_0d45fa67c7f5ad61946e6f71dd8bcf0a9938681025e76975a87e56e1fe56914e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Default:product_of_category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d45fa67c7f5ad61946e6f71dd8bcf0a9938681025e76975a87e56e1fe56914e->leave($__internal_0d45fa67c7f5ad61946e6f71dd8bcf0a9938681025e76975a87e56e1fe56914e_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_669d2d5117e7ddd3babfd97fda51b60384770d383e5a16b64fa4763dc9ade91d = $this->env->getExtension("native_profiler");
        $__internal_669d2d5117e7ddd3babfd97fda51b60384770d383e5a16b64fa4763dc9ade91d->enter($__internal_669d2d5117e7ddd3babfd97fda51b60384770d383e5a16b64fa4763dc9ade91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "
";
        
        $__internal_669d2d5117e7ddd3babfd97fda51b60384770d383e5a16b64fa4763dc9ade91d->leave($__internal_669d2d5117e7ddd3babfd97fda51b60384770d383e5a16b64fa4763dc9ade91d_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c6b54145f515bd813e6bbbf2172cb4a5cc456b2877a73dfddba86576e81fa466 = $this->env->getExtension("native_profiler");
        $__internal_c6b54145f515bd813e6bbbf2172cb4a5cc456b2877a73dfddba86576e81fa466->enter($__internal_c6b54145f515bd813e6bbbf2172cb4a5cc456b2877a73dfddba86576e81fa466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "resum", array()), "html", null, true);
            echo "</p>
        </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>
    <!-- /.row -->

";
        
        $__internal_c6b54145f515bd813e6bbbf2172cb4a5cc456b2877a73dfddba86576e81fa466->leave($__internal_c6b54145f515bd813e6bbbf2172cb4a5cc456b2877a73dfddba86576e81fa466_prof);

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
        return array (  126 => 39,  116 => 35,  111 => 33,  107 => 31,  101 => 29,  93 => 27,  91 => 26,  87 => 24,  83 => 23,  72 => 15,  67 => 13,  61 => 10,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
/*             <p>{{ entity.resum }}</p>*/
/*         </div>*/
/* */
/*         {% endfor %}*/
/*     </div>*/
/*     <!-- /.row -->*/
/* */
/* {% endblock %}*/
/* */
