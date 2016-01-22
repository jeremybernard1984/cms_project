<?php

/* PointWebNewsBundle:Default:all_news.html.twig */
class __TwigTemplate_343dba73cc4fbddd01cfb13533e8dfc82564f238a74d5f93f370784e7d25991b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebNewsBundle:Default:all_news.html.twig", 1);
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
        $__internal_837b06401ae2c5814917f10d5db915235d2c7d24f221bc869081ff9a34a8ad29 = $this->env->getExtension("native_profiler");
        $__internal_837b06401ae2c5814917f10d5db915235d2c7d24f221bc869081ff9a34a8ad29->enter($__internal_837b06401ae2c5814917f10d5db915235d2c7d24f221bc869081ff9a34a8ad29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebNewsBundle:Default:all_news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_837b06401ae2c5814917f10d5db915235d2c7d24f221bc869081ff9a34a8ad29->leave($__internal_837b06401ae2c5814917f10d5db915235d2c7d24f221bc869081ff9a34a8ad29_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_1479290469b33fd1b15eea315d6229807386f8523cc333bec9090f1c7303766f = $this->env->getExtension("native_profiler");
        $__internal_1479290469b33fd1b15eea315d6229807386f8523cc333bec9090f1c7303766f->enter($__internal_1479290469b33fd1b15eea315d6229807386f8523cc333bec9090f1c7303766f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "
";
        
        $__internal_1479290469b33fd1b15eea315d6229807386f8523cc333bec9090f1c7303766f->leave($__internal_1479290469b33fd1b15eea315d6229807386f8523cc333bec9090f1c7303766f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_106a9b66883d506c6573e9964e8033e17255878ca1440ab3c857e91ae660f37d = $this->env->getExtension("native_profiler");
        $__internal_106a9b66883d506c6573e9964e8033e17255878ca1440ab3c857e91ae660f37d->enter($__internal_106a9b66883d506c6573e9964e8033e17255878ca1440ab3c857e91ae660f37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_106a9b66883d506c6573e9964e8033e17255878ca1440ab3c857e91ae660f37d->leave($__internal_106a9b66883d506c6573e9964e8033e17255878ca1440ab3c857e91ae660f37d_prof);

    }

    public function getTemplateName()
    {
        return "PointWebNewsBundle:Default:all_news.html.twig";
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
