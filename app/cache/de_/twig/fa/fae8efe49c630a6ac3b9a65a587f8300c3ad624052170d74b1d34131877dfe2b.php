<?php

/* PointWebGuestbookBundle:Guestbook:show.html.twig */
class __TwigTemplate_1acd6a5840199da5cfc0d3e8ed1a19908f6a5b90206c84bc1424b8a83392b4f7 extends Twig_Template
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
        $__internal_3af086323ce79e55e02c79e7171e803b7063b9362fcd46da8d6046781e377829 = $this->env->getExtension("native_profiler");
        $__internal_3af086323ce79e55e02c79e7171e803b7063b9362fcd46da8d6046781e377829->enter($__internal_3af086323ce79e55e02c79e7171e803b7063b9362fcd46da8d6046781e377829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGuestbookBundle:Guestbook:show.html.twig"));

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
            News
        </div>
        <div class=\"panel-body\">

            <div class=\"col-lg-12\">
                <div class=\"col-lg-12\">
                    <label>Nom :</label>
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Prénom :</label>
                    ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Email :</label>
                    ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Commentaire :</label>
                    ";
        // line 43
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment", array());
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Notation :</label>
                    ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notation", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Position :</label>
                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>En ligne :</label>
                    ";
        // line 55
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 56
        echo "                </div>

        </div>
        <div class=\"panel-footer\">
            <a href=\"javascript:parent.jQuery.fancybox.close();\">Fermer la fenêtre</a>
        </div>
    </div>

</div>
<!-- /#wrapper -->
";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "</body>
<footer>
    ";
        // line 71
        $this->displayBlock('footer', $context, $blocks);
        // line 74
        echo "</footer>
</html>

";
        
        $__internal_3af086323ce79e55e02c79e7171e803b7063b9362fcd46da8d6046781e377829->leave($__internal_3af086323ce79e55e02c79e7171e803b7063b9362fcd46da8d6046781e377829_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_184488f6154b5e20f0337fbe82aed778f66bc56ac82fb8ed3ec25b0e93d069a7 = $this->env->getExtension("native_profiler");
        $__internal_184488f6154b5e20f0337fbe82aed778f66bc56ac82fb8ed3ec25b0e93d069a7->enter($__internal_184488f6154b5e20f0337fbe82aed778f66bc56ac82fb8ed3ec25b0e93d069a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_184488f6154b5e20f0337fbe82aed778f66bc56ac82fb8ed3ec25b0e93d069a7->leave($__internal_184488f6154b5e20f0337fbe82aed778f66bc56ac82fb8ed3ec25b0e93d069a7_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6426d31ebce05b060de0f00359452d6d21bf52ec5d6fa89d22757049e20675e = $this->env->getExtension("native_profiler");
        $__internal_d6426d31ebce05b060de0f00359452d6d21bf52ec5d6fa89d22757049e20675e->enter($__internal_d6426d31ebce05b060de0f00359452d6d21bf52ec5d6fa89d22757049e20675e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebGuestbookBundle:Guestbook:show.html.twig", 67)->display($context);
        
        $__internal_d6426d31ebce05b060de0f00359452d6d21bf52ec5d6fa89d22757049e20675e->leave($__internal_d6426d31ebce05b060de0f00359452d6d21bf52ec5d6fa89d22757049e20675e_prof);

    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e338c02ee65b9eaec5bb75ff6c41cb9d9f700e690623fc2b574d3d9de567ab79 = $this->env->getExtension("native_profiler");
        $__internal_e338c02ee65b9eaec5bb75ff6c41cb9d9f700e690623fc2b574d3d9de567ab79->enter($__internal_e338c02ee65b9eaec5bb75ff6c41cb9d9f700e690623fc2b574d3d9de567ab79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 72
        echo "
    ";
        
        $__internal_e338c02ee65b9eaec5bb75ff6c41cb9d9f700e690623fc2b574d3d9de567ab79->leave($__internal_e338c02ee65b9eaec5bb75ff6c41cb9d9f700e690623fc2b574d3d9de567ab79_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGuestbookBundle:Guestbook:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 72,  167 => 71,  159 => 67,  153 => 66,  141 => 5,  131 => 74,  129 => 71,  125 => 69,  123 => 66,  111 => 56,  105 => 55,  98 => 51,  91 => 47,  84 => 43,  77 => 39,  70 => 35,  63 => 31,  35 => 6,  31 => 5,  25 => 1,);
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
/*             News*/
/*         </div>*/
/*         <div class="panel-body">*/
/* */
/*             <div class="col-lg-12">*/
/*                 <div class="col-lg-12">*/
/*                     <label>Nom :</label>*/
/*                     {{ entity.title }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Prénom :</label>*/
/*                     {{ entity.firstname }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Email :</label>*/
/*                     {{ entity.email }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Commentaire :</label>*/
/*                     {{ entity.comment|raw }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Notation :</label>*/
/*                     {{ entity.notation }}*/
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
