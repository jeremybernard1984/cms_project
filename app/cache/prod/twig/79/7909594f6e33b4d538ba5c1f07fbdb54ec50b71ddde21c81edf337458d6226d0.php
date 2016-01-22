<?php

/* PointWebPageBundle:Default:show.html.twig */
class __TwigTemplate_bc80c7cb9b12dea9c80797ebbf32be4c8b4652a926710be406409400a023846e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8c8dc8684e1adca4b3cd797b6467b8dcf9c321217b7121dd38e16e9ff3ad4f9 = $this->env->getExtension("native_profiler");
        $__internal_d8c8dc8684e1adca4b3cd797b6467b8dcf9c321217b7121dd38e16e9ff3ad4f9->enter($__internal_d8c8dc8684e1adca4b3cd797b6467b8dcf9c321217b7121dd38e16e9ff3ad4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPageBundle:Default:show.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_d8c8dc8684e1adca4b3cd797b6467b8dcf9c321217b7121dd38e16e9ff3ad4f9->leave($__internal_d8c8dc8684e1adca4b3cd797b6467b8dcf9c321217b7121dd38e16e9ff3ad4f9_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_9b033eef7ba3056e32e0cefea4e4ea9958a9c76e90cfe6a752f67601644708d9 = $this->env->getExtension("native_profiler");
        $__internal_9b033eef7ba3056e32e0cefea4e4ea9958a9c76e90cfe6a752f67601644708d9->enter($__internal_9b033eef7ba3056e32e0cefea4e4ea9958a9c76e90cfe6a752f67601644708d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <!-- Features Section -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h2 class=\"page-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</h2>
        </div>
        <!-- choix de la mise en page si pas d'images -->
        ";
        // line 9
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 10
            echo "            ";
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "layout", array()) == 0)) {
                // line 11
                echo "                <div class=\"col-md-12\">
                    ";
                // line 12
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
                echo "
                </div>
            ";
            }
            // line 15
            echo "            <!-- slider fer a droite -->
            ";
            // line 16
            if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "layout", array()) == 1) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "layout", array()) == ""))) {
                // line 17
                echo "                <div class=\"col-md-7\">
                    ";
                // line 18
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
                echo "
                </div>
                <div class=\"col-md-5\">
                    <div id=\"carouselPage\" class=\"carousel slide\" data-ride=\"carousel\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators \">
                            ";
                // line 24
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
                    // line 25
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
                // line 27
                echo "                        </ol>
                        <div class=\"carousel-inner\">
                            ";
                // line 29
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
                    // line 30
                    echo "                                <div class=\"item ";
                    if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                        echo "active";
                    }
                    echo "\">
                                    <img src=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                                    <div class=\"carousel-caption\">
                                        <h2>";
                    // line 33
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
                // line 37
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
            // line 48
            echo "

            <!-- slider fer a gauche -->
            ";
            // line 51
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "layout", array()) == 2)) {
                // line 52
                echo "                <div class=\"col-md-5\">
                    <div id=\"carouselPage\" class=\"carousel slide\" data-ride=\"carousel\" data-pause=\"false\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators\">
                            ";
                // line 56
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
                    // line 57
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
                // line 59
                echo "                        </ol>
                        <div class=\"carousel-inner\">
                            ";
                // line 61
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
                    // line 62
                    echo "                                <div class=\"item ";
                    if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                        echo "active";
                    }
                    echo "\">
                                    <img src=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                                    <div class=\"carousel-caption\">
                                        <h2>";
                    // line 65
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
                // line 69
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
                // line 81
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
                echo "
                </div>
            ";
            }
            // line 84
            echo "

            <!-- Image Fer à droite -->
            ";
            // line 87
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "layout", array()) == 3)) {
                // line 88
                echo "            <div class=\"col-md-9\">
                ";
                // line 89
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
                echo "
            </div>
            <div class=\"col-md-3\">
                    ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                    // line 93
                    echo "                        <a class=\"fancybox\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                            <img class=\"img-responsive\" alt=\"";
                    // line 94
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
                // line 98
                echo "            </div>
            ";
            }
            // line 100
            echo "
            <!-- Image Fer à gauche -->
            ";
            // line 102
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "layout", array()) == 4)) {
                // line 103
                echo "                <div class=\"col-md-3\">
                    ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                    // line 105
                    echo "                        <a class=\"fancybox\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                            <img class=\"img-responsive\" alt=\"";
                    // line 106
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
                // line 110
                echo "                </div>
                <div class=\"col-md-9\">
                    ";
                // line 112
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
                echo "
                </div>
            ";
            }
            // line 115
            echo "        ";
        } else {
            // line 116
            echo "            <div class=\"col-md-12\">
                ";
            // line 117
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
            echo "
            </div>
        ";
        }
        // line 120
        echo "    </div>
    <!-- /.row -->
";
        
        $__internal_9b033eef7ba3056e32e0cefea4e4ea9958a9c76e90cfe6a752f67601644708d9->leave($__internal_9b033eef7ba3056e32e0cefea4e4ea9958a9c76e90cfe6a752f67601644708d9_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPageBundle:Default:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  401 => 120,  395 => 117,  392 => 116,  389 => 115,  383 => 112,  379 => 110,  365 => 106,  360 => 105,  356 => 104,  353 => 103,  351 => 102,  347 => 100,  343 => 98,  329 => 94,  324 => 93,  320 => 92,  314 => 89,  311 => 88,  309 => 87,  304 => 84,  298 => 81,  284 => 69,  266 => 65,  261 => 63,  254 => 62,  237 => 61,  233 => 59,  212 => 57,  195 => 56,  189 => 52,  187 => 51,  182 => 48,  169 => 37,  151 => 33,  146 => 31,  139 => 30,  122 => 29,  118 => 27,  97 => 25,  80 => 24,  71 => 18,  68 => 17,  66 => 16,  63 => 15,  57 => 12,  54 => 11,  51 => 10,  49 => 9,  43 => 6,  38 => 3,  26 => 2,  23 => 1,);
    }
}
/* */
/* {% block content %}*/
/*     <!-- Features Section -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h2 class="page-header">{{ entity.title }}</h2>*/
/*         </div>*/
/*         <!-- choix de la mise en page si pas d'images -->*/
/*         {% if entity.pictures|length >0 %}*/
/*             {% if entity.layout == 0 %}*/
/*                 <div class="col-md-12">*/
/*                     {{ entity.description|raw }}*/
/*                 </div>*/
/*             {% endif %}*/
/*             <!-- slider fer a droite -->*/
/*             {% if entity.layout == 1 or entity.layout == '' %}*/
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
/* {% endblock %}*/
