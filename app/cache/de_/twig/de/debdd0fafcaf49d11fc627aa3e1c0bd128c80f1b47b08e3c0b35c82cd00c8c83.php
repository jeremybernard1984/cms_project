<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3777fee9f88b5cffe3a5a7924a19499ff123ae5275dc071de4adf2c351f76571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c903e661cabb1719b45fa6cc269f964b9c25e65078eaf5fc303f2bbf72153491 = $this->env->getExtension("native_profiler");
        $__internal_c903e661cabb1719b45fa6cc269f964b9c25e65078eaf5fc303f2bbf72153491->enter($__internal_c903e661cabb1719b45fa6cc269f964b9c25e65078eaf5fc303f2bbf72153491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c903e661cabb1719b45fa6cc269f964b9c25e65078eaf5fc303f2bbf72153491->leave($__internal_c903e661cabb1719b45fa6cc269f964b9c25e65078eaf5fc303f2bbf72153491_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4ea03a011a720928403813fdc0d82d6c0385b9294c11cddfe3b0311bb70a42a = $this->env->getExtension("native_profiler");
        $__internal_e4ea03a011a720928403813fdc0d82d6c0385b9294c11cddfe3b0311bb70a42a->enter($__internal_e4ea03a011a720928403813fdc0d82d6c0385b9294c11cddfe3b0311bb70a42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e4ea03a011a720928403813fdc0d82d6c0385b9294c11cddfe3b0311bb70a42a->leave($__internal_e4ea03a011a720928403813fdc0d82d6c0385b9294c11cddfe3b0311bb70a42a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
