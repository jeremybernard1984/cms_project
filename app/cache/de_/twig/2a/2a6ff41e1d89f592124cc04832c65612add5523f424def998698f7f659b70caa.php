<?php

/* PointWebProductBundle:ProductCategory:show.html.twig */
class __TwigTemplate_f85aa6b623b4e3ffe3bc5b9abfa102c3223f184afbcbe740d06c655b0e318407 extends Twig_Template
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
        $__internal_9d1e5c04b49faaa35b0b4581a2c8acbea1ea325a0f9cf6996f1ee1905d12c4b4 = $this->env->getExtension("native_profiler");
        $__internal_9d1e5c04b49faaa35b0b4581a2c8acbea1ea325a0f9cf6996f1ee1905d12c4b4->enter($__internal_9d1e5c04b49faaa35b0b4581a2c8acbea1ea325a0f9cf6996f1ee1905d12c4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:ProductCategory:show.html.twig"));

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
        
        $__internal_9d1e5c04b49faaa35b0b4581a2c8acbea1ea325a0f9cf6996f1ee1905d12c4b4->leave($__internal_9d1e5c04b49faaa35b0b4581a2c8acbea1ea325a0f9cf6996f1ee1905d12c4b4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_19627104adb4694dd69d92d4e2d3ebfd80ead95d693202ae63f5a234ad5cbb67 = $this->env->getExtension("native_profiler");
        $__internal_19627104adb4694dd69d92d4e2d3ebfd80ead95d693202ae63f5a234ad5cbb67->enter($__internal_19627104adb4694dd69d92d4e2d3ebfd80ead95d693202ae63f5a234ad5cbb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_19627104adb4694dd69d92d4e2d3ebfd80ead95d693202ae63f5a234ad5cbb67->leave($__internal_19627104adb4694dd69d92d4e2d3ebfd80ead95d693202ae63f5a234ad5cbb67_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_946bfcba780d755460d0f2be1def3ddf3b220ab4c36f50fb2c12ee479911026f = $this->env->getExtension("native_profiler");
        $__internal_946bfcba780d755460d0f2be1def3ddf3b220ab4c36f50fb2c12ee479911026f->enter($__internal_946bfcba780d755460d0f2be1def3ddf3b220ab4c36f50fb2c12ee479911026f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebProductBundle:ProductCategory:show.html.twig", 60)->display($context);
        
        $__internal_946bfcba780d755460d0f2be1def3ddf3b220ab4c36f50fb2c12ee479911026f->leave($__internal_946bfcba780d755460d0f2be1def3ddf3b220ab4c36f50fb2c12ee479911026f_prof);

    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4cb512ceb1966e705b7719609d98d3cd776206b3e06a08221c5cff0a3bd078f2 = $this->env->getExtension("native_profiler");
        $__internal_4cb512ceb1966e705b7719609d98d3cd776206b3e06a08221c5cff0a3bd078f2->enter($__internal_4cb512ceb1966e705b7719609d98d3cd776206b3e06a08221c5cff0a3bd078f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 65
        echo "
    ";
        
        $__internal_4cb512ceb1966e705b7719609d98d3cd776206b3e06a08221c5cff0a3bd078f2->leave($__internal_4cb512ceb1966e705b7719609d98d3cd776206b3e06a08221c5cff0a3bd078f2_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:ProductCategory:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 65,  173 => 64,  165 => 60,  159 => 59,  147 => 5,  139 => 67,  137 => 64,  133 => 62,  131 => 59,  120 => 50,  113 => 45,  104 => 42,  98 => 41,  91 => 40,  87 => 39,  80 => 34,  78 => 33,  75 => 32,  69 => 31,  62 => 27,  55 => 23,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}ESPACE D'ADMINISTRATION{% endblock %}</title>*/
/*     {{ render(controller("PointWebAdminBundle:Default:headerAdmin")) }}*/
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
