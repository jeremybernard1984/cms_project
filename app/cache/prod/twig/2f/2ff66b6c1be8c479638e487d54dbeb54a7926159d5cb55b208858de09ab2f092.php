<?php

/* PointWebPartnerBundle:Partner:show.html.twig */
class __TwigTemplate_234a0cc1fdb9c9cb2f0823af1db53df008546260acf7e3caca863e83500952d2 extends Twig_Template
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
        $__internal_0d5d471e6c07bc42942d2c9401c5d5e64f9547da15457aa8fdff4198c27d2876 = $this->env->getExtension("native_profiler");
        $__internal_0d5d471e6c07bc42942d2c9401c5d5e64f9547da15457aa8fdff4198c27d2876->enter($__internal_0d5d471e6c07bc42942d2c9401c5d5e64f9547da15457aa8fdff4198c27d2876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:Partner:show.html.twig"));

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
        $this->loadTemplate("PointWebAdminBundle::_header.html.twig", "PointWebPartnerBundle:Partner:show.html.twig", 6)->display($context);
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
            Partenaire
        </div>
        <div class=\"panel-body\">

            <div class=\"col-lg-8\">
                <div class=\"col-lg-12\">
                    <label>Nom :</label>
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                <label>Description :</label><br>
                ";
        // line 35
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array());
        echo "
                </div>
                <div class=\"col-lg-12\">
                <label>Lien URL :</label>
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "link", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                <label>Position :</label>
                ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                <label>En ligne :</label>
                ";
        // line 47
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 48
        echo "                </div>
                <div class=\"col-lg-12\">
                <label>Date de début</label>
                ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate", array()), "d-m-Y"), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                <label>Date de fin</label>
                ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate", array()), "d-m-Y"), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"col-lg-4\" style=\"text-align: right\">
                ";
        // line 59
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array())) {
            // line 60
            echo "                    <!---->
                    <img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "AssetPath", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "name", array()), "html", null, true);
            echo "\" style=\"width:100%\">
                ";
        } else {
            // line 63
            echo "                    ...
                ";
        }
        // line 65
        echo "            </div>
            ";
        // line 66
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 67
            echo "            <div class=\"col-lg-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Fichiers</div>
                    <div class=\"panel-body\">
                        <div id=\"gallery\">
                            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 73
                echo "                                <div class=\"img-view\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "description", array()), "html", null, true);
                echo "\">
                                <img alt=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                                     data-image=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\">
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 83
        echo "        </div>
        <div class=\"panel-footer\">
            <a href=\"javascript:parent.jQuery.fancybox.close();\">Fermer la fenêtre</a>
        </div>
    </div>

</div>
<!-- /#wrapper -->
";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "</body>
<footer>
    ";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 99
        echo "</footer>
</html>



";
        
        $__internal_0d5d471e6c07bc42942d2c9401c5d5e64f9547da15457aa8fdff4198c27d2876->leave($__internal_0d5d471e6c07bc42942d2c9401c5d5e64f9547da15457aa8fdff4198c27d2876_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d4dcc35700ef691801cb2f0711f6602879b3af382278cc82f63156dbe40bfd9 = $this->env->getExtension("native_profiler");
        $__internal_9d4dcc35700ef691801cb2f0711f6602879b3af382278cc82f63156dbe40bfd9->enter($__internal_9d4dcc35700ef691801cb2f0711f6602879b3af382278cc82f63156dbe40bfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_9d4dcc35700ef691801cb2f0711f6602879b3af382278cc82f63156dbe40bfd9->leave($__internal_9d4dcc35700ef691801cb2f0711f6602879b3af382278cc82f63156dbe40bfd9_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8fb083de6d071571da1f11f69066432b1d4ac3078c3d79bebea2609c90740065 = $this->env->getExtension("native_profiler");
        $__internal_8fb083de6d071571da1f11f69066432b1d4ac3078c3d79bebea2609c90740065->enter($__internal_8fb083de6d071571da1f11f69066432b1d4ac3078c3d79bebea2609c90740065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebPartnerBundle:Partner:show.html.twig", 92)->display($context);
        
        $__internal_8fb083de6d071571da1f11f69066432b1d4ac3078c3d79bebea2609c90740065->leave($__internal_8fb083de6d071571da1f11f69066432b1d4ac3078c3d79bebea2609c90740065_prof);

    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4a839825263c93f472d1a10012b90cf37fcad85e846b5e3b15e20adf080e19d4 = $this->env->getExtension("native_profiler");
        $__internal_4a839825263c93f472d1a10012b90cf37fcad85e846b5e3b15e20adf080e19d4->enter($__internal_4a839825263c93f472d1a10012b90cf37fcad85e846b5e3b15e20adf080e19d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 97
        echo "
    ";
        
        $__internal_4a839825263c93f472d1a10012b90cf37fcad85e846b5e3b15e20adf080e19d4->leave($__internal_4a839825263c93f472d1a10012b90cf37fcad85e846b5e3b15e20adf080e19d4_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:Partner:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 97,  233 => 96,  225 => 92,  219 => 91,  207 => 5,  195 => 99,  193 => 96,  189 => 94,  187 => 91,  177 => 83,  170 => 78,  161 => 75,  155 => 74,  148 => 73,  144 => 72,  137 => 67,  135 => 66,  132 => 65,  128 => 63,  121 => 61,  118 => 60,  116 => 59,  109 => 55,  102 => 51,  97 => 48,  91 => 47,  84 => 43,  77 => 39,  70 => 35,  63 => 31,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
/*             Partenaire*/
/*         </div>*/
/*         <div class="panel-body">*/
/* */
/*             <div class="col-lg-8">*/
/*                 <div class="col-lg-12">*/
/*                     <label>Nom :</label>*/
/*                     {{ entity.name }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                 <label>Description :</label><br>*/
/*                 {{ entity.content|raw }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                 <label>Lien URL :</label>*/
/*                 {{ entity.link }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                 <label>Position :</label>*/
/*                 {{ entity.position }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                 <label>En ligne :</label>*/
/*                 {% if entity.online %}Oui{% else %}Non{% endif %}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                 <label>Date de début</label>*/
/*                 {{ entity.startDate|date('d-m-Y') }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                 <label>Date de fin</label>*/
/*                 {{ entity.endDate|date('d-m-Y') }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-4" style="text-align: right">*/
/*                 {% if entity.image %}*/
/*                     <!---->*/
/*                     <img src="{{ entity.image.AssetPath }}" alt="{{ entity.image.name }}" style="width:100%">*/
/*                 {% else %}*/
/*                     ...*/
/*                 {% endif %}*/
/*             </div>*/
/*             {% if entity.pictures|length >0 %}*/
/*             <div class="col-lg-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">Fichiers</div>*/
/*                     <div class="panel-body">*/
/*                         <div id="gallery">*/
/*                             {% for picture in entity.pictures %}*/
/*                                 <div class="img-view" data-toggle="tooltip" data-placement="top" title="{{ picture.name }} : {{ picture.description }}">*/
/*                                 <img alt="{{ picture.name }}" src="{{ asset(picture.getWebPath(base)) }}"*/
/*                                      data-image="{{ asset(picture.getWebPath(base)) }}">*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
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
/* */
/* */
/* */
