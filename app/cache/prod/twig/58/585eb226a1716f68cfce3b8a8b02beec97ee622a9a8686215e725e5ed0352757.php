<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_91e1c341d6b0a07123c4bb7fb9f4465274b5c9d23e7ab38615921e7acf98aa5c extends Twig_Template
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
        $__internal_ece763b5da853cdc0d341771a0c2c7f68e02c33ffc1c39e9754f6e1b72c0275f = $this->env->getExtension("native_profiler");
        $__internal_ece763b5da853cdc0d341771a0c2c7f68e02c33ffc1c39e9754f6e1b72c0275f->enter($__internal_ece763b5da853cdc0d341771a0c2c7f68e02c33ffc1c39e9754f6e1b72c0275f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ece763b5da853cdc0d341771a0c2c7f68e02c33ffc1c39e9754f6e1b72c0275f->leave($__internal_ece763b5da853cdc0d341771a0c2c7f68e02c33ffc1c39e9754f6e1b72c0275f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12a226b93c943a32ba9fd720ee35e01fc26cbc78d8b47f9a8117cc66361cf809 = $this->env->getExtension("native_profiler");
        $__internal_12a226b93c943a32ba9fd720ee35e01fc26cbc78d8b47f9a8117cc66361cf809->enter($__internal_12a226b93c943a32ba9fd720ee35e01fc26cbc78d8b47f9a8117cc66361cf809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_12a226b93c943a32ba9fd720ee35e01fc26cbc78d8b47f9a8117cc66361cf809->leave($__internal_12a226b93c943a32ba9fd720ee35e01fc26cbc78d8b47f9a8117cc66361cf809_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2a4491452939c51ed075105b08a0933340abee9bd30209476f04c7e08b2e2d1 = $this->env->getExtension("native_profiler");
        $__internal_e2a4491452939c51ed075105b08a0933340abee9bd30209476f04c7e08b2e2d1->enter($__internal_e2a4491452939c51ed075105b08a0933340abee9bd30209476f04c7e08b2e2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e2a4491452939c51ed075105b08a0933340abee9bd30209476f04c7e08b2e2d1->leave($__internal_e2a4491452939c51ed075105b08a0933340abee9bd30209476f04c7e08b2e2d1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ffbda41ac1430354b42e4df007d9abf730a6e6c6969b79fc506b0b067242bea = $this->env->getExtension("native_profiler");
        $__internal_3ffbda41ac1430354b42e4df007d9abf730a6e6c6969b79fc506b0b067242bea->enter($__internal_3ffbda41ac1430354b42e4df007d9abf730a6e6c6969b79fc506b0b067242bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3ffbda41ac1430354b42e4df007d9abf730a6e6c6969b79fc506b0b067242bea->leave($__internal_3ffbda41ac1430354b42e4df007d9abf730a6e6c6969b79fc506b0b067242bea_prof);

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
