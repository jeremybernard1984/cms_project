<?php

/* PointWebProductBundle:Default:categories_thumbnails.html.twig */
class __TwigTemplate_f2a99a6d4723d076fd06f3f82daf0578897916a16f286b83c1c95b30f38d4a69 extends Twig_Template
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
        $__internal_8e40c81d68315bf9dedb572fc9cdcb419e1f3ebd01922177843fea1d65b611d6 = $this->env->getExtension("native_profiler");
        $__internal_8e40c81d68315bf9dedb572fc9cdcb419e1f3ebd01922177843fea1d65b611d6->enter($__internal_8e40c81d68315bf9dedb572fc9cdcb419e1f3ebd01922177843fea1d65b611d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Default:categories_thumbnails.html.twig"));

        // line 1
        echo "<!-- Portfolio Section -->
<div class=\"row\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 4
            echo "        ";
            if ($this->getAttribute($context["entity"], "parentId", array())) {
                // line 5
                echo "        <div class=\"col-md-4 col-sm-6 img-portfolio\">
            <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_of_category", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                <div class=\"hovereffect\">
                    ";
                // line 8
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "pictures", array())) > 0)) {
                    // line 9
                    echo "                        <img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "name", array()), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 11
                    echo "                        <img class=\"img-responsive img-portfolio\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/sans_image_700x450.jpg"), "html", null, true);
                    echo "\" alt=\"http://placehold.it/700x450\">
                    ";
                }
                // line 13
                echo "                    <div class=\"overlay\">
                        <h2>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                echo "</h2>
                        <a class=\"info\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_of_category", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Voir les voyages</a>
                    </div>
                </div>
            </a>
        </div>
        ";
            }
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
</div>
<!-- /.row -->";
        
        $__internal_8e40c81d68315bf9dedb572fc9cdcb419e1f3ebd01922177843fea1d65b611d6->leave($__internal_8e40c81d68315bf9dedb572fc9cdcb419e1f3ebd01922177843fea1d65b611d6_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Default:categories_thumbnails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  73 => 21,  64 => 15,  60 => 14,  57 => 13,  51 => 11,  43 => 9,  41 => 8,  36 => 6,  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <!-- Portfolio Section -->*/
/* <div class="row">*/
/*     {% for entity in entities %}*/
/*         {% if entity.parentId %}*/
/*         <div class="col-md-4 col-sm-6 img-portfolio">*/
/*             <a href="{{ path('product_of_category', {'id': entity.id}) }}">*/
/*                 <div class="hovereffect">*/
/*                     {% if entity.pictures|length >0 %}*/
/*                         <img class="img-responsive" src="{{ asset(entity.pictures[0].getWebPath(base)) }}" alt="{{ entity.pictures[0].name }}">*/
/*                     {% else %}*/
/*                         <img class="img-responsive img-portfolio" src="{{ asset('images/sans_image_700x450.jpg') }}" alt="http://placehold.it/700x450">*/
/*                     {% endif %}*/
/*                     <div class="overlay">*/
/*                         <h2>{{ entity.title }}</h2>*/
/*                         <a class="info" href="{{ path('product_of_category', {'id': entity.id}) }}">Voir les voyages</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/* </div>*/
/* <!-- /.row -->*/
