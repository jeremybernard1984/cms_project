<?php

/* PointWebPartnerBundle:PartnerCategory:show.html.twig */
class __TwigTemplate_48bd4f9b13c886f73513b0fdfb3d2c7f4d5f2182d773a07d1abd610bd62d4f08 extends Twig_Template
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
        $__internal_7504ff42746703f70b83a71dbc1d30ebd48c345e9abbe5cc5ae29f13d6b2e24d = $this->env->getExtension("native_profiler");
        $__internal_7504ff42746703f70b83a71dbc1d30ebd48c345e9abbe5cc5ae29f13d6b2e24d->enter($__internal_7504ff42746703f70b83a71dbc1d30ebd48c345e9abbe5cc5ae29f13d6b2e24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:PartnerCategory:show.html.twig"));

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
        $this->loadTemplate("PointWebAdminBundle::_header.html.twig", "PointWebPartnerBundle:PartnerCategory:show.html.twig", 6)->display($context);
        // line 7
        echo "    <style>

    </style>
</head>
<body style=\"background: #fff;\">
<div id=\"wrapper\">

    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            Partenaire catégorie
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
                    <label>Position :</label>
                    ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
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

            </div>
        </div>
        <div class=\"panel-footer\">
            <a href=\"javascript:parent.jQuery.fancybox.close();\">Fermer la fenêtre</a>
        </div>
    </div>

</div>
<!-- /#wrapper -->
";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "</body>
<footer>
    ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "</footer>
</html>



";
        
        $__internal_7504ff42746703f70b83a71dbc1d30ebd48c345e9abbe5cc5ae29f13d6b2e24d->leave($__internal_7504ff42746703f70b83a71dbc1d30ebd48c345e9abbe5cc5ae29f13d6b2e24d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d580baf123f6ec815dacf9112cbb2d317ab5bf2f5ae36378cccd42e59bdbf00 = $this->env->getExtension("native_profiler");
        $__internal_8d580baf123f6ec815dacf9112cbb2d317ab5bf2f5ae36378cccd42e59bdbf00->enter($__internal_8d580baf123f6ec815dacf9112cbb2d317ab5bf2f5ae36378cccd42e59bdbf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_8d580baf123f6ec815dacf9112cbb2d317ab5bf2f5ae36378cccd42e59bdbf00->leave($__internal_8d580baf123f6ec815dacf9112cbb2d317ab5bf2f5ae36378cccd42e59bdbf00_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae6c3e475cc0f7e7d9b4d75f3d8da44ad0d36e7fa44cc4c56dc7f705754670b8 = $this->env->getExtension("native_profiler");
        $__internal_ae6c3e475cc0f7e7d9b4d75f3d8da44ad0d36e7fa44cc4c56dc7f705754670b8->enter($__internal_ae6c3e475cc0f7e7d9b4d75f3d8da44ad0d36e7fa44cc4c56dc7f705754670b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebPartnerBundle:PartnerCategory:show.html.twig", 44)->display($context);
        
        $__internal_ae6c3e475cc0f7e7d9b4d75f3d8da44ad0d36e7fa44cc4c56dc7f705754670b8->leave($__internal_ae6c3e475cc0f7e7d9b4d75f3d8da44ad0d36e7fa44cc4c56dc7f705754670b8_prof);

    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ebb4fbef8de41a3029b810ca85f918779a197a8e15f2cf3539249a338ebb8866 = $this->env->getExtension("native_profiler");
        $__internal_ebb4fbef8de41a3029b810ca85f918779a197a8e15f2cf3539249a338ebb8866->enter($__internal_ebb4fbef8de41a3029b810ca85f918779a197a8e15f2cf3539249a338ebb8866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 49
        echo "
    ";
        
        $__internal_ebb4fbef8de41a3029b810ca85f918779a197a8e15f2cf3539249a338ebb8866->leave($__internal_ebb4fbef8de41a3029b810ca85f918779a197a8e15f2cf3539249a338ebb8866_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:PartnerCategory:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 49,  134 => 48,  126 => 44,  120 => 43,  108 => 5,  96 => 51,  94 => 48,  90 => 46,  88 => 43,  75 => 32,  69 => 31,  62 => 27,  55 => 23,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
