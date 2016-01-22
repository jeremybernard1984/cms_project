<?php

/* @PointWebNews/News/show.html.twig */
class __TwigTemplate_f28e172ccd1a19c05a6efb09a1721d159780036d3f809a3fdc262c1cb88d350c extends Twig_Template
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
        $__internal_1581109d25e5d98c8b14a278bb4356a9c98812faa46e091e9acab1ef5042c701 = $this->env->getExtension("native_profiler");
        $__internal_1581109d25e5d98c8b14a278bb4356a9c98812faa46e091e9acab1ef5042c701->enter($__internal_1581109d25e5d98c8b14a278bb4356a9c98812faa46e091e9acab1ef5042c701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebNews/News/show.html.twig"));

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
                    <label>Titre :</label>
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Description :</label><br>
                    ";
        // line 35
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Position :</label>
                    ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>En ligne :</label>
                    ";
        // line 43
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 44
        echo "                </div>
                <div class=\"col-lg-12\">
                    <label>Date de début</label>
                    ";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate", array()), "d-m-Y"), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Date de fin</label>
                    ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate", array()), "d-m-Y"), "html", null, true);
        echo "
                </div>
            </div>
            ";
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 55
            echo "                <div class=\"col-lg-12\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">Fichiers</div>
                        <div class=\"panel-body\">
                            <div id=\"gallery\">
                                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 61
                echo "                                    <div class=\"img-view\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "description", array()), "html", null, true);
                echo "\">
                                        <img alt=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                                             data-image=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\">
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 71
        echo "        </div>
        <div class=\"panel-footer\">
            <a href=\"javascript:parent.jQuery.fancybox.close();\">Fermer la fenêtre</a>
        </div>
    </div>

</div>
<!-- /#wrapper -->
";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "</body>
<footer>
    ";
        // line 84
        $this->displayBlock('footer', $context, $blocks);
        // line 87
        echo "</footer>
</html>



";
        
        $__internal_1581109d25e5d98c8b14a278bb4356a9c98812faa46e091e9acab1ef5042c701->leave($__internal_1581109d25e5d98c8b14a278bb4356a9c98812faa46e091e9acab1ef5042c701_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ee6ae2c6b9befddf24918452242e95aa52fe74f65cef2182353b443c1b37430 = $this->env->getExtension("native_profiler");
        $__internal_0ee6ae2c6b9befddf24918452242e95aa52fe74f65cef2182353b443c1b37430->enter($__internal_0ee6ae2c6b9befddf24918452242e95aa52fe74f65cef2182353b443c1b37430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_0ee6ae2c6b9befddf24918452242e95aa52fe74f65cef2182353b443c1b37430->leave($__internal_0ee6ae2c6b9befddf24918452242e95aa52fe74f65cef2182353b443c1b37430_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2bb35612d8603b5c9ed4cd6d78453a9ad33737e993834e0a5d428b60c4ff4de0 = $this->env->getExtension("native_profiler");
        $__internal_2bb35612d8603b5c9ed4cd6d78453a9ad33737e993834e0a5d428b60c4ff4de0->enter($__internal_2bb35612d8603b5c9ed4cd6d78453a9ad33737e993834e0a5d428b60c4ff4de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "@PointWebNews/News/show.html.twig", 80)->display($context);
        
        $__internal_2bb35612d8603b5c9ed4cd6d78453a9ad33737e993834e0a5d428b60c4ff4de0->leave($__internal_2bb35612d8603b5c9ed4cd6d78453a9ad33737e993834e0a5d428b60c4ff4de0_prof);

    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9b3a5b40187a1f94bb7f11f1f6c8eea98775a78844d028afddc632230791dfe9 = $this->env->getExtension("native_profiler");
        $__internal_9b3a5b40187a1f94bb7f11f1f6c8eea98775a78844d028afddc632230791dfe9->enter($__internal_9b3a5b40187a1f94bb7f11f1f6c8eea98775a78844d028afddc632230791dfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 85
        echo "
    ";
        
        $__internal_9b3a5b40187a1f94bb7f11f1f6c8eea98775a78844d028afddc632230791dfe9->leave($__internal_9b3a5b40187a1f94bb7f11f1f6c8eea98775a78844d028afddc632230791dfe9_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebNews/News/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 85,  206 => 84,  198 => 80,  192 => 79,  180 => 5,  168 => 87,  166 => 84,  162 => 82,  160 => 79,  150 => 71,  143 => 66,  134 => 63,  128 => 62,  121 => 61,  117 => 60,  110 => 55,  108 => 54,  102 => 51,  95 => 47,  90 => 44,  84 => 43,  77 => 39,  70 => 35,  63 => 31,  35 => 6,  31 => 5,  25 => 1,);
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
/*                     <label>Titre :</label>*/
/*                     {{ entity.title }}*/
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
/*                 <div class="col-lg-12">*/
/*                     <label>Date de début</label>*/
/*                     {{ entity.startDate|date('d-m-Y') }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Date de fin</label>*/
/*                     {{ entity.endDate|date('d-m-Y') }}*/
/*                 </div>*/
/*             </div>*/
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
/* */
/* */
/* */
