<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_05d95fcce71cea3dcf6e943a52aac9059919a674602c648e9dfb1948a7fb7427 extends Twig_Template
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
        $__internal_c398c055012a9283d69f9d6b2ac40ba9ad56a4e2674b49daf0dbf1c1300237aa = $this->env->getExtension("native_profiler");
        $__internal_c398c055012a9283d69f9d6b2ac40ba9ad56a4e2674b49daf0dbf1c1300237aa->enter($__internal_c398c055012a9283d69f9d6b2ac40ba9ad56a4e2674b49daf0dbf1c1300237aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c398c055012a9283d69f9d6b2ac40ba9ad56a4e2674b49daf0dbf1c1300237aa->leave($__internal_c398c055012a9283d69f9d6b2ac40ba9ad56a4e2674b49daf0dbf1c1300237aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
