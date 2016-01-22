<?php

/* PointWebAdminBundle::base.html.twig */
class __TwigTemplate_829c4ea5409ca81366acf15b6985a6b6aa86730723d78d9bf0720adb3493e1a4 extends Twig_Template
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
        $__internal_0bffa86b8a662b0400bb8dc997fe22b0394626117219df13c541f14a485caa7c = $this->env->getExtension("native_profiler");
        $__internal_0bffa86b8a662b0400bb8dc997fe22b0394626117219df13c541f14a485caa7c->enter($__internal_0bffa86b8a662b0400bb8dc997fe22b0394626117219df13c541f14a485caa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::base.html.twig"));

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
        
        $__internal_0bffa86b8a662b0400bb8dc997fe22b0394626117219df13c541f14a485caa7c->leave($__internal_0bffa86b8a662b0400bb8dc997fe22b0394626117219df13c541f14a485caa7c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_946ca6d68a7e846943574726585e17d1b1128fe2b9c2fdb97390696b48a82912 = $this->env->getExtension("native_profiler");
        $__internal_946ca6d68a7e846943574726585e17d1b1128fe2b9c2fdb97390696b48a82912->enter($__internal_946ca6d68a7e846943574726585e17d1b1128fe2b9c2fdb97390696b48a82912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_946ca6d68a7e846943574726585e17d1b1128fe2b9c2fdb97390696b48a82912->leave($__internal_946ca6d68a7e846943574726585e17d1b1128fe2b9c2fdb97390696b48a82912_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f10164afbadcd4ab82e3449dc7d4fadea734ebacc46b55f9d47d8be68aa4b98 = $this->env->getExtension("native_profiler");
        $__internal_4f10164afbadcd4ab82e3449dc7d4fadea734ebacc46b55f9d47d8be68aa4b98->enter($__internal_4f10164afbadcd4ab82e3449dc7d4fadea734ebacc46b55f9d47d8be68aa4b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4f10164afbadcd4ab82e3449dc7d4fadea734ebacc46b55f9d47d8be68aa4b98->leave($__internal_4f10164afbadcd4ab82e3449dc7d4fadea734ebacc46b55f9d47d8be68aa4b98_prof);

    }

    // line 31
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_9180447b0f9560dab9f71251b1b2cf222710372948c3d75741a95f01b23bdc36 = $this->env->getExtension("native_profiler");
        $__internal_9180447b0f9560dab9f71251b1b2cf222710372948c3d75741a95f01b23bdc36->enter($__internal_9180447b0f9560dab9f71251b1b2cf222710372948c3d75741a95f01b23bdc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 32
        echo "                    ";
        $this->displayBlock('content_left', $context, $blocks);
        // line 34
        echo "                    ";
        $this->displayBlock('content_right', $context, $blocks);
        // line 35
        echo "                ";
        
        $__internal_9180447b0f9560dab9f71251b1b2cf222710372948c3d75741a95f01b23bdc36->leave($__internal_9180447b0f9560dab9f71251b1b2cf222710372948c3d75741a95f01b23bdc36_prof);

    }

    // line 32
    public function block_content_left($context, array $blocks = array())
    {
        $__internal_b10a0cb97e42212e4e3fab01ddea80d25e113ca96cd4de61939fe8d7964d0a47 = $this->env->getExtension("native_profiler");
        $__internal_b10a0cb97e42212e4e3fab01ddea80d25e113ca96cd4de61939fe8d7964d0a47->enter($__internal_b10a0cb97e42212e4e3fab01ddea80d25e113ca96cd4de61939fe8d7964d0a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_left"));

        // line 33
        echo "                    ";
        
        $__internal_b10a0cb97e42212e4e3fab01ddea80d25e113ca96cd4de61939fe8d7964d0a47->leave($__internal_b10a0cb97e42212e4e3fab01ddea80d25e113ca96cd4de61939fe8d7964d0a47_prof);

    }

    // line 34
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_39d3f8fe6cc1da7527866fd82143b5fb56de518484c9ecf30e580a7464e59d4f = $this->env->getExtension("native_profiler");
        $__internal_39d3f8fe6cc1da7527866fd82143b5fb56de518484c9ecf30e580a7464e59d4f->enter($__internal_39d3f8fe6cc1da7527866fd82143b5fb56de518484c9ecf30e580a7464e59d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        
        $__internal_39d3f8fe6cc1da7527866fd82143b5fb56de518484c9ecf30e580a7464e59d4f->leave($__internal_39d3f8fe6cc1da7527866fd82143b5fb56de518484c9ecf30e580a7464e59d4f_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d616057f2ea21876f032704e07ec35980ea03722c0b53e57ea71b5ce0d56dbc = $this->env->getExtension("native_profiler");
        $__internal_3d616057f2ea21876f032704e07ec35980ea03722c0b53e57ea71b5ce0d56dbc->enter($__internal_3d616057f2ea21876f032704e07ec35980ea03722c0b53e57ea71b5ce0d56dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebAdminBundle::base.html.twig", 45)->display($context);
        
        $__internal_3d616057f2ea21876f032704e07ec35980ea03722c0b53e57ea71b5ce0d56dbc->leave($__internal_3d616057f2ea21876f032704e07ec35980ea03722c0b53e57ea71b5ce0d56dbc_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a11f1aaa87f1f7365d03aa30d7d10e9499a6997609129cee5af387621432ff2d = $this->env->getExtension("native_profiler");
        $__internal_a11f1aaa87f1f7365d03aa30d7d10e9499a6997609129cee5af387621432ff2d->enter($__internal_a11f1aaa87f1f7365d03aa30d7d10e9499a6997609129cee5af387621432ff2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "
    ";
        
        $__internal_a11f1aaa87f1f7365d03aa30d7d10e9499a6997609129cee5af387621432ff2d->leave($__internal_a11f1aaa87f1f7365d03aa30d7d10e9499a6997609129cee5af387621432ff2d_prof);

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
