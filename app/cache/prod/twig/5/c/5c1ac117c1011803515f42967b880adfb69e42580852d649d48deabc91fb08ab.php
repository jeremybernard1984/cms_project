<?php

/* PointWebAppBundle:Default:index1.html.twig */
class __TwigTemplate_5c1ac117c1011803515f42967b880adfb69e42580852d649d48deabc91fb08ab extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body_content($context, array $blocks = array())
    {
        // line 3
        echo "    Bienvenue
";
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
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
