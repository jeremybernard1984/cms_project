<?php

/* PointWebNewsBundle:Default:news_detail.html.twig */
class __TwigTemplate_481ddeb18c6a25bd7c911eb7a936fd97da33dce1b60957aef0322dd4e2bcf461 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebNewsBundle:Default:news_detail.html.twig", 1);
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
        $__internal_716dbfd1706b278bfe61c0c82a4ef8540e9699ba69d7a7b9e1a9568b7e972565 = $this->env->getExtension("native_profiler");
        $__internal_716dbfd1706b278bfe61c0c82a4ef8540e9699ba69d7a7b9e1a9568b7e972565->enter($__internal_716dbfd1706b278bfe61c0c82a4ef8540e9699ba69d7a7b9e1a9568b7e972565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebNewsBundle:Default:news_detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_716dbfd1706b278bfe61c0c82a4ef8540e9699ba69d7a7b9e1a9568b7e972565->leave($__internal_716dbfd1706b278bfe61c0c82a4ef8540e9699ba69d7a7b9e1a9568b7e972565_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_125413d521b566505f75624b7ccc46357acbd2761f18cdf5ae25c5d79fe22535 = $this->env->getExtension("native_profiler");
        $__internal_125413d521b566505f75624b7ccc46357acbd2761f18cdf5ae25c5d79fe22535->enter($__internal_125413d521b566505f75624b7ccc46357acbd2761f18cdf5ae25c5d79fe22535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "
";
        
        $__internal_125413d521b566505f75624b7ccc46357acbd2761f18cdf5ae25c5d79fe22535->leave($__internal_125413d521b566505f75624b7ccc46357acbd2761f18cdf5ae25c5d79fe22535_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_15b7150e65b2793ca7343f2f8b2647bf5b9e194611cc7fb7fbb45aeb5ad237df = $this->env->getExtension("native_profiler");
        $__internal_15b7150e65b2793ca7343f2f8b2647bf5b9e194611cc7fb7fbb45aeb5ad237df->enter($__internal_15b7150e65b2793ca7343f2f8b2647bf5b9e194611cc7fb7fbb45aeb5ad237df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                echo "            <div class=\"col-md-7\">
                ";
                // line 21
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resum", array());
                echo "
                <hr>
                ";
                // line 23
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
                echo "
            </div>
            <div class=\"col-md-5\">
                <div id=\"carouselPage\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators \">
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
                    echo "                            <li data-target=\"#carouselPage\" data-slide-to=\"";
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
                // line 32
                echo "                    </ol>
                    <div class=\"carousel-inner\">
                        ";
                // line 34
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
                    // line 35
                    echo "                            <div class=\"item ";
                    if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                        echo "active";
                    }
                    echo "\">
                                <img src=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                                <div class=\"carousel-caption\">
                                    <h2>";
                    // line 38
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
                // line 42
                echo "                    </div>

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
            // line 53
            echo "            <!-- Image Fer à droite -->
            ";
            // line 54
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "layout", array()) == 2)) {
                // line 55
                echo "                <div class=\"col-md-9\">
                    ";
                // line 56
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resum", array());
                echo "
                    <hr>
                    ";
                // line 58
                echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
                echo "
                </div>
                <div class=\"col-md-3\">
                    ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                    // line 62
                    echo "                        <a class=\"fancybox\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                            <img class=\"img-responsive\" alt=\"";
                    // line 63
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
                // line 67
                echo "                </div>
            ";
            }
            // line 69
            echo "        ";
        } else {
            // line 70
            echo "            <div class=\"col-md-12\">
                ";
            // line 71
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resum", array());
            echo "
                <hr>
                ";
            // line 73
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
            echo "
            </div>
        ";
        }
        // line 76
        echo "    </div>
    <!-- /.row -->
";
        
        $__internal_15b7150e65b2793ca7343f2f8b2647bf5b9e194611cc7fb7fbb45aeb5ad237df->leave($__internal_15b7150e65b2793ca7343f2f8b2647bf5b9e194611cc7fb7fbb45aeb5ad237df_prof);

    }

    public function getTemplateName()
    {
        return "PointWebNewsBundle:Default:news_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 76,  261 => 73,  256 => 71,  253 => 70,  250 => 69,  246 => 67,  232 => 63,  227 => 62,  223 => 61,  217 => 58,  212 => 56,  209 => 55,  207 => 54,  204 => 53,  191 => 42,  173 => 38,  168 => 36,  161 => 35,  144 => 34,  140 => 32,  119 => 30,  102 => 29,  93 => 23,  88 => 21,  85 => 20,  83 => 19,  80 => 18,  74 => 15,  71 => 14,  68 => 13,  66 => 12,  60 => 9,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
/*             <div class="col-md-7">*/
/*                 {{ entity.resum|raw }}*/
/*                 <hr>*/
/*                 {{ entity.description|raw }}*/
/*             </div>*/
/*             <div class="col-md-5">*/
/*                 <div id="carouselPage" class="carousel slide" data-ride="carousel">*/
/*                     <!-- Indicators -->*/
/*                     <ol class="carousel-indicators ">*/
/*                         {% for picture in entity.pictures %}*/
/*                             <li data-target="#carouselPage" data-slide-to="{{  loop.index0 }}" {% if loop.index0 == 0 %}class ="active"{% endif %}></li>*/
/*                         {% endfor %}*/
/*                     </ol>*/
/*                     <div class="carousel-inner">*/
/*                         {% for picture in entity.pictures %}*/
/*                             <div class="item {% if loop.index0 == 0 %}active{% endif %}">*/
/*                                 <img src="{{ asset(picture.getWebPath(base)) }}">*/
/*                                 <div class="carousel-caption">*/
/*                                     <h2>{{ picture.name }}</h2>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <a class="left carousel-control" href="#carouselPage" data-slide="prev">*/
/*                         <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                     </a>*/
/*                     <a class="right carousel-control" href="#carouselPage" data-slide="next">*/
/*                         <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             <!-- Image Fer à droite -->*/
/*             {% if entity.layout == 2 %}*/
/*                 <div class="col-md-9">*/
/*                     {{ entity.resum|raw }}*/
/*                     <hr>*/
/*                     {{ entity.description|raw }}*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     {% for picture in entity.pictures %}*/
/*                         <a class="fancybox" href="{{ asset(entity.pictures[0].getWebPath(base)) }}">*/
/*                             <img class="img-responsive" alt="{{ picture.name }}" src="{{ asset(picture.getWebPath(base)) }}" data-image="{{ asset(picture.getWebPath(base)) }}">*/
/*                         </a>*/
/*                         <hr>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% else %}*/
/*             <div class="col-md-12">*/
/*                 {{ entity.resum|raw }}*/
/*                 <hr>*/
/*                 {{ entity.description|raw }}*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/*     <!-- /.row -->*/
/* {% endblock %}*/