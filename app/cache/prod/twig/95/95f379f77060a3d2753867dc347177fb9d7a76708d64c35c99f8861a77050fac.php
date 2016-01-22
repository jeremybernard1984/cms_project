<?php

/* PointWebProductBundle:Product:show.html.twig */
class __TwigTemplate_6c43bc4e98017ca953b442a5012eec1a89ba8d2b4469b87fa4de8f5d01094bb0 extends Twig_Template
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
        $__internal_1209ba7072c3dce38ada7ea3a574bf96a37128b46c88c1988dfe0519a804eb52 = $this->env->getExtension("native_profiler");
        $__internal_1209ba7072c3dce38ada7ea3a574bf96a37128b46c88c1988dfe0519a804eb52->enter($__internal_1209ba7072c3dce38ada7ea3a574bf96a37128b46c88c1988dfe0519a804eb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Product:show.html.twig"));

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
            Partenaire
        </div>
        <div class=\"panel-body\">

            <div class=\"col-lg-8\">
                <div class=\"col-lg-12\">
                    <label>Titre :</label>
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Référence :</label>
                    ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Description :</label><br>
                    ";
        // line 39
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Date début promo :</label>
                    ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price", array()), "html", null, true);
        echo " €
                </div>
                <div class=\"col-lg-12\">
                    <label>Date fin promo :</label>
                    ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "promotionPrice", array()), "html", null, true);
        echo " €
                </div>
                <div class=\"col-lg-12\">
                    <label>Lien vidéo :</label>
                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "urlLink", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Position :</label>
                    ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>En ligne :</label>
                    ";
        // line 59
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 60
        echo "                </div>
                <div class=\"col-lg-12\">
                    <label>Date de début</label>
                    ";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "promotionStartDate", array()), "d-m-Y"), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Date de fin</label>
                    ";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "promotionEndDate", array()), "d-m-Y"), "html", null, true);
        echo "
                </div>
            </div>
            
            ";
        // line 71
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 72
            echo "                <div class=\"col-lg-12\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">Fichiers</div>
                        <div class=\"panel-body\">
                            <div id=\"gallery\">
                                ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 78
                echo "                                    <div class=\"img-view\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "description", array()), "html", null, true);
                echo "\">
                                        <img alt=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                                             data-image=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\">
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 88
        echo "        </div>
        <div class=\"panel-footer\">
            <a href=\"javascript:parent.jQuery.fancybox.close();\">Fermer la fenêtre</a>
        </div>
    </div>

</div>
<!-- /#wrapper -->
";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "</body>
<footer>
    ";
        // line 101
        $this->displayBlock('footer', $context, $blocks);
        // line 104
        echo "</footer>
</html>
";
        
        $__internal_1209ba7072c3dce38ada7ea3a574bf96a37128b46c88c1988dfe0519a804eb52->leave($__internal_1209ba7072c3dce38ada7ea3a574bf96a37128b46c88c1988dfe0519a804eb52_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4b7414502fe58083a46c0181dbdd5c62644e3801a4d929bcab1f2e134011857 = $this->env->getExtension("native_profiler");
        $__internal_c4b7414502fe58083a46c0181dbdd5c62644e3801a4d929bcab1f2e134011857->enter($__internal_c4b7414502fe58083a46c0181dbdd5c62644e3801a4d929bcab1f2e134011857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_c4b7414502fe58083a46c0181dbdd5c62644e3801a4d929bcab1f2e134011857->leave($__internal_c4b7414502fe58083a46c0181dbdd5c62644e3801a4d929bcab1f2e134011857_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07b01ccefad29ea108c59d3f866b3c611149614e8b616d16c852862fc0212b32 = $this->env->getExtension("native_profiler");
        $__internal_07b01ccefad29ea108c59d3f866b3c611149614e8b616d16c852862fc0212b32->enter($__internal_07b01ccefad29ea108c59d3f866b3c611149614e8b616d16c852862fc0212b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebProductBundle:Product:show.html.twig", 97)->display($context);
        
        $__internal_07b01ccefad29ea108c59d3f866b3c611149614e8b616d16c852862fc0212b32->leave($__internal_07b01ccefad29ea108c59d3f866b3c611149614e8b616d16c852862fc0212b32_prof);

    }

    // line 101
    public function block_footer($context, array $blocks = array())
    {
        $__internal_adfba1242c5b7fb631d9c492af01fdbb8de2310a060fb42a6dd47a8b3573df72 = $this->env->getExtension("native_profiler");
        $__internal_adfba1242c5b7fb631d9c492af01fdbb8de2310a060fb42a6dd47a8b3573df72->enter($__internal_adfba1242c5b7fb631d9c492af01fdbb8de2310a060fb42a6dd47a8b3573df72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 102
        echo "
    ";
        
        $__internal_adfba1242c5b7fb631d9c492af01fdbb8de2310a060fb42a6dd47a8b3573df72->leave($__internal_adfba1242c5b7fb631d9c492af01fdbb8de2310a060fb42a6dd47a8b3573df72_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 102,  232 => 101,  224 => 97,  218 => 96,  206 => 5,  197 => 104,  195 => 101,  191 => 99,  189 => 96,  179 => 88,  172 => 83,  163 => 80,  157 => 79,  150 => 78,  146 => 77,  139 => 72,  137 => 71,  130 => 67,  123 => 63,  118 => 60,  112 => 59,  105 => 55,  98 => 51,  91 => 47,  84 => 43,  77 => 39,  70 => 35,  63 => 31,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}ESPACE D'ADMINISTRATION SERCO POINT-WEB{% endblock %}</title>*/
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
/*             Partenaire*/
/*         </div>*/
/*         <div class="panel-body">*/
/* */
/*             <div class="col-lg-8">*/
/*                 <div class="col-lg-12">*/
/*                     <label>Titre :</label>*/
/*                     {{ entity.title }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Référence :</label>*/
/*                     {{ entity.reference }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Description :</label><br>*/
/*                     {{ entity.description|raw }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Date début promo :</label>*/
/*                     {{ entity.price }} €*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Date fin promo :</label>*/
/*                     {{ entity.promotionPrice }} €*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Lien vidéo :</label>*/
/*                     {{ entity.urlLink }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Position :</label>*/
/*                     {{ entity.position }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>En ligne :</label>*/
/*                     {% if entity.online %}Oui{% else %}Non{% endif %}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Date de début</label>*/
/*                     {{ entity.promotionStartDate|date('d-m-Y') }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Date de fin</label>*/
/*                     {{ entity.promotionEndDate|date('d-m-Y') }}*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             {% if entity.pictures|length >0 %}*/
/*                 <div class="col-lg-12">*/
/*                     <div class="panel panel-primary">*/
/*                         <div class="panel-heading">Fichiers</div>*/
/*                         <div class="panel-body">*/
/*                             <div id="gallery">*/
/*                                 {% for picture in entity.pictures %}*/
/*                                     <div class="img-view" data-toggle="tooltip" data-placement="top" title="{{ picture.name }} : {{ picture.description }}">*/
/*                                         <img alt="{{ picture.name }}" src="{{ asset(picture.getWebPath(base)) }}"*/
/*                                              data-image="{{ asset(picture.getWebPath(base)) }}">*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
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
