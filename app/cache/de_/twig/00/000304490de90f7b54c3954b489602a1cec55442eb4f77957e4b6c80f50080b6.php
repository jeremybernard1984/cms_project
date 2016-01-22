<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_6927ef35cb5306826c837fa48d1f321318fbb70918fed1ba598f8c04b9536499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_ba08526737200fb286178675701dd46869db58dbdd0470e5c016b1eb03280d36 = $this->env->getExtension("native_profiler");
        $__internal_ba08526737200fb286178675701dd46869db58dbdd0470e5c016b1eb03280d36->enter($__internal_ba08526737200fb286178675701dd46869db58dbdd0470e5c016b1eb03280d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba08526737200fb286178675701dd46869db58dbdd0470e5c016b1eb03280d36->leave($__internal_ba08526737200fb286178675701dd46869db58dbdd0470e5c016b1eb03280d36_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a9c2dbe4377a27e78a22da445597a53ebe42e71d05ad53f9c3d269f136cfff2 = $this->env->getExtension("native_profiler");
        $__internal_1a9c2dbe4377a27e78a22da445597a53ebe42e71d05ad53f9c3d269f136cfff2->enter($__internal_1a9c2dbe4377a27e78a22da445597a53ebe42e71d05ad53f9c3d269f136cfff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1a9c2dbe4377a27e78a22da445597a53ebe42e71d05ad53f9c3d269f136cfff2->leave($__internal_1a9c2dbe4377a27e78a22da445597a53ebe42e71d05ad53f9c3d269f136cfff2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
