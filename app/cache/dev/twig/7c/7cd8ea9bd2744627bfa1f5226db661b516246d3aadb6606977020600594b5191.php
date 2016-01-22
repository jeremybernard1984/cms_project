<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_feed0a884e5d1d491abd803101480c8e70fe182bb3660fbf86347c12994dd6ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        echo "
";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:header"));
        echo "

<body>
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "</body>
</html>";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
        ";
        // line 7
        $this->displayBlock('menu', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('slider', $context, $blocks);
        // line 13
        echo "        <!-- Page Content -->
        <div class=\"container content\">

            ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "        </div>
        <!-- /.container -->
    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "            ";
        $this->loadTemplate("PointWebAppBundle::_menu.html.twig", "PointWebAppBundle::base.html.twig", 8)->display($context);
        // line 9
        echo "        ";
    }

    // line 10
    public function block_slider($context, array $blocks = array())
    {
        // line 11
        echo "
        ";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
                ";
        // line 18
        $this->loadTemplate("PointWebAppBundle:Default:index.html.twig", "PointWebAppBundle::base.html.twig", 18)->display($context);
        // line 19
        echo "            ";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "                ";
        $this->loadTemplate("PointWebAppBundle::_footer.html.twig", "PointWebAppBundle::base.html.twig", 21)->display($context);
        // line 22
        echo "            ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $this->loadTemplate("PointWebAppBundle::_js.html.twig", "PointWebAppBundle::base.html.twig", 26)->display($context);
        // line 27
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
        return array (  116 => 27,  113 => 26,  110 => 25,  106 => 22,  103 => 21,  100 => 20,  96 => 19,  94 => 18,  91 => 17,  88 => 16,  83 => 11,  80 => 10,  76 => 9,  73 => 8,  70 => 7,  66 => 25,  62 => 23,  59 => 20,  57 => 16,  52 => 13,  49 => 10,  47 => 7,  44 => 6,  41 => 5,  36 => 29,  34 => 5,  28 => 2,  25 => 1,);
    }
}
/* */
/* {{ render(controller("PointWebAppBundle:Default:header")) }}*/
/* */
/* <body>*/
/* {% block body %}*/
/* */
/*         {% block menu %}*/
/*             {% include 'PointWebAppBundle::_menu.html.twig' %}*/
/*         {% endblock %}*/
/*         {% block slider %}*/
/* */
/*         {% endblock %}*/
/*         <!-- Page Content -->*/
/*         <div class="container content">*/
/* */
/*             {% block content %}*/
/* */
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
