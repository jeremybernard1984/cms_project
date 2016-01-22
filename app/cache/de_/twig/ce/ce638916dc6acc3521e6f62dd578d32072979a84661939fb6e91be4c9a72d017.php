<?php

/* PointWebGalleryBundle:Default:show.html.twig */
class __TwigTemplate_b2d5920e894e3667e07c5d26aaa66e765bd942cd88af58150fb38277f78c45c5 extends Twig_Template
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
        $__internal_c4b4395a2c4b12080db108eae33ac6db8c79ab6e2377583dc5e99e49dfc9afe6 = $this->env->getExtension("native_profiler");
        $__internal_c4b4395a2c4b12080db108eae33ac6db8c79ab6e2377583dc5e99e49dfc9afe6->enter($__internal_c4b4395a2c4b12080db108eae33ac6db8c79ab6e2377583dc5e99e49dfc9afe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGalleryBundle:Default:show.html.twig"));

        // line 1
        echo "<!-- Header Carousel -->
<div id=\"myCarousel\" class=\"carousel slide\">
    ";
        // line 3
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 4
            echo "    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        ";
            // line 6
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
                // line 7
                echo "            <li data-target=\"#myCarousel\" data-slide-to=\"";
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
            // line 9
            echo "    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\">
        ";
            // line 13
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
                // line 14
                echo "        <div class=\"item ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "active";
                }
                echo "\">
            <div class=\"fill\" style=\"background-image:url('";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "');\"></div>
            <div class=\"carousel-caption\">
                <h2>";
                // line 17
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
            // line 21
            echo "    </div>

    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
        <span class=\"icon-prev\"></span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
        <span class=\"icon-next\"></span>
    </a>
    ";
        }
        // line 31
        echo "</div>
";
        
        $__internal_c4b4395a2c4b12080db108eae33ac6db8c79ab6e2377583dc5e99e49dfc9afe6->leave($__internal_c4b4395a2c4b12080db108eae33ac6db8c79ab6e2377583dc5e99e49dfc9afe6_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGalleryBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 31,  123 => 21,  105 => 17,  100 => 15,  93 => 14,  76 => 13,  70 => 9,  49 => 7,  32 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <!-- Header Carousel -->*/
/* <div id="myCarousel" class="carousel slide">*/
/*     {% if entity.pictures|length >0 %}*/
/*     <!-- Indicators -->*/
/*     <ol class="carousel-indicators">*/
/*         {% for picture in entity.pictures %}*/
/*             <li data-target="#myCarousel" data-slide-to="{{  loop.index0 }}" {% if loop.index0 == 0 %}class ="active"{% endif %}></li>*/
/*         {% endfor %}*/
/*     </ol>*/
/* */
/*     <!-- Wrapper for slides -->*/
/*     <div class="carousel-inner">*/
/*         {% for picture in entity.pictures %}*/
/*         <div class="item {% if loop.index0 == 0 %}active{% endif %}">*/
/*             <div class="fill" style="background-image:url('{{ asset(picture.getWebPath(base)) }}');"></div>*/
/*             <div class="carousel-caption">*/
/*                 <h2>{{ picture.name }}</h2>*/
/*             </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     <!-- Controls -->*/
/*     <a class="left carousel-control" href="#myCarousel" data-slide="prev">*/
/*         <span class="icon-prev"></span>*/
/*     </a>*/
/*     <a class="right carousel-control" href="#myCarousel" data-slide="next">*/
/*         <span class="icon-next"></span>*/
/*     </a>*/
/*     {% endif %}*/
/* </div>*/
/* */
