<?php

/* PointWebProductBundle:Default:categories_thumbnails.html.twig */
class __TwigTemplate_061a7e8cce4f199d2fdde764e0fcde7ef7275da45b0f6443626f7881dec01e45 extends Twig_Template
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
        $__internal_81672fee9bf2fbe7e9ab8997d2a8bf73273762af9ad60147584f613cc801bb19 = $this->env->getExtension("native_profiler");
        $__internal_81672fee9bf2fbe7e9ab8997d2a8bf73273762af9ad60147584f613cc801bb19->enter($__internal_81672fee9bf2fbe7e9ab8997d2a8bf73273762af9ad60147584f613cc801bb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Default:categories_thumbnails.html.twig"));

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
            <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_of_category", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
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
        
        $__internal_81672fee9bf2fbe7e9ab8997d2a8bf73273762af9ad60147584f613cc801bb19->leave($__internal_81672fee9bf2fbe7e9ab8997d2a8bf73273762af9ad60147584f613cc801bb19_prof);

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
        return array (  82 => 25,  76 => 24,  67 => 18,  63 => 17,  60 => 16,  54 => 14,  46 => 12,  44 => 11,  39 => 9,  36 => 8,  33 => 7,  29 => 6,  22 => 1,);
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
