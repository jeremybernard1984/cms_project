<?php

/* @PointWebFaq/Default/all_faq.html.twig */
class __TwigTemplate_c9ffb0c198a640425653cd6aec451fa6fbf80fd3604e0fccdf2f07861be5affd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "@PointWebFaq/Default/all_faq.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65d75b2a80e72d92563e2cb3e2b65fedaecb98b8f8a5ef79b688accdd9eabb14 = $this->env->getExtension("native_profiler");
        $__internal_65d75b2a80e72d92563e2cb3e2b65fedaecb98b8f8a5ef79b688accdd9eabb14->enter($__internal_65d75b2a80e72d92563e2cb3e2b65fedaecb98b8f8a5ef79b688accdd9eabb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebFaq/Default/all_faq.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65d75b2a80e72d92563e2cb3e2b65fedaecb98b8f8a5ef79b688accdd9eabb14->leave($__internal_65d75b2a80e72d92563e2cb3e2b65fedaecb98b8f8a5ef79b688accdd9eabb14_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8331ee7ff1e8d77db9c2e82e04c124333381bfe6b898292e161bb5143ee260d1 = $this->env->getExtension("native_profiler");
        $__internal_8331ee7ff1e8d77db9c2e82e04c124333381bfe6b898292e161bb5143ee260d1->enter($__internal_8331ee7ff1e8d77db9c2e82e04c124333381bfe6b898292e161bb5143ee260d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_menu"]) ? $context["current_menu"] : $this->getContext($context, "current_menu")), "title", array()), "html", null, true);
        echo "
            </h1>
            ";
        // line 10
        echo "            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\">Accueil</a></li>
                <li class=\"active\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_menu"]) ? $context["current_menu"] : $this->getContext($context, "current_menu")), "title", array()), "html", null, true);
        echo "</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-6\">
            <p>";
        // line 19
        echo $this->getAttribute((isset($context["current_menu"]) ? $context["current_menu"] : $this->getContext($context, "current_menu")), "description", array());
        echo "</p>
            <div id=\"carouselPage\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators \">
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["current_menu"]) ? $context["current_menu"] : $this->getContext($context, "current_menu")), "pictures", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 24
            echo "                        <li data-target=\"#carouselPage\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                echo "class =\"active\"";
            }
            echo "></li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </ol>
                <div class=\"carousel-inner\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["current_menu"]) ? $context["current_menu"] : $this->getContext($context, "current_menu")), "pictures", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 29
            echo "                        <div class=\"item ";
            if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                echo "active";
            }
            echo "\">
                            <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            echo "\">
                            <div class=\"carousel-caption\">
                                <h2>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
            echo "</h2>
                            </div>
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </div>

                <a class=\"left carousel-control\" href=\"#carouselPage\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carouselPage\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                </a>
            </div>
        </div>
        <div class=\"col-md-9 col-sm-6\">
            <div class=\"panel-group\" id=\"accordion\">

                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 50
            echo "                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">
                            <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "
                            </a>
                        </h4>
                    </div>
                    <div id=\"collapse";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                echo "in";
            }
            echo "\">
                        <div class=\"panel-body\">
                            ";
            // line 60
            echo $this->getAttribute($context["entity"], "answer", array());
            echo "
                        </div>
                    </div>
                </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
            </div>
         </div>
    </div>
";
        
        $__internal_8331ee7ff1e8d77db9c2e82e04c124333381bfe6b898292e161bb5143ee260d1->leave($__internal_8331ee7ff1e8d77db9c2e82e04c124333381bfe6b898292e161bb5143ee260d1_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebFaq/Default/all_faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 65,  221 => 60,  212 => 58,  205 => 54,  201 => 53,  196 => 50,  179 => 49,  164 => 36,  146 => 32,  141 => 30,  134 => 29,  117 => 28,  113 => 26,  92 => 24,  75 => 23,  68 => 19,  58 => 12,  54 => 11,  51 => 10,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/*     <!-- Page Heading/Breadcrumbs -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1 class="page-header">*/
/*                 {{ current_menu.title }}*/
/*             </h1>*/
/*             {#{ knp_menu_render('breadcrumb', {'currentClass': 'active'}) }#}*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="{{ path('point_web_app_homepage')}}">Accueil</a></li>*/
/*                 <li class="active">{{ current_menu.title }}</li>*/
/*             </ol>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.row -->*/
/*     <div class="row">*/
/*         <div class="col-md-3 col-sm-6">*/
/*             <p>{{ current_menu.description | raw }}</p>*/
/*             <div id="carouselPage" class="carousel slide" data-ride="carousel">*/
/*                 <!-- Indicators -->*/
/*                 <ol class="carousel-indicators ">*/
/*                     {% for picture in current_menu.pictures %}*/
/*                         <li data-target="#carouselPage" data-slide-to="{{  loop.index0 }}" {% if loop.index0 == 0 %}class ="active"{% endif %}></li>*/
/*                     {% endfor %}*/
/*                 </ol>*/
/*                 <div class="carousel-inner">*/
/*                     {% for picture in current_menu.pictures %}*/
/*                         <div class="item {% if loop.index0 == 0 %}active{% endif %}">*/
/*                             <img src="{{ asset(picture.getWebPath(base)) }}">*/
/*                             <div class="carousel-caption">*/
/*                                 <h2>{{ picture.name }}</h2>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/* */
/*                 <a class="left carousel-control" href="#carouselPage" data-slide="prev">*/
/*                     <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                 </a>*/
/*                 <a class="right carousel-control" href="#carouselPage" data-slide="next">*/
/*                     <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-9 col-sm-6">*/
/*             <div class="panel-group" id="accordion">*/
/* */
/*                 {% for entity in entities %}*/
/*                 <div class="panel panel-info">*/
/*                     <div class="panel-heading">*/
/*                         <h4 class="panel-title">*/
/*                             <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ loop.index }}">*/
/*                                 {{ entity.title }}*/
/*                             </a>*/
/*                         </h4>*/
/*                     </div>*/
/*                     <div id="collapse{{ loop.index }}" class="panel-collapse collapse {% if loop.index == 1 %}in{% endif %}">*/
/*                         <div class="panel-body">*/
/*                             {{ entity.answer  | raw }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/* */
/*             </div>*/
/*          </div>*/
/*     </div>*/
/* {% endblock %}*/
