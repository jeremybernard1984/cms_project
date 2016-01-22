<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0e85619e1b057a57042f3b71687158c16e853e89cb39d6c133448ea0ff2fb692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_274fa35e50647bfa1e20f1c5c1cf851a9c9c93d61f68616406c808e53b18aef1 = $this->env->getExtension("native_profiler");
        $__internal_274fa35e50647bfa1e20f1c5c1cf851a9c9c93d61f68616406c808e53b18aef1->enter($__internal_274fa35e50647bfa1e20f1c5c1cf851a9c9c93d61f68616406c808e53b18aef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_274fa35e50647bfa1e20f1c5c1cf851a9c9c93d61f68616406c808e53b18aef1->leave($__internal_274fa35e50647bfa1e20f1c5c1cf851a9c9c93d61f68616406c808e53b18aef1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7871c9c7c6e780c9e6343fad5d9075865718431a95fba425220b421d6c1d59e3 = $this->env->getExtension("native_profiler");
        $__internal_7871c9c7c6e780c9e6343fad5d9075865718431a95fba425220b421d6c1d59e3->enter($__internal_7871c9c7c6e780c9e6343fad5d9075865718431a95fba425220b421d6c1d59e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7871c9c7c6e780c9e6343fad5d9075865718431a95fba425220b421d6c1d59e3->leave($__internal_7871c9c7c6e780c9e6343fad5d9075865718431a95fba425220b421d6c1d59e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7774200a6c89d2d726bf4bb9516f05dc5423f191d0a440218cd6c36cdc502a9d = $this->env->getExtension("native_profiler");
        $__internal_7774200a6c89d2d726bf4bb9516f05dc5423f191d0a440218cd6c36cdc502a9d->enter($__internal_7774200a6c89d2d726bf4bb9516f05dc5423f191d0a440218cd6c36cdc502a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7774200a6c89d2d726bf4bb9516f05dc5423f191d0a440218cd6c36cdc502a9d->leave($__internal_7774200a6c89d2d726bf4bb9516f05dc5423f191d0a440218cd6c36cdc502a9d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb0d6bc9c31221255cd7ef4913c8fb319f79302b216f82d8e7bb91ea2fa0f21f = $this->env->getExtension("native_profiler");
        $__internal_fb0d6bc9c31221255cd7ef4913c8fb319f79302b216f82d8e7bb91ea2fa0f21f->enter($__internal_fb0d6bc9c31221255cd7ef4913c8fb319f79302b216f82d8e7bb91ea2fa0f21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fb0d6bc9c31221255cd7ef4913c8fb319f79302b216f82d8e7bb91ea2fa0f21f->leave($__internal_fb0d6bc9c31221255cd7ef4913c8fb319f79302b216f82d8e7bb91ea2fa0f21f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
