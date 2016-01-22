<?php

/* PointWebAdminBundle::base.html.twig */
class __TwigTemplate_f62dfe0050050a9590c7022d2766e79a31edfd6697f60983406c45bd18c7d3d7 extends Twig_Template
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
        $__internal_5df676ed265fcc0f7c878e9a31e76ec8bb5069a31360f83e2e18ba15176dfeae = $this->env->getExtension("native_profiler");
        $__internal_5df676ed265fcc0f7c878e9a31e76ec8bb5069a31360f83e2e18ba15176dfeae->enter($__internal_5df676ed265fcc0f7c878e9a31e76ec8bb5069a31360f83e2e18ba15176dfeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::base.html.twig"));

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
        
        $__internal_5df676ed265fcc0f7c878e9a31e76ec8bb5069a31360f83e2e18ba15176dfeae->leave($__internal_5df676ed265fcc0f7c878e9a31e76ec8bb5069a31360f83e2e18ba15176dfeae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_89323cd12cbac953f303f43497540d6bd48d99f5fcbc5c84a38f7ff152822e09 = $this->env->getExtension("native_profiler");
        $__internal_89323cd12cbac953f303f43497540d6bd48d99f5fcbc5c84a38f7ff152822e09->enter($__internal_89323cd12cbac953f303f43497540d6bd48d99f5fcbc5c84a38f7ff152822e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_89323cd12cbac953f303f43497540d6bd48d99f5fcbc5c84a38f7ff152822e09->leave($__internal_89323cd12cbac953f303f43497540d6bd48d99f5fcbc5c84a38f7ff152822e09_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cfabd8cf4416385cd2301e0f22812e679780cd6a9dd49a31cc0d5e785834e30 = $this->env->getExtension("native_profiler");
        $__internal_2cfabd8cf4416385cd2301e0f22812e679780cd6a9dd49a31cc0d5e785834e30->enter($__internal_2cfabd8cf4416385cd2301e0f22812e679780cd6a9dd49a31cc0d5e785834e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2cfabd8cf4416385cd2301e0f22812e679780cd6a9dd49a31cc0d5e785834e30->leave($__internal_2cfabd8cf4416385cd2301e0f22812e679780cd6a9dd49a31cc0d5e785834e30_prof);

    }

    // line 31
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_c16da46c4d0faf0549a5cced0a3d973be8e5b34743952f788ab4402478d67fc9 = $this->env->getExtension("native_profiler");
        $__internal_c16da46c4d0faf0549a5cced0a3d973be8e5b34743952f788ab4402478d67fc9->enter($__internal_c16da46c4d0faf0549a5cced0a3d973be8e5b34743952f788ab4402478d67fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 32
        echo "                    ";
        $this->displayBlock('content_left', $context, $blocks);
        // line 34
        echo "                    ";
        $this->displayBlock('content_right', $context, $blocks);
        // line 35
        echo "                ";
        
        $__internal_c16da46c4d0faf0549a5cced0a3d973be8e5b34743952f788ab4402478d67fc9->leave($__internal_c16da46c4d0faf0549a5cced0a3d973be8e5b34743952f788ab4402478d67fc9_prof);

    }

    // line 32
    public function block_content_left($context, array $blocks = array())
    {
        $__internal_89fabaac1522891256d63042b73891f562fcaacc5ba448baec470df85f92aea2 = $this->env->getExtension("native_profiler");
        $__internal_89fabaac1522891256d63042b73891f562fcaacc5ba448baec470df85f92aea2->enter($__internal_89fabaac1522891256d63042b73891f562fcaacc5ba448baec470df85f92aea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_left"));

        // line 33
        echo "                    ";
        
        $__internal_89fabaac1522891256d63042b73891f562fcaacc5ba448baec470df85f92aea2->leave($__internal_89fabaac1522891256d63042b73891f562fcaacc5ba448baec470df85f92aea2_prof);

    }

    // line 34
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_5f8b824ef5348023a86b78303fb560984a06c637cff25fae17a36602aeb184fd = $this->env->getExtension("native_profiler");
        $__internal_5f8b824ef5348023a86b78303fb560984a06c637cff25fae17a36602aeb184fd->enter($__internal_5f8b824ef5348023a86b78303fb560984a06c637cff25fae17a36602aeb184fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        
        $__internal_5f8b824ef5348023a86b78303fb560984a06c637cff25fae17a36602aeb184fd->leave($__internal_5f8b824ef5348023a86b78303fb560984a06c637cff25fae17a36602aeb184fd_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ba32043a1cbb3a30243f166a93b9a16b0458315791c9abf69b5824ac7cae11f1 = $this->env->getExtension("native_profiler");
        $__internal_ba32043a1cbb3a30243f166a93b9a16b0458315791c9abf69b5824ac7cae11f1->enter($__internal_ba32043a1cbb3a30243f166a93b9a16b0458315791c9abf69b5824ac7cae11f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebAdminBundle::base.html.twig", 45)->display($context);
        
        $__internal_ba32043a1cbb3a30243f166a93b9a16b0458315791c9abf69b5824ac7cae11f1->leave($__internal_ba32043a1cbb3a30243f166a93b9a16b0458315791c9abf69b5824ac7cae11f1_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f3e20b2d16338f173dc16be2f833cf08e6d0608e55ec40e5ea0d96d4fba7fecc = $this->env->getExtension("native_profiler");
        $__internal_f3e20b2d16338f173dc16be2f833cf08e6d0608e55ec40e5ea0d96d4fba7fecc->enter($__internal_f3e20b2d16338f173dc16be2f833cf08e6d0608e55ec40e5ea0d96d4fba7fecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "
    ";
        
        $__internal_f3e20b2d16338f173dc16be2f833cf08e6d0608e55ec40e5ea0d96d4fba7fecc->leave($__internal_f3e20b2d16338f173dc16be2f833cf08e6d0608e55ec40e5ea0d96d4fba7fecc_prof);

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
