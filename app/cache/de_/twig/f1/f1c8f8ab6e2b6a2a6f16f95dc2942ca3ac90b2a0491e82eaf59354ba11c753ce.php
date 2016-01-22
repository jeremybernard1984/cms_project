<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_25108e5de00687f2f5e1e322c7d1d5a52d0e495aab6b3b976bce65c3f9e578cc extends Twig_Template
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
        $__internal_44b1680620ad18a01f511fc2e3e18b14dae681c7f2f0aeb42c05d7149a6e3b9b = $this->env->getExtension("native_profiler");
        $__internal_44b1680620ad18a01f511fc2e3e18b14dae681c7f2f0aeb42c05d7149a6e3b9b->enter($__internal_44b1680620ad18a01f511fc2e3e18b14dae681c7f2f0aeb42c05d7149a6e3b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_44b1680620ad18a01f511fc2e3e18b14dae681c7f2f0aeb42c05d7149a6e3b9b->leave($__internal_44b1680620ad18a01f511fc2e3e18b14dae681c7f2f0aeb42c05d7149a6e3b9b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
