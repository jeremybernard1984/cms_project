<?php

/* PointWebFaqBundle:faq:show.html.twig */
class __TwigTemplate_30fbeb63c50a8904ac3f0644f38f530af18ffc851ed84e1fe3b8952b305124bd extends Twig_Template
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
        $__internal_36795c989dfedd8d47d281fd6dcc6a0d18a0e54eeea80dbe6ba86ce16d1a6ac2 = $this->env->getExtension("native_profiler");
        $__internal_36795c989dfedd8d47d281fd6dcc6a0d18a0e54eeea80dbe6ba86ce16d1a6ac2->enter($__internal_36795c989dfedd8d47d281fd6dcc6a0d18a0e54eeea80dbe6ba86ce16d1a6ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebFaqBundle:faq:show.html.twig"));

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
            FAQ
        </div>
        <div class=\"panel-body\">
            <div class=\"col-lg-12\">
                <div class=\"col-lg-12\">
                    <label>Question :</label>
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Réponse :</label><br>
                    ";
        // line 34
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answer", array());
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Position :</label>
                    ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>En ligne :</label>
                    ";
        // line 42
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 43
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
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "</body>
<footer>
    ";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "</footer>
</html>

";
        
        $__internal_36795c989dfedd8d47d281fd6dcc6a0d18a0e54eeea80dbe6ba86ce16d1a6ac2->leave($__internal_36795c989dfedd8d47d281fd6dcc6a0d18a0e54eeea80dbe6ba86ce16d1a6ac2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a70b81de0a637553a056abc04c5e55d600eddd00fe6695250a82b5f9213b5e19 = $this->env->getExtension("native_profiler");
        $__internal_a70b81de0a637553a056abc04c5e55d600eddd00fe6695250a82b5f9213b5e19->enter($__internal_a70b81de0a637553a056abc04c5e55d600eddd00fe6695250a82b5f9213b5e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_a70b81de0a637553a056abc04c5e55d600eddd00fe6695250a82b5f9213b5e19->leave($__internal_a70b81de0a637553a056abc04c5e55d600eddd00fe6695250a82b5f9213b5e19_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ebce74e2c1342f33ab2fb2438e5089c5677670d6499954e89326975f598fc735 = $this->env->getExtension("native_profiler");
        $__internal_ebce74e2c1342f33ab2fb2438e5089c5677670d6499954e89326975f598fc735->enter($__internal_ebce74e2c1342f33ab2fb2438e5089c5677670d6499954e89326975f598fc735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebFaqBundle:faq:show.html.twig", 54)->display($context);
        
        $__internal_ebce74e2c1342f33ab2fb2438e5089c5677670d6499954e89326975f598fc735->leave($__internal_ebce74e2c1342f33ab2fb2438e5089c5677670d6499954e89326975f598fc735_prof);

    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8b5cdf0e3eb6461ebf808b968d4e6d6c96cd4e2352843e8f068cf3bd3e05669c = $this->env->getExtension("native_profiler");
        $__internal_8b5cdf0e3eb6461ebf808b968d4e6d6c96cd4e2352843e8f068cf3bd3e05669c->enter($__internal_8b5cdf0e3eb6461ebf808b968d4e6d6c96cd4e2352843e8f068cf3bd3e05669c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 59
        echo "
    ";
        
        $__internal_8b5cdf0e3eb6461ebf808b968d4e6d6c96cd4e2352843e8f068cf3bd3e05669c->leave($__internal_8b5cdf0e3eb6461ebf808b968d4e6d6c96cd4e2352843e8f068cf3bd3e05669c_prof);

    }

    public function getTemplateName()
    {
        return "PointWebFaqBundle:faq:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 59,  145 => 58,  137 => 54,  131 => 53,  119 => 5,  109 => 61,  107 => 58,  103 => 56,  101 => 53,  89 => 43,  83 => 42,  76 => 38,  69 => 34,  62 => 30,  35 => 6,  31 => 5,  25 => 1,);
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
/*             FAQ*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <div class="col-lg-12">*/
/*                 <div class="col-lg-12">*/
/*                     <label>Question :</label>*/
/*                     {{ entity.title }}*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <label>Réponse :</label><br>*/
/*                     {{ entity.answer|raw }}*/
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
