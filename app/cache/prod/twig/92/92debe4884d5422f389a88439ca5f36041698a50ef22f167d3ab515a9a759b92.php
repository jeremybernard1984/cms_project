<?php

/* PointWebGalleryBundle:Gallery:show.html.twig */
class __TwigTemplate_2d7bd16c18c2141351d23e86d4cdda159efe4ee65717d8011c14a2cf7a1435be extends Twig_Template
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
        $__internal_530b7e2527c16ca7ef0e062752a3eeaab47c55629b3a6c3a8aeb74ace1efc6f9 = $this->env->getExtension("native_profiler");
        $__internal_530b7e2527c16ca7ef0e062752a3eeaab47c55629b3a6c3a8aeb74ace1efc6f9->enter($__internal_530b7e2527c16ca7ef0e062752a3eeaab47c55629b3a6c3a8aeb74ace1efc6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGalleryBundle:Gallery:show.html.twig"));

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
        $this->loadTemplate("PointWebAdminBundle::_header.html.twig", "PointWebGalleryBundle:Gallery:show.html.twig", 6)->display($context);
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
            Gallerie
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
        
        $__internal_530b7e2527c16ca7ef0e062752a3eeaab47c55629b3a6c3a8aeb74ace1efc6f9->leave($__internal_530b7e2527c16ca7ef0e062752a3eeaab47c55629b3a6c3a8aeb74ace1efc6f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4a54bda2d8430d182bb9f631795db90b663b87f2622a083d37f8e18ea12c4a7 = $this->env->getExtension("native_profiler");
        $__internal_d4a54bda2d8430d182bb9f631795db90b663b87f2622a083d37f8e18ea12c4a7->enter($__internal_d4a54bda2d8430d182bb9f631795db90b663b87f2622a083d37f8e18ea12c4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_d4a54bda2d8430d182bb9f631795db90b663b87f2622a083d37f8e18ea12c4a7->leave($__internal_d4a54bda2d8430d182bb9f631795db90b663b87f2622a083d37f8e18ea12c4a7_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_777bd0c73fd224fc963a046fdc6f660f45279dcea03e80e76aa429bf6ad34fcd = $this->env->getExtension("native_profiler");
        $__internal_777bd0c73fd224fc963a046fdc6f660f45279dcea03e80e76aa429bf6ad34fcd->enter($__internal_777bd0c73fd224fc963a046fdc6f660f45279dcea03e80e76aa429bf6ad34fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebGalleryBundle:Gallery:show.html.twig", 73)->display($context);
        
        $__internal_777bd0c73fd224fc963a046fdc6f660f45279dcea03e80e76aa429bf6ad34fcd->leave($__internal_777bd0c73fd224fc963a046fdc6f660f45279dcea03e80e76aa429bf6ad34fcd_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5c7ef3f0e1f09ccd1c7a7bcaf0e28ac5c1de216346e2fd07720bade79cafb29f = $this->env->getExtension("native_profiler");
        $__internal_5c7ef3f0e1f09ccd1c7a7bcaf0e28ac5c1de216346e2fd07720bade79cafb29f->enter($__internal_5c7ef3f0e1f09ccd1c7a7bcaf0e28ac5c1de216346e2fd07720bade79cafb29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 78
        echo "
    ";
        
        $__internal_5c7ef3f0e1f09ccd1c7a7bcaf0e28ac5c1de216346e2fd07720bade79cafb29f->leave($__internal_5c7ef3f0e1f09ccd1c7a7bcaf0e28ac5c1de216346e2fd07720bade79cafb29f_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGalleryBundle:Gallery:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 78,  193 => 77,  185 => 73,  179 => 72,  167 => 5,  155 => 80,  153 => 77,  149 => 75,  147 => 72,  137 => 64,  130 => 59,  121 => 56,  115 => 55,  108 => 54,  104 => 53,  97 => 48,  95 => 47,  90 => 44,  84 => 43,  77 => 39,  70 => 35,  63 => 31,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
/*             Gallerie*/
/*         </div>*/
/*         <div class="panel-body">*/
/* */
/*             <div class="col-lg-8">*/
/*                 <div class="col-lg-12">*/
/*                     <label>Nom :</label>*/
/*                     {{ entity.name }}*/
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
