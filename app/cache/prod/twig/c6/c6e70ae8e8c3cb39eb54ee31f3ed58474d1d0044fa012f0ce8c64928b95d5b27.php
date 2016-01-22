<?php

/* PointWebAdminBundle::base.html.twig */
class __TwigTemplate_11232740fb128c7286b094e6b64310cf679e16510b4060cf08faa16adcff47c8 extends Twig_Template
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
        $__internal_df51ffbfbf9483e27b8c1d362f298c8a887a7b17b04195ce6c36701da1f23fa2 = $this->env->getExtension("native_profiler");
        $__internal_df51ffbfbf9483e27b8c1d362f298c8a887a7b17b04195ce6c36701da1f23fa2->enter($__internal_df51ffbfbf9483e27b8c1d362f298c8a887a7b17b04195ce6c36701da1f23fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::base.html.twig"));

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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAdminBundle:Default:headerAdmin"));
        echo "
    <!--
    { include 'PointWebAdminBundle::_header.html.twig' %}
    -->
</head>
<body>
<div id=\"wrapper\">
    <div class=\"container-fluid\" id=\"chargement\">
        <div class=\"overlays\"></div>
        Chargement...
        <span id=\"chargement-infos\" class=\"bg-primary\"></span>
    </div>
    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
        ";
        // line 20
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAdminBundle:Default:topAdmin"));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAdminBundle:Default:leftAdmin"));
        echo "
        <!--
        { include 'PointWebAdminBundle::_top_admin.html.twig' with {'clientName' : entity.clientName} %}
        { include 'PointWebAdminBundle::_left_admin.html.twig' %}
        -->
    </nav>
    <div id=\"page-wrapper\">
        ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "</body>
<footer>
    ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "</footer>
