<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_5f200223cf2e7d30817fe6620193d3bd14ce6d19f087aadf3ba9bf948e0d0629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_548f5d922bdbaf685926025274e6d04dfa0a3aad9573d349458edf367d7e8ba7 = $this->env->getExtension("native_profiler");
        $__internal_548f5d922bdbaf685926025274e6d04dfa0a3aad9573d349458edf367d7e8ba7->enter($__internal_548f5d922bdbaf685926025274e6d04dfa0a3aad9573d349458edf367d7e8ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_548f5d922bdbaf685926025274e6d04dfa0a3aad9573d349458edf367d7e8ba7->leave($__internal_548f5d922bdbaf685926025274e6d04dfa0a3aad9573d349458edf367d7e8ba7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_079dcd27dfd37620d80efc4a5974cb8872a3d7fd185d729f305cd8f616328d62 = $this->env->getExtension("native_profiler");
        $__internal_079dcd27dfd37620d80efc4a5974cb8872a3d7fd185d729f305cd8f616328d62->enter($__internal_079dcd27dfd37620d80efc4a5974cb8872a3d7fd185d729f305cd8f616328d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_079dcd27dfd37620d80efc4a5974cb8872a3d7fd185d729f305cd8f616328d62->leave($__internal_079dcd27dfd37620d80efc4a5974cb8872a3d7fd185d729f305cd8f616328d62_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
