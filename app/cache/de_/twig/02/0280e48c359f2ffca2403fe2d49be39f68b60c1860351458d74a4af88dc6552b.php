<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_10526f349b826052ac534b8b8ca20878803312716d2bcfccd96a4079b481b6fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_87c9f26b4af9373f4e000c33cfb5dccde87f1902d5ae0e7e83abc888abfbf4ba = $this->env->getExtension("native_profiler");
        $__internal_87c9f26b4af9373f4e000c33cfb5dccde87f1902d5ae0e7e83abc888abfbf4ba->enter($__internal_87c9f26b4af9373f4e000c33cfb5dccde87f1902d5ae0e7e83abc888abfbf4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87c9f26b4af9373f4e000c33cfb5dccde87f1902d5ae0e7e83abc888abfbf4ba->leave($__internal_87c9f26b4af9373f4e000c33cfb5dccde87f1902d5ae0e7e83abc888abfbf4ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1bf2a23b6ab5043b33683a71ebcd8f05f5c0a5e6fc56d8f6c5de88629f95c50 = $this->env->getExtension("native_profiler");
        $__internal_c1bf2a23b6ab5043b33683a71ebcd8f05f5c0a5e6fc56d8f6c5de88629f95c50->enter($__internal_c1bf2a23b6ab5043b33683a71ebcd8f05f5c0a5e6fc56d8f6c5de88629f95c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_c1bf2a23b6ab5043b33683a71ebcd8f05f5c0a5e6fc56d8f6c5de88629f95c50->leave($__internal_c1bf2a23b6ab5043b33683a71ebcd8f05f5c0a5e6fc56d8f6c5de88629f95c50_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
