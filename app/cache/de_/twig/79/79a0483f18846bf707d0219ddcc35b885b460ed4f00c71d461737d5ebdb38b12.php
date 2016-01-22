<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_ff57c3fec5bf023ed138c92dfd00fd48c61518ef6ebc9aff12f0c387e2aa0773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_d89865fc6496ddb1d7bc1652cc1b28977b8823821e252d19c86f1add9445487c = $this->env->getExtension("native_profiler");
        $__internal_d89865fc6496ddb1d7bc1652cc1b28977b8823821e252d19c86f1add9445487c->enter($__internal_d89865fc6496ddb1d7bc1652cc1b28977b8823821e252d19c86f1add9445487c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d89865fc6496ddb1d7bc1652cc1b28977b8823821e252d19c86f1add9445487c->leave($__internal_d89865fc6496ddb1d7bc1652cc1b28977b8823821e252d19c86f1add9445487c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d04ff1e83d8608148a723cf0817586e7e7046ce76652692f86f3e4ad85f78889 = $this->env->getExtension("native_profiler");
        $__internal_d04ff1e83d8608148a723cf0817586e7e7046ce76652692f86f3e4ad85f78889->enter($__internal_d04ff1e83d8608148a723cf0817586e7e7046ce76652692f86f3e4ad85f78889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_d04ff1e83d8608148a723cf0817586e7e7046ce76652692f86f3e4ad85f78889->leave($__internal_d04ff1e83d8608148a723cf0817586e7e7046ce76652692f86f3e4ad85f78889_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
