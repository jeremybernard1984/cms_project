<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9f5f58336fd30e25607294b64965f2ca21a9953dc5513b75658223501362f678 extends Twig_Template
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
        $__internal_17825f83f64202da72f08227574ed2e3c108bfa0786750d60b81393d0b399b14 = $this->env->getExtension("native_profiler");
        $__internal_17825f83f64202da72f08227574ed2e3c108bfa0786750d60b81393d0b399b14->enter($__internal_17825f83f64202da72f08227574ed2e3c108bfa0786750d60b81393d0b399b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_17825f83f64202da72f08227574ed2e3c108bfa0786750d60b81393d0b399b14->leave($__internal_17825f83f64202da72f08227574ed2e3c108bfa0786750d60b81393d0b399b14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
