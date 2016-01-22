<?php

/* PointWebPartnerBundle:PartnerCategory:show.html.twig */
class __TwigTemplate_eed5aa79e0f08ddb2cad2f9a92af949135af7205e3af7bd6c8cd5c43926b3f5a extends Twig_Template
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
        $__internal_ccc7d806b7761442258ef90014c9cfa5e55f8a59fa9878c010645e916e7f8571 = $this->env->getExtension("native_profiler");
        $__internal_ccc7d806b7761442258ef90014c9cfa5e55f8a59fa9878c010645e916e7f8571->enter($__internal_ccc7d806b7761442258ef90014c9cfa5e55f8a59fa9878c010645e916e7f8571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:PartnerCategory:show.html.twig"));

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
        
        $__internal_ccc7d806b7761442258ef90014c9cfa5e55f8a59fa9878c010645e916e7f8571->leave($__internal_ccc7d806b7761442258ef90014c9cfa5e55f8a59fa9878c010645e916e7f8571_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a7c0dbf9ecb699a0318d79a2e904260afd3a128268e0ab34506489e2b772b5e = $this->env->getExtension("native_profiler");
        $__internal_0a7c0dbf9ecb699a0318d79a2e904260afd3a128268e0ab34506489e2b772b5e->enter($__internal_0a7c0dbf9ecb699a0318d79a2e904260afd3a128268e0ab34506489e2b772b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_0a7c0dbf9ecb699a0318d79a2e904260afd3a128268e0ab34506489e2b772b5e->leave($__internal_0a7c0dbf9ecb699a0318d79a2e904260afd3a128268e0ab34506489e2b772b5e_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f160329e30ed433a4c794dd107adceacd65a7cbbf4f3f82176f0fe62e764e9e1 = $this->env->getExtension("native_profiler");
        $__internal_f160329e30ed433a4c794dd107adceacd65a7cbbf4f3f82176f0fe62e764e9e1->enter($__internal_f160329e30ed433a4c794dd107adceacd65a7cbbf4f3f82176f0fe62e764e9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebPartnerBundle:PartnerCategory:show.html.twig", 44)->display($context);
        
        $__internal_f160329e30ed433a4c794dd107adceacd65a7cbbf4f3f82176f0fe62e764e9e1->leave($__internal_f160329e30ed433a4c794dd107adceacd65a7cbbf4f3f82176f0fe62e764e9e1_prof);

    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        $__internal_aa204fb15443fbce5c7c361344c05281662928ca5083ae24d8961fe666a2e3cb = $this->env->getExtension("native_profiler");
        $__internal_aa204fb15443fbce5c7c361344c05281662928ca5083ae24d8961fe666a2e3cb->enter($__internal_aa204fb15443fbce5c7c361344c05281662928ca5083ae24d8961fe666a2e3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 49
        echo "
    ";
        
        $__internal_aa204fb15443fbce5c7c361344c05281662928ca5083ae24d8961fe666a2e3cb->leave($__internal_aa204fb15443fbce5c7c361344c05281662928ca5083ae24d8961fe666a2e3cb_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:PartnerCategory:show.html.twig";
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
