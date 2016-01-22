<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_dcc929071b72087d0244c82fddba1e0c2aeaa47ff8853a177898f313cd4cc475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'slider' => array($this, 'block_slider'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "<footer>
    ";
        // line 34
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "</footer>
";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "MON MOULE SERCO POINT-WEB";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <header>
        ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "    </header>
    <div id=\"slider\">
        ";
        // line 18
        $this->displayBlock('slider', $context, $blocks);
        // line 21
        echo "    </div>
    <div id=\"menu\">
        ";
        // line 23
        $this->displayBlock('menu', $context, $blocks);
        // line 26
        echo "    </div>
    <div id=\"content\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "    </div>
";
    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        // line 14
        echo "            ";
        $this->loadTemplate("PointWebAppBundle::_header.html.twig", "PointWebAppBundle::base.html.twig", 14)->display($context);
        // line 15
        echo "        ";
    }

    // line 18
    public function block_slider($context, array $blocks = array())
    {
        // line 19
        echo "            ";
        $this->loadTemplate("PointWebAppBundle::_slider.html.twig", "PointWebAppBundle::base.html.twig", 19)->display($context);
        // line 20
        echo "        ";
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        // line 24
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:menu"));
        echo "
        ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "
        ";
    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        // line 35
        echo "        ";
        $this->loadTemplate("PointWebAppBundle::_footer.html.twig", "PointWebAppBundle::base.html.twig", 35)->display($context);
        // line 36
        echo "    ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 38,  150 => 36,  147 => 35,  144 => 34,  139 => 29,  136 => 28,  129 => 24,  126 => 23,  122 => 20,  119 => 19,  116 => 18,  112 => 15,  109 => 14,  106 => 13,  101 => 31,  99 => 28,  95 => 26,  93 => 23,  89 => 21,  87 => 18,  83 => 16,  81 => 13,  78 => 12,  75 => 11,  69 => 5,  63 => 40,  61 => 38,  58 => 37,  56 => 34,  53 => 33,  51 => 11,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
