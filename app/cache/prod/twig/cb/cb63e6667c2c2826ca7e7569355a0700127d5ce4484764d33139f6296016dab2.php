<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_e7642e190f851cb35f66b563b1f0e107fff02b4c4d236fcdb3b676d57ed0f4d5 extends Twig_Template
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
        $__internal_a5630b5969c20eab406d5543d32baec87a594118d483e3ffe6015175b3c3522d = $this->env->getExtension("native_profiler");
        $__internal_a5630b5969c20eab406d5543d32baec87a594118d483e3ffe6015175b3c3522d->enter($__internal_a5630b5969c20eab406d5543d32baec87a594118d483e3ffe6015175b3c3522d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::base.html.twig"));

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
        
        $__internal_a5630b5969c20eab406d5543d32baec87a594118d483e3ffe6015175b3c3522d->leave($__internal_a5630b5969c20eab406d5543d32baec87a594118d483e3ffe6015175b3c3522d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d1c67ec2efec5de4c647dd7ed6940313b6b24a7485b332f71c84c879903275a = $this->env->getExtension("native_profiler");
        $__internal_0d1c67ec2efec5de4c647dd7ed6940313b6b24a7485b332f71c84c879903275a->enter($__internal_0d1c67ec2efec5de4c647dd7ed6940313b6b24a7485b332f71c84c879903275a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MON SITE !!!!!! gygygygy";
        
        $__internal_0d1c67ec2efec5de4c647dd7ed6940313b6b24a7485b332f71c84c879903275a->leave($__internal_0d1c67ec2efec5de4c647dd7ed6940313b6b24a7485b332f71c84c879903275a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_31710349bf7b45ea6b1496e8ef76dffadbe761fa205b58286b1311026a685c0e = $this->env->getExtension("native_profiler");
        $__internal_31710349bf7b45ea6b1496e8ef76dffadbe761fa205b58286b1311026a685c0e->enter($__internal_31710349bf7b45ea6b1496e8ef76dffadbe761fa205b58286b1311026a685c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_31710349bf7b45ea6b1496e8ef76dffadbe761fa205b58286b1311026a685c0e->leave($__internal_31710349bf7b45ea6b1496e8ef76dffadbe761fa205b58286b1311026a685c0e_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd077e5a2ba0208031015c85642c54ca4e267795e2774ec9724fe747464c4e77 = $this->env->getExtension("native_profiler");
        $__internal_cd077e5a2ba0208031015c85642c54ca4e267795e2774ec9724fe747464c4e77->enter($__internal_cd077e5a2ba0208031015c85642c54ca4e267795e2774ec9724fe747464c4e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 11
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:menu"));
        echo "
        ";
        
        $__internal_cd077e5a2ba0208031015c85642c54ca4e267795e2774ec9724fe747464c4e77->leave($__internal_cd077e5a2ba0208031015c85642c54ca4e267795e2774ec9724fe747464c4e77_prof);

    }

    // line 13
    public function block_slider($context, array $blocks = array())
    {
        $__internal_1fa4880ff914383cb4d96bc05cd3ecf74bd70bdc2ba5b23153a451d87637e087 = $this->env->getExtension("native_profiler");
        $__internal_1fa4880ff914383cb4d96bc05cd3ecf74bd70bdc2ba5b23153a451d87637e087->enter($__internal_1fa4880ff914383cb4d96bc05cd3ecf74bd70bdc2ba5b23153a451d87637e087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 14
        echo "
        ";
        
        $__internal_1fa4880ff914383cb4d96bc05cd3ecf74bd70bdc2ba5b23153a451d87637e087->leave($__internal_1fa4880ff914383cb4d96bc05cd3ecf74bd70bdc2ba5b23153a451d87637e087_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_0fd70db1f33aaf2cc06951444f1d1287d92556665215004cdfa6b8fde30b7108 = $this->env->getExtension("native_profiler");
        $__internal_0fd70db1f33aaf2cc06951444f1d1287d92556665215004cdfa6b8fde30b7108->enter($__internal_0fd70db1f33aaf2cc06951444f1d1287d92556665215004cdfa6b8fde30b7108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "                ";
        $this->loadTemplate("PointWebAppBundle:Default:index.html.twig", "PointWebAppBundle::base.html.twig", 19)->display($context);
        // line 20
        echo "            ";
        
        $__internal_0fd70db1f33aaf2cc06951444f1d1287d92556665215004cdfa6b8fde30b7108->leave($__internal_0fd70db1f33aaf2cc06951444f1d1287d92556665215004cdfa6b8fde30b7108_prof);

    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        $__internal_10ed40ccde2bfda8224a64d4ea7f1b0631c6315f1dbde290d8e9663594dd0ca9 = $this->env->getExtension("native_profiler");
        $__internal_10ed40ccde2bfda8224a64d4ea7f1b0631c6315f1dbde290d8e9663594dd0ca9->enter($__internal_10ed40ccde2bfda8224a64d4ea7f1b0631c6315f1dbde290d8e9663594dd0ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 22
        echo "                ";
        $this->loadTemplate("PointWebAppBundle::_footer.html.twig", "PointWebAppBundle::base.html.twig", 22)->display($context);
        // line 23
        echo "            ";
        
        $__internal_10ed40ccde2bfda8224a64d4ea7f1b0631c6315f1dbde290d8e9663594dd0ca9->leave($__internal_10ed40ccde2bfda8224a64d4ea7f1b0631c6315f1dbde290d8e9663594dd0ca9_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_61a019ff096a8b5460579c5d16e29e037e767c44f3a0ba868c29f47fc0f9e9f6 = $this->env->getExtension("native_profiler");
        $__internal_61a019ff096a8b5460579c5d16e29e037e767c44f3a0ba868c29f47fc0f9e9f6->enter($__internal_61a019ff096a8b5460579c5d16e29e037e767c44f3a0ba868c29f47fc0f9e9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "        ";
        $this->loadTemplate("PointWebAppBundle::_js.html.twig", "PointWebAppBundle::base.html.twig", 27)->display($context);
        // line 28
        echo "    ";
        
        $__internal_61a019ff096a8b5460579c5d16e29e037e767c44f3a0ba868c29f47fc0f9e9f6->leave($__internal_61a019ff096a8b5460579c5d16e29e037e767c44f3a0ba868c29f47fc0f9e9f6_prof);

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
        return array (  170 => 28,  167 => 27,  161 => 26,  154 => 23,  151 => 22,  145 => 21,  138 => 20,  135 => 19,  129 => 18,  121 => 14,  115 => 13,  105 => 11,  99 => 10,  92 => 26,  88 => 24,  85 => 21,  83 => 18,  79 => 16,  76 => 13,  73 => 10,  67 => 9,  55 => 5,  47 => 30,  45 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
