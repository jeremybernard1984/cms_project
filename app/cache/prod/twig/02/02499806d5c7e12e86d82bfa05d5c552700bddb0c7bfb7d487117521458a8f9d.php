<?php

/* PointWebGuestBookBundle:GuestBook:show.html.twig */
class __TwigTemplate_bd67088e0368af5504315ca008c7c97582f41200e49a8da819f0151d39f7f6d3 extends Twig_Template
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
        $__internal_faf2926eb7200470c8696a629739597a29665b130e40aeca021b18b02abbe83f = $this->env->getExtension("native_profiler");
        $__internal_faf2926eb7200470c8696a629739597a29665b130e40aeca021b18b02abbe83f->enter($__internal_faf2926eb7200470c8696a629739597a29665b130e40aeca021b18b02abbe83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGuestBookBundle:GuestBook:show.html.twig"));

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
        $this->loadTemplate("PointWebAdminBundle::_header.html.twig", "PointWebGuestBookBundle:GuestBook:show.html.twig", 6)->display($context);
        // line 7
        echo "    <style>
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname", array()), "html", null, true);
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
        
        $__internal_faf2926eb7200470c8696a629739597a29665b130e40aeca021b18b02abbe83f->leave($__internal_faf2926eb7200470c8696a629739597a29665b130e40aeca021b18b02abbe83f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b628f3b6fa67ec900d917804c925287fe26bc1643d59630dd11d63949d3c027 = $this->env->getExtension("native_profiler");
        $__internal_5b628f3b6fa67ec900d917804c925287fe26bc1643d59630dd11d63949d3c027->enter($__internal_5b628f3b6fa67ec900d917804c925287fe26bc1643d59630dd11d63949d3c027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_5b628f3b6fa67ec900d917804c925287fe26bc1643d59630dd11d63949d3c027->leave($__internal_5b628f3b6fa67ec900d917804c925287fe26bc1643d59630dd11d63949d3c027_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78d9b6fc0aa21eeef5e134a655aae1f0abf46c17b8e276bcfb5cdd05de2d0917 = $this->env->getExtension("native_profiler");
        $__internal_78d9b6fc0aa21eeef5e134a655aae1f0abf46c17b8e276bcfb5cdd05de2d0917->enter($__internal_78d9b6fc0aa21eeef5e134a655aae1f0abf46c17b8e276bcfb5cdd05de2d0917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebGuestBookBundle:GuestBook:show.html.twig", 67)->display($context);
        
        $__internal_78d9b6fc0aa21eeef5e134a655aae1f0abf46c17b8e276bcfb5cdd05de2d0917->leave($__internal_78d9b6fc0aa21eeef5e134a655aae1f0abf46c17b8e276bcfb5cdd05de2d0917_prof);

    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b84439e6f6d1bce494933d16fa8d034a420388c95062b964ee33e91d56f11407 = $this->env->getExtension("native_profiler");
        $__internal_b84439e6f6d1bce494933d16fa8d034a420388c95062b964ee33e91d56f11407->enter($__internal_b84439e6f6d1bce494933d16fa8d034a420388c95062b964ee33e91d56f11407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 72
        echo "
    ";
        
        $__internal_b84439e6f6d1bce494933d16fa8d034a420388c95062b964ee33e91d56f11407->leave($__internal_b84439e6f6d1bce494933d16fa8d034a420388c95062b964ee33e91d56f11407_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGuestBookBundle:GuestBook:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 72,  167 => 71,  159 => 67,  153 => 66,  141 => 5,  131 => 74,  129 => 71,  125 => 69,  123 => 66,  111 => 56,  105 => 55,  98 => 51,  91 => 47,  84 => 43,  77 => 39,  70 => 35,  63 => 31,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}ESPACE D'ADMINISTRATION SERCO POINT-WEB{% endblock %}</title>*/
/*     {% include 'PointWebAdminBundle::_header.html.twig' %}*/
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
/*                     {{ entity.lastname }}*/
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
