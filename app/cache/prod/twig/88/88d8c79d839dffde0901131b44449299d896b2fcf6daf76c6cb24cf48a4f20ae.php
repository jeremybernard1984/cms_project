<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_a1b2a38f6290a8ae32fe28d14108f61f8b870cb3d4d18aefe2ef3f616cc8b23c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'slider' => array($this, 'block_slider'),
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
    ";
        // line 6
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:header"));
        echo "
</head>
<body>
";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "MON SITE !!!!!! gygygygy";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('slider', $context, $blocks);
        // line 16
        echo "        <!-- Page Content -->
        <div class=\"container\">
            ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 24
        echo "        </div>
        <!-- /.container -->
    ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        // line 11
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:menu"));
        echo "
        ";
    }

    // line 13
    public function block_slider($context, array $blocks = array())
    {
        // line 14
        echo "
        ";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "                ";
        $this->loadTemplate("PointWebAppBundle:Default:index.html.twig", "PointWebAppBundle::base.html.twig", 19)->display($context);
        // line 20
        echo "            ";
    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        // line 22
        echo "                ";
        $this->loadTemplate("PointWebAppBundle::_footer.html.twig", "PointWebAppBundle::base.html.twig", 22)->display($context);
        // line 23
        echo "            ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "        ";
        $this->loadTemplate("PointWebAppBundle::_js.html.twig", "PointWebAppBundle::base.html.twig", 27)->display($context);
        // line 28
        echo "    ";
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
        return array (  125 => 28,  122 => 27,  119 => 26,  115 => 23,  112 => 22,  109 => 21,  105 => 20,  102 => 19,  99 => 18,  94 => 14,  91 => 13,  84 => 11,  81 => 10,  77 => 26,  73 => 24,  70 => 21,  68 => 18,  64 => 16,  61 => 13,  58 => 10,  55 => 9,  49 => 5,  44 => 30,  42 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}MON SITE !!!!!! gygygygy{% endblock %}</title>*/
/*     {{ render(controller("PointWebAppBundle:Default:header")) }}*/
/* </head>*/
/* <body>*/
/* {% block body %}*/
/*         {% block menu %}*/
/*             {{ render(controller('PointWebAppBundle:Default:menu')) }}*/
/*         {% endblock %}*/
/*         {% block slider %}*/
/* */
/*         {% endblock %}*/
/*         <!-- Page Content -->*/
/*         <div class="container">*/
/*             {% block content %}*/
/*                 {% include 'PointWebAppBundle:Default:index.html.twig' %}*/
/*             {% endblock %}*/
/*             {% block footer %}*/
/*                 {% include 'PointWebAppBundle::_footer.html.twig' %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     {% block javascripts %}*/
/*         {% include 'PointWebAppBundle::_js.html.twig' %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
