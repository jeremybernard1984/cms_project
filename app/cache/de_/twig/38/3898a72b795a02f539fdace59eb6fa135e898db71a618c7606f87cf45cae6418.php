<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_22312a8c584b9870a5e040af927aed753c13be6f698dcbd5829834a77a47fac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_f7fc59663a0ab103d2096602a632feb01c7b3c2c8938b5bdac9ff3863a9f9767 = $this->env->getExtension("native_profiler");
        $__internal_f7fc59663a0ab103d2096602a632feb01c7b3c2c8938b5bdac9ff3863a9f9767->enter($__internal_f7fc59663a0ab103d2096602a632feb01c7b3c2c8938b5bdac9ff3863a9f9767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7fc59663a0ab103d2096602a632feb01c7b3c2c8938b5bdac9ff3863a9f9767->leave($__internal_f7fc59663a0ab103d2096602a632feb01c7b3c2c8938b5bdac9ff3863a9f9767_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a33a2fede5f331fefc6981509f2dd4b8dab2d81dee9b3608b9d4d16bd4d53386 = $this->env->getExtension("native_profiler");
        $__internal_a33a2fede5f331fefc6981509f2dd4b8dab2d81dee9b3608b9d4d16bd4d53386->enter($__internal_a33a2fede5f331fefc6981509f2dd4b8dab2d81dee9b3608b9d4d16bd4d53386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a33a2fede5f331fefc6981509f2dd4b8dab2d81dee9b3608b9d4d16bd4d53386->leave($__internal_a33a2fede5f331fefc6981509f2dd4b8dab2d81dee9b3608b9d4d16bd4d53386_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
