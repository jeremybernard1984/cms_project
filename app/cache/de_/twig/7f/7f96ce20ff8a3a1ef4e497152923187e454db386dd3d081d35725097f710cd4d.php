<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_86df39b07a10b8667e97cf797a233259c9fcdc60f3363d446457a230baa4b0ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b1770caebf0c03eaa974d830a0df64b7b05ca9308ef958b2cb40c5ed7407daa2 = $this->env->getExtension("native_profiler");
        $__internal_b1770caebf0c03eaa974d830a0df64b7b05ca9308ef958b2cb40c5ed7407daa2->enter($__internal_b1770caebf0c03eaa974d830a0df64b7b05ca9308ef958b2cb40c5ed7407daa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1770caebf0c03eaa974d830a0df64b7b05ca9308ef958b2cb40c5ed7407daa2->leave($__internal_b1770caebf0c03eaa974d830a0df64b7b05ca9308ef958b2cb40c5ed7407daa2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31f8343e3ccdf6826d194801e3312de9c20ca5292058ce2c8ce9f928bbd42372 = $this->env->getExtension("native_profiler");
        $__internal_31f8343e3ccdf6826d194801e3312de9c20ca5292058ce2c8ce9f928bbd42372->enter($__internal_31f8343e3ccdf6826d194801e3312de9c20ca5292058ce2c8ce9f928bbd42372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_31f8343e3ccdf6826d194801e3312de9c20ca5292058ce2c8ce9f928bbd42372->leave($__internal_31f8343e3ccdf6826d194801e3312de9c20ca5292058ce2c8ce9f928bbd42372_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
