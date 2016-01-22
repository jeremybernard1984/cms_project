<?php

/* @PointWebGed/Default/index.html.twig */
class __TwigTemplate_92f8096ee17a194fd7dcf613231e16d54b4d00196b2e9a20253623fa8921e197 extends Twig_Template
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
        $__internal_611b95a8062959d89e8794d73217dc7be7f2e33eb576d84ea49bc1979b4da004 = $this->env->getExtension("native_profiler");
        $__internal_611b95a8062959d89e8794d73217dc7be7f2e33eb576d84ea49bc1979b4da004->enter($__internal_611b95a8062959d89e8794d73217dc7be7f2e33eb576d84ea49bc1979b4da004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebGed/Default/index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_611b95a8062959d89e8794d73217dc7be7f2e33eb576d84ea49bc1979b4da004->leave($__internal_611b95a8062959d89e8794d73217dc7be7f2e33eb576d84ea49bc1979b4da004_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebGed/Default/index.html.twig";
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
