<?php

/* PointWebAdminBundle::base.html.twig */
class __TwigTemplate_6c1d56bdd91dcee5eb959ce7ececd7d5c94dd6252a24c251c3958af2962b1645 extends Twig_Template
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
        $__internal_39fbb4707351cf0679f8610dd17f8058f360bbf6c23dc02a0e372e8c2da5c949 = $this->env->getExtension("native_profiler");
        $__internal_39fbb4707351cf0679f8610dd17f8058f360bbf6c23dc02a0e372e8c2da5c949->enter($__internal_39fbb4707351cf0679f8610dd17f8058f360bbf6c23dc02a0e372e8c2da5c949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::base.html.twig"));

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
        
        $__internal_39fbb4707351cf0679f8610dd17f8058f360bbf6c23dc02a0e372e8c2da5c949->leave($__internal_39fbb4707351cf0679f8610dd17f8058f360bbf6c23dc02a0e372e8c2da5c949_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_79772ea02f69bace59f31e447746fe7a7ab7dd75bbf4fc0b3f59b1b8af9b1875 = $this->env->getExtension("native_profiler");
        $__internal_79772ea02f69bace59f31e447746fe7a7ab7dd75bbf4fc0b3f59b1b8af9b1875->enter($__internal_79772ea02f69bace59f31e447746fe7a7ab7dd75bbf4fc0b3f59b1b8af9b1875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_79772ea02f69bace59f31e447746fe7a7ab7dd75bbf4fc0b3f59b1b8af9b1875->leave($__internal_79772ea02f69bace59f31e447746fe7a7ab7dd75bbf4fc0b3f59b1b8af9b1875_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a2172c2c758b5a3b2b4681e4372b3f422b00eeb9e54d0eb746f0d1c6ad9bb15 = $this->env->getExtension("native_profiler");
        $__internal_0a2172c2c758b5a3b2b4681e4372b3f422b00eeb9e54d0eb746f0d1c6ad9bb15->enter($__internal_0a2172c2c758b5a3b2b4681e4372b3f422b00eeb9e54d0eb746f0d1c6ad9bb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a2172c2c758b5a3b2b4681e4372b3f422b00eeb9e54d0eb746f0d1c6ad9bb15->leave($__internal_0a2172c2c758b5a3b2b4681e4372b3f422b00eeb9e54d0eb746f0d1c6ad9bb15_prof);

    }

    // line 20
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_daa9e85604c936290065a2b4f786805fe861b00dfeeee94cd91e3fb6c4c14b8e = $this->env->getExtension("native_profiler");
        $__internal_daa9e85604c936290065a2b4f786805fe861b00dfeeee94cd91e3fb6c4c14b8e->enter($__internal_daa9e85604c936290065a2b4f786805fe861b00dfeeee94cd91e3fb6c4c14b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 21
        echo "                    ";
        $this->displayBlock('content_left', $context, $blocks);
        // line 23
        echo "                    ";
        $this->displayBlock('content_right', $context, $blocks);
        // line 24
        echo "                ";
        
        $__internal_daa9e85604c936290065a2b4f786805fe861b00dfeeee94cd91e3fb6c4c14b8e->leave($__internal_daa9e85604c936290065a2b4f786805fe861b00dfeeee94cd91e3fb6c4c14b8e_prof);

    }

    // line 21
    public function block_content_left($context, array $blocks = array())
    {
        $__internal_7eb73cfc57682a6cd3b98b653fccb5ac9b1b0381a87faf91c4613fd61493c5e8 = $this->env->getExtension("native_profiler");
        $__internal_7eb73cfc57682a6cd3b98b653fccb5ac9b1b0381a87faf91c4613fd61493c5e8->enter($__internal_7eb73cfc57682a6cd3b98b653fccb5ac9b1b0381a87faf91c4613fd61493c5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_left"));

        // line 22
        echo "                    ";
        
        $__internal_7eb73cfc57682a6cd3b98b653fccb5ac9b1b0381a87faf91c4613fd61493c5e8->leave($__internal_7eb73cfc57682a6cd3b98b653fccb5ac9b1b0381a87faf91c4613fd61493c5e8_prof);

    }

    // line 23
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_aebcee476822041ea25b0789613639142990af16c977f5be97d1f36c0dc7c6af = $this->env->getExtension("native_profiler");
        $__internal_aebcee476822041ea25b0789613639142990af16c977f5be97d1f36c0dc7c6af->enter($__internal_aebcee476822041ea25b0789613639142990af16c977f5be97d1f36c0dc7c6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        
        $__internal_aebcee476822041ea25b0789613639142990af16c977f5be97d1f36c0dc7c6af->leave($__internal_aebcee476822041ea25b0789613639142990af16c977f5be97d1f36c0dc7c6af_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_698335cf78d97e676077a30f7cf515cfdfa5dbff67118566ef6e0aafa34a9de2 = $this->env->getExtension("native_profiler");
        $__internal_698335cf78d97e676077a30f7cf515cfdfa5dbff67118566ef6e0aafa34a9de2->enter($__internal_698335cf78d97e676077a30f7cf515cfdfa5dbff67118566ef6e0aafa34a9de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebAdminBundle::base.html.twig", 34)->display($context);
        
        $__internal_698335cf78d97e676077a30f7cf515cfdfa5dbff67118566ef6e0aafa34a9de2->leave($__internal_698335cf78d97e676077a30f7cf515cfdfa5dbff67118566ef6e0aafa34a9de2_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dd5776b812cca82a9cb4ab7ccf6e6c2bb58dfe4dc28ded76c5bbe6aea1aead0e = $this->env->getExtension("native_profiler");
        $__internal_dd5776b812cca82a9cb4ab7ccf6e6c2bb58dfe4dc28ded76c5bbe6aea1aead0e->enter($__internal_dd5776b812cca82a9cb4ab7ccf6e6c2bb58dfe4dc28ded76c5bbe6aea1aead0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 39
        echo "
    ";
        
        $__internal_dd5776b812cca82a9cb4ab7ccf6e6c2bb58dfe4dc28ded76c5bbe6aea1aead0e->leave($__internal_dd5776b812cca82a9cb4ab7ccf6e6c2bb58dfe4dc28ded76c5bbe6aea1aead0e_prof);

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
        return array (  180 => 39,  174 => 38,  166 => 34,  160 => 33,  149 => 23,  142 => 22,  136 => 21,  129 => 24,  126 => 23,  123 => 21,  117 => 20,  108 => 25,  106 => 20,  102 => 18,  96 => 17,  84 => 5,  75 => 41,  73 => 38,  69 => 36,  67 => 33,  60 => 28,  58 => 17,  54 => 15,  51 => 14,  49 => 13,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
