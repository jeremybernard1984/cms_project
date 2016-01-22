<?php

/* PointWebAppBundle:Default:thanks.html.twig */
class __TwigTemplate_43807da030df5fa84023cdc552f426c16ad19fda7b3f10125e30d9d31d225158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebAppBundle:Default:thanks.html.twig", 1);
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
        $__internal_00c0b685074daa6529bb903613ef7c55c4fda6dcbe72909e93217c830f3ad3c0 = $this->env->getExtension("native_profiler");
        $__internal_00c0b685074daa6529bb903613ef7c55c4fda6dcbe72909e93217c830f3ad3c0->enter($__internal_00c0b685074daa6529bb903613ef7c55c4fda6dcbe72909e93217c830f3ad3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Default:thanks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00c0b685074daa6529bb903613ef7c55c4fda6dcbe72909e93217c830f3ad3c0->leave($__internal_00c0b685074daa6529bb903613ef7c55c4fda6dcbe72909e93217c830f3ad3c0_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_79f67531032420935fb75495ec1b705594a919facbfc0e2df4858e478c80af6d = $this->env->getExtension("native_profiler");
        $__internal_79f67531032420935fb75495ec1b705594a919facbfc0e2df4858e478c80af6d->enter($__internal_79f67531032420935fb75495ec1b705594a919facbfc0e2df4858e478c80af6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "PAGE MERCI
";
        
        $__internal_79f67531032420935fb75495ec1b705594a919facbfc0e2df4858e478c80af6d->leave($__internal_79f67531032420935fb75495ec1b705594a919facbfc0e2df4858e478c80af6d_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Default:thanks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/* PAGE MERCI*/
/* {% endblock %}*/
