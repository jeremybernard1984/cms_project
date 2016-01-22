<?php

/* PointWebProductBundle:Default:categories_thumbnails.html.twig */
class __TwigTemplate_256510483f1e11b883a6b74dd3b5a9fe43971048b7c9aa3542d7b9451faffe0d extends Twig_Template
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
        $__internal_ff997e7a112b88b96db317c7639a2612eaca8f84e25108f4fc74a9e85a1d61cd = $this->env->getExtension("native_profiler");
        $__internal_ff997e7a112b88b96db317c7639a2612eaca8f84e25108f4fc74a9e85a1d61cd->enter($__internal_ff997e7a112b88b96db317c7639a2612eaca8f84e25108f4fc74a9e85a1d61cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Default:categories_thumbnails.html.twig"));

        // line 1
        echo "<!-- Portfolio Section -->
<div class=\"row\">
    <div class=\"col-lg-12\">
        <h2 class=\"page-header\">Nos voyages</h2>
    </div>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
            echo "        ";
            if ($this->getAttribute($context["entity"], "parentId", array())) {
                // line 8
                echo "        <div class=\"col-md-4 col-sm-6 img-portfolio\">
            <a href=\"#\">
                <div class=\"hovereffect\">
                    ";
                // line 11
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "pictures", array())) > 0)) {
                    // line 12
                    echo "                        <img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "name", array()), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 14
                    echo "                        <img class=\"img-responsive img-portfolio\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/sans_image_700x450.jpg"), "html", null, true);
                    echo "\" alt=\"http://placehold.it/700x450\">
                    ";
                }
                // line 16
                echo "                    <div class=\"overlay\">
                        <h2>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                echo "</h2>
                        <a class=\"info\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_of_category", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Voir les voyages</a>
                    </div>
                </div>
            </a>
        </div>
        ";
            }
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
</div>
<!-- /.row -->";
        
        $__internal_ff997e7a112b88b96db317c7639a2612eaca8f84e25108f4fc74a9e85a1d61cd->leave($__internal_ff997e7a112b88b96db317c7639a2612eaca8f84e25108f4fc74a9e85a1d61cd_prof);

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
        return array (  79 => 25,  73 => 24,  64 => 18,  60 => 17,  57 => 16,  51 => 14,  43 => 12,  41 => 11,  36 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <!-- Portfolio Section -->*/
/* <div class="row">*/
/*     <div class="col-lg-12">*/
/*         <h2 class="page-header">Nos voyages</h2>*/
/*     </div>*/
/*     {% for entity in entities %}*/
/*         {% if entity.parentId %}*/
/*         <div class="col-md-4 col-sm-6 img-portfolio">*/
/*             <a href="#">*/
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
