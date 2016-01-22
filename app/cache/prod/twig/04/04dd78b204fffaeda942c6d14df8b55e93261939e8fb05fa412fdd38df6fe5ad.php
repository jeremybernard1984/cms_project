<?php

/* PointWebAdminBundle:Default:index.html.twig */
class __TwigTemplate_29bc325b3ba56720c4b55451207a960ea5c661a6bfb36918e3f4cb4b6f7cd7ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db808bfe34fa90a42fad0043a4c4e88d790f599f43e78fb531698787d980a1d6 = $this->env->getExtension("native_profiler");
        $__internal_db808bfe34fa90a42fad0043a4c4e88d790f599f43e78fb531698787d980a1d6->enter($__internal_db808bfe34fa90a42fad0043a4c4e88d790f599f43e78fb531698787d980a1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db808bfe34fa90a42fad0043a4c4e88d790f599f43e78fb531698787d980a1d6->leave($__internal_db808bfe34fa90a42fad0043a4c4e88d790f599f43e78fb531698787d980a1d6_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_06bcb43f96d2b23462109ed3e0b572188b190c84e701915e3dbd72cc87c1dbd7 = $this->env->getExtension("native_profiler");
        $__internal_06bcb43f96d2b23462109ed3e0b572188b190c84e701915e3dbd72cc87c1dbd7->enter($__internal_06bcb43f96d2b23462109ed3e0b572188b190c84e701915e3dbd72cc87c1dbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    Bienvenue dans la plate-forme d'administration de votre site.
";
        
        $__internal_06bcb43f96d2b23462109ed3e0b572188b190c84e701915e3dbd72cc87c1dbd7->leave($__internal_06bcb43f96d2b23462109ed3e0b572188b190c84e701915e3dbd72cc87c1dbd7_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     Bienvenue dans la plate-forme d'administration de votre site.*/
/* {% endblock %}*/
