<?php

/* PointWebProductBundle:Category:show.html.twig */
class __TwigTemplate_d3067ee5cd60d99596710a9b8afc3e2ccebf5765550d6e273693004f2f1b21af extends Twig_Template
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
        $__internal_9e63f68c847ca94becce0b755582f8302529bb8a51d5bf28ea2f4825d7b05adb = $this->env->getExtension("native_profiler");
        $__internal_9e63f68c847ca94becce0b755582f8302529bb8a51d5bf28ea2f4825d7b05adb->enter($__internal_9e63f68c847ca94becce0b755582f8302529bb8a51d5bf28ea2f4825d7b05adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Category:show.html.twig"));

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
        $this->loadTemplate("PointWebAdminBundle::_header.html.twig", "PointWebProductBundle:Category:show.html.twig", 6)->display($context);
        // line 7
        echo "    <style>

    </style>
</head>
<body style=\"background: #fff;\">
<div id=\"wrapper\">

    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            Catégorie
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
                    <label>Description :</label>
                    ";
        // line 27
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
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
                ";
        // line 33
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 34
            echo "                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\">Fichiers</div>
                            <div class=\"panel-body\">
                                <div id=\"gallery\">
                                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 40
                echo "                                        <div class=\"img-view\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "description", array()), "html", null, true);
                echo "\">
                                            <img alt=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                                                 data-image=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\">
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 50
        echo "            </div>
        </div>
        <div class=\"panel-footer\">
            <a href=\"javascript:parent.jQuery.fancybox.close();\">Fermer la fenêtre</a>
        </div>
    </div>

</div>
<!-- /#wrapper -->
";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "</body>
<footer>
    ";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 67
        echo "</footer>
</html>";
        
        $__internal_9e63f68c847ca94becce0b755582f8302529bb8a51d5bf28ea2f4825d7b05adb->leave($__internal_9e63f68c847ca94becce0b755582f8302529bb8a51d5bf28ea2f4825d7b05adb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_395101787480388c22de1d2546cb8aeea97b17d0acad9997e72cd9349834ba1b = $this->env->getExtension("native_profiler");
        $__internal_395101787480388c22de1d2546cb8aeea97b17d0acad9997e72cd9349834ba1b->enter($__internal_395101787480388c22de1d2546cb8aeea97b17d0acad9997e72cd9349834ba1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_395101787480388c22de1d2546cb8aeea97b17d0acad9997e72cd9349834ba1b->leave($__internal_395101787480388c22de1d2546cb8aeea97b17d0acad9997e72cd9349834ba1b_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e933dff0d70b151a7dbea8c6b5b493a94c01cc7fb4cdee9fcef71cc604e0a90d = $this->env->getExtension("native_profiler");
        $__internal_e933dff0d70b151a7dbea8c6b5b493a94c01cc7fb4cdee9fcef71cc604e0a90d->enter($__internal_e933dff0d70b151a7dbea8c6b5b493a94c01cc7fb4cdee9fcef71cc604e0a90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebProductBundle:Category:show.html.twig", 60)->display($context);
        
        $__internal_e933dff0d70b151a7dbea8c6b5b493a94c01cc7fb4cdee9fcef71cc604e0a90d->leave($__internal_e933dff0d70b151a7dbea8c6b5b493a94c01cc7fb4cdee9fcef71cc604e0a90d_prof);

    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3ad6fe5d50e6bb94695185fcd7c7ed5e4fec8cd9c7f5b5442792bd8e5bc5b1ec = $this->env->getExtension("native_profiler");
        $__internal_3ad6fe5d50e6bb94695185fcd7c7ed5e4fec8cd9c7f5b5442792bd8e5bc5b1ec->enter($__internal_3ad6fe5d50e6bb94695185fcd7c7ed5e4fec8cd9c7f5b5442792bd8e5bc5b1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 65
        echo "
    ";
        
        $__internal_3ad6fe5d50e6bb94695185fcd7c7ed5e4fec8cd9c7f5b5442792bd8e5bc5b1ec->leave($__internal_3ad6fe5d50e6bb94695185fcd7c7ed5e4fec8cd9c7f5b5442792bd8e5bc5b1ec_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 65,  173 => 64,  165 => 60,  159 => 59,  147 => 5,  139 => 67,  137 => 64,  133 => 62,  131 => 59,  120 => 50,  113 => 45,  104 => 42,  98 => 41,  91 => 40,  87 => 39,  80 => 34,  78 => 33,  75 => 32,  69 => 31,  62 => 27,  55 => 23,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}ESPACE D'ADMINISTRATION SERCO POINT-WEB{% endblock %}</title>*/
/*     {% include 'PointWebAdminBundle::_header.html.twig' %}*/
/*     <style>*/
/* */
/*     </style>*/
/* </head>*/
/* <body style="background: #fff;">*/
/* <div id="wrapper">*/
/* */
/*     <div class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*             Catégorie*/
/*         </div>*/
/*         <div class="panel-body">*/
/* */
/*             <div class="col-lg-8">*/
/*                 <div class="col-lg-12">*/
/*                     <label>Titre :</label>*/
/*                     {{ entity.title }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Description :</label>*/
/*                     {{ entity.description|raw }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>En ligne :</label>*/
/*                     {% if entity.online %}Oui{% else %}Non{% endif %}*/
/*                 </div>*/
/*                 {% if entity.pictures|length >0 %}*/
/*                     <div class="col-lg-12">*/
/*                         <div class="panel panel-primary">*/
/*                             <div class="panel-heading">Fichiers</div>*/
/*                             <div class="panel-body">*/
/*                                 <div id="gallery">*/
/*                                     {% for picture in entity.pictures %}*/
/*                                         <div class="img-view" data-toggle="tooltip" data-placement="top" title="{{ picture.name }} : {{ picture.description }}">*/
/*                                             <img alt="{{ picture.name }}" src="{{ asset(picture.getWebPath(base)) }}"*/
/*                                                  data-image="{{ asset(picture.getWebPath(base)) }}">*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endif %}*/
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
