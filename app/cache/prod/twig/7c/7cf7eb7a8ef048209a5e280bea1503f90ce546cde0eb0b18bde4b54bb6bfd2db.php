<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5b69ecd3c05df2d792cd21bc5d8021af68ff196c7bc571713133810d27e49ca3 extends Twig_Template
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
        $__internal_ccdea9e9354752c4a23ba6687c0de0dd0eff7fa86f0742ec00dccc332fbc9963 = $this->env->getExtension("native_profiler");
        $__internal_ccdea9e9354752c4a23ba6687c0de0dd0eff7fa86f0742ec00dccc332fbc9963->enter($__internal_ccdea9e9354752c4a23ba6687c0de0dd0eff7fa86f0742ec00dccc332fbc9963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccdea9e9354752c4a23ba6687c0de0dd0eff7fa86f0742ec00dccc332fbc9963->leave($__internal_ccdea9e9354752c4a23ba6687c0de0dd0eff7fa86f0742ec00dccc332fbc9963_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8919cadfbe3adae70e398dbfd93e4103b1ee4f418cbb09f4354d3571223032d9 = $this->env->getExtension("native_profiler");
        $__internal_8919cadfbe3adae70e398dbfd93e4103b1ee4f418cbb09f4354d3571223032d9->enter($__internal_8919cadfbe3adae70e398dbfd93e4103b1ee4f418cbb09f4354d3571223032d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8919cadfbe3adae70e398dbfd93e4103b1ee4f418cbb09f4354d3571223032d9->leave($__internal_8919cadfbe3adae70e398dbfd93e4103b1ee4f418cbb09f4354d3571223032d9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f85c7df0004dad90d192bb5c51d2590476b2b378f4d54df2b8214a55427be7f = $this->env->getExtension("native_profiler");
        $__internal_8f85c7df0004dad90d192bb5c51d2590476b2b378f4d54df2b8214a55427be7f->enter($__internal_8f85c7df0004dad90d192bb5c51d2590476b2b378f4d54df2b8214a55427be7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8f85c7df0004dad90d192bb5c51d2590476b2b378f4d54df2b8214a55427be7f->leave($__internal_8f85c7df0004dad90d192bb5c51d2590476b2b378f4d54df2b8214a55427be7f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ef640184ed286147961324efd1ea4b662d72f1aefcccaef1a80de925e9cb52a = $this->env->getExtension("native_profiler");
        $__internal_2ef640184ed286147961324efd1ea4b662d72f1aefcccaef1a80de925e9cb52a->enter($__internal_2ef640184ed286147961324efd1ea4b662d72f1aefcccaef1a80de925e9cb52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2ef640184ed286147961324efd1ea4b662d72f1aefcccaef1a80de925e9cb52a->leave($__internal_2ef640184ed286147961324efd1ea4b662d72f1aefcccaef1a80de925e9cb52a_prof);

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
