<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_137dc854c014734efd4b192d2fcc3526aab440544fb30c2739fb45995532cc70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_4bd8a29f2be864c40534a5fcae6c6f28eeec4fd51a988ced3c3fc3b26e4ae64a = $this->env->getExtension("native_profiler");
        $__internal_4bd8a29f2be864c40534a5fcae6c6f28eeec4fd51a988ced3c3fc3b26e4ae64a->enter($__internal_4bd8a29f2be864c40534a5fcae6c6f28eeec4fd51a988ced3c3fc3b26e4ae64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bd8a29f2be864c40534a5fcae6c6f28eeec4fd51a988ced3c3fc3b26e4ae64a->leave($__internal_4bd8a29f2be864c40534a5fcae6c6f28eeec4fd51a988ced3c3fc3b26e4ae64a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d04de2940c95dc02dab5a74e6eec5c72d898c2cb1cb9ae893886008eb5d690e = $this->env->getExtension("native_profiler");
        $__internal_0d04de2940c95dc02dab5a74e6eec5c72d898c2cb1cb9ae893886008eb5d690e->enter($__internal_0d04de2940c95dc02dab5a74e6eec5c72d898c2cb1cb9ae893886008eb5d690e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_0d04de2940c95dc02dab5a74e6eec5c72d898c2cb1cb9ae893886008eb5d690e->leave($__internal_0d04de2940c95dc02dab5a74e6eec5c72d898c2cb1cb9ae893886008eb5d690e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
