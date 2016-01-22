<?php

/* PointWebMapBundle:Map:show.html.twig */
class __TwigTemplate_d1edf2c75c3841fd46091e1858a772399a7e42ddf21719405e71ce69b801e07a extends Twig_Template
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
        $__internal_be4eedafb6676feedebc759618a36d5c9572f060f0551a808595a58f98cf2e77 = $this->env->getExtension("native_profiler");
        $__internal_be4eedafb6676feedebc759618a36d5c9572f060f0551a808595a58f98cf2e77->enter($__internal_be4eedafb6676feedebc759618a36d5c9572f060f0551a808595a58f98cf2e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebMapBundle:Map:show.html.twig"));

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
        .img-view{
            text-align: center;float: left;width: 150px;height:220px;font-size: 10px;border: 10px solid #fff;overflow: hidden;
        }
        .img-view img{
            width: 100%;
        }
    </style>
</head>
<body style=\"background: #fff;\">
<div id=\"wrapper\">

    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            Map
        </div>
        <div class=\"panel-body\">
            <div class=\"col-lg-12\">
                <div class=\"col-lg-12\">
                    <label>Titre :</label>
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Code :</label><br>
                    ";
        // line 34
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "code", array());
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Description :</label><br>
                    ";
        // line 38
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Position :</label>
                    ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>En ligne :</label>
                    ";
        // line 46
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 47
        echo "                </div>
            </div>
        </div>
        <div class=\"panel-footer\">
            <a href=\"javascript:parent.jQuery.fancybox.close();\">Fermer la fenêtre</a>
        </div>
    </div>

</div>
<!-- /#wrapper -->
";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "</body>
<footer>
    ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "</footer>
</html>

";
        
        $__internal_be4eedafb6676feedebc759618a36d5c9572f060f0551a808595a58f98cf2e77->leave($__internal_be4eedafb6676feedebc759618a36d5c9572f060f0551a808595a58f98cf2e77_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b3d2b8707251f4ceaf535b02f38642692a50e7b2e0963cca7cf381c274ff35a = $this->env->getExtension("native_profiler");
        $__internal_7b3d2b8707251f4ceaf535b02f38642692a50e7b2e0963cca7cf381c274ff35a->enter($__internal_7b3d2b8707251f4ceaf535b02f38642692a50e7b2e0963cca7cf381c274ff35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_7b3d2b8707251f4ceaf535b02f38642692a50e7b2e0963cca7cf381c274ff35a->leave($__internal_7b3d2b8707251f4ceaf535b02f38642692a50e7b2e0963cca7cf381c274ff35a_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1f83e4c0371f6eff60c553a57fd7e7f882c2cfdb07a0a47becc9e2497c8d3b7 = $this->env->getExtension("native_profiler");
        $__internal_e1f83e4c0371f6eff60c553a57fd7e7f882c2cfdb07a0a47becc9e2497c8d3b7->enter($__internal_e1f83e4c0371f6eff60c553a57fd7e7f882c2cfdb07a0a47becc9e2497c8d3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebMapBundle:Map:show.html.twig", 58)->display($context);
        
        $__internal_e1f83e4c0371f6eff60c553a57fd7e7f882c2cfdb07a0a47becc9e2497c8d3b7->leave($__internal_e1f83e4c0371f6eff60c553a57fd7e7f882c2cfdb07a0a47becc9e2497c8d3b7_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3dbaa11492d903cb47d5480e677f49901d8066941bfc145e673555cd5995244e = $this->env->getExtension("native_profiler");
        $__internal_3dbaa11492d903cb47d5480e677f49901d8066941bfc145e673555cd5995244e->enter($__internal_3dbaa11492d903cb47d5480e677f49901d8066941bfc145e673555cd5995244e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 63
        echo "
    ";
        
        $__internal_3dbaa11492d903cb47d5480e677f49901d8066941bfc145e673555cd5995244e->leave($__internal_3dbaa11492d903cb47d5480e677f49901d8066941bfc145e673555cd5995244e_prof);

    }

    public function getTemplateName()
    {
        return "PointWebMapBundle:Map:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 63,  152 => 62,  144 => 58,  138 => 57,  126 => 5,  116 => 65,  114 => 62,  110 => 60,  108 => 57,  96 => 47,  90 => 46,  83 => 42,  76 => 38,  69 => 34,  62 => 30,  35 => 6,  31 => 5,  25 => 1,);
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
/*         .img-view{*/
/*             text-align: center;float: left;width: 150px;height:220px;font-size: 10px;border: 10px solid #fff;overflow: hidden;*/
/*         }*/
/*         .img-view img{*/
/*             width: 100%;*/
/*         }*/
/*     </style>*/
/* </head>*/
/* <body style="background: #fff;">*/
/* <div id="wrapper">*/
/* */
/*     <div class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*             Map*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <div class="col-lg-12">*/
/*                 <div class="col-lg-12">*/
/*                     <label>Titre :</label>*/
/*                     {{ entity.title }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Code :</label><br>*/
/*                     {{ entity.code|raw }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Description :</label><br>*/
/*                     {{ entity.description|raw }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Position :</label>*/
/*                     {{ entity.position }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>En ligne :</label>*/
/*                     {% if entity.online %}Oui{% else %}Non{% endif %}*/
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
/* */
