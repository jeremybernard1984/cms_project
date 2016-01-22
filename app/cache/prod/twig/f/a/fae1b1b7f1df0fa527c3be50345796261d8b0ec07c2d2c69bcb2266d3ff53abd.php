<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fae1b1b7f1df0fa527c3be50345796261d8b0ec07c2d2c69bcb2266d3ff53abd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fee68221c8d444deb5cb6eaa3c31f9017be484f6f965fe908012b937e8dd5932 = $this->env->getExtension("native_profiler");
        $__internal_fee68221c8d444deb5cb6eaa3c31f9017be484f6f965fe908012b937e8dd5932->enter($__internal_fee68221c8d444deb5cb6eaa3c31f9017be484f6f965fe908012b937e8dd5932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fee68221c8d444deb5cb6eaa3c31f9017be484f6f965fe908012b937e8dd5932->leave($__internal_fee68221c8d444deb5cb6eaa3c31f9017be484f6f965fe908012b937e8dd5932_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f391930d8ea7faff56165cbb2f890fbc04967fb915989e314d538eba8aa5460 = $this->env->getExtension("native_profiler");
        $__internal_6f391930d8ea7faff56165cbb2f890fbc04967fb915989e314d538eba8aa5460->enter($__internal_6f391930d8ea7faff56165cbb2f890fbc04967fb915989e314d538eba8aa5460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6f391930d8ea7faff56165cbb2f890fbc04967fb915989e314d538eba8aa5460->leave($__internal_6f391930d8ea7faff56165cbb2f890fbc04967fb915989e314d538eba8aa5460_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_45161982578350bf5346cbfc985be5d189c517e7ff60080fba0a926dbf8b512f = $this->env->getExtension("native_profiler");
        $__internal_45161982578350bf5346cbfc985be5d189c517e7ff60080fba0a926dbf8b512f->enter($__internal_45161982578350bf5346cbfc985be5d189c517e7ff60080fba0a926dbf8b512f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_45161982578350bf5346cbfc985be5d189c517e7ff60080fba0a926dbf8b512f->leave($__internal_45161982578350bf5346cbfc985be5d189c517e7ff60080fba0a926dbf8b512f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_947ded04f11bb304352e0b46100eef4dd6d2c32c9890a7d5769a5b6574f5be1e = $this->env->getExtension("native_profiler");
        $__internal_947ded04f11bb304352e0b46100eef4dd6d2c32c9890a7d5769a5b6574f5be1e->enter($__internal_947ded04f11bb304352e0b46100eef4dd6d2c32c9890a7d5769a5b6574f5be1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_947ded04f11bb304352e0b46100eef4dd6d2c32c9890a7d5769a5b6574f5be1e->leave($__internal_947ded04f11bb304352e0b46100eef4dd6d2c32c9890a7d5769a5b6574f5be1e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
