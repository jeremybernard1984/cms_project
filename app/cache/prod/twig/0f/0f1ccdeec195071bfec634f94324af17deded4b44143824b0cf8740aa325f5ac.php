<?php

/* PointWebPageBundle:Default:index.html.twig */
class __TwigTemplate_7f1d0a76fa7e23e83877261fe741aa5bb13cba741765d8176bbbaae327ab56f5 extends Twig_Template
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
        $__internal_13cfa594b869ed3197aaf56d3d1738dd4258b1d3c3079cde0e14071593b7423b = $this->env->getExtension("native_profiler");
        $__internal_13cfa594b869ed3197aaf56d3d1738dd4258b1d3c3079cde0e14071593b7423b->enter($__internal_13cfa594b869ed3197aaf56d3d1738dd4258b1d3c3079cde0e14071593b7423b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPageBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13cfa594b869ed3197aaf56d3d1738dd4258b1d3c3079cde0e14071593b7423b->leave($__internal_13cfa594b869ed3197aaf56d3d1738dd4258b1d3c3079cde0e14071593b7423b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_9cb6c6bd4c1e5f9d0e7be99386219d4034a243ff8fbcae864e20217eb059f974 = $this->env->getExtension("native_profiler");
        $__internal_9cb6c6bd4c1e5f9d0e7be99386219d4034a243ff8fbcae864e20217eb059f974->enter($__internal_9cb6c6bd4c1e5f9d0e7be99386219d4034a243ff8fbcae864e20217eb059f974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9cb6c6bd4c1e5f9d0e7be99386219d4034a243ff8fbcae864e20217eb059f974->leave($__internal_9cb6c6bd4c1e5f9d0e7be99386219d4034a243ff8fbcae864e20217eb059f974_prof);

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
