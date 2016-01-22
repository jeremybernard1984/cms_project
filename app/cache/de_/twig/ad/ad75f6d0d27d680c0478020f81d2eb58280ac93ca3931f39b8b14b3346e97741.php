<?php

/* PointWebGedBundle:Default:index.html.twig */
class __TwigTemplate_68bcfe54613b99e3696cf8a0beb4ad999b4b77096ea2d1ad6d4c1a6269c29456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8435200bd3a0215eab029e0c177d4cc815f4bf0ccbb9008457ccdd43f091cd0 = $this->env->getExtension("native_profiler");
        $__internal_d8435200bd3a0215eab029e0c177d4cc815f4bf0ccbb9008457ccdd43f091cd0->enter($__internal_d8435200bd3a0215eab029e0c177d4cc815f4bf0ccbb9008457ccdd43f091cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGedBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_d8435200bd3a0215eab029e0c177d4cc815f4bf0ccbb9008457ccdd43f091cd0->leave($__internal_d8435200bd3a0215eab029e0c177d4cc815f4bf0ccbb9008457ccdd43f091cd0_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGedBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
