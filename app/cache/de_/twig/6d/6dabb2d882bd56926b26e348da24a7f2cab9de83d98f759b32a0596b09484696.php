<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_1235604a517b2c67ba02ef0777fd08b76d2c0cccf90cb065883986dcaa568093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f9af3e6a9e315a8996b93042c74300cf301c5f3b6cf7a2f6b8f97088a27f9ca = $this->env->getExtension("native_profiler");
        $__internal_2f9af3e6a9e315a8996b93042c74300cf301c5f3b6cf7a2f6b8f97088a27f9ca->enter($__internal_2f9af3e6a9e315a8996b93042c74300cf301c5f3b6cf7a2f6b8f97088a27f9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f9af3e6a9e315a8996b93042c74300cf301c5f3b6cf7a2f6b8f97088a27f9ca->leave($__internal_2f9af3e6a9e315a8996b93042c74300cf301c5f3b6cf7a2f6b8f97088a27f9ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24fc3e18e1d6b5721302f2d007721a8f64362bb047534ccaa4f22a642d15418e = $this->env->getExtension("native_profiler");
        $__internal_24fc3e18e1d6b5721302f2d007721a8f64362bb047534ccaa4f22a642d15418e->enter($__internal_24fc3e18e1d6b5721302f2d007721a8f64362bb047534ccaa4f22a642d15418e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_24fc3e18e1d6b5721302f2d007721a8f64362bb047534ccaa4f22a642d15418e->leave($__internal_24fc3e18e1d6b5721302f2d007721a8f64362bb047534ccaa4f22a642d15418e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ea111bf2b6b88aab05d9a01b1ae6058ab2f0d19bd2703a952172a17673b7a45 = $this->env->getExtension("native_profiler");
        $__internal_6ea111bf2b6b88aab05d9a01b1ae6058ab2f0d19bd2703a952172a17673b7a45->enter($__internal_6ea111bf2b6b88aab05d9a01b1ae6058ab2f0d19bd2703a952172a17673b7a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6ea111bf2b6b88aab05d9a01b1ae6058ab2f0d19bd2703a952172a17673b7a45->leave($__internal_6ea111bf2b6b88aab05d9a01b1ae6058ab2f0d19bd2703a952172a17673b7a45_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e3d87a5ac1e01aa569feddfd066129312a9f0a1bdb766f9336210e86398731b = $this->env->getExtension("native_profiler");
        $__internal_8e3d87a5ac1e01aa569feddfd066129312a9f0a1bdb766f9336210e86398731b->enter($__internal_8e3d87a5ac1e01aa569feddfd066129312a9f0a1bdb766f9336210e86398731b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_8e3d87a5ac1e01aa569feddfd066129312a9f0a1bdb766f9336210e86398731b->leave($__internal_8e3d87a5ac1e01aa569feddfd066129312a9f0a1bdb766f9336210e86398731b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a99a3ce185b36ed42d72992600a96c2a7514c70164f4e1bfebd451ee4b6b95fb = $this->env->getExtension("native_profiler");
        $__internal_a99a3ce185b36ed42d72992600a96c2a7514c70164f4e1bfebd451ee4b6b95fb->enter($__internal_a99a3ce185b36ed42d72992600a96c2a7514c70164f4e1bfebd451ee4b6b95fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a99a3ce185b36ed42d72992600a96c2a7514c70164f4e1bfebd451ee4b6b95fb->leave($__internal_a99a3ce185b36ed42d72992600a96c2a7514c70164f4e1bfebd451ee4b6b95fb_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
