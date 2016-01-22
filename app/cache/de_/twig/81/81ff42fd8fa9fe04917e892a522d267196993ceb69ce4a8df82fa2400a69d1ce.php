<?php

/* PointWebProductBundle:Default:index.html.twig */
class __TwigTemplate_5178d17914c709f56d63a4427d2c92a72f185512e856f7afe940f57e30fb8c73 extends Twig_Template
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
        $__internal_75719724c6e09ac6193f7b50e1b551449903e5987898e39fde817523856d2278 = $this->env->getExtension("native_profiler");
        $__internal_75719724c6e09ac6193f7b50e1b551449903e5987898e39fde817523856d2278->enter($__internal_75719724c6e09ac6193f7b50e1b551449903e5987898e39fde817523856d2278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Default:index.html.twig"));

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
            echo " <a href=\"\">Voir</a> </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        
        $__internal_75719724c6e09ac6193f7b50e1b551449903e5987898e39fde817523856d2278->leave($__internal_75719724c6e09ac6193f7b50e1b551449903e5987898e39fde817523856d2278_prof);

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
        return array (  41 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* Listing des Produits :</br>*/
/* <ul>*/
/*     {% for item in product %}*/
/*         <li>{{ item.id }} - {{ item.title }} <a href="">Voir</a> </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
