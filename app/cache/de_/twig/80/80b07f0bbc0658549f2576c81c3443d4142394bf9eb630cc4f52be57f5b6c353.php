<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_cfd3104488947adcf301d4607dc71dfbdcd55da079406f0beadf0d723ab58c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d158177d9b27e3a3b47a296fcfa6f366d122cb303e14885618831b3e4079191e = $this->env->getExtension("native_profiler");
        $__internal_d158177d9b27e3a3b47a296fcfa6f366d122cb303e14885618831b3e4079191e->enter($__internal_d158177d9b27e3a3b47a296fcfa6f366d122cb303e14885618831b3e4079191e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d158177d9b27e3a3b47a296fcfa6f366d122cb303e14885618831b3e4079191e->leave($__internal_d158177d9b27e3a3b47a296fcfa6f366d122cb303e14885618831b3e4079191e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53f5f90535664228c8340a3c67575b6d1e0ddbe12ce6ee4206fda9d9792fe79f = $this->env->getExtension("native_profiler");
        $__internal_53f5f90535664228c8340a3c67575b6d1e0ddbe12ce6ee4206fda9d9792fe79f->enter($__internal_53f5f90535664228c8340a3c67575b6d1e0ddbe12ce6ee4206fda9d9792fe79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_53f5f90535664228c8340a3c67575b6d1e0ddbe12ce6ee4206fda9d9792fe79f->leave($__internal_53f5f90535664228c8340a3c67575b6d1e0ddbe12ce6ee4206fda9d9792fe79f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
