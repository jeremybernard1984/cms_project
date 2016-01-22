<?php

/* PointWebAppBundle:Default:legal.html.twig */
class __TwigTemplate_dad61b50b90341488c887318c17a1706b8d06e04c4400016be60316feeba33b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebAppBundle:Default:legal.html.twig", 1);
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
        $__internal_63263b0781573d84ff244a27e492294472982940b26fd60037c26b9964b07b3e = $this->env->getExtension("native_profiler");
        $__internal_63263b0781573d84ff244a27e492294472982940b26fd60037c26b9964b07b3e->enter($__internal_63263b0781573d84ff244a27e492294472982940b26fd60037c26b9964b07b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Default:legal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63263b0781573d84ff244a27e492294472982940b26fd60037c26b9964b07b3e->leave($__internal_63263b0781573d84ff244a27e492294472982940b26fd60037c26b9964b07b3e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_2876c417dec04dd81ef68b7f74d89c3a60d0a69a997e9706bddb7535384a8d86 = $this->env->getExtension("native_profiler");
        $__internal_2876c417dec04dd81ef68b7f74d89c3a60d0a69a997e9706bddb7535384a8d86->enter($__internal_2876c417dec04dd81ef68b7f74d89c3a60d0a69a997e9706bddb7535384a8d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "PAGE MENTIONS LEGALES
";
        
        $__internal_2876c417dec04dd81ef68b7f74d89c3a60d0a69a997e9706bddb7535384a8d86->leave($__internal_2876c417dec04dd81ef68b7f74d89c3a60d0a69a997e9706bddb7535384a8d86_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Default:legal.html.twig";
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
/* PAGE MENTIONS LEGALES*/
/* {% endblock %}*/
