<?php

/* PointWebPageBundle:Default:show.html.twig */
class __TwigTemplate_3d0c1de47b96b20190f96125b8ea641e1ea47b834d00c84fc626dfeb56ed44a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebPageBundle:Default:show.html.twig", 1);
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
        $__internal_f2c2802d302b7e0f3b03c89c19bcc2f45b878ed4c9a140d76ad742853805ad15 = $this->env->getExtension("native_profiler");
        $__internal_f2c2802d302b7e0f3b03c89c19bcc2f45b878ed4c9a140d76ad742853805ad15->enter($__internal_f2c2802d302b7e0f3b03c89c19bcc2f45b878ed4c9a140d76ad742853805ad15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPageBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2c2802d302b7e0f3b03c89c19bcc2f45b878ed4c9a140d76ad742853805ad15->leave($__internal_f2c2802d302b7e0f3b03c89c19bcc2f45b878ed4c9a140d76ad742853805ad15_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_48f44983bf041d276d8f47627a9727ee72bc969c8a2966c70bcc31a90778a64c = $this->env->getExtension("native_profiler");
        $__internal_48f44983bf041d276d8f47627a9727ee72bc969c8a2966c70bcc31a90778a64c->enter($__internal_48f44983bf041d276d8f47627a9727ee72bc969c8a2966c70bcc31a90778a64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "
";
        
        $__internal_48f44983bf041d276d8f47627a9727ee72bc969c8a2966c70bcc31a90778a64c->leave($__internal_48f44983bf041d276d8f47627a9727ee72bc969c8a2966c70bcc31a90778a64c_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e40aa3e10536f1391098d56d3eb98025bee7e536fbe59e1a78473c4aaa0e4075 = $this->env->getExtension("native_profiler");
        $__internal_e40aa3e10536f1391098d56d3eb98025bee7e536fbe59e1a78473c4aaa0e4075->enter($__internal_e40aa3e10536f1391098d56d3eb98025bee7e536fbe59e1a78473c4aaa0e4075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <!-- Features Section -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h2 class=\"page-header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</h2>
        </div>
        <!-- choix de la mise en page si pas d'images -->
        ";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 13
            echo "            ";
            if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "layout", array()) == 0) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "layout", array()) == ""))) {
                // line 14
                echo "                <div class=\"col-md-12\">
                    ";
                // line 15
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
                echo "
                </div>
            ";
            }
            // line 18
            echo "            <!-- slider fer a droite -->
            ";
            // line 19
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "layout", array()) == 1)) {
                // line 20
                echo "                <div class=\"col-md-7\">
                    ";
                // line 21
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
                echo "
                </div>
                <div class=\"col-md-5\">
                    <div id=\"carouselPage\" class=\"carousel slide\" data-ride=\"carousel\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators \">
                            ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
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
                    // line 28
                    echo "                                <li data-target=\"#carouselPage\" data-slide-to=\"";
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
                // line 30
                echo "                        </ol>
                        <div class=\"carousel-inner\">
                            ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
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
                    // line 33
                    echo "                                <div class=\"item ";
                    if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                        echo "active";
                    }
                    echo "\">
                                    <img src=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                                    <div class=\"carousel-caption\">
                                        <h2>";
                    // line 36
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
                // line 40
                echo "                        </div>

                        <a class=\"left carousel-control\" href=\"#carouselPage\" data-slide=\"prev\">
                            <span class=\"glyphicon glyphicon-chevron-left\"></span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#carouselPage\" data-slide=\"next\">
                            <span class=\"glyphicon glyphicon-chevron-right\"></span>
                        </a>
                    </div>
                </div>
            ";
            }
            // line 51
            echo "

            <!-- slider fer a gauche -->
            ";
            // line 54
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "layout", array()) == 2)) {
                // line 55
                echo "                <div class=\"col-md-5\">
                    <div id=\"carouselPage\" class=\"carousel slide\" data-ride=\"carousel\" data-pause=\"false\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators\">
                            ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
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
                    // line 60
                    echo "                                <li data-target=\"#carouselPage\" data-slide-to=\"";
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
                // line 62
                echo "                        </ol>
                        <div class=\"carousel-inner\">
                            ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
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
                    // line 65
                    echo "                                <div class=\"item ";
                    if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                        echo "active";
                    }
                    echo "\">
                                    <img src=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                                    <div class=\"carousel-caption\">
                                        <h2>";
                    // line 68
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
                // line 72
                echo "                        </div>

                        <a class=\"left carousel-control\" href=\"#carousel-c\" data-slide=\"prev\">
                            <span class=\"glyphicon glyphicon-chevron-left\"></span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#carousel-c\" data-slide=\"next\">
                            <span class=\"glyphicon glyphicon-chevron-right\"></span>
                        </a>
                    </div>
                </div>

                <div class=\"col-md-7\">
                    ";
                // line 84
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
                echo "
                </div>
            ";
            }
            // line 87
            echo "

            <!-- Image Fer à droite -->
            ";
            // line 90
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "layout", array()) == 3)) {
                // line 91
                echo "            <div class=\"col-md-9\">
                ";
                // line 92
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
                echo "
            </div>
            <div class=\"col-md-3\">
                    ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                    // line 96
                    echo "                        <a class=\"fancybox\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                            <img class=\"img-responsive\" alt=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\" data-image=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                        </a>
                        <hr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "            </div>
            ";
            }
            // line 103
            echo "
            <!-- Image Fer à gauche -->
            ";
            // line 105
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "layout", array()) == 4)) {
                // line 106
                echo "                <div class=\"col-md-3\">
                    ";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                    // line 108
                    echo "                        <a class=\"fancybox\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                            <img class=\"img-responsive\" alt=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\" data-image=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                        </a>
                        <hr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                </div>
                <div class=\"col-md-9\">
                    ";
                // line 115
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
                echo "
                </div>
            ";
            }
            // line 118
            echo "        ";
        } else {
            // line 119
            echo "            <div class=\"col-md-12\">
                ";
            // line 120
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
            echo "
            </div>
        ";
        }
        // line 123
        echo "    </div>
    <!-- /.row -->

