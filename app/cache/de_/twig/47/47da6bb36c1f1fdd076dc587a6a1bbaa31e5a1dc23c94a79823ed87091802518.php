<?php

/* @PointWebApp/Default/thanks.html.twig */
class __TwigTemplate_a5bf57005f7c0473bf2e6b11c0089a199af5642b60d13980b8e23817984a31a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "@PointWebApp/Default/thanks.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ef0182702e9d086b49749b30dcaae6ddc01b81e0bb783bda616dc35aa50d245 = $this->env->getExtension("native_profiler");
        $__internal_7ef0182702e9d086b49749b30dcaae6ddc01b81e0bb783bda616dc35aa50d245->enter($__internal_7ef0182702e9d086b49749b30dcaae6ddc01b81e0bb783bda616dc35aa50d245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebApp/Default/thanks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ef0182702e9d086b49749b30dcaae6ddc01b81e0bb783bda616dc35aa50d245->leave($__internal_7ef0182702e9d086b49749b30dcaae6ddc01b81e0bb783bda616dc35aa50d245_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e07c24b8051f2221b387989adfc4b5e759ee4dbc07c16f02716010cc3e875cd = $this->env->getExtension("native_profiler");
        $__internal_5e07c24b8051f2221b387989adfc4b5e759ee4dbc07c16f02716010cc3e875cd->enter($__internal_5e07c24b8051f2221b387989adfc4b5e759ee4dbc07c16f02716010cc3e875cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "PAGE MERCI
";
        
        $__internal_5e07c24b8051f2221b387989adfc4b5e759ee4dbc07c16f02716010cc3e875cd->leave($__internal_5e07c24b8051f2221b387989adfc4b5e759ee4dbc07c16f02716010cc3e875cd_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebApp/Default/thanks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/* PAGE MERCI*/
/* {% endblock %}*/
