<?php

/* @PointWebNews/Default/all_news.html.twig */
class __TwigTemplate_11fd8cb50431ffc88cb21cd2ccc2e2c31c98faff35a2a7c72885d296c74220cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "@PointWebNews/Default/all_news.html.twig", 1);
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
        $__internal_31d18914d6914ccd976295a6c36aa50f0b21152f2c6a1284648029b3cd8810dd = $this->env->getExtension("native_profiler");
        $__internal_31d18914d6914ccd976295a6c36aa50f0b21152f2c6a1284648029b3cd8810dd->enter($__internal_31d18914d6914ccd976295a6c36aa50f0b21152f2c6a1284648029b3cd8810dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebNews/Default/all_news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31d18914d6914ccd976295a6c36aa50f0b21152f2c6a1284648029b3cd8810dd->leave($__internal_31d18914d6914ccd976295a6c36aa50f0b21152f2c6a1284648029b3cd8810dd_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_7510606f396272073c3ef99ed12450db74106d6401cd6f62290420715f0ac25f = $this->env->getExtension("native_profiler");
        $__internal_7510606f396272073c3ef99ed12450db74106d6401cd6f62290420715f0ac25f->enter($__internal_7510606f396272073c3ef99ed12450db74106d6401cd6f62290420715f0ac25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "
";
        
        $__internal_7510606f396272073c3ef99ed12450db74106d6401cd6f62290420715f0ac25f->leave($__internal_7510606f396272073c3ef99ed12450db74106d6401cd6f62290420715f0ac25f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a735031e5139fc8fdeda1bf64e7410a114ac8bd331862321c7ddc08159b009e1 = $this->env->getExtension("native_profiler");
        $__internal_a735031e5139fc8fdeda1bf64e7410a114ac8bd331862321c7ddc08159b009e1->enter($__internal_a735031e5139fc8fdeda1bf64e7410a114ac8bd331862321c7ddc08159b009e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_menu"]) ? $context["current_menu"] : $this->getContext($context, "current_menu")), "title", array()), "html", null, true);
        echo "
            </h1>

            ";
        // line 15
        echo "            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\">Accueil</a></li>
                <li class=\"active\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_menu"]) ? $context["current_menu"] : $this->getContext($context, "current_menu")), "title", array()), "html", null, true);
        echo "</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "        <!-- Post Row -->
        <div class=\"row\">
            <div class=\"col-md-4\">
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_detail", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 27
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "pictures", array())) > 0)) {
                // line 28
                echo "                        <img class=\"img-responsive img-portfolio\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\" data-image=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\">
                    ";
            } else {
                // line 30
                echo "                        <img class=\"img-responsive img-portfolio\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/sans_image_700x450.jpg"), "html", null, true);
                echo "\" alt=\"http://placehold.it/700x450\">
                    ";
            }
            // line 32
            echo "                </a>
            </div>
            <div class=\"col-md-8\">
                <h3><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_detail", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</a></h3>
                <p><i class=\"fa fa-calendar\"></i> ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createDate", array()), "m-d-Y"), "html", null, true);
            echo "</p>
                <p>";
            // line 37
            echo twig_truncate_filter($this->env, $this->getAttribute($context["entity"], "resum", array()), 430, false, "...");
            echo "</p>
                <a class=\"btn btn-primary\" href=";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_detail", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo ">En savoir plus</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    <!-- /.row -->
";
        
        $__internal_a735031e5139fc8fdeda1bf64e7410a114ac8bd331862321c7ddc08159b009e1->leave($__internal_a735031e5139fc8fdeda1bf64e7410a114ac8bd331862321c7ddc08159b009e1_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebNews/Default/all_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  133 => 38,  129 => 37,  125 => 36,  119 => 35,  114 => 32,  108 => 30,  98 => 28,  96 => 27,  92 => 26,  87 => 23,  83 => 22,  75 => 17,  71 => 16,  68 => 15,  62 => 11,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block slider %}*/
/* */
/* {% endblock %}*/
/* {% block content %}*/
/* */
/*     <!-- Page Heading/Breadcrumbs -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1 class="page-header">*/
/*                 {{ current_menu.title }}*/
/*             </h1>*/
/* */
/*             {#{ knp_menu_render('breadcrumb', {'currentClass': 'active'}) }#}*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="{{ path('point_web_app_homepage')}}">Accueil</a></li>*/
/*                 <li class="active">{{ current_menu.title }}</li>*/
/*             </ol>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.row -->*/
/*     {% for entity in entities %}*/
/*         <!-- Post Row -->*/
/*         <div class="row">*/
/*             <div class="col-md-4">*/
/*                 <a href="{{ path('news_detail', {'id':entity.id}) }}">*/
/*                     {% if entity.pictures|length >0 %}*/
/*                         <img class="img-responsive img-portfolio" alt="{{ entity.pictures[0].name }}" src="{{ asset(entity.pictures[0].getWebPath(base)) }}" data-image="{{ asset(entity.pictures[0].getWebPath(base)) }}">*/
/*                     {% else %}*/
/*                         <img class="img-responsive img-portfolio" src="{{ asset('images/sans_image_700x450.jpg') }}" alt="http://placehold.it/700x450">*/
/*                     {% endif %}*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-md-8">*/
/*                 <h3><a href="{{ path('news_detail', {'id':entity.id}) }}">{{ entity.title }}</a></h3>*/
/*                 <p><i class="fa fa-calendar"></i> {{ entity.createDate|date('m-d-Y') }}</p>*/
/*                 <p>{{ entity.resum | truncate(430, false, '...') | raw }}</p>*/
/*                 <a class="btn btn-primary" href={{ path('news_detail', {'id':entity.id}) }}>En savoir plus</a>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/*     <!-- /.row -->*/
/* {% endblock %}*/
