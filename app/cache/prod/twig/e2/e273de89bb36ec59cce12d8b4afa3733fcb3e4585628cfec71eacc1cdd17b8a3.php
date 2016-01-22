<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_3b2f078767d5594e1db2bb45e6e9b440027667284a4f4ae962e669af586393e1 extends Twig_Template
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
        $__internal_8182f15966f37f01d65aae52b0c976fd1087fa3d3c47ac52b5777850d40131ae = $this->env->getExtension("native_profiler");
        $__internal_8182f15966f37f01d65aae52b0c976fd1087fa3d3c47ac52b5777850d40131ae->enter($__internal_8182f15966f37f01d65aae52b0c976fd1087fa3d3c47ac52b5777850d40131ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::base.html.twig"));

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
</html>";
        
        $__internal_8182f15966f37f01d65aae52b0c976fd1087fa3d3c47ac52b5777850d40131ae->leave($__internal_8182f15966f37f01d65aae52b0c976fd1087fa3d3c47ac52b5777850d40131ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb9fe6567042c4bae344e283430b42d17cc4b04addb7ca93c857a94994eed861 = $this->env->getExtension("native_profiler");
        $__internal_fb9fe6567042c4bae344e283430b42d17cc4b04addb7ca93c857a94994eed861->enter($__internal_fb9fe6567042c4bae344e283430b42d17cc4b04addb7ca93c857a94994eed861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MON MOULE SERCO POINT-WEB";
        
        $__internal_fb9fe6567042c4bae344e283430b42d17cc4b04addb7ca93c857a94994eed861->leave($__internal_fb9fe6567042c4bae344e283430b42d17cc4b04addb7ca93c857a94994eed861_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_932b07033ecac5dad14c1113bf38f4ff9ce4a5575047d61bf6ef509ca40c73d5 = $this->env->getExtension("native_profiler");
        $__internal_932b07033ecac5dad14c1113bf38f4ff9ce4a5575047d61bf6ef509ca40c73d5->enter($__internal_932b07033ecac5dad14c1113bf38f4ff9ce4a5575047d61bf6ef509ca40c73d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_932b07033ecac5dad14c1113bf38f4ff9ce4a5575047d61bf6ef509ca40c73d5->leave($__internal_932b07033ecac5dad14c1113bf38f4ff9ce4a5575047d61bf6ef509ca40c73d5_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_9255dfb952b469e0e6a47aab8bdfb5878b2a652484aab9d358f0be038d3dc92a = $this->env->getExtension("native_profiler");
        $__internal_9255dfb952b469e0e6a47aab8bdfb5878b2a652484aab9d358f0be038d3dc92a->enter($__internal_9255dfb952b469e0e6a47aab8bdfb5878b2a652484aab9d358f0be038d3dc92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "            ";
        $this->loadTemplate("PointWebAppBundle::_header.html.twig", "PointWebAppBundle::base.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        
        $__internal_9255dfb952b469e0e6a47aab8bdfb5878b2a652484aab9d358f0be038d3dc92a->leave($__internal_9255dfb952b469e0e6a47aab8bdfb5878b2a652484aab9d358f0be038d3dc92a_prof);

    }

    // line 18
    public function block_slider($context, array $blocks = array())
    {
        $__internal_fc443dbf700e99e6b24500278eca972472419c59d31e2e07f392f2eef4c56874 = $this->env->getExtension("native_profiler");
        $__internal_fc443dbf700e99e6b24500278eca972472419c59d31e2e07f392f2eef4c56874->enter($__internal_fc443dbf700e99e6b24500278eca972472419c59d31e2e07f392f2eef4c56874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 19
        echo "            ";
        $this->loadTemplate("PointWebAppBundle::_slider.html.twig", "PointWebAppBundle::base.html.twig", 19)->display($context);
        // line 20
        echo "        ";
        
        $__internal_fc443dbf700e99e6b24500278eca972472419c59d31e2e07f392f2eef4c56874->leave($__internal_fc443dbf700e99e6b24500278eca972472419c59d31e2e07f392f2eef4c56874_prof);

    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c9773f537185a4cf167cc863f1fdbdcc1da77cd7e1513909c0244bba991620a = $this->env->getExtension("native_profiler");
        $__internal_1c9773f537185a4cf167cc863f1fdbdcc1da77cd7e1513909c0244bba991620a->enter($__internal_1c9773f537185a4cf167cc863f1fdbdcc1da77cd7e1513909c0244bba991620a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 24
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:menu"));
        echo "
        ";
        
        $__internal_1c9773f537185a4cf167cc863f1fdbdcc1da77cd7e1513909c0244bba991620a->leave($__internal_1c9773f537185a4cf167cc863f1fdbdcc1da77cd7e1513909c0244bba991620a_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_f6471b1401fe5bbe05af14200c23071906015c047ed38d8604978f94b690e4b8 = $this->env->getExtension("native_profiler");
        $__internal_f6471b1401fe5bbe05af14200c23071906015c047ed38d8604978f94b690e4b8->enter($__internal_f6471b1401fe5bbe05af14200c23071906015c047ed38d8604978f94b690e4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "
        ";
        
        $__internal_f6471b1401fe5bbe05af14200c23071906015c047ed38d8604978f94b690e4b8->leave($__internal_f6471b1401fe5bbe05af14200c23071906015c047ed38d8604978f94b690e4b8_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2b917c2b6e155b7f889309c592cb900373202022d47a68356a3387dabbe94941 = $this->env->getExtension("native_profiler");
        $__internal_2b917c2b6e155b7f889309c592cb900373202022d47a68356a3387dabbe94941->enter($__internal_2b917c2b6e155b7f889309c592cb900373202022d47a68356a3387dabbe94941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 35
        echo "        ";
        $this->loadTemplate("PointWebAppBundle::_footer.html.twig", "PointWebAppBundle::base.html.twig", 35)->display($context);
        // line 36
        echo "    ";
        
        $__internal_2b917c2b6e155b7f889309c592cb900373202022d47a68356a3387dabbe94941->leave($__internal_2b917c2b6e155b7f889309c592cb900373202022d47a68356a3387dabbe94941_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1223f1b2465d314c4c7f0f166cfac7fa5e97dd96724c86861b2febb6579882dc = $this->env->getExtension("native_profiler");
        $__internal_1223f1b2465d314c4c7f0f166cfac7fa5e97dd96724c86861b2febb6579882dc->enter($__internal_1223f1b2465d314c4c7f0f166cfac7fa5e97dd96724c86861b2febb6579882dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1223f1b2465d314c4c7f0f166cfac7fa5e97dd96724c86861b2febb6579882dc->leave($__internal_1223f1b2465d314c4c7f0f166cfac7fa5e97dd96724c86861b2febb6579882dc_prof);

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
        return array (  201 => 38,  194 => 36,  191 => 35,  185 => 34,  177 => 29,  171 => 28,  161 => 24,  155 => 23,  148 => 20,  145 => 19,  139 => 18,  132 => 15,  129 => 14,  123 => 13,  115 => 31,  113 => 28,  109 => 26,  107 => 23,  103 => 21,  101 => 18,  97 => 16,  95 => 13,  92 => 12,  86 => 11,  74 => 5,  66 => 40,  64 => 38,  61 => 37,  59 => 34,  56 => 33,  54 => 11,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}MON MOULE SERCO POINT-WEB{% endblock %}</title>*/
/*     <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" media="all"/>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/* </head>*/
/* <body>*/
/* {% block body %}*/
/*     <header>*/
/*         {% block header %}*/
/*             {% include 'PointWebAppBundle::_header.html.twig' %}*/
/*         {% endblock %}*/
/*     </header>*/
/*     <div id="slider">*/
/*         {% block slider %}*/
/*             {% include 'PointWebAppBundle::_slider.html.twig' %}*/
/*         {% endblock %}*/
/*     </div>*/
/*     <div id="menu">*/
/*         {% block menu %}*/
/*             {{ render(controller('PointWebAppBundle:Default:menu')) }}*/
/*         {% endblock %}*/
/*     </div>*/
/*     <div id="content">*/
/*         {% block content %}*/
/* */
/*         {% endblock %}*/
/*     </div>*/
/* {% endblock %}*/
/* <footer>*/
/*     {% block footer %}*/
/*         {% include 'PointWebAppBundle::_footer.html.twig' %}*/
/*     {% endblock %}*/
/* </footer>*/
/* {% block javascripts %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
