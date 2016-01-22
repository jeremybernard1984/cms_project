<?php

/* PointWebAppBundle:Contact:show.html.twig */
class __TwigTemplate_ad052cc682b317aff234195f1a200cb72586c1c7c49de6669b71f529cb80b179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d64d9661c9912f4ef13be603894c42bc352b48e18ee1ae10a84fef232b438f2 = $this->env->getExtension("native_profiler");
        $__internal_2d64d9661c9912f4ef13be603894c42bc352b48e18ee1ae10a84fef232b438f2->enter($__internal_2d64d9661c9912f4ef13be603894c42bc352b48e18ee1ae10a84fef232b438f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Contact:show.html.twig"));

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
    <style>
        .panel-heading, .panel-footer{
            text-align: center;font-weight:bold;
        }
    </style>
</head>
<body style=\"background: #fff;\">
<div id=\"wrapper\">
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            News
        </div>
        <div class=\"panel-body\">

            <div class=\"col-lg-12\">
                <div class=\"col-lg-12\">
                    <label>Nom :</label>
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Prénom :</label><br>
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Téléphone :</label>
                    ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Email :</label>
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Adresse :</label>
                    ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address", array()), "html", null, true);
        echo "<br>
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "zipCode", array()), "html", null, true);
        echo "<br>
                    ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Message :</label>
                    ";
        // line 46
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "message", array());
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Date de création :</label>
                    ";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createDate", array()), "d-m-Y"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
        <div class=\"panel-footer\">
            <a href=\"javascript:parent.jQuery.fancybox.close();\">Fermer la fenêtre</a>
        </div>
    </div>

</div>
<!-- /#wrapper -->
";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "</body>
<footer>
    ";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "</footer>
</html>
";
        
        $__internal_2d64d9661c9912f4ef13be603894c42bc352b48e18ee1ae10a84fef232b438f2->leave($__internal_2d64d9661c9912f4ef13be603894c42bc352b48e18ee1ae10a84fef232b438f2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0ff3b3717a1c8303f406dba79bb1749294ea6662b6888e422823f830828d6f5 = $this->env->getExtension("native_profiler");
        $__internal_a0ff3b3717a1c8303f406dba79bb1749294ea6662b6888e422823f830828d6f5->enter($__internal_a0ff3b3717a1c8303f406dba79bb1749294ea6662b6888e422823f830828d6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_a0ff3b3717a1c8303f406dba79bb1749294ea6662b6888e422823f830828d6f5->leave($__internal_a0ff3b3717a1c8303f406dba79bb1749294ea6662b6888e422823f830828d6f5_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a22dd97af91c1c0f796a78690a30032ce67d85c4edd260ab13c8d44c0d95f18 = $this->env->getExtension("native_profiler");
        $__internal_2a22dd97af91c1c0f796a78690a30032ce67d85c4edd260ab13c8d44c0d95f18->enter($__internal_2a22dd97af91c1c0f796a78690a30032ce67d85c4edd260ab13c8d44c0d95f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebAppBundle:Contact:show.html.twig", 62)->display($context);
        
        $__internal_2a22dd97af91c1c0f796a78690a30032ce67d85c4edd260ab13c8d44c0d95f18->leave($__internal_2a22dd97af91c1c0f796a78690a30032ce67d85c4edd260ab13c8d44c0d95f18_prof);

    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6052baa3520f80ba457b7fc83c15bbdbdc42d0be82272fb2712891476df02a54 = $this->env->getExtension("native_profiler");
        $__internal_6052baa3520f80ba457b7fc83c15bbdbdc42d0be82272fb2712891476df02a54->enter($__internal_6052baa3520f80ba457b7fc83c15bbdbdc42d0be82272fb2712891476df02a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 67
        echo "
    ";
        
        $__internal_6052baa3520f80ba457b7fc83c15bbdbdc42d0be82272fb2712891476df02a54->leave($__internal_6052baa3520f80ba457b7fc83c15bbdbdc42d0be82272fb2712891476df02a54_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Contact:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 67,  163 => 66,  155 => 62,  149 => 61,  137 => 5,  128 => 69,  126 => 66,  122 => 64,  120 => 61,  106 => 50,  99 => 46,  92 => 42,  88 => 41,  84 => 40,  77 => 36,  70 => 32,  63 => 28,  56 => 24,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}ESPACE D'ADMINISTRATION{% endblock %}</title>*/
/*     {{ render(controller("PointWebAdminBundle:Default:headerAdmin")) }}*/
/*     <style>*/
/*         .panel-heading, .panel-footer{*/
/*             text-align: center;font-weight:bold;*/
/*         }*/
/*     </style>*/
/* </head>*/
/* <body style="background: #fff;">*/
/* <div id="wrapper">*/
/*     <div class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*             News*/
/*         </div>*/
/*         <div class="panel-body">*/
/* */
/*             <div class="col-lg-12">*/
/*                 <div class="col-lg-12">*/
/*                     <label>Nom :</label>*/
/*                     {{ entity.lastname }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Prénom :</label><br>*/
/*                     {{ entity.firstname }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Téléphone :</label>*/
/*                     {{ entity.phone }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Email :</label>*/
/*                     {{ entity.email }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Adresse :</label>*/
/*                     {{ entity.address }}<br>*/
/*                     {{ entity.zipCode }}<br>*/
/*                     {{ entity.city }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Message :</label>*/
/*                     {{ entity.message|raw }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Date de création :</label>*/
/*                     {{ entity.createDate|date('d-m-Y') }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="panel-footer">*/
/*             <a href="javascript:parent.jQuery.fancybox.close();">Fermer la fenêtre</a>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* <!-- /#wrapper -->*/
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
