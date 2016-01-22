<?php

/* PointWebAppBundle:Default:thanks.html.twig */
class __TwigTemplate_412c392417aec955da0849d96c1bfcbe1b7ae722950f0440bec0661ce23bcfb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebAppBundle:Default:thanks.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cede5a0dc4063ba4fe5af864516c94c4b6e5bb53fbe198cd4bed4643e945716 = $this->env->getExtension("native_profiler");
        $__internal_6cede5a0dc4063ba4fe5af864516c94c4b6e5bb53fbe198cd4bed4643e945716->enter($__internal_6cede5a0dc4063ba4fe5af864516c94c4b6e5bb53fbe198cd4bed4643e945716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Default:thanks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cede5a0dc4063ba4fe5af864516c94c4b6e5bb53fbe198cd4bed4643e945716->leave($__internal_6cede5a0dc4063ba4fe5af864516c94c4b6e5bb53fbe198cd4bed4643e945716_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_f0c07643ea4adee1dda307c253dacfae8e884574afffa26231c7826eb5eb4e1d = $this->env->getExtension("native_profiler");
        $__internal_f0c07643ea4adee1dda307c253dacfae8e884574afffa26231c7826eb5eb4e1d->enter($__internal_f0c07643ea4adee1dda307c253dacfae8e884574afffa26231c7826eb5eb4e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "PAGE MERCI
";
        
        $__internal_f0c07643ea4adee1dda307c253dacfae8e884574afffa26231c7826eb5eb4e1d->leave($__internal_f0c07643ea4adee1dda307c253dacfae8e884574afffa26231c7826eb5eb4e1d_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Default:thanks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/* PAGE MERCI*/
/* {% endblock %}*/
