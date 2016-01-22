<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_759d9d40ecce1983ea625e7bccd338705281f6437d9fb93283d2aa2a3a56d2ef extends Twig_Template
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
        $__internal_910b5b8999d88acf02c72aaea43db5f8034bae47d544daac19fd05ce20e96224 = $this->env->getExtension("native_profiler");
        $__internal_910b5b8999d88acf02c72aaea43db5f8034bae47d544daac19fd05ce20e96224->enter($__internal_910b5b8999d88acf02c72aaea43db5f8034bae47d544daac19fd05ce20e96224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_910b5b8999d88acf02c72aaea43db5f8034bae47d544daac19fd05ce20e96224->leave($__internal_910b5b8999d88acf02c72aaea43db5f8034bae47d544daac19fd05ce20e96224_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
