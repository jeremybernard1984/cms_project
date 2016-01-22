<?php

/* @PointWebMap/Default/index.html.twig */
class __TwigTemplate_a5cbcf652da2fa5e1abfce9cd28cf7e2d1e1440926dac9841100b7a402d8a5f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "@PointWebMap/Default/index.html.twig", 1);
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
        $__internal_a1c70e63248ff09d29947a81950387ac247c1855b8c3000e832c4ef56db9a201 = $this->env->getExtension("native_profiler");
        $__internal_a1c70e63248ff09d29947a81950387ac247c1855b8c3000e832c4ef56db9a201->enter($__internal_a1c70e63248ff09d29947a81950387ac247c1855b8c3000e832c4ef56db9a201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebMap/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1c70e63248ff09d29947a81950387ac247c1855b8c3000e832c4ef56db9a201->leave($__internal_a1c70e63248ff09d29947a81950387ac247c1855b8c3000e832c4ef56db9a201_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_3bde0cc32fadd0041bce136d0e633f32875a0f23885c3f6f278fa212824fb9fd = $this->env->getExtension("native_profiler");
        $__internal_3bde0cc32fadd0041bce136d0e633f32875a0f23885c3f6f278fa212824fb9fd->enter($__internal_3bde0cc32fadd0041bce136d0e633f32875a0f23885c3f6f278fa212824fb9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3bde0cc32fadd0041bce136d0e633f32875a0f23885c3f6f278fa212824fb9fd->leave($__internal_3bde0cc32fadd0041bce136d0e633f32875a0f23885c3f6f278fa212824fb9fd_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebMap/Default/index.html.twig";
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
