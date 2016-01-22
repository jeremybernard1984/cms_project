<?php

/* ::base.html.twig */
class __TwigTemplate_542f41fa84a71a52593ea2f8e6875c57e176237fbfb3b66332b1ada1031f0b71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7550fc69bf6fc02b8159a7b8d25af46edf87fa5dea6bad4dc0d7db95deed68dc = $this->env->getExtension("native_profiler");
        $__internal_7550fc69bf6fc02b8159a7b8d25af46edf87fa5dea6bad4dc0d7db95deed68dc->enter($__internal_7550fc69bf6fc02b8159a7b8d25af46edf87fa5dea6bad4dc0d7db95deed68dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7550fc69bf6fc02b8159a7b8d25af46edf87fa5dea6bad4dc0d7db95deed68dc->leave($__internal_7550fc69bf6fc02b8159a7b8d25af46edf87fa5dea6bad4dc0d7db95deed68dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_621141d37643201e5c06c6a7aa9255e04a6b2d14307d4767c7f613f50c9aaf23 = $this->env->getExtension("native_profiler");
        $__internal_621141d37643201e5c06c6a7aa9255e04a6b2d14307d4767c7f613f50c9aaf23->enter($__internal_621141d37643201e5c06c6a7aa9255e04a6b2d14307d4767c7f613f50c9aaf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_621141d37643201e5c06c6a7aa9255e04a6b2d14307d4767c7f613f50c9aaf23->leave($__internal_621141d37643201e5c06c6a7aa9255e04a6b2d14307d4767c7f613f50c9aaf23_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6aaf0012f126098edf2e8ce08c64bb8abb481a8a739b74472407e7d08d9e10c0 = $this->env->getExtension("native_profiler");
        $__internal_6aaf0012f126098edf2e8ce08c64bb8abb481a8a739b74472407e7d08d9e10c0->enter($__internal_6aaf0012f126098edf2e8ce08c64bb8abb481a8a739b74472407e7d08d9e10c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6aaf0012f126098edf2e8ce08c64bb8abb481a8a739b74472407e7d08d9e10c0->leave($__internal_6aaf0012f126098edf2e8ce08c64bb8abb481a8a739b74472407e7d08d9e10c0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_da4432cb5e9ede1a9dbd1788b6fd13c3b0b9b3ac62c5ea6286b6636bfe0de336 = $this->env->getExtension("native_profiler");
        $__internal_da4432cb5e9ede1a9dbd1788b6fd13c3b0b9b3ac62c5ea6286b6636bfe0de336->enter($__internal_da4432cb5e9ede1a9dbd1788b6fd13c3b0b9b3ac62c5ea6286b6636bfe0de336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da4432cb5e9ede1a9dbd1788b6fd13c3b0b9b3ac62c5ea6286b6636bfe0de336->leave($__internal_da4432cb5e9ede1a9dbd1788b6fd13c3b0b9b3ac62c5ea6286b6636bfe0de336_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70941d33c39876dc5f26ae67d42abf968d62fb4e55c9be539d08ff0847cb2284 = $this->env->getExtension("native_profiler");
        $__internal_70941d33c39876dc5f26ae67d42abf968d62fb4e55c9be539d08ff0847cb2284->enter($__internal_70941d33c39876dc5f26ae67d42abf968d62fb4e55c9be539d08ff0847cb2284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_70941d33c39876dc5f26ae67d42abf968d62fb4e55c9be539d08ff0847cb2284->leave($__internal_70941d33c39876dc5f26ae67d42abf968d62fb4e55c9be539d08ff0847cb2284_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
