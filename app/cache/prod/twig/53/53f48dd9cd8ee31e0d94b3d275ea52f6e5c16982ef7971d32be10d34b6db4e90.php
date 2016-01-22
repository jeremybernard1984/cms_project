<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9258589cd62984601c1017475dfa7cb6e600b7d5dbaea35466c7d7a69150ce47 extends Twig_Template
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
        $__internal_44553ec616494f6acc33f771c77524f7db771594327239cab97123b8d3047f92 = $this->env->getExtension("native_profiler");
        $__internal_44553ec616494f6acc33f771c77524f7db771594327239cab97123b8d3047f92->enter($__internal_44553ec616494f6acc33f771c77524f7db771594327239cab97123b8d3047f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44553ec616494f6acc33f771c77524f7db771594327239cab97123b8d3047f92->leave($__internal_44553ec616494f6acc33f771c77524f7db771594327239cab97123b8d3047f92_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7214744b2d8d11319e702bddb07b0b02cb3b614a475fd1599ede17912cacf601 = $this->env->getExtension("native_profiler");
        $__internal_7214744b2d8d11319e702bddb07b0b02cb3b614a475fd1599ede17912cacf601->enter($__internal_7214744b2d8d11319e702bddb07b0b02cb3b614a475fd1599ede17912cacf601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7214744b2d8d11319e702bddb07b0b02cb3b614a475fd1599ede17912cacf601->leave($__internal_7214744b2d8d11319e702bddb07b0b02cb3b614a475fd1599ede17912cacf601_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7d8d229da4d13f36387ad60bc1052b62106dab4c1e555b1d9a43fadc6d61af1 = $this->env->getExtension("native_profiler");
        $__internal_e7d8d229da4d13f36387ad60bc1052b62106dab4c1e555b1d9a43fadc6d61af1->enter($__internal_e7d8d229da4d13f36387ad60bc1052b62106dab4c1e555b1d9a43fadc6d61af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e7d8d229da4d13f36387ad60bc1052b62106dab4c1e555b1d9a43fadc6d61af1->leave($__internal_e7d8d229da4d13f36387ad60bc1052b62106dab4c1e555b1d9a43fadc6d61af1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0878569b913a21ce1d8125b2302be87f786e4b76dec4cd234d71387694f80411 = $this->env->getExtension("native_profiler");
        $__internal_0878569b913a21ce1d8125b2302be87f786e4b76dec4cd234d71387694f80411->enter($__internal_0878569b913a21ce1d8125b2302be87f786e4b76dec4cd234d71387694f80411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0878569b913a21ce1d8125b2302be87f786e4b76dec4cd234d71387694f80411->leave($__internal_0878569b913a21ce1d8125b2302be87f786e4b76dec4cd234d71387694f80411_prof);

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
