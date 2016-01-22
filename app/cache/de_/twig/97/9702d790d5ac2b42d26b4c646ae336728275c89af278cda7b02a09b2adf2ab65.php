<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_17c5b4d6997468722c8e51d48b77d17b2556af518e082e219731840bd93641e3 extends Twig_Template
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
        $__internal_0062cfcb1be8691d74717224a3fda047de71521aefdd72b55e4e98950660c337 = $this->env->getExtension("native_profiler");
        $__internal_0062cfcb1be8691d74717224a3fda047de71521aefdd72b55e4e98950660c337->enter($__internal_0062cfcb1be8691d74717224a3fda047de71521aefdd72b55e4e98950660c337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0062cfcb1be8691d74717224a3fda047de71521aefdd72b55e4e98950660c337->leave($__internal_0062cfcb1be8691d74717224a3fda047de71521aefdd72b55e4e98950660c337_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
