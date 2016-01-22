<?php

/* PointWebProductBundle:Default:categories_thumbnails.html.twig */
class __TwigTemplate_60e08e4bc2ceaba6ea647739e7d91c107c7a17cd38a2f26c88caaf1980f7012e extends Twig_Template
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
        echo "<!-- Portfolio Section -->
<div class=\"row\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : null)), "method")), "html", null, true);
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
        return array (  76 => 22,  70 => 21,  61 => 15,  57 => 14,  54 => 13,  48 => 11,  40 => 9,  38 => 8,  33 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
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
