<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0c7f59d5dd13008078dc9dfa7caae8aaac448fa5d8f2e4baeda3ad57e6a53548 extends Twig_Template
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
        $__internal_e48d874409eebdd3358b6ecd336efc5b29691057def8db29f90b810788852530 = $this->env->getExtension("native_profiler");
        $__internal_e48d874409eebdd3358b6ecd336efc5b29691057def8db29f90b810788852530->enter($__internal_e48d874409eebdd3358b6ecd336efc5b29691057def8db29f90b810788852530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e48d874409eebdd3358b6ecd336efc5b29691057def8db29f90b810788852530->leave($__internal_e48d874409eebdd3358b6ecd336efc5b29691057def8db29f90b810788852530_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
