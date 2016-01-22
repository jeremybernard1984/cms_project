<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7440cc160131d7f9f91965ad61287aff5afb97c65503cdb97dee2709b3f8abb7 extends Twig_Template
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
        $__internal_05fcfc72de8cef5dfd2aafc42a6a8f561533f92c6113eda313ce2f48484eac2d = $this->env->getExtension("native_profiler");
        $__internal_05fcfc72de8cef5dfd2aafc42a6a8f561533f92c6113eda313ce2f48484eac2d->enter($__internal_05fcfc72de8cef5dfd2aafc42a6a8f561533f92c6113eda313ce2f48484eac2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05fcfc72de8cef5dfd2aafc42a6a8f561533f92c6113eda313ce2f48484eac2d->leave($__internal_05fcfc72de8cef5dfd2aafc42a6a8f561533f92c6113eda313ce2f48484eac2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e9f29061729b3bebd200a4b744cc7a3df7d7d97261bcafd68c795ece0c8e2c2 = $this->env->getExtension("native_profiler");
        $__internal_1e9f29061729b3bebd200a4b744cc7a3df7d7d97261bcafd68c795ece0c8e2c2->enter($__internal_1e9f29061729b3bebd200a4b744cc7a3df7d7d97261bcafd68c795ece0c8e2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e9f29061729b3bebd200a4b744cc7a3df7d7d97261bcafd68c795ece0c8e2c2->leave($__internal_1e9f29061729b3bebd200a4b744cc7a3df7d7d97261bcafd68c795ece0c8e2c2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d0a593af7856dbae5beb83e9f5f267592640b76d926588038488bf48216abf6 = $this->env->getExtension("native_profiler");
        $__internal_1d0a593af7856dbae5beb83e9f5f267592640b76d926588038488bf48216abf6->enter($__internal_1d0a593af7856dbae5beb83e9f5f267592640b76d926588038488bf48216abf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1d0a593af7856dbae5beb83e9f5f267592640b76d926588038488bf48216abf6->leave($__internal_1d0a593af7856dbae5beb83e9f5f267592640b76d926588038488bf48216abf6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_28117a7a01d38e84e075aa49c034969027dcf5b43543490ebcf556655b17f854 = $this->env->getExtension("native_profiler");
        $__internal_28117a7a01d38e84e075aa49c034969027dcf5b43543490ebcf556655b17f854->enter($__internal_28117a7a01d38e84e075aa49c034969027dcf5b43543490ebcf556655b17f854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_28117a7a01d38e84e075aa49c034969027dcf5b43543490ebcf556655b17f854->leave($__internal_28117a7a01d38e84e075aa49c034969027dcf5b43543490ebcf556655b17f854_prof);

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
