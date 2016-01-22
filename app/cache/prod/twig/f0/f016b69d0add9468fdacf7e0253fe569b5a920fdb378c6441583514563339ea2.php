<?php

/* PointWebAdminBundle:Default:index.html.twig */
class __TwigTemplate_f1bc3463931380fe51921b61a3c6a15834203d4c147b0878dc18ee7fe1d4c23f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Default:index.html.twig", 1);
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
        $__internal_57b9138291082674c639aa62fd129a88566eb12b5660808498d69b6a5f5a0106 = $this->env->getExtension("native_profiler");
        $__internal_57b9138291082674c639aa62fd129a88566eb12b5660808498d69b6a5f5a0106->enter($__internal_57b9138291082674c639aa62fd129a88566eb12b5660808498d69b6a5f5a0106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57b9138291082674c639aa62fd129a88566eb12b5660808498d69b6a5f5a0106->leave($__internal_57b9138291082674c639aa62fd129a88566eb12b5660808498d69b6a5f5a0106_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_2aa0cf18073deed3641ad714ed0b4b77624dd5d45c421f239daf3d10a9a94c45 = $this->env->getExtension("native_profiler");
        $__internal_2aa0cf18073deed3641ad714ed0b4b77624dd5d45c421f239daf3d10a9a94c45->enter($__internal_2aa0cf18073deed3641ad714ed0b4b77624dd5d45c421f239daf3d10a9a94c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    Bienvenue dans la plate-forme d'administration de votre site.
";
        
        $__internal_2aa0cf18073deed3641ad714ed0b4b77624dd5d45c421f239daf3d10a9a94c45->leave($__internal_2aa0cf18073deed3641ad714ed0b4b77624dd5d45c421f239daf3d10a9a94c45_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Default:index.html.twig";
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
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     Bienvenue dans la plate-forme d'administration de votre site.*/
/* {% endblock %}*/
