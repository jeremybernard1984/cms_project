<?php

/* @PointWebPartner/PartnerCategory/show.html.twig */
class __TwigTemplate_26aa43b235692cd4255ab4b258cf36d26e7b3580cb70643a3f5521cd6fc7b8da extends Twig_Template
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
        $__internal_7f5e748fffc437efb596f86b40e369f0d43d761c1938b1d487c24257741fb7c5 = $this->env->getExtension("native_profiler");
        $__internal_7f5e748fffc437efb596f86b40e369f0d43d761c1938b1d487c24257741fb7c5->enter($__internal_7f5e748fffc437efb596f86b40e369f0d43d761c1938b1d487c24257741fb7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebPartner/PartnerCategory/show.html.twig"));

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

    </style>
</head>
<body style=\"background: #fff;\">
<div id=\"wrapper\">

    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            Partenaire catégorie
        </div>
        <div class=\"panel-body\">

            <div class=\"col-lg-8\">
                <div class=\"col-lg-12\">
                    <label>Titre :</label>
                    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Position :</label>
                    ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>En ligne :</label>
                    ";
        // line 31
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 32
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
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "</body>
<footer>
    ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "</footer>
</html>



";
        
        $__internal_7f5e748fffc437efb596f86b40e369f0d43d761c1938b1d487c24257741fb7c5->leave($__internal_7f5e748fffc437efb596f86b40e369f0d43d761c1938b1d487c24257741fb7c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6820dfd1d0a86440dddaa16b20f74587a44fbd3bc594d24df11df3102bb154d7 = $this->env->getExtension("native_profiler");
        $__internal_6820dfd1d0a86440dddaa16b20f74587a44fbd3bc594d24df11df3102bb154d7->enter($__internal_6820dfd1d0a86440dddaa16b20f74587a44fbd3bc594d24df11df3102bb154d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_6820dfd1d0a86440dddaa16b20f74587a44fbd3bc594d24df11df3102bb154d7->leave($__internal_6820dfd1d0a86440dddaa16b20f74587a44fbd3bc594d24df11df3102bb154d7_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27ad82b84737f1b95ce75f16c8a75b7b037f5001297a517dc784cd431f03c1bc = $this->env->getExtension("native_profiler");
        $__internal_27ad82b84737f1b95ce75f16c8a75b7b037f5001297a517dc784cd431f03c1bc->enter($__internal_27ad82b84737f1b95ce75f16c8a75b7b037f5001297a517dc784cd431f03c1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "@PointWebPartner/PartnerCategory/show.html.twig", 44)->display($context);
        
        $__internal_27ad82b84737f1b95ce75f16c8a75b7b037f5001297a517dc784cd431f03c1bc->leave($__internal_27ad82b84737f1b95ce75f16c8a75b7b037f5001297a517dc784cd431f03c1bc_prof);

    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a957d4e05992a357ccdcdf732544259444a0990352b4c71ef7ac5fa2ef550ac8 = $this->env->getExtension("native_profiler");
        $__internal_a957d4e05992a357ccdcdf732544259444a0990352b4c71ef7ac5fa2ef550ac8->enter($__internal_a957d4e05992a357ccdcdf732544259444a0990352b4c71ef7ac5fa2ef550ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 49
        echo "
    ";
        
        $__internal_a957d4e05992a357ccdcdf732544259444a0990352b4c71ef7ac5fa2ef550ac8->leave($__internal_a957d4e05992a357ccdcdf732544259444a0990352b4c71ef7ac5fa2ef550ac8_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebPartner/PartnerCategory/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 49,  134 => 48,  126 => 44,  120 => 43,  108 => 5,  96 => 51,  94 => 48,  90 => 46,  88 => 43,  75 => 32,  69 => 31,  62 => 27,  55 => 23,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}ESPACE D'ADMINISTRATION{% endblock %}</title>*/
/*     {{ render(controller("PointWebAdminBundle:Default:headerAdmin")) }}*/
/*     <style>*/
/* */
/*     </style>*/
/* </head>*/
/* <body style="background: #fff;">*/
/* <div id="wrapper">*/
/* */
/*     <div class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*             Partenaire catégorie*/
/*         </div>*/
/*         <div class="panel-body">*/
/* */
/*             <div class="col-lg-8">*/
/*                 <div class="col-lg-12">*/
/*                     <label>Titre :</label>*/
/*                     {{ entity.title }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Position :</label>*/
/*                     {{ entity.position }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>En ligne :</label>*/
/*                     {% if entity.online %}Oui{% else %}Non{% endif %}*/
/*                 </div>*/
/* */
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
/* */
/* */
