<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_ba45696fa4c1bd6276bcc2880b364cb9e366c4e1a72377cd72dc72727a70e4f2 extends Twig_Template
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
        $__internal_bef348af368552174225a331a73306316385d8fd440074a7f25a7511349a212b = $this->env->getExtension("native_profiler");
        $__internal_bef348af368552174225a331a73306316385d8fd440074a7f25a7511349a212b->enter($__internal_bef348af368552174225a331a73306316385d8fd440074a7f25a7511349a212b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bef348af368552174225a331a73306316385d8fd440074a7f25a7511349a212b->leave($__internal_bef348af368552174225a331a73306316385d8fd440074a7f25a7511349a212b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
