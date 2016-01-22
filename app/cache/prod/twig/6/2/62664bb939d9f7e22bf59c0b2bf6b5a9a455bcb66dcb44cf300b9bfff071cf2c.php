<?php

/* PointWebNewsBundle:News:show.html.twig */
class __TwigTemplate_62664bb939d9f7e22bf59c0b2bf6b5a9a455bcb66dcb44cf300b9bfff071cf2c extends Twig_Template
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
        $__internal_806ca04c3b64a6703845bcd74f5408d58fdbe0836ba7cad60adbc65bc0f0d0f0 = $this->env->getExtension("native_profiler");
        $__internal_806ca04c3b64a6703845bcd74f5408d58fdbe0836ba7cad60adbc65bc0f0d0f0->enter($__internal_806ca04c3b64a6703845bcd74f5408d58fdbe0836ba7cad60adbc65bc0f0d0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebNewsBundle:News:show.html.twig"));

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
        $this->loadTemplate("PointWebAdminBundle::_header.html.twig", "PointWebNewsBundle:News:show.html.twig", 6)->display($context);
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
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array());
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
            $context['_parent'] = (array) $context;
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
        
        $__internal_806ca04c3b64a6703845bcd74f5408d58fdbe0836ba7cad60adbc65bc0f0d0f0->leave($__internal_806ca04c3b64a6703845bcd74f5408d58fdbe0836ba7cad60adbc65bc0f0d0f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_429bec7cf9af20130db6ea19711581a5c0d4910639a2587e475f00e81857d7d6 = $this->env->getExtension("native_profiler");
        $__internal_429bec7cf9af20130db6ea19711581a5c0d4910639a2587e475f00e81857d7d6->enter($__internal_429bec7cf9af20130db6ea19711581a5c0d4910639a2587e475f00e81857d7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_429bec7cf9af20130db6ea19711581a5c0d4910639a2587e475f00e81857d7d6->leave($__internal_429bec7cf9af20130db6ea19711581a5c0d4910639a2587e475f00e81857d7d6_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_03b5b3f9873322ce1bc9fda311cd2de5cf3cfeb2ec6fb1fa288b69d0ff32ab1c = $this->env->getExtension("native_profiler");
        $__internal_03b5b3f9873322ce1bc9fda311cd2de5cf3cfeb2ec6fb1fa288b69d0ff32ab1c->enter($__internal_03b5b3f9873322ce1bc9fda311cd2de5cf3cfeb2ec6fb1fa288b69d0ff32ab1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebNewsBundle:News:show.html.twig", 80)->display($context);
        
        $__internal_03b5b3f9873322ce1bc9fda311cd2de5cf3cfeb2ec6fb1fa288b69d0ff32ab1c->leave($__internal_03b5b3f9873322ce1bc9fda311cd2de5cf3cfeb2ec6fb1fa288b69d0ff32ab1c_prof);

    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e7c5969e46913c191dfd00e554bb62efbd188d87ae787079b4bfb48bb5db3e69 = $this->env->getExtension("native_profiler");
        $__internal_e7c5969e46913c191dfd00e554bb62efbd188d87ae787079b4bfb48bb5db3e69->enter($__internal_e7c5969e46913c191dfd00e554bb62efbd188d87ae787079b4bfb48bb5db3e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 85
        echo "
    ";
        
        $__internal_e7c5969e46913c191dfd00e554bb62efbd188d87ae787079b4bfb48bb5db3e69->leave($__internal_e7c5969e46913c191dfd00e554bb62efbd188d87ae787079b4bfb48bb5db3e69_prof);

    }

    public function getTemplateName()
    {
        return "PointWebNewsBundle:News:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 85,  206 => 84,  198 => 80,  192 => 79,  180 => 5,  168 => 87,  166 => 84,  162 => 82,  160 => 79,  150 => 71,  143 => 66,  134 => 63,  128 => 62,  121 => 61,  117 => 60,  110 => 55,  108 => 54,  102 => 51,  95 => 47,  90 => 44,  84 => 43,  77 => 39,  70 => 35,  63 => 31,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
