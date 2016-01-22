<?php

/* PointWebMapBundle:Map:show.html.twig */
class __TwigTemplate_6cb1a36353b22fb021ebe635b24bb0ceb038fa34dde997f4567ebfe85a783e43 extends Twig_Template
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
        $__internal_9f763b52eb3de79b917783356e728a20c0b02f0d9553b61a28e1088c9a67ae81 = $this->env->getExtension("native_profiler");
        $__internal_9f763b52eb3de79b917783356e728a20c0b02f0d9553b61a28e1088c9a67ae81->enter($__internal_9f763b52eb3de79b917783356e728a20c0b02f0d9553b61a28e1088c9a67ae81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebMapBundle:Map:show.html.twig"));

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
        
        $__internal_9f763b52eb3de79b917783356e728a20c0b02f0d9553b61a28e1088c9a67ae81->leave($__internal_9f763b52eb3de79b917783356e728a20c0b02f0d9553b61a28e1088c9a67ae81_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28cd902444bbf003cb994aec88657d762ad016401c3177e693033ceee8095b5d = $this->env->getExtension("native_profiler");
        $__internal_28cd902444bbf003cb994aec88657d762ad016401c3177e693033ceee8095b5d->enter($__internal_28cd902444bbf003cb994aec88657d762ad016401c3177e693033ceee8095b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_28cd902444bbf003cb994aec88657d762ad016401c3177e693033ceee8095b5d->leave($__internal_28cd902444bbf003cb994aec88657d762ad016401c3177e693033ceee8095b5d_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8de2a8b24748b168beb7c8a48db36f2f57cb5b1448c62a216609f4ae5b5f1390 = $this->env->getExtension("native_profiler");
        $__internal_8de2a8b24748b168beb7c8a48db36f2f57cb5b1448c62a216609f4ae5b5f1390->enter($__internal_8de2a8b24748b168beb7c8a48db36f2f57cb5b1448c62a216609f4ae5b5f1390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebMapBundle:Map:show.html.twig", 58)->display($context);
        
        $__internal_8de2a8b24748b168beb7c8a48db36f2f57cb5b1448c62a216609f4ae5b5f1390->leave($__internal_8de2a8b24748b168beb7c8a48db36f2f57cb5b1448c62a216609f4ae5b5f1390_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8306f3d1acb11063eb14d08ac09c520a10f60937fd3c702589a60b9ead67d88a = $this->env->getExtension("native_profiler");
        $__internal_8306f3d1acb11063eb14d08ac09c520a10f60937fd3c702589a60b9ead67d88a->enter($__internal_8306f3d1acb11063eb14d08ac09c520a10f60937fd3c702589a60b9ead67d88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 63
        echo "
    ";
        
        $__internal_8306f3d1acb11063eb14d08ac09c520a10f60937fd3c702589a60b9ead67d88a->leave($__internal_8306f3d1acb11063eb14d08ac09c520a10f60937fd3c702589a60b9ead67d88a_prof);

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
