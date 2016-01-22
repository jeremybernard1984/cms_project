<?php

/* @PointWebPartner/Default/index.html.twig */
class __TwigTemplate_83230f6a27ede182d89495b02f9c5d5ca89f176e0d94488f05919cfc97da7f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "@PointWebPartner/Default/index.html.twig", 1);
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
        $__internal_6f59633e5a7e9dbadfc4cf1664325ef12248ad6c43cc6a1d0cccf573596ab528 = $this->env->getExtension("native_profiler");
        $__internal_6f59633e5a7e9dbadfc4cf1664325ef12248ad6c43cc6a1d0cccf573596ab528->enter($__internal_6f59633e5a7e9dbadfc4cf1664325ef12248ad6c43cc6a1d0cccf573596ab528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebPartner/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f59633e5a7e9dbadfc4cf1664325ef12248ad6c43cc6a1d0cccf573596ab528->leave($__internal_6f59633e5a7e9dbadfc4cf1664325ef12248ad6c43cc6a1d0cccf573596ab528_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b39903ebc2406da55773192d4ba57f4881a7fbd8250dd4c5d5004cbf466e368 = $this->env->getExtension("native_profiler");
        $__internal_7b39903ebc2406da55773192d4ba57f4881a7fbd8250dd4c5d5004cbf466e368->enter($__internal_7b39903ebc2406da55773192d4ba57f4881a7fbd8250dd4c5d5004cbf466e368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_7b39903ebc2406da55773192d4ba57f4881a7fbd8250dd4c5d5004cbf466e368->leave($__internal_7b39903ebc2406da55773192d4ba57f4881a7fbd8250dd4c5d5004cbf466e368_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebPartner/Default/index.html.twig";
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
