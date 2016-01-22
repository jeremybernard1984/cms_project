<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_373c7183980e4b8669b9f93f7223b647099d86ecb0812193b1242485c2826ae2 extends Twig_Template
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
        $__internal_7ebd043405c59b2b035568496396db859d65c8cc5fc426c79c90e96ee15da3d1 = $this->env->getExtension("native_profiler");
        $__internal_7ebd043405c59b2b035568496396db859d65c8cc5fc426c79c90e96ee15da3d1->enter($__internal_7ebd043405c59b2b035568496396db859d65c8cc5fc426c79c90e96ee15da3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7ebd043405c59b2b035568496396db859d65c8cc5fc426c79c90e96ee15da3d1->leave($__internal_7ebd043405c59b2b035568496396db859d65c8cc5fc426c79c90e96ee15da3d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
