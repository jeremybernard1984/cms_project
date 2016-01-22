<?php

/* PointWebAdminBundle::base.html.twig */
class __TwigTemplate_9893ad95d57e194621ef77bb50af3ce0781944d6216072fba6be9b8f3f25e591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_content' => array($this, 'block_body_content'),
            'content_left' => array($this, 'block_content_left'),
            'content_right' => array($this, 'block_content_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
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
        $this->loadTemplate("PointWebAdminBundle::_header.html.twig", "PointWebAdminBundle::base.html.twig", 6)->display($context);
        // line 7
        echo "</head>
<body>
<div id=\"wrapper\">
    <div class=\"container-fluid\" id=\"chargement\">Loading...<span id=\"chargement-infos\"></span></div>
    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
        ";
        // line 13
        $this->loadTemplate("PointWebAdminBundle::_menutop_admin.html.twig", "PointWebAdminBundle::base.html.twig", 13)->display($context);
        // line 14
        echo "        ";
        $this->loadTemplate("PointWebAdminBundle::_menuleft_admin.html.twig", "PointWebAdminBundle::base.html.twig", 14)->display($context);
        // line 15
        echo "    </nav>
    <div id=\"page-wrapper\">
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "</body>
<footer>
    ";
        // line 38
        $this->displayBlock('footer', $context, $blocks);
        // line 41
        echo "</footer>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "            <!-- /.row -->
            <div class=\"row\">
                ";
        // line 20
        $this->displayBlock('body_content', $context, $blocks);
        // line 25
        echo "            </div>
            <!-- /.row -->
        ";
    }

    // line 20
    public function block_body_content($context, array $blocks = array())
    {
        // line 21
        echo "                    ";
        $this->displayBlock('content_left', $context, $blocks);
        // line 23
        echo "                    ";
        $this->displayBlock('content_right', $context, $blocks);
        // line 24
        echo "                ";
    }

    // line 21
    public function block_content_left($context, array $blocks = array())
    {
        // line 22
        echo "                    ";
    }

    // line 23
    public function block_content_right($context, array $blocks = array())
    {
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebAdminBundle::base.html.twig", 34)->display($context);
    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        // line 39
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  132 => 38,  127 => 34,  124 => 33,  119 => 23,  115 => 22,  112 => 21,  108 => 24,  105 => 23,  102 => 21,  99 => 20,  93 => 25,  91 => 20,  87 => 18,  84 => 17,  78 => 5,  72 => 41,  70 => 38,  66 => 36,  64 => 33,  57 => 28,  55 => 17,  51 => 15,  48 => 14,  46 => 13,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}ESPACE D'ADMINISTRATION SERCO POINT-WEB{% endblock %}</title>*/
/*     {% include 'PointWebAdminBundle::_header.html.twig' %}*/
/* </head>*/
/* <body>*/
/* <div id="wrapper">*/
/*     <div class="container-fluid" id="chargement">Loading...<span id="chargement-infos"></span></div>*/
/*     <!-- Navigation -->*/
/*     <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*         {% include 'PointWebAdminBundle::_menutop_admin.html.twig' %}*/
/*         {% include 'PointWebAdminBundle::_menuleft_admin.html.twig' %}*/
/*     </nav>*/
/*     <div id="page-wrapper">*/
/*         {% block body %}*/
/*             <!-- /.row -->*/
/*             <div class="row">*/
/*                 {% block body_content %}*/
/*                     {% block content_left %}*/
/*                     {% endblock %}*/
/*                     {% block content_right %}{% endblock %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*             <!-- /.row -->*/
/*         {% endblock %}*/
/*     </div>*/
/*     <!-- /#page-wrapper -->*/
/* </div>*/
/* <!-- /#wrapper -->*/
/* */
/* {% block javascripts %}*/
/*     {% include 'PointWebAdminBundle::_js.html.twig' %}*/
/* {% endblock %}*/
/* </body>*/
/* <footer>*/
/*     {% block footer %}*/
/* */
/*     {% endblock %}*/
/* </footer>*/
/* </html>*/
/* */
