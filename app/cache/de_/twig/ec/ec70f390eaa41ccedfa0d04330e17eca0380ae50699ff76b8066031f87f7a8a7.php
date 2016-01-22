<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_0abaf77ad9e7b5b5ece06d6aebcc3315b880959227374c3c871a2576baa861c6 extends Twig_Template
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
        $__internal_7002c6c40663bebd39ce56a76637621be07d64c9de70c6bb0526870eb7c7924d = $this->env->getExtension("native_profiler");
        $__internal_7002c6c40663bebd39ce56a76637621be07d64c9de70c6bb0526870eb7c7924d->enter($__internal_7002c6c40663bebd39ce56a76637621be07d64c9de70c6bb0526870eb7c7924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7002c6c40663bebd39ce56a76637621be07d64c9de70c6bb0526870eb7c7924d->leave($__internal_7002c6c40663bebd39ce56a76637621be07d64c9de70c6bb0526870eb7c7924d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
