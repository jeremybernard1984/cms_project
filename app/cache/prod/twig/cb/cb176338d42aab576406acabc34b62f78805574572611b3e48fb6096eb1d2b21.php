<?php

/* PointWebProductBundle:Default:product_of_category.html.twig */
class __TwigTemplate_74d41326793bfe0b5aa5e9a1e47eabb2f1f36bd407a06afa075730ca94ef02a4 extends Twig_Template
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
        $__internal_26a4e8354578614637130604883de5c9582a6c3ea6212d16c10a6f2c8e8ca005 = $this->env->getExtension("native_profiler");
        $__internal_26a4e8354578614637130604883de5c9582a6c3ea6212d16c10a6f2c8e8ca005->enter($__internal_26a4e8354578614637130604883de5c9582a6c3ea6212d16c10a6f2c8e8ca005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Default:product_of_category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26a4e8354578614637130604883de5c9582a6c3ea6212d16c10a6f2c8e8ca005->leave($__internal_26a4e8354578614637130604883de5c9582a6c3ea6212d16c10a6f2c8e8ca005_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_8af9320a7c27bb4239d64c9fff6561af814ad2bd36336784758524da49a71564 = $this->env->getExtension("native_profiler");
        $__internal_8af9320a7c27bb4239d64c9fff6561af814ad2bd36336784758524da49a71564->enter($__internal_8af9320a7c27bb4239d64c9fff6561af814ad2bd36336784758524da49a71564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "
";
        
        $__internal_8af9320a7c27bb4239d64c9fff6561af814ad2bd36336784758524da49a71564->leave($__internal_8af9320a7c27bb4239d64c9fff6561af814ad2bd36336784758524da49a71564_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_5dcfa6b6934b784d2104a2974031d8fe2123d3771c7b5894752484aa53b8e762 = $this->env->getExtension("native_profiler");
        $__internal_5dcfa6b6934b784d2104a2974031d8fe2123d3771c7b5894752484aa53b8e762->enter($__internal_5dcfa6b6934b784d2104a2974031d8fe2123d3771c7b5894752484aa53b8e762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

            ";
        // line 14
        echo "            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("all_products");
        echo "\">Nos voyages</a></li>
                <li class=\"active\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title", array()), "html", null, true);
        echo "</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class=\"row\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "        <div class=\"col-md-4\">
            <div class=\"img-portfolio-col3\">
                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_detail", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 29
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "pictures", array())) > 0)) {
                // line 30
                echo "                        <img class=\"img-responsive img-hover\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "name", array()), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 32
                echo "                        <img class=\"img-responsive img-hover\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/sans_image_700x450.jpg"), "html", null, true);
                echo "\" alt=\"http://placehold.it/700x450\">
                    ";
            }
            // line 34
            echo "                </a>
            </div>
            <h4>
                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_detail", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</a>
            </h4>
            <p>";
            // line 39
            echo twig_truncate_filter($this->env, $this->getAttribute($context["entity"], "resum", array()), 200, false, "...");
            echo "</p>
        </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
    ";
        // line 44
        $this->loadTemplate("PointWebAppBundle::_pager.html.twig", "PointWebProductBundle:Default:product_of_category.html.twig", 44)->display($context);
        // line 45
        echo "    <!-- /.row -->

";
        
        $__internal_5dcfa6b6934b784d2104a2974031d8fe2123d3771c7b5894752484aa53b8e762->leave($__internal_5dcfa6b6934b784d2104a2974031d8fe2123d3771c7b5894752484aa53b8e762_prof);

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
        return array (  144 => 45,  142 => 44,  139 => 43,  129 => 39,  122 => 37,  117 => 34,  111 => 32,  103 => 30,  101 => 29,  97 => 28,  93 => 26,  89 => 25,  78 => 17,  74 => 16,  70 => 15,  67 => 14,  61 => 10,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
/* */
/*             {#{ knp_menu_render('breadcrumb', {'currentClass': 'active'}) }#}*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="{{ path('point_web_app_homepage')}}">Accueil</a></li>*/
/*                 <li><a href="{{ path('all_products')}}">Nos voyages</a></li>*/
/*                 <li class="active">{{ category.title }}</li>*/
/*             </ol>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.row -->*/
/* */
/*     <!-- Projects Row -->*/
/*     <div class="row">*/
/*         {% for entity in entities %}*/
/*         <div class="col-md-4">*/
/*             <div class="img-portfolio-col3">*/
/*                 <a href="{{ path('product_detail', {'id':entity.id}) }}">*/
/*                     {% if entity.pictures|length >0 %}*/
/*                         <img class="img-responsive img-hover" src="{{ asset(entity.pictures[0].getWebPath(base)) }}" alt="{{ entity.pictures[0].name }}">*/
/*                     {% else %}*/
/*                         <img class="img-responsive img-hover" src="{{ asset('images/sans_image_700x450.jpg') }}" alt="http://placehold.it/700x450">*/
/*                     {% endif %}*/
/*                 </a>*/
/*             </div>*/
/*             <h4>*/
/*                 <a href="{{ path('product_detail', {'id':entity.id}) }}">{{ entity.title }}</a>*/
/*             </h4>*/
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
