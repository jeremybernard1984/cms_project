<?php

/* PointWebNewsBundle:Default:index.html.twig */
class __TwigTemplate_6fa6c7b1112f7094cfc9dd5aac719c66cb74b61e93711b1a047e9c26af7638d6 extends Twig_Template
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
        $__internal_6a5e25362d84f0d359dc2049a5e03212bed999ffa8d7f8dbf64f54910255dc42 = $this->env->getExtension("native_profiler");
        $__internal_6a5e25362d84f0d359dc2049a5e03212bed999ffa8d7f8dbf64f54910255dc42->enter($__internal_6a5e25362d84f0d359dc2049a5e03212bed999ffa8d7f8dbf64f54910255dc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebNewsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a5e25362d84f0d359dc2049a5e03212bed999ffa8d7f8dbf64f54910255dc42->leave($__internal_6a5e25362d84f0d359dc2049a5e03212bed999ffa8d7f8dbf64f54910255dc42_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_faa26de13722c324aaefcd286ea4c6f59edb1e6da11f41f42fd4789c4682a8c2 = $this->env->getExtension("native_profiler");
        $__internal_faa26de13722c324aaefcd286ea4c6f59edb1e6da11f41f42fd4789c4682a8c2->enter($__internal_faa26de13722c324aaefcd286ea4c6f59edb1e6da11f41f42fd4789c4682a8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_faa26de13722c324aaefcd286ea4c6f59edb1e6da11f41f42fd4789c4682a8c2->leave($__internal_faa26de13722c324aaefcd286ea4c6f59edb1e6da11f41f42fd4789c4682a8c2_prof);

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
