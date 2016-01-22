<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_03389d8fad7d27041b197536fae0eb2cdf9dd0d4ac04ac8d1c829340d1f1e725 extends Twig_Template
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
        $__internal_236b3a765d65580a180266b06476141c2ac8c5357ce940291071497fbcaa950d = $this->env->getExtension("native_profiler");
        $__internal_236b3a765d65580a180266b06476141c2ac8c5357ce940291071497fbcaa950d->enter($__internal_236b3a765d65580a180266b06476141c2ac8c5357ce940291071497fbcaa950d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_236b3a765d65580a180266b06476141c2ac8c5357ce940291071497fbcaa950d->leave($__internal_236b3a765d65580a180266b06476141c2ac8c5357ce940291071497fbcaa950d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
