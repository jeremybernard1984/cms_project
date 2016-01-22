<?php

/* @PointWebApp/Default/legal.html.twig */
class __TwigTemplate_6412c90e359d4663747dff78f303f24fd64c24e068888c6016854c518355c0e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "@PointWebApp/Default/legal.html.twig", 1);
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
        $__internal_2f47e4a691cbc01ff4244fab52593a9d64e7f3d7cf065c80fab268e4eb423798 = $this->env->getExtension("native_profiler");
        $__internal_2f47e4a691cbc01ff4244fab52593a9d64e7f3d7cf065c80fab268e4eb423798->enter($__internal_2f47e4a691cbc01ff4244fab52593a9d64e7f3d7cf065c80fab268e4eb423798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebApp/Default/legal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f47e4a691cbc01ff4244fab52593a9d64e7f3d7cf065c80fab268e4eb423798->leave($__internal_2f47e4a691cbc01ff4244fab52593a9d64e7f3d7cf065c80fab268e4eb423798_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d2eff1c8625d2a67e3016a515b41a1812acfd60332b8d67ec5ab7234a89d384 = $this->env->getExtension("native_profiler");
        $__internal_5d2eff1c8625d2a67e3016a515b41a1812acfd60332b8d67ec5ab7234a89d384->enter($__internal_5d2eff1c8625d2a67e3016a515b41a1812acfd60332b8d67ec5ab7234a89d384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "PAGE MENTIONS LEGALES
";
        
        $__internal_5d2eff1c8625d2a67e3016a515b41a1812acfd60332b8d67ec5ab7234a89d384->leave($__internal_5d2eff1c8625d2a67e3016a515b41a1812acfd60332b8d67ec5ab7234a89d384_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebApp/Default/legal.html.twig";
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
/* PAGE MENTIONS LEGALES*/
/* {% endblock %}*/
