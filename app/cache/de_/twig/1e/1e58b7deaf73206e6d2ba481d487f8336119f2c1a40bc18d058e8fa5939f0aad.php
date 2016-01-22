<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0f9c61b3f9f34c7adc4b6144dffe251d27360030c8f8e2e6cf56edfdaa1ac342 extends Twig_Template
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
        $__internal_bcb3910836a578eda25be15260de120a26e37dc3ae32c283f443bc4968b87930 = $this->env->getExtension("native_profiler");
        $__internal_bcb3910836a578eda25be15260de120a26e37dc3ae32c283f443bc4968b87930->enter($__internal_bcb3910836a578eda25be15260de120a26e37dc3ae32c283f443bc4968b87930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bcb3910836a578eda25be15260de120a26e37dc3ae32c283f443bc4968b87930->leave($__internal_bcb3910836a578eda25be15260de120a26e37dc3ae32c283f443bc4968b87930_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
