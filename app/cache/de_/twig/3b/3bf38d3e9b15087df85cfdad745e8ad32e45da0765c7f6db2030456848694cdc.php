<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_dd00a7951e6d739897a01da4b7dda059a6aa4463711052e569e0c1820ef2d204 extends Twig_Template
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
        $__internal_e1081dbc382b93fb52d2a92b3755bd58f7e2b1b5a0391124ebeb463a287bb47d = $this->env->getExtension("native_profiler");
        $__internal_e1081dbc382b93fb52d2a92b3755bd58f7e2b1b5a0391124ebeb463a287bb47d->enter($__internal_e1081dbc382b93fb52d2a92b3755bd58f7e2b1b5a0391124ebeb463a287bb47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e1081dbc382b93fb52d2a92b3755bd58f7e2b1b5a0391124ebeb463a287bb47d->leave($__internal_e1081dbc382b93fb52d2a92b3755bd58f7e2b1b5a0391124ebeb463a287bb47d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
