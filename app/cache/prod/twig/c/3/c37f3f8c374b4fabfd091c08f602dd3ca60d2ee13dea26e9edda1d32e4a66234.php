<?php

/* PointWebGalleryBundle:Gallery:show.html.twig */
class __TwigTemplate_c37f3f8c374b4fabfd091c08f602dd3ca60d2ee13dea26e9edda1d32e4a66234 extends Twig_Template
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
        $__internal_35d963a96bd6549a7376e39b6e4d42a6693833d4f04c3760c258eb028829fd69 = $this->env->getExtension("native_profiler");
        $__internal_35d963a96bd6549a7376e39b6e4d42a6693833d4f04c3760c258eb028829fd69->enter($__internal_35d963a96bd6549a7376e39b6e4d42a6693833d4f04c3760c258eb028829fd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGalleryBundle:Gallery:show.html.twig"));

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
            $context['_parent'] = (array) $context;
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
        
        $__internal_35d963a96bd6549a7376e39b6e4d42a6693833d4f04c3760c258eb028829fd69->leave($__internal_35d963a96bd6549a7376e39b6e4d42a6693833d4f04c3760c258eb028829fd69_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f43c67f8bfd61f7336a2b79100e0abc79ce1fdf9502eee194d0a57106f85f82 = $this->env->getExtension("native_profiler");
        $__internal_1f43c67f8bfd61f7336a2b79100e0abc79ce1fdf9502eee194d0a57106f85f82->enter($__internal_1f43c67f8bfd61f7336a2b79100e0abc79ce1fdf9502eee194d0a57106f85f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_1f43c67f8bfd61f7336a2b79100e0abc79ce1fdf9502eee194d0a57106f85f82->leave($__internal_1f43c67f8bfd61f7336a2b79100e0abc79ce1fdf9502eee194d0a57106f85f82_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad2598d125db1a7a2299d0a900c5956ccd5a842dccca285af6ef171bfd7c366b = $this->env->getExtension("native_profiler");
        $__internal_ad2598d125db1a7a2299d0a900c5956ccd5a842dccca285af6ef171bfd7c366b->enter($__internal_ad2598d125db1a7a2299d0a900c5956ccd5a842dccca285af6ef171bfd7c366b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebGalleryBundle:Gallery:show.html.twig", 73)->display($context);
        
        $__internal_ad2598d125db1a7a2299d0a900c5956ccd5a842dccca285af6ef171bfd7c366b->leave($__internal_ad2598d125db1a7a2299d0a900c5956ccd5a842dccca285af6ef171bfd7c366b_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9ccabbad3f6bf45f6ef0857028aebff1809b8652b53ca3c96b92d69acc4f0bb7 = $this->env->getExtension("native_profiler");
        $__internal_9ccabbad3f6bf45f6ef0857028aebff1809b8652b53ca3c96b92d69acc4f0bb7->enter($__internal_9ccabbad3f6bf45f6ef0857028aebff1809b8652b53ca3c96b92d69acc4f0bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 78
        echo "
    ";
        
        $__internal_9ccabbad3f6bf45f6ef0857028aebff1809b8652b53ca3c96b92d69acc4f0bb7->leave($__internal_9ccabbad3f6bf45f6ef0857028aebff1809b8652b53ca3c96b92d69acc4f0bb7_prof);

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
