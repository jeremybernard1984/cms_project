<?php

/* PointWebAppBundle::_menu.html.twig */
class __TwigTemplate_b26ab0bc134b2b52dc27cb33dacd6eb376b65546a875806f0c76c752e795c3af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_488ce32cdde14f2fa38845cdf0461bf4f76cf165706efdf5572eca83d6414025 = $this->env->getExtension("native_profiler");
        $__internal_488ce32cdde14f2fa38845cdf0461bf4f76cf165706efdf5572eca83d6414025->enter($__internal_488ce32cdde14f2fa38845cdf0461bf4f76cf165706efdf5572eca83d6414025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::_menu.html.twig"));

        // line 1
        echo $this->env->getExtension('app_extension')->displayMenu((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        
        $__internal_488ce32cdde14f2fa38845cdf0461bf4f76cf165706efdf5572eca83d6414025->leave($__internal_488ce32cdde14f2fa38845cdf0461bf4f76cf165706efdf5572eca83d6414025_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ menus|displayMenu()|raw }}*/
