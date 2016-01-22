<?php

/* PointWebPartnerBundle:Default:index.html.twig */
class __TwigTemplate_ac9ac2eb9e82b7e173c6eef75e27f435d600c64d25cad2b3f6c877b24515e144 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebPartnerBundle:Default:index.html.twig", 1);
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
        $__internal_de78887cf272b542c4a892a3d24350f4b9e94f5c3dc4ad0d3fbc26fad7b1d701 = $this->env->getExtension("native_profiler");
        $__internal_de78887cf272b542c4a892a3d24350f4b9e94f5c3dc4ad0d3fbc26fad7b1d701->enter($__internal_de78887cf272b542c4a892a3d24350f4b9e94f5c3dc4ad0d3fbc26fad7b1d701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de78887cf272b542c4a892a3d24350f4b9e94f5c3dc4ad0d3fbc26fad7b1d701->leave($__internal_de78887cf272b542c4a892a3d24350f4b9e94f5c3dc4ad0d3fbc26fad7b1d701_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_432b629eb42e2c9357c8a8ae72069fa3bc18e531c0468ee430f1a65d5055c0ee = $this->env->getExtension("native_profiler");
        $__internal_432b629eb42e2c9357c8a8ae72069fa3bc18e531c0468ee430f1a65d5055c0ee->enter($__internal_432b629eb42e2c9357c8a8ae72069fa3bc18e531c0468ee430f1a65d5055c0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "Listing :</br>
<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "        <li>
            ID : ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</br>
            Titre : ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partner_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
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
        
        $__internal_432b629eb42e2c9357c8a8ae72069fa3bc18e531c0468ee430f1a65d5055c0ee->leave($__internal_432b629eb42e2c9357c8a8ae72069fa3bc18e531c0468ee430f1a65d5055c0ee_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:Default:index.html.twig";
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
/* Listing :</br>*/
/* <ul>*/
/*     {% for item in list %}*/
/*         <li>*/
/*             ID : {{ item.id }}</br>*/
/*             Titre : {{ item.name }}</br>*/
/*             Description : {{ item.content }}</br>*/
/*             Date de création : le {{ item.createDate|date('d-m-Y') }}</br>*/
/*             <a href="{{ path('partner_show',  { 'id': item.id }) }}">Voir le détail</a>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* {% endblock %}*/
