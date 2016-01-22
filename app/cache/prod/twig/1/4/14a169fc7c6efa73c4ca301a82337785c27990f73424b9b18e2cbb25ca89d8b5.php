<?php

/* PointWebAppBundle:Default:index1.html.twig */
class __TwigTemplate_14a169fc7c6efa73c4ca301a82337785c27990f73424b9b18e2cbb25ca89d8b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebAppBundle:Default:index1.html.twig", 1);
        $this->blocks = array(
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5811d04bc63126d53540cd39817161b64c2aaeca50a1d17d2e8b69020e113a43 = $this->env->getExtension("native_profiler");
        $__internal_5811d04bc63126d53540cd39817161b64c2aaeca50a1d17d2e8b69020e113a43->enter($__internal_5811d04bc63126d53540cd39817161b64c2aaeca50a1d17d2e8b69020e113a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Default:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5811d04bc63126d53540cd39817161b64c2aaeca50a1d17d2e8b69020e113a43->leave($__internal_5811d04bc63126d53540cd39817161b64c2aaeca50a1d17d2e8b69020e113a43_prof);

    }

    // line 2
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_968d27fb7febcf037f9cb14fb561914d8311d21532dc72143142d202b4ed9ef8 = $this->env->getExtension("native_profiler");
        $__internal_968d27fb7febcf037f9cb14fb561914d8311d21532dc72143142d202b4ed9ef8->enter($__internal_968d27fb7febcf037f9cb14fb561914d8311d21532dc72143142d202b4ed9ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 3
        echo "    Bienvenue
";
        
        $__internal_968d27fb7febcf037f9cb14fb561914d8311d21532dc72143142d202b4ed9ef8->leave($__internal_968d27fb7febcf037f9cb14fb561914d8311d21532dc72143142d202b4ed9ef8_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Default:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
