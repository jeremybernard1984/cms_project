<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_61756472b3b9b02e6507cb047d0ce749cd984e257431045c09d3daaed46742be extends Twig_Template
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
        $__internal_3aa923d13ab0f85a77b68a648a2f7202194848f3367236d740c4dfc080f258d9 = $this->env->getExtension("native_profiler");
        $__internal_3aa923d13ab0f85a77b68a648a2f7202194848f3367236d740c4dfc080f258d9->enter($__internal_3aa923d13ab0f85a77b68a648a2f7202194848f3367236d740c4dfc080f258d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3aa923d13ab0f85a77b68a648a2f7202194848f3367236d740c4dfc080f258d9->leave($__internal_3aa923d13ab0f85a77b68a648a2f7202194848f3367236d740c4dfc080f258d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
