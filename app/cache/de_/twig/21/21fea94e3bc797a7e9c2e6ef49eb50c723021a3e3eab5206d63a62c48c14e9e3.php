<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_95119b93d15ecadaa413e1a40cac0d09a2612feae8f4d12bb20474fb0bb6d702 extends Twig_Template
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
        $__internal_df08ac4860b010b9abeed87d54fb22ecb4d52ce1949e9cca0967561e1b870252 = $this->env->getExtension("native_profiler");
        $__internal_df08ac4860b010b9abeed87d54fb22ecb4d52ce1949e9cca0967561e1b870252->enter($__internal_df08ac4860b010b9abeed87d54fb22ecb4d52ce1949e9cca0967561e1b870252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_df08ac4860b010b9abeed87d54fb22ecb4d52ce1949e9cca0967561e1b870252->leave($__internal_df08ac4860b010b9abeed87d54fb22ecb4d52ce1949e9cca0967561e1b870252_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
