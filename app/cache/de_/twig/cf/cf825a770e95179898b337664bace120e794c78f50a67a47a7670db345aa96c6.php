<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0c265c75ed34ef6032397a1327cb45235ab22b44638e9dba59f9cbea4f314b96 extends Twig_Template
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
        $__internal_063a6b53a2c33a4506428b17ba7a73b7dec425f34e628f1b7a4f394d86d30232 = $this->env->getExtension("native_profiler");
        $__internal_063a6b53a2c33a4506428b17ba7a73b7dec425f34e628f1b7a4f394d86d30232->enter($__internal_063a6b53a2c33a4506428b17ba7a73b7dec425f34e628f1b7a4f394d86d30232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_063a6b53a2c33a4506428b17ba7a73b7dec425f34e628f1b7a4f394d86d30232->leave($__internal_063a6b53a2c33a4506428b17ba7a73b7dec425f34e628f1b7a4f394d86d30232_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_022fd5d6aedefb8d546f1ca912a7c832ab6b7e1c747a1991d0cc5614f60dc7ed = $this->env->getExtension("native_profiler");
        $__internal_022fd5d6aedefb8d546f1ca912a7c832ab6b7e1c747a1991d0cc5614f60dc7ed->enter($__internal_022fd5d6aedefb8d546f1ca912a7c832ab6b7e1c747a1991d0cc5614f60dc7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_022fd5d6aedefb8d546f1ca912a7c832ab6b7e1c747a1991d0cc5614f60dc7ed->leave($__internal_022fd5d6aedefb8d546f1ca912a7c832ab6b7e1c747a1991d0cc5614f60dc7ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3065fc01a95f307334fad7ea34a553f784a4c3f3a1d34fc1b2b29b3a12d35dc6 = $this->env->getExtension("native_profiler");
        $__internal_3065fc01a95f307334fad7ea34a553f784a4c3f3a1d34fc1b2b29b3a12d35dc6->enter($__internal_3065fc01a95f307334fad7ea34a553f784a4c3f3a1d34fc1b2b29b3a12d35dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3065fc01a95f307334fad7ea34a553f784a4c3f3a1d34fc1b2b29b3a12d35dc6->leave($__internal_3065fc01a95f307334fad7ea34a553f784a4c3f3a1d34fc1b2b29b3a12d35dc6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fd19130bbd07826e57d42b2bca8b45542d959f065586d24c5a8841fbe8ca700 = $this->env->getExtension("native_profiler");
        $__internal_0fd19130bbd07826e57d42b2bca8b45542d959f065586d24c5a8841fbe8ca700->enter($__internal_0fd19130bbd07826e57d42b2bca8b45542d959f065586d24c5a8841fbe8ca700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0fd19130bbd07826e57d42b2bca8b45542d959f065586d24c5a8841fbe8ca700->leave($__internal_0fd19130bbd07826e57d42b2bca8b45542d959f065586d24c5a8841fbe8ca700_prof);

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
