<?php

/* @PointWebGallery/Gallery/show.html.twig */
class __TwigTemplate_d82a017fe1baf043aa47935c260b140dc889b8ec60defcccfdb637b791156379 extends Twig_Template
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
        $__internal_dd0da22ad140a877dcc2588cd375be8b16666ad079a34d8b98002e83e5708a3f = $this->env->getExtension("native_profiler");
        $__internal_dd0da22ad140a877dcc2588cd375be8b16666ad079a34d8b98002e83e5708a3f->enter($__internal_dd0da22ad140a877dcc2588cd375be8b16666ad079a34d8b98002e83e5708a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebGallery/Gallery/show.html.twig"));

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
            Gallerie
        </div>
        <div class=\"panel-body\">

            <div class=\"col-lg-8\">
                <div class=\"col-lg-12\">
                    <label>Nom :</label>
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
            </div>

            ";
        // line 47
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 48
            echo "                <div class=\"col-lg-12\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">Fichiers</div>
                        <div class=\"panel-body\">
                            <div id=\"gallery\">
                                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 54
                echo "                                    <div class=\"img-view\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "description", array()), "html", null, true);
                echo "\">
                                        <img alt=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                                             data-image=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\">
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 64
        echo "        </div>
        <div class=\"panel-footer\">
            <a href=\"javascript:parent.jQuery.fancybox.close();\">Fermer la fenêtre</a>
        </div>
    </div>

</div>
<!-- /#wrapper -->
";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "</body>
<footer>
    ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "</footer>
</html>



";
        
        $__internal_dd0da22ad140a877dcc2588cd375be8b16666ad079a34d8b98002e83e5708a3f->leave($__internal_dd0da22ad140a877dcc2588cd375be8b16666ad079a34d8b98002e83e5708a3f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0babd813380206c4de6820858dc0e4198e5655800955bdab68dd291f5377c156 = $this->env->getExtension("native_profiler");
        $__internal_0babd813380206c4de6820858dc0e4198e5655800955bdab68dd291f5377c156->enter($__internal_0babd813380206c4de6820858dc0e4198e5655800955bdab68dd291f5377c156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_0babd813380206c4de6820858dc0e4198e5655800955bdab68dd291f5377c156->leave($__internal_0babd813380206c4de6820858dc0e4198e5655800955bdab68dd291f5377c156_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80fac0d79cbf3582a0819324fb52f7c760f8e0d5c8aeb5d0ffe2bf2b49f8c9a7 = $this->env->getExtension("native_profiler");
        $__internal_80fac0d79cbf3582a0819324fb52f7c760f8e0d5c8aeb5d0ffe2bf2b49f8c9a7->enter($__internal_80fac0d79cbf3582a0819324fb52f7c760f8e0d5c8aeb5d0ffe2bf2b49f8c9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "@PointWebGallery/Gallery/show.html.twig", 73)->display($context);
        
        $__internal_80fac0d79cbf3582a0819324fb52f7c760f8e0d5c8aeb5d0ffe2bf2b49f8c9a7->leave($__internal_80fac0d79cbf3582a0819324fb52f7c760f8e0d5c8aeb5d0ffe2bf2b49f8c9a7_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $__internal_448244fe78b4da76df827624583ec78a0a956b0e7756b5398fb0a0d392c40f79 = $this->env->getExtension("native_profiler");
        $__internal_448244fe78b4da76df827624583ec78a0a956b0e7756b5398fb0a0d392c40f79->enter($__internal_448244fe78b4da76df827624583ec78a0a956b0e7756b5398fb0a0d392c40f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 78
        echo "
    ";
        
        $__internal_448244fe78b4da76df827624583ec78a0a956b0e7756b5398fb0a0d392c40f79->leave($__internal_448244fe78b4da76df827624583ec78a0a956b0e7756b5398fb0a0d392c40f79_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebGallery/Gallery/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 78,  193 => 77,  185 => 73,  179 => 72,  167 => 5,  155 => 80,  153 => 77,  149 => 75,  147 => 72,  137 => 64,  130 => 59,  121 => 56,  115 => 55,  108 => 54,  104 => 53,  97 => 48,  95 => 47,  90 => 44,  84 => 43,  77 => 39,  70 => 35,  63 => 31,  35 => 6,  31 => 5,  25 => 1,);
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
/*             Gallerie*/
/*         </div>*/
/*         <div class="panel-body">*/
/* */
/*             <div class="col-lg-8">*/
/*                 <div class="col-lg-12">*/
/*                     <label>Nom :</label>*/
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
/*             </div>*/
/* */
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
