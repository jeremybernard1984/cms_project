<?php

/* PointWebProductBundle:Default:index.html.twig */
class __TwigTemplate_40b60b13bae7972a8c3bb1d9246a57bf66a8a9953f225066f7c43db698065938 extends Twig_Template
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
        $__internal_704b3f402836c3da1221cdb06a8fdf0033721ecaea9575bc7f57e3c1bffbbc6d = $this->env->getExtension("native_profiler");
        $__internal_704b3f402836c3da1221cdb06a8fdf0033721ecaea9575bc7f57e3c1bffbbc6d->enter($__internal_704b3f402836c3da1221cdb06a8fdf0033721ecaea9575bc7f57e3c1bffbbc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Default:index.html.twig"));

        // line 1
        echo "Listing des Produits :</br>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo " | Id-Category : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "category", array()), "id", array()), "html", null, true);
            echo " - Titre Category : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "category", array()), "title", array()), "html", null, true);
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Voir</a> </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        
        $__internal_704b3f402836c3da1221cdb06a8fdf0033721ecaea9575bc7f57e3c1bffbbc6d->leave($__internal_704b3f402836c3da1221cdb06a8fdf0033721ecaea9575bc7f57e3c1bffbbc6d_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* Listing des Produits :</br>*/
/* <ul>*/
/*     {% for item in product %}*/
/*         <li>{{ item.id }} - {{ item.title }} | Id-Category : {{ item.category.id }} - Titre Category : {{ item.category.title }}  <a href="{{ path('product_show',  { 'id': item.id }) }}">Voir</a> </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
