<?php

/* PointWebAdminBundle:Default:index1.html.twig */
class __TwigTemplate_792e6357d85dc5791af2390d6aeff5d49515b313f8e9c3f5b93f2a7009944f12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Default:index1.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d92362d63a33eb6ee8be13955015798243a251dc8534d148f1b23ee0f77d2032 = $this->env->getExtension("native_profiler");
        $__internal_d92362d63a33eb6ee8be13955015798243a251dc8534d148f1b23ee0f77d2032->enter($__internal_d92362d63a33eb6ee8be13955015798243a251dc8534d148f1b23ee0f77d2032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Default:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d92362d63a33eb6ee8be13955015798243a251dc8534d148f1b23ee0f77d2032->leave($__internal_d92362d63a33eb6ee8be13955015798243a251dc8534d148f1b23ee0f77d2032_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_da864e2f3c74780ef8d942ea01fa2a4e67a7b77497a35c8058f4b0306fc70565 = $this->env->getExtension("native_profiler");
        $__internal_da864e2f3c74780ef8d942ea01fa2a4e67a7b77497a35c8058f4b0306fc70565->enter($__internal_da864e2f3c74780ef8d942ea01fa2a4e67a7b77497a35c8058f4b0306fc70565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    Bienvenue dans la plate-forme d'administration de votre site.
";
        
        $__internal_da864e2f3c74780ef8d942ea01fa2a4e67a7b77497a35c8058f4b0306fc70565->leave($__internal_da864e2f3c74780ef8d942ea01fa2a4e67a7b77497a35c8058f4b0306fc70565_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Default:index1.html.twig";
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