</html>
";
        
        $__internal_df51ffbfbf9483e27b8c1d362f298c8a887a7b17b04195ce6c36701da1f23fa2->leave($__internal_df51ffbfbf9483e27b8c1d362f298c8a887a7b17b04195ce6c36701da1f23fa2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_896b418375fd91acda8523b872f66ed88961005df4d3afb0eb152b4341a762e9 = $this->env->getExtension("native_profiler");
        $__internal_896b418375fd91acda8523b872f66ed88961005df4d3afb0eb152b4341a762e9->enter($__internal_896b418375fd91acda8523b872f66ed88961005df4d3afb0eb152b4341a762e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_896b418375fd91acda8523b872f66ed88961005df4d3afb0eb152b4341a762e9->leave($__internal_896b418375fd91acda8523b872f66ed88961005df4d3afb0eb152b4341a762e9_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_54a56c78c3ea92d958f04221de85dcba77b1084c4bb479a385e52acde8285b5f = $this->env->getExtension("native_profiler");
        $__internal_54a56c78c3ea92d958f04221de85dcba77b1084c4bb479a385e52acde8285b5f->enter($__internal_54a56c78c3ea92d958f04221de85dcba77b1084c4bb479a385e52acde8285b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "            <!-- /.row -->
            <div class=\"row\">
                ";
        // line 31
        $this->displayBlock('body_content', $context, $blocks);
        // line 36
        echo "            </div>
            <!-- /.row -->
        ";
        
        $__internal_54a56c78c3ea92d958f04221de85dcba77b1084c4bb479a385e52acde8285b5f->leave($__internal_54a56c78c3ea92d958f04221de85dcba77b1084c4bb479a385e52acde8285b5f_prof);

    }

    // line 31
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_d67a6d30e86456f3eb1b763b979b046c78284e7ac50cf23c527bec15ba9011b0 = $this->env->getExtension("native_profiler");
        $__internal_d67a6d30e86456f3eb1b763b979b046c78284e7ac50cf23c527bec15ba9011b0->enter($__internal_d67a6d30e86456f3eb1b763b979b046c78284e7ac50cf23c527bec15ba9011b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 32
        echo "                    ";
        $this->displayBlock('content_left', $context, $blocks);
        // line 34
        echo "                    ";
        $this->displayBlock('content_right', $context, $blocks);
        // line 35
        echo "                ";
        
        $__internal_d67a6d30e86456f3eb1b763b979b046c78284e7ac50cf23c527bec15ba9011b0->leave($__internal_d67a6d30e86456f3eb1b763b979b046c78284e7ac50cf23c527bec15ba9011b0_prof);

    }

    // line 32
    public function block_content_left($context, array $blocks = array())
    {
        $__internal_4520c3dfa41715b46ec3866932e94c2a0f54657fb843a35ab2754d53e6afae24 = $this->env->getExtension("native_profiler");
        $__internal_4520c3dfa41715b46ec3866932e94c2a0f54657fb843a35ab2754d53e6afae24->enter($__internal_4520c3dfa41715b46ec3866932e94c2a0f54657fb843a35ab2754d53e6afae24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_left"));

        // line 33
        echo "                    ";
        
        $__internal_4520c3dfa41715b46ec3866932e94c2a0f54657fb843a35ab2754d53e6afae24->leave($__internal_4520c3dfa41715b46ec3866932e94c2a0f54657fb843a35ab2754d53e6afae24_prof);

    }

    // line 34
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_b95ee88cf3523ec969027ff7abc84e171d744be4fe50d63753be4a4984f2077e = $this->env->getExtension("native_profiler");
        $__internal_b95ee88cf3523ec969027ff7abc84e171d744be4fe50d63753be4a4984f2077e->enter($__internal_b95ee88cf3523ec969027ff7abc84e171d744be4fe50d63753be4a4984f2077e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        
        $__internal_b95ee88cf3523ec969027ff7abc84e171d744be4fe50d63753be4a4984f2077e->leave($__internal_b95ee88cf3523ec969027ff7abc84e171d744be4fe50d63753be4a4984f2077e_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c55f497bc995ba6857cb59242f996954a8203bc00131690724a1cae04765eb91 = $this->env->getExtension("native_profiler");
        $__internal_c55f497bc995ba6857cb59242f996954a8203bc00131690724a1cae04765eb91->enter($__internal_c55f497bc995ba6857cb59242f996954a8203bc00131690724a1cae04765eb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebAdminBundle::base.html.twig", 45)->display($context);
        
        $__internal_c55f497bc995ba6857cb59242f996954a8203bc00131690724a1cae04765eb91->leave($__internal_c55f497bc995ba6857cb59242f996954a8203bc00131690724a1cae04765eb91_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c3f7f6051a880d4169d9c6461deb1d1c60d1452af68172ef965474092f1323e0 = $this->env->getExtension("native_profiler");
        $__internal_c3f7f6051a880d4169d9c6461deb1d1c60d1452af68172ef965474092f1323e0->enter($__internal_c3f7f6051a880d4169d9c6461deb1d1c60d1452af68172ef965474092f1323e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "
    ";
        
        $__internal_c3f7f6051a880d4169d9c6461deb1d1c60d1452af68172ef965474092f1323e0->leave($__internal_c3f7f6051a880d4169d9c6461deb1d1c60d1452af68172ef965474092f1323e0_prof);

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
        return array (  192 => 50,  186 => 49,  178 => 45,  172 => 44,  161 => 34,  154 => 33,  148 => 32,  141 => 35,  138 => 34,  135 => 32,  129 => 31,  120 => 36,  118 => 31,  114 => 29,  108 => 28,  96 => 5,  87 => 52,  85 => 49,  81 => 47,  79 => 44,  72 => 39,  70 => 28,  60 => 21,  56 => 20,  39 => 6,  35 => 5,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}ESPACE D'ADMINISTRATION{% endblock %}</title>*/
/*     {{ render(controller("PointWebAdminBundle:Default:headerAdmin")) }}*/
/*     <!--*/
/*     { include 'PointWebAdminBundle::_header.html.twig' %}*/
/*     -->*/
/* </head>*/
/* <body>*/
/* <div id="wrapper">*/
/*     <div class="container-fluid" id="chargement">*/
/*         <div class="overlays"></div>*/
/*         Chargement...*/
/*         <span id="chargement-infos" class="bg-primary"></span>*/
/*     </div>*/
/*     <!-- Navigation -->*/
/*     <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*         {{ render(controller("PointWebAdminBundle:Default:topAdmin")) }}*/
/*         {{ render(controller("PointWebAdminBundle:Default:leftAdmin")) }}*/
/*         <!--*/
/*         { include 'PointWebAdminBundle::_top_admin.html.twig' with {'clientName' : entity.clientName} %}*/
/*         { include 'PointWebAdminBundle::_left_admin.html.twig' %}*/
/*         -->*/
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
