<?php

/* PointWebAdminBundle:Default:index.html.twig */
class __TwigTemplate_cef40d4eec69eb885fce7804157e6d1df9e4bffa677cf874dfcfce36ba720c8e extends Twig_Template
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
        $__internal_f76e9fac1570a86f385a6745eaed51c776e11c1eeabba65e8459c44096c12a28 = $this->env->getExtension("native_profiler");
        $__internal_f76e9fac1570a86f385a6745eaed51c776e11c1eeabba65e8459c44096c12a28->enter($__internal_f76e9fac1570a86f385a6745eaed51c776e11c1eeabba65e8459c44096c12a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f76e9fac1570a86f385a6745eaed51c776e11c1eeabba65e8459c44096c12a28->leave($__internal_f76e9fac1570a86f385a6745eaed51c776e11c1eeabba65e8459c44096c12a28_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_4a468b16ed79b5511cdbff2a9f986e4ca14c098ab334ddeb7511d8145e7b6b6a = $this->env->getExtension("native_profiler");
        $__internal_4a468b16ed79b5511cdbff2a9f986e4ca14c098ab334ddeb7511d8145e7b6b6a->enter($__internal_4a468b16ed79b5511cdbff2a9f986e4ca14c098ab334ddeb7511d8145e7b6b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    Bienvenue dans la plate-forme d'administration de votre site.
";
        
        $__internal_4a468b16ed79b5511cdbff2a9f986e4ca14c098ab334ddeb7511d8145e7b6b6a->leave($__internal_4a468b16ed79b5511cdbff2a9f986e4ca14c098ab334ddeb7511d8145e7b6b6a_prof);

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
