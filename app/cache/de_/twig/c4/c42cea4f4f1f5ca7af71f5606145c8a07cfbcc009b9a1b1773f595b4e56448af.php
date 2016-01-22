<?php

/* @PointWebFaq/Default/index.html.twig */
class __TwigTemplate_ea398a4521df9bc815bc3a55d81cbf64d7441ca66b9e5767c2130e2c7470cb41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "@PointWebFaq/Default/index.html.twig", 1);
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
        $__internal_e1d1b653aee2f0335f392c66910a81c55551267768a175a357b88a12be2edcd7 = $this->env->getExtension("native_profiler");
        $__internal_e1d1b653aee2f0335f392c66910a81c55551267768a175a357b88a12be2edcd7->enter($__internal_e1d1b653aee2f0335f392c66910a81c55551267768a175a357b88a12be2edcd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebFaq/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1d1b653aee2f0335f392c66910a81c55551267768a175a357b88a12be2edcd7->leave($__internal_e1d1b653aee2f0335f392c66910a81c55551267768a175a357b88a12be2edcd7_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_e7537e5ba35943d572ef4b8868681bc9a98cad342a670a39885cf09452d1cb6f = $this->env->getExtension("native_profiler");
        $__internal_e7537e5ba35943d572ef4b8868681bc9a98cad342a670a39885cf09452d1cb6f->enter($__internal_e7537e5ba35943d572ef4b8868681bc9a98cad342a670a39885cf09452d1cb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "Listing :</br>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        ID : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " / Question : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "question", array()), "html", null, true);
            echo "</br>
        Réponse : ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "answer", array()), "html", null, true);
            echo "</br>
        </br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e7537e5ba35943d572ef4b8868681bc9a98cad342a670a39885cf09452d1cb6f->leave($__internal_e7537e5ba35943d572ef4b8868681bc9a98cad342a670a39885cf09452d1cb6f_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebFaq/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/* Listing :</br>*/
/*     {% for item in list %}*/
/*         ID : {{ item.id }} / Question : {{ item.question }}</br>*/
/*         Réponse : {{ item.answer }}</br>*/
/*         </br>*/
/* {% endfor %}*/
/* {% endblock %}*/
