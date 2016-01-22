<?php

/* @PointWebFaq/faq/show.html.twig */
class __TwigTemplate_377f1c4d1200e57cf199b21ed8ed46e2b629f94a2ea9e6dcb234b52fe8340c8d extends Twig_Template
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
        $__internal_75fd5e93b3154462678f682d4ba97e1fa2bc0c247f98aa7bc3d098bceab0c2eb = $this->env->getExtension("native_profiler");
        $__internal_75fd5e93b3154462678f682d4ba97e1fa2bc0c247f98aa7bc3d098bceab0c2eb->enter($__internal_75fd5e93b3154462678f682d4ba97e1fa2bc0c247f98aa7bc3d098bceab0c2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebFaq/faq/show.html.twig"));

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
            FAQ
        </div>
        <div class=\"panel-body\">
            <div class=\"col-lg-12\">
                <div class=\"col-lg-12\">
                    <label>Question :</label>
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Réponse :</label><br>
                    ";
        // line 34
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answer", array());
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Position :</label>
                    ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>En ligne :</label>
                    ";
        // line 42
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 43
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
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "</body>
<footer>
    ";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "</footer>
</html>

";
        
        $__internal_75fd5e93b3154462678f682d4ba97e1fa2bc0c247f98aa7bc3d098bceab0c2eb->leave($__internal_75fd5e93b3154462678f682d4ba97e1fa2bc0c247f98aa7bc3d098bceab0c2eb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6bf4d7bc5928feb53443676ca29ebc811a6951d0c402b8fd7700beab5248152 = $this->env->getExtension("native_profiler");
        $__internal_e6bf4d7bc5928feb53443676ca29ebc811a6951d0c402b8fd7700beab5248152->enter($__internal_e6bf4d7bc5928feb53443676ca29ebc811a6951d0c402b8fd7700beab5248152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_e6bf4d7bc5928feb53443676ca29ebc811a6951d0c402b8fd7700beab5248152->leave($__internal_e6bf4d7bc5928feb53443676ca29ebc811a6951d0c402b8fd7700beab5248152_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a74e5d5f5ae0504d5e09e998174323653aaef8b9c129e2dd422b782bbc95603d = $this->env->getExtension("native_profiler");
        $__internal_a74e5d5f5ae0504d5e09e998174323653aaef8b9c129e2dd422b782bbc95603d->enter($__internal_a74e5d5f5ae0504d5e09e998174323653aaef8b9c129e2dd422b782bbc95603d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "@PointWebFaq/faq/show.html.twig", 54)->display($context);
        
        $__internal_a74e5d5f5ae0504d5e09e998174323653aaef8b9c129e2dd422b782bbc95603d->leave($__internal_a74e5d5f5ae0504d5e09e998174323653aaef8b9c129e2dd422b782bbc95603d_prof);

    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c7f1b6439709d5d25073956e79e0498ce426b65341f6ccea738805f34a197c9c = $this->env->getExtension("native_profiler");
        $__internal_c7f1b6439709d5d25073956e79e0498ce426b65341f6ccea738805f34a197c9c->enter($__internal_c7f1b6439709d5d25073956e79e0498ce426b65341f6ccea738805f34a197c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 59
        echo "
    ";
        
        $__internal_c7f1b6439709d5d25073956e79e0498ce426b65341f6ccea738805f34a197c9c->leave($__internal_c7f1b6439709d5d25073956e79e0498ce426b65341f6ccea738805f34a197c9c_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebFaq/faq/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 59,  145 => 58,  137 => 54,  131 => 53,  119 => 5,  109 => 61,  107 => 58,  103 => 56,  101 => 53,  89 => 43,  83 => 42,  76 => 38,  69 => 34,  62 => 30,  35 => 6,  31 => 5,  25 => 1,);
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
/*             FAQ*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <div class="col-lg-12">*/
/*                 <div class="col-lg-12">*/
/*                     <label>Question :</label>*/
/*                     {{ entity.title }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Réponse :</label><br>*/
/*                     {{ entity.answer|raw }}*/
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
