<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_bb2ddff679b5ccad22314836d6d4730017eb937d46ad36da9d326b001017a748 extends Twig_Template
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
        $__internal_13b9f1be1847d43a6af511022b51f589638f7a4f19e623d2f5d9b7569160adfd = $this->env->getExtension("native_profiler");
        $__internal_13b9f1be1847d43a6af511022b51f589638f7a4f19e623d2f5d9b7569160adfd->enter($__internal_13b9f1be1847d43a6af511022b51f589638f7a4f19e623d2f5d9b7569160adfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_13b9f1be1847d43a6af511022b51f589638f7a4f19e623d2f5d9b7569160adfd->leave($__internal_13b9f1be1847d43a6af511022b51f589638f7a4f19e623d2f5d9b7569160adfd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
