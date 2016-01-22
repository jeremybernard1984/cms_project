<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f4fd9356770d6ee39620e6bf989fb18bd654a484983a0743080cb38a63796295 extends Twig_Template
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
        $__internal_ac8af8af6331052ed66817600b907c69b65fcb56b2a22fb8ed497dd49f4269d3 = $this->env->getExtension("native_profiler");
        $__internal_ac8af8af6331052ed66817600b907c69b65fcb56b2a22fb8ed497dd49f4269d3->enter($__internal_ac8af8af6331052ed66817600b907c69b65fcb56b2a22fb8ed497dd49f4269d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ac8af8af6331052ed66817600b907c69b65fcb56b2a22fb8ed497dd49f4269d3->leave($__internal_ac8af8af6331052ed66817600b907c69b65fcb56b2a22fb8ed497dd49f4269d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
