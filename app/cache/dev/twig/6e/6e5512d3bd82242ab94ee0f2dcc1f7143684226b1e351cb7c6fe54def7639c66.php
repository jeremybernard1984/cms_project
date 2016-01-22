<?php

/* PointWebPageBundle:Default:home_page.html.twig */
class __TwigTemplate_0d6655e24cd74f8dec46995a6d6c25595a406030327eb60dff2e07a5c0ff441b extends Twig_Template
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
        // line 1
        echo "
    <!-- Features Section -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h2 class=\"page-header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), "html", null, true);
        echo "</h2>
        </div>
        <!-- choix de la mise en page si pas d'images -->
        ";
        // line 8
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pictures", array())) > 0)) {
            // line 9
            echo "            ";
            if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "layout", array()) == 0) || ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "layout", array()) == ""))) {
                // line 10
                echo "                <div class=\"col-md-12\">
                    ";
                // line 11
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description", array());
                echo "
                </div>
            ";
            }
            // line 14
            echo "            <!-- slider fer a droite -->
            ";
            // line 15
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "layout", array()) == 1)) {
                // line 16
                echo "                <div class=\"col-md-7\">
                    ";
                // line 17
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description", array());
                echo "
                </div>
                <div class=\"col-md-5\">
                    <div id=\"carouselPage\" class=\"carousel slide\" data-ride=\"carousel\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators \">
                            ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pictures", array()));
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
                // line 26
                echo "                        </ol>
                        <div class=\"carousel-inner\">
                            ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pictures", array()));
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
                    echo "                                <div class=\"item ";
                    if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                        echo "active";
                    }
                    echo "\">
                                    <img src=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : null)), "method")), "html", null, true);
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
            // line 47
            echo "

            <!-- slider fer a gauche -->
            ";
            // line 50
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "layout", array()) == 2)) {
                // line 51
                echo "                <div class=\"col-md-5\">
                    <div id=\"carouselPage\" class=\"carousel slide\" data-ride=\"carousel\" data-pause=\"false\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators\">
                            ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pictures", array()));
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
                    // line 56
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
                // line 58
                echo "                        </ol>
                        <div class=\"carousel-inner\">
                            ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pictures", array()));
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
                    // line 61
                    echo "                                <div class=\"item ";
                    if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                        echo "active";
                    }
                    echo "\">
                                    <img src=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : null)), "method")), "html", null, true);
                    echo "\">
                                    <div class=\"carousel-caption\">
                                        <h2>";
                    // line 64
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
                // line 68
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
                // line 80
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description", array());
                echo "
                </div>
            ";
            }
            // line 83
            echo "

            <!-- Image Fer à droite -->
            ";
            // line 86
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "layout", array()) == 3)) {
                // line 87
                echo "            <div class=\"col-md-9\">
                ";
                // line 88
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description", array());
                echo "
            </div>
            <div class=\"col-md-3\">
                    ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pictures", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                    // line 92
                    echo "                        <a class=\"fancybox\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : null)), "method")), "html", null, true);
                    echo "\">
                            <img class=\"img-responsive\" alt=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : null)), "method")), "html", null, true);
                    echo "\" data-image=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : null)), "method")), "html", null, true);
                    echo "\">
                        </a>
                        <hr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "            </div>
            ";
            }
            // line 99
            echo "
            <!-- Image Fer à gauche -->
            ";
            // line 101
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "layout", array()) == 4)) {
                // line 102
                echo "                <div class=\"col-md-3\">
                    ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pictures", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                    // line 104
                    echo "                        <a class=\"fancybox\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : null)), "method")), "html", null, true);
                    echo "\">
                            <img class=\"img-responsive\" alt=\"";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : null)), "method")), "html", null, true);
                    echo "\" data-image=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : null)), "method")), "html", null, true);
                    echo "\">
                        </a>
                        <hr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "                </div>
                <div class=\"col-md-9\">
                    ";
                // line 111
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description", array());
                echo "
                </div>
            ";
            }
            // line 114
            echo "        ";
        } else {
            // line 115
            echo "            <div class=\"col-md-12\">
                ";
            // line 116
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "description", array());
            echo "
            </div>
        ";
        }
        // line 119
        echo "    </div>
    <!-- /.row -->
";
    }

    public function getTemplateName()
    {
        return "PointWebPageBundle:Default:home_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 119,  377 => 116,  374 => 115,  371 => 114,  365 => 111,  361 => 109,  347 => 105,  342 => 104,  338 => 103,  335 => 102,  333 => 101,  329 => 99,  325 => 97,  311 => 93,  306 => 92,  302 => 91,  296 => 88,  293 => 87,  291 => 86,  286 => 83,  280 => 80,  266 => 68,  248 => 64,  243 => 62,  236 => 61,  219 => 60,  215 => 58,  194 => 56,  177 => 55,  171 => 51,  169 => 50,  164 => 47,  151 => 36,  133 => 32,  128 => 30,  121 => 29,  104 => 28,  100 => 26,  79 => 24,  62 => 23,  53 => 17,  50 => 16,  48 => 15,  45 => 14,  39 => 11,  36 => 10,  33 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* */
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
