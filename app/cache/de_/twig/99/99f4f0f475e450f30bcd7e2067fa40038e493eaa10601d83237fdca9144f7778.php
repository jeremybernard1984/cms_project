<?php

/* PointWebProductBundle:Default:category.html.twig */
class __TwigTemplate_5f196e41e643bc5e1a02fc79cd1809ac27341b07ecb537cf67487ae9a1689c9d extends Twig_Template
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
        $__internal_262d7328b85652971606089716ed55ec53c6d9e90c42de59478feab24f4cb773 = $this->env->getExtension("native_profiler");
        $__internal_262d7328b85652971606089716ed55ec53c6d9e90c42de59478feab24f4cb773->enter($__internal_262d7328b85652971606089716ed55ec53c6d9e90c42de59478feab24f4cb773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Default:category.html.twig"));

        // line 1
        echo "Listing des category :</br>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Voir</a> </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        
        $__internal_262d7328b85652971606089716ed55ec53c6d9e90c42de59478feab24f4cb773->leave($__internal_262d7328b85652971606089716ed55ec53c6d9e90c42de59478feab24f4cb773_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Default:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* Listing des category :</br>*/
/* <ul>*/
/*     {% for item in category %}*/
/*         <li>{{ item.id }} - {{ item.title }} <a href="{{ path('category_show',  { 'id': item.id }) }}">Voir</a> </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
