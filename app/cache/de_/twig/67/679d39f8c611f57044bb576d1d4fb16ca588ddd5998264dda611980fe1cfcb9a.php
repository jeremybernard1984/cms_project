<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_d230753fe7e284f23fee468d2a95e47e7c88d0ea76eeb7bd4c3eb1b906603910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_9b3e3096c4baff97baf46c6d38342f4f1ea0d9d51d676057d5b6a977d4846ef5 = $this->env->getExtension("native_profiler");
        $__internal_9b3e3096c4baff97baf46c6d38342f4f1ea0d9d51d676057d5b6a977d4846ef5->enter($__internal_9b3e3096c4baff97baf46c6d38342f4f1ea0d9d51d676057d5b6a977d4846ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b3e3096c4baff97baf46c6d38342f4f1ea0d9d51d676057d5b6a977d4846ef5->leave($__internal_9b3e3096c4baff97baf46c6d38342f4f1ea0d9d51d676057d5b6a977d4846ef5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c2070bead561989f97d6b0dd5ab4b0669d6ce8a42414ce7c51c01572eda67fc = $this->env->getExtension("native_profiler");
        $__internal_4c2070bead561989f97d6b0dd5ab4b0669d6ce8a42414ce7c51c01572eda67fc->enter($__internal_4c2070bead561989f97d6b0dd5ab4b0669d6ce8a42414ce7c51c01572eda67fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4c2070bead561989f97d6b0dd5ab4b0669d6ce8a42414ce7c51c01572eda67fc->leave($__internal_4c2070bead561989f97d6b0dd5ab4b0669d6ce8a42414ce7c51c01572eda67fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
