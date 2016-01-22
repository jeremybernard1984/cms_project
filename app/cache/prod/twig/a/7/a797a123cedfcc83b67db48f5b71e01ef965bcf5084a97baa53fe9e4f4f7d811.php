<?php

/* PointWebAppBundle::_menu.html.twig */
class __TwigTemplate_a797a123cedfcc83b67db48f5b71e01ef965bcf5084a97baa53fe9e4f4f7d811 extends Twig_Template
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
        $__internal_058163909c8ba04f06b0e4a96da273bdfe56954d2de199270bc41befa06823f4 = $this->env->getExtension("native_profiler");
        $__internal_058163909c8ba04f06b0e4a96da273bdfe56954d2de199270bc41befa06823f4->enter($__internal_058163909c8ba04f06b0e4a96da273bdfe56954d2de199270bc41befa06823f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::_menu.html.twig"));

        // line 1
        echo $this->env->getExtension('app_extension')->displayMenu((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        
        $__internal_058163909c8ba04f06b0e4a96da273bdfe56954d2de199270bc41befa06823f4->leave($__internal_058163909c8ba04f06b0e4a96da273bdfe56954d2de199270bc41befa06823f4_prof);

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
