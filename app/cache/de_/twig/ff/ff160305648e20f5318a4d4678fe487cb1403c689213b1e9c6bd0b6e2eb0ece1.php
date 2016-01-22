<?php

/* PointWebPageBundle:Default:index.html.twig */
class __TwigTemplate_572ea21a9d8df2d2662ce0822cf9782ba80adf9f61b40c2bbd1a13a84fbc2b08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebPageBundle:Default:index.html.twig", 1);
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
        $__internal_fa62422e714372b2ecf0a6982a685bb1e1a9333bfb8141026e5070a44958d8ad = $this->env->getExtension("native_profiler");
        $__internal_fa62422e714372b2ecf0a6982a685bb1e1a9333bfb8141026e5070a44958d8ad->enter($__internal_fa62422e714372b2ecf0a6982a685bb1e1a9333bfb8141026e5070a44958d8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPageBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa62422e714372b2ecf0a6982a685bb1e1a9333bfb8141026e5070a44958d8ad->leave($__internal_fa62422e714372b2ecf0a6982a685bb1e1a9333bfb8141026e5070a44958d8ad_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_f23daa270f1980371ef730a4b8271d8c0625ec40222fd51e27af7a8805d3ec2a = $this->env->getExtension("native_profiler");
        $__internal_f23daa270f1980371ef730a4b8271d8c0625ec40222fd51e27af7a8805d3ec2a->enter($__internal_f23daa270f1980371ef730a4b8271d8c0625ec40222fd51e27af7a8805d3ec2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "Listing des pages :</br>
<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listpage"]) ? $context["listpage"] : $this->getContext($context, "listpage")));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
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
        
        $__internal_f23daa270f1980371ef730a4b8271d8c0625ec40222fd51e27af7a8805d3ec2a->leave($__internal_f23daa270f1980371ef730a4b8271d8c0625ec40222fd51e27af7a8805d3ec2a_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPageBundle:Default:index.html.twig";
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
/* Listing des pages :</br>*/
/* <ul>*/
/*     {% for item in listpage %}*/
/*         <li>*/
/*             ID : {{ item.id }}</br>*/
/*             Titre : {{ item.title }}</br>*/
/*             Description : {{ item.content }}</br>*/
/*             Date de création : le {{ item.createDate|date('d-m-Y') }}</br>*/
/*             <a href="{{ path('page_show',  { 'id': item.id }) }}">Voir le détail</a>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* {% endblock %}*/
