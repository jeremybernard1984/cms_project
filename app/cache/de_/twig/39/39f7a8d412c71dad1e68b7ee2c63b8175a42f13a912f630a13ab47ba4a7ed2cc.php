<?php

/* @PointWebGuestbook/Guestbook/show.html.twig */
class __TwigTemplate_2eb08b09055ccf88db6a055b59864b29b7d817c0535a9b8b7ebc5243703a0841 extends Twig_Template
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
        $__internal_f7f111b8a79d78a966ea5b96971cdb7611d61060995412b5de8326c4402e6385 = $this->env->getExtension("native_profiler");
        $__internal_f7f111b8a79d78a966ea5b96971cdb7611d61060995412b5de8326c4402e6385->enter($__internal_f7f111b8a79d78a966ea5b96971cdb7611d61060995412b5de8326c4402e6385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebGuestbook/Guestbook/show.html.twig"));

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
        
        $__internal_f7f111b8a79d78a966ea5b96971cdb7611d61060995412b5de8326c4402e6385->leave($__internal_f7f111b8a79d78a966ea5b96971cdb7611d61060995412b5de8326c4402e6385_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30d1756c026e415d168b2c0e4897544a13e60adac3eb2099a0c5614c8d390ca2 = $this->env->getExtension("native_profiler");
        $__internal_30d1756c026e415d168b2c0e4897544a13e60adac3eb2099a0c5614c8d390ca2->enter($__internal_30d1756c026e415d168b2c0e4897544a13e60adac3eb2099a0c5614c8d390ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_30d1756c026e415d168b2c0e4897544a13e60adac3eb2099a0c5614c8d390ca2->leave($__internal_30d1756c026e415d168b2c0e4897544a13e60adac3eb2099a0c5614c8d390ca2_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8cc2142a1645b3007f642b3079aae18e06cd9b47f44d6693b0a94eda53e2a39 = $this->env->getExtension("native_profiler");
        $__internal_d8cc2142a1645b3007f642b3079aae18e06cd9b47f44d6693b0a94eda53e2a39->enter($__internal_d8cc2142a1645b3007f642b3079aae18e06cd9b47f44d6693b0a94eda53e2a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "@PointWebGuestbook/Guestbook/show.html.twig", 67)->display($context);
        
        $__internal_d8cc2142a1645b3007f642b3079aae18e06cd9b47f44d6693b0a94eda53e2a39->leave($__internal_d8cc2142a1645b3007f642b3079aae18e06cd9b47f44d6693b0a94eda53e2a39_prof);

    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d1cae6ab61ca9a8ff8d0f9945cad5c087da148aa3a88a87b03f49b245c11f479 = $this->env->getExtension("native_profiler");
        $__internal_d1cae6ab61ca9a8ff8d0f9945cad5c087da148aa3a88a87b03f49b245c11f479->enter($__internal_d1cae6ab61ca9a8ff8d0f9945cad5c087da148aa3a88a87b03f49b245c11f479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 72
        echo "
    ";
        
        $__internal_d1cae6ab61ca9a8ff8d0f9945cad5c087da148aa3a88a87b03f49b245c11f479->leave($__internal_d1cae6ab61ca9a8ff8d0f9945cad5c087da148aa3a88a87b03f49b245c11f479_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebGuestbook/Guestbook/show.html.twig";
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