";
        
        $__internal_e40aa3e10536f1391098d56d3eb98025bee7e536fbe59e1a78473c4aaa0e4075->leave($__internal_e40aa3e10536f1391098d56d3eb98025bee7e536fbe59e1a78473c4aaa0e4075_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPageBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 123,  412 => 120,  409 => 119,  406 => 118,  400 => 115,  396 => 113,  382 => 109,  377 => 108,  373 => 107,  370 => 106,  368 => 105,  364 => 103,  360 => 101,  346 => 97,  341 => 96,  337 => 95,  331 => 92,  328 => 91,  326 => 90,  321 => 87,  315 => 84,  301 => 72,  283 => 68,  278 => 66,  271 => 65,  254 => 64,  250 => 62,  229 => 60,  212 => 59,  206 => 55,  204 => 54,  199 => 51,  186 => 40,  168 => 36,  163 => 34,  156 => 33,  139 => 32,  135 => 30,  114 => 28,  97 => 27,  88 => 21,  85 => 20,  83 => 19,  80 => 18,  74 => 15,  71 => 14,  68 => 13,  66 => 12,  60 => 9,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block slider %}*/
/* */
/* {% endblock %}*/
/* {% block content %}*/
/*     <!-- Features Section -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h2 class="page-header">{{ entity.title }}</h2>*/
/*         </div>*/
/*         <!-- choix de la mise en page si pas d'images -->*/
/*         {% if entity.pictures|length >0 %}*/
/*             {% if entity.layout == 0 or entity.layout == '' %}*/
/*                 <div class="col-md-12">*/
/*                     {{ entity.description|raw }}*/
/*                 </div>*/
/*             {% endif %}*/
/*             <!-- slider fer a droite -->*/
/*             {% if entity.layout == 1 %}*/
/*                 <div class="col-md-7">*/
/*                     {{ entity.description|raw }}*/
/*                 </div>*/
/*                 <div class="col-md-5">*/
/*                     <div id="carouselPage" class="carousel slide" data-ride="carousel">*/
/*                         <!-- Indicators -->*/
/*                         <ol class="carousel-indicators ">*/
/*                             {% for picture in entity.pictures %}*/
/*                                 <li data-target="#carouselPage" data-slide-to="{{  loop.index0 }}" {% if loop.index0 == 0 %}class ="active"{% endif %}></li>*/
/*                             {% endfor %}*/
/*                         </ol>*/
/*                         <div class="carousel-inner">*/
/*                             {% for picture in entity.pictures %}*/
/*                                 <div class="item {% if loop.index0 == 0 %}active{% endif %}">*/
/*                                     <img src="{{ asset(picture.getWebPath(base)) }}">*/
/*                                     <div class="carousel-caption">*/
/*                                         <h2>{{ picture.name }}</h2>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/* */
/*                         <a class="left carousel-control" href="#carouselPage" data-slide="prev">*/
/*                             <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                         </a>*/
/*                         <a class="right carousel-control" href="#carouselPage" data-slide="next">*/
/*                             <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/* */
/*             <!-- slider fer a gauche -->*/
/*             {% if entity.layout == 2 %}*/
/*                 <div class="col-md-5">*/
/*                     <div id="carouselPage" class="carousel slide" data-ride="carousel" data-pause="false">*/
/*                         <!-- Indicators -->*/
/*                         <ol class="carousel-indicators">*/
/*                             {% for picture in entity.pictures %}*/
/*                                 <li data-target="#carouselPage" data-slide-to="{{  loop.index0 }}" {% if loop.index0 == 0 %}class ="active"{% endif %}></li>*/
/*                             {% endfor %}*/
/*                         </ol>*/
/*                         <div class="carousel-inner">*/
/*                             {% for picture in entity.pictures %}*/
/*                                 <div class="item {% if loop.index0 == 0 %}active{% endif %}">*/
/*                                     <img src="{{ asset(picture.getWebPath(base)) }}">*/
/*                                     <div class="carousel-caption">*/
/*                                         <h2>{{ picture.name }}</h2>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/* */
/*                         <a class="left carousel-control" href="#carousel-c" data-slide="prev">*/
/*                             <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                         </a>*/
/*                         <a class="right carousel-control" href="#carousel-c" data-slide="next">*/
/*                             <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-7">*/
/*                     {{ entity.description|raw }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/* */
/*             <!-- Image Fer à droite -->*/
/*             {% if entity.layout == 3 %}*/
/*             <div class="col-md-9">*/
/*                 {{ entity.description|raw }}*/
/*             </div>*/
/*             <div class="col-md-3">*/
/*                     {% for picture in entity.pictures %}*/
/*                         <a class="fancybox" href="{{ asset(entity.pictures[0].getWebPath(base)) }}">*/
/*                             <img class="img-responsive" alt="{{ picture.name }}" src="{{ asset(picture.getWebPath(base)) }}" data-image="{{ asset(picture.getWebPath(base)) }}">*/
/*                         </a>*/
/*                         <hr>*/
/*                     {% endfor %}*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             <!-- Image Fer à gauche -->*/
/*             {% if entity.layout == 4 %}*/
/*                 <div class="col-md-3">*/
/*                     {% for picture in entity.pictures %}*/
/*                         <a class="fancybox" href="{{ asset(entity.pictures[0].getWebPath(base)) }}">*/
/*                             <img class="img-responsive" alt="{{ picture.name }}" src="{{ asset(picture.getWebPath(base)) }}" data-image="{{ asset(picture.getWebPath(base)) }}">*/
/*                         </a>*/
/*                         <hr>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <div class="col-md-9">*/
/*                     {{ entity.description|raw }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% else %}*/
/*             <div class="col-md-12">*/
/*                 {{ entity.description|raw }}*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/*     <!-- /.row -->*/
/* */
/* {% endblock %}*/
