<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_8715179f83975889765e886a8275aedabdefcd1c5fe64a39d5e39f51454da955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e3caecf17466dc3c9c600ef01028d0a8e0027b5472190352f4e9da4c2fe4f1a7 = $this->env->getExtension("native_profiler");
        $__internal_e3caecf17466dc3c9c600ef01028d0a8e0027b5472190352f4e9da4c2fe4f1a7->enter($__internal_e3caecf17466dc3c9c600ef01028d0a8e0027b5472190352f4e9da4c2fe4f1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3caecf17466dc3c9c600ef01028d0a8e0027b5472190352f4e9da4c2fe4f1a7->leave($__internal_e3caecf17466dc3c9c600ef01028d0a8e0027b5472190352f4e9da4c2fe4f1a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1aa34f97b83d29741d4ff0dc2f2b55c6b445196280c50ecc97d7420a73ebba01 = $this->env->getExtension("native_profiler");
        $__internal_1aa34f97b83d29741d4ff0dc2f2b55c6b445196280c50ecc97d7420a73ebba01->enter($__internal_1aa34f97b83d29741d4ff0dc2f2b55c6b445196280c50ecc97d7420a73ebba01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_1aa34f97b83d29741d4ff0dc2f2b55c6b445196280c50ecc97d7420a73ebba01->leave($__internal_1aa34f97b83d29741d4ff0dc2f2b55c6b445196280c50ecc97d7420a73ebba01_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
