<?php

/* @PointWebAdmin/base.html.twig */
class __TwigTemplate_c272c50f4d4399256d7a219b52b93bc871b74cfd9e0100a02a57e018b65aeb42 extends Twig_Template
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
        $__internal_4fc60ab1e8832646f15f7440de332d99dc1cba77a767c3acf2d1533973fd306a = $this->env->getExtension("native_profiler");
        $__internal_4fc60ab1e8832646f15f7440de332d99dc1cba77a767c3acf2d1533973fd306a->enter($__internal_4fc60ab1e8832646f15f7440de332d99dc1cba77a767c3acf2d1533973fd306a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebAdmin/base.html.twig"));

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
        
        $__internal_4fc60ab1e8832646f15f7440de332d99dc1cba77a767c3acf2d1533973fd306a->leave($__internal_4fc60ab1e8832646f15f7440de332d99dc1cba77a767c3acf2d1533973fd306a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8b485e6b050529f061f03d6a7a7b1c7374eb8f87d17dcae08861fb838e17241 = $this->env->getExtension("native_profiler");
        $__internal_a8b485e6b050529f061f03d6a7a7b1c7374eb8f87d17dcae08861fb838e17241->enter($__internal_a8b485e6b050529f061f03d6a7a7b1c7374eb8f87d17dcae08861fb838e17241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_a8b485e6b050529f061f03d6a7a7b1c7374eb8f87d17dcae08861fb838e17241->leave($__internal_a8b485e6b050529f061f03d6a7a7b1c7374eb8f87d17dcae08861fb838e17241_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_0122386da4339e1685d5f6a9116e81d061ccf7fdd20abe6c542b019dbd5d88b0 = $this->env->getExtension("native_profiler");
        $__internal_0122386da4339e1685d5f6a9116e81d061ccf7fdd20abe6c542b019dbd5d88b0->enter($__internal_0122386da4339e1685d5f6a9116e81d061ccf7fdd20abe6c542b019dbd5d88b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0122386da4339e1685d5f6a9116e81d061ccf7fdd20abe6c542b019dbd5d88b0->leave($__internal_0122386da4339e1685d5f6a9116e81d061ccf7fdd20abe6c542b019dbd5d88b0_prof);

    }

    // line 31
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_cd08b7f780744e7c18553b5ac286a241e7bf965826e716a15f4ca9a3358dc00c = $this->env->getExtension("native_profiler");
        $__internal_cd08b7f780744e7c18553b5ac286a241e7bf965826e716a15f4ca9a3358dc00c->enter($__internal_cd08b7f780744e7c18553b5ac286a241e7bf965826e716a15f4ca9a3358dc00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 32
        echo "                    ";
        $this->displayBlock('content_left', $context, $blocks);
        // line 34
        echo "                    ";
        $this->displayBlock('content_right', $context, $blocks);
        // line 35
        echo "                ";
        
        $__internal_cd08b7f780744e7c18553b5ac286a241e7bf965826e716a15f4ca9a3358dc00c->leave($__internal_cd08b7f780744e7c18553b5ac286a241e7bf965826e716a15f4ca9a3358dc00c_prof);

    }

    // line 32
    public function block_content_left($context, array $blocks = array())
    {
        $__internal_ac0809428ffa99c610c32638bde52a18ba461c57f96d71aab6ab779dc8a83891 = $this->env->getExtension("native_profiler");
        $__internal_ac0809428ffa99c610c32638bde52a18ba461c57f96d71aab6ab779dc8a83891->enter($__internal_ac0809428ffa99c610c32638bde52a18ba461c57f96d71aab6ab779dc8a83891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_left"));

        // line 33
        echo "                    ";
        
        $__internal_ac0809428ffa99c610c32638bde52a18ba461c57f96d71aab6ab779dc8a83891->leave($__internal_ac0809428ffa99c610c32638bde52a18ba461c57f96d71aab6ab779dc8a83891_prof);

    }

    // line 34
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_72ecc7284da4866e6b8b33e0f77ae92ce52ad06f9164963b777462c22287be10 = $this->env->getExtension("native_profiler");
        $__internal_72ecc7284da4866e6b8b33e0f77ae92ce52ad06f9164963b777462c22287be10->enter($__internal_72ecc7284da4866e6b8b33e0f77ae92ce52ad06f9164963b777462c22287be10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        
        $__internal_72ecc7284da4866e6b8b33e0f77ae92ce52ad06f9164963b777462c22287be10->leave($__internal_72ecc7284da4866e6b8b33e0f77ae92ce52ad06f9164963b777462c22287be10_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_141509bbf423ec293f604cea0d2a862cf78878d7330272b7d7d101e3a8a7c3f5 = $this->env->getExtension("native_profiler");
        $__internal_141509bbf423ec293f604cea0d2a862cf78878d7330272b7d7d101e3a8a7c3f5->enter($__internal_141509bbf423ec293f604cea0d2a862cf78878d7330272b7d7d101e3a8a7c3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "@PointWebAdmin/base.html.twig", 45)->display($context);
        
        $__internal_141509bbf423ec293f604cea0d2a862cf78878d7330272b7d7d101e3a8a7c3f5->leave($__internal_141509bbf423ec293f604cea0d2a862cf78878d7330272b7d7d101e3a8a7c3f5_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_23ec196d314a94368a3ef1de579f9cf40446282ba5d088d26b84cb9aac9f2292 = $this->env->getExtension("native_profiler");
        $__internal_23ec196d314a94368a3ef1de579f9cf40446282ba5d088d26b84cb9aac9f2292->enter($__internal_23ec196d314a94368a3ef1de579f9cf40446282ba5d088d26b84cb9aac9f2292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "
    ";
        
        $__internal_23ec196d314a94368a3ef1de579f9cf40446282ba5d088d26b84cb9aac9f2292->leave($__internal_23ec196d314a94368a3ef1de579f9cf40446282ba5d088d26b84cb9aac9f2292_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebAdmin/base.html.twig";
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
