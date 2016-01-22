<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c7fc4101aed7011aa7545a23dfdaf8a6e6d51bde8a6c9ad982fc42f0b7db7935 extends Twig_Template
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
        $__internal_9a9791aee26d4236c9f00cb2cc3624c00b5ad5bc326fc1d5dd2be9955f67aaf6 = $this->env->getExtension("native_profiler");
        $__internal_9a9791aee26d4236c9f00cb2cc3624c00b5ad5bc326fc1d5dd2be9955f67aaf6->enter($__internal_9a9791aee26d4236c9f00cb2cc3624c00b5ad5bc326fc1d5dd2be9955f67aaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9a9791aee26d4236c9f00cb2cc3624c00b5ad5bc326fc1d5dd2be9955f67aaf6->leave($__internal_9a9791aee26d4236c9f00cb2cc3624c00b5ad5bc326fc1d5dd2be9955f67aaf6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
