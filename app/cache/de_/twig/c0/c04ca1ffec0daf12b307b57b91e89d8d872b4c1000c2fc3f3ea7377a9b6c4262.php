<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_96812186e8522802b7610777af15a4100793ad489d6058c655c4df90c760e015 extends Twig_Template
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
        $__internal_afda199d25c44eaa5e858a67042cb8797e229a0b53d55da6deaa7879d7797ec9 = $this->env->getExtension("native_profiler");
        $__internal_afda199d25c44eaa5e858a67042cb8797e229a0b53d55da6deaa7879d7797ec9->enter($__internal_afda199d25c44eaa5e858a67042cb8797e229a0b53d55da6deaa7879d7797ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_afda199d25c44eaa5e858a67042cb8797e229a0b53d55da6deaa7879d7797ec9->leave($__internal_afda199d25c44eaa5e858a67042cb8797e229a0b53d55da6deaa7879d7797ec9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
