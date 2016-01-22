<?php

/* PointWebAppBundle::_menu.html.twig */
class __TwigTemplate_06e830920e6fa74125692605af5f5fba70ed13c02ca9984c9a283a5022d11940 extends Twig_Template
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
        $__internal_a0b5faf60e5522bfe3c52834c4a89bbeb083fa1fc672956cad0a5bb137db11cd = $this->env->getExtension("native_profiler");
        $__internal_a0b5faf60e5522bfe3c52834c4a89bbeb083fa1fc672956cad0a5bb137db11cd->enter($__internal_a0b5faf60e5522bfe3c52834c4a89bbeb083fa1fc672956cad0a5bb137db11cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::_menu.html.twig"));

        // line 1
        echo $this->env->getExtension('app_extension')->displayMenu((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        
        $__internal_a0b5faf60e5522bfe3c52834c4a89bbeb083fa1fc672956cad0a5bb137db11cd->leave($__internal_a0b5faf60e5522bfe3c52834c4a89bbeb083fa1fc672956cad0a5bb137db11cd_prof);

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
