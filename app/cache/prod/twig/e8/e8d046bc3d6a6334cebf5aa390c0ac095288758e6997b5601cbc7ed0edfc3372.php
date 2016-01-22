<?php

/* PointWebNewsBundle:Default:index.html.twig */
class __TwigTemplate_1a4ed49d230279d2ce5316b5e2ba835b9725100bc1093f21ca7ea9a0870bb700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebNewsBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55b04644561f162f366ee8df6e7cff89f0dece24da13881efc6ca049e9a214e7 = $this->env->getExtension("native_profiler");
        $__internal_55b04644561f162f366ee8df6e7cff89f0dece24da13881efc6ca049e9a214e7->enter($__internal_55b04644561f162f366ee8df6e7cff89f0dece24da13881efc6ca049e9a214e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebNewsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55b04644561f162f366ee8df6e7cff89f0dece24da13881efc6ca049e9a214e7->leave($__internal_55b04644561f162f366ee8df6e7cff89f0dece24da13881efc6ca049e9a214e7_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_97aa1a2f76347be3387131198006bd98ad5a7f6f49ca672fd9558b8f7f4fe828 = $this->env->getExtension("native_profiler");
        $__internal_97aa1a2f76347be3387131198006bd98ad5a7f6f49ca672fd9558b8f7f4fe828->enter($__internal_97aa1a2f76347be3387131198006bd98ad5a7f6f49ca672fd9558b8f7f4fe828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "Listing des news :</br>
<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listnews"]) ? $context["listnews"] : $this->getContext($context, "listnews")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "        <li>
            ID : ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</br>
            Titre : ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</br>
            Description : ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
            echo "</br>
            Date de création : le ";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "createDate", array()), "d-m-Y"), "html", null, true);
            echo "</br>
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Voir le détail</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
";
        
        $__internal_97aa1a2f76347be3387131198006bd98ad5a7f6f49ca672fd9558b8f7f4fe828->leave($__internal_97aa1a2f76347be3387131198006bd98ad5a7f6f49ca672fd9558b8f7f4fe828_prof);

    }

    public function getTemplateName()
    {
        return "PointWebNewsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/* Listing des news :</br>*/
/* <ul>*/
/*     {% for item in listnews %}*/
/*         <li>*/
/*             ID : {{ item.id }}</br>*/
/*             Titre : {{ item.title }}</br>*/
/*             Description : {{ item.content }}</br>*/
/*             Date de création : le {{ item.createDate|date('d-m-Y') }}</br>*/
/*             <a href="{{ path('news_show',  { 'id': item.id }) }}">Voir le détail</a>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* {% endblock %}*/
