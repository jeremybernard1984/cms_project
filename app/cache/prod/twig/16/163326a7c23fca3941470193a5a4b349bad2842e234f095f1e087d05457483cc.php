<?php

/* PointWebAdminBundle::base.html.twig */
class __TwigTemplate_6f5afa6b7649f9b2e038c64afa028b6bafd142550358e11090777c7b816ee72a extends Twig_Template
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
        $__internal_8533049c6f6ce564889ca5604cdbd23c7d2855ea65656b012d50193cc3dea412 = $this->env->getExtension("native_profiler");
        $__internal_8533049c6f6ce564889ca5604cdbd23c7d2855ea65656b012d50193cc3dea412->enter($__internal_8533049c6f6ce564889ca5604cdbd23c7d2855ea65656b012d50193cc3dea412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::base.html.twig"));

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
        
        $__internal_8533049c6f6ce564889ca5604cdbd23c7d2855ea65656b012d50193cc3dea412->leave($__internal_8533049c6f6ce564889ca5604cdbd23c7d2855ea65656b012d50193cc3dea412_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_674a54803912a34155142362d787848af63042a05db034f1ae49460bb5263482 = $this->env->getExtension("native_profiler");
        $__internal_674a54803912a34155142362d787848af63042a05db034f1ae49460bb5263482->enter($__internal_674a54803912a34155142362d787848af63042a05db034f1ae49460bb5263482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_674a54803912a34155142362d787848af63042a05db034f1ae49460bb5263482->leave($__internal_674a54803912a34155142362d787848af63042a05db034f1ae49460bb5263482_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_481bc1ac0f5d72cb00f26739aec9e3d9a5071756a9666189370c245621523c34 = $this->env->getExtension("native_profiler");
        $__internal_481bc1ac0f5d72cb00f26739aec9e3d9a5071756a9666189370c245621523c34->enter($__internal_481bc1ac0f5d72cb00f26739aec9e3d9a5071756a9666189370c245621523c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_481bc1ac0f5d72cb00f26739aec9e3d9a5071756a9666189370c245621523c34->leave($__internal_481bc1ac0f5d72cb00f26739aec9e3d9a5071756a9666189370c245621523c34_prof);

    }

    // line 31
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_bff4298a3bf1c9b9ca4dee5bda96f4525f8fc01c31e922551208f7fa525f7f1f = $this->env->getExtension("native_profiler");
        $__internal_bff4298a3bf1c9b9ca4dee5bda96f4525f8fc01c31e922551208f7fa525f7f1f->enter($__internal_bff4298a3bf1c9b9ca4dee5bda96f4525f8fc01c31e922551208f7fa525f7f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 32
        echo "                    ";
        $this->displayBlock('content_left', $context, $blocks);
        // line 34
        echo "                    ";
        $this->displayBlock('content_right', $context, $blocks);
        // line 35
        echo "                ";
        
        $__internal_bff4298a3bf1c9b9ca4dee5bda96f4525f8fc01c31e922551208f7fa525f7f1f->leave($__internal_bff4298a3bf1c9b9ca4dee5bda96f4525f8fc01c31e922551208f7fa525f7f1f_prof);

    }

    // line 32
    public function block_content_left($context, array $blocks = array())
    {
        $__internal_390914eb7c90a680afc1a0d64f7a60c7a2d809fd03b34b6c839e930ba554f704 = $this->env->getExtension("native_profiler");
        $__internal_390914eb7c90a680afc1a0d64f7a60c7a2d809fd03b34b6c839e930ba554f704->enter($__internal_390914eb7c90a680afc1a0d64f7a60c7a2d809fd03b34b6c839e930ba554f704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_left"));

        // line 33
        echo "                    ";
        
        $__internal_390914eb7c90a680afc1a0d64f7a60c7a2d809fd03b34b6c839e930ba554f704->leave($__internal_390914eb7c90a680afc1a0d64f7a60c7a2d809fd03b34b6c839e930ba554f704_prof);

    }

    // line 34
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_c3d1927db83ea346d3a60b509c8ab0793ade385a308cda9083b29a6d9d220794 = $this->env->getExtension("native_profiler");
        $__internal_c3d1927db83ea346d3a60b509c8ab0793ade385a308cda9083b29a6d9d220794->enter($__internal_c3d1927db83ea346d3a60b509c8ab0793ade385a308cda9083b29a6d9d220794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        
        $__internal_c3d1927db83ea346d3a60b509c8ab0793ade385a308cda9083b29a6d9d220794->leave($__internal_c3d1927db83ea346d3a60b509c8ab0793ade385a308cda9083b29a6d9d220794_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_216f025589c051348c65a54c1e675c66fdde3abc86bab1f41155862fadd17f64 = $this->env->getExtension("native_profiler");
        $__internal_216f025589c051348c65a54c1e675c66fdde3abc86bab1f41155862fadd17f64->enter($__internal_216f025589c051348c65a54c1e675c66fdde3abc86bab1f41155862fadd17f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebAdminBundle::base.html.twig", 45)->display($context);
        
        $__internal_216f025589c051348c65a54c1e675c66fdde3abc86bab1f41155862fadd17f64->leave($__internal_216f025589c051348c65a54c1e675c66fdde3abc86bab1f41155862fadd17f64_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_584b5b1c0eb0227d21ba5138ee79a070c006f4b03a087c43be0bbe323fb27a1d = $this->env->getExtension("native_profiler");
        $__internal_584b5b1c0eb0227d21ba5138ee79a070c006f4b03a087c43be0bbe323fb27a1d->enter($__internal_584b5b1c0eb0227d21ba5138ee79a070c006f4b03a087c43be0bbe323fb27a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "
    ";
        
        $__internal_584b5b1c0eb0227d21ba5138ee79a070c006f4b03a087c43be0bbe323fb27a1d->leave($__internal_584b5b1c0eb0227d21ba5138ee79a070c006f4b03a087c43be0bbe323fb27a1d_prof);

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
