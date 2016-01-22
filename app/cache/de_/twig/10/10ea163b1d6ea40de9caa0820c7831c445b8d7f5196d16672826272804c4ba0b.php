<?php

/* @PointWebAdmin/Default/index.html.twig */
class __TwigTemplate_d347db6851f9aacb67ae53ccbacd0c797d3ba969e4bacac3a3bb90fbf6dd0dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "@PointWebAdmin/Default/index.html.twig", 1);
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
        $__internal_661a4817d1399582c99ae065d2591751ce435c9cc334d4cec052ab97cd69bf75 = $this->env->getExtension("native_profiler");
        $__internal_661a4817d1399582c99ae065d2591751ce435c9cc334d4cec052ab97cd69bf75->enter($__internal_661a4817d1399582c99ae065d2591751ce435c9cc334d4cec052ab97cd69bf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebAdmin/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_661a4817d1399582c99ae065d2591751ce435c9cc334d4cec052ab97cd69bf75->leave($__internal_661a4817d1399582c99ae065d2591751ce435c9cc334d4cec052ab97cd69bf75_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_4178692ede6dce15f3701de4cb73786de8ddceb35d00999c270aa52e57aa81ba = $this->env->getExtension("native_profiler");
        $__internal_4178692ede6dce15f3701de4cb73786de8ddceb35d00999c270aa52e57aa81ba->enter($__internal_4178692ede6dce15f3701de4cb73786de8ddceb35d00999c270aa52e57aa81ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    Bienvenue dans la plate-forme d'administration de votre site.
";
        
        $__internal_4178692ede6dce15f3701de4cb73786de8ddceb35d00999c270aa52e57aa81ba->leave($__internal_4178692ede6dce15f3701de4cb73786de8ddceb35d00999c270aa52e57aa81ba_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebAdmin/Default/index.html.twig";
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
