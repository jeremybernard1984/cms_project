<?php

/* PointWebGuestBookBundle:GuestBook:show.html.twig */
class __TwigTemplate_9eae384deb5ca3e297206efbfa34cf37c7624233715a5a93c26983515fd8fb3e extends Twig_Template
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
        $__internal_ea0c4b8aad47746c7a2a75fb9a7bd8329a7545e6e9b4c01621251fbd8768b2e1 = $this->env->getExtension("native_profiler");
        $__internal_ea0c4b8aad47746c7a2a75fb9a7bd8329a7545e6e9b4c01621251fbd8768b2e1->enter($__internal_ea0c4b8aad47746c7a2a75fb9a7bd8329a7545e6e9b4c01621251fbd8768b2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGuestBookBundle:GuestBook:show.html.twig"));

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
        $this->loadTemplate("PointWebAdminBundle::_header.html.twig", "PointWebGuestBookBundle:GuestBook:show.html.twig", 6)->display($context);
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
                    <label>Nom :</label>
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Prénom :</label>
                    ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Email :</label>
                    ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Commentaire :</label>
                    ";
        // line 43
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment", array());
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Notation :</label>
                    ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notation", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Position :</label>
                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>En ligne :</label>
                    ";
        // line 55
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 56
        echo "                </div>

        </div>
        <div class=\"panel-footer\">
            <a href=\"javascript:parent.jQuery.fancybox.close();\">Fermer la fenêtre</a>
        </div>
    </div>

</div>
<!-- /#wrapper -->
";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "</body>
<footer>
    ";
        // line 71
        $this->displayBlock('footer', $context, $blocks);
        // line 74
        echo "</footer>
</html>

";
        
        $__internal_ea0c4b8aad47746c7a2a75fb9a7bd8329a7545e6e9b4c01621251fbd8768b2e1->leave($__internal_ea0c4b8aad47746c7a2a75fb9a7bd8329a7545e6e9b4c01621251fbd8768b2e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce44e10e46ea67c139939c14444db8cea5a56ec9cae213e040e7c2478e72c946 = $this->env->getExtension("native_profiler");
        $__internal_ce44e10e46ea67c139939c14444db8cea5a56ec9cae213e040e7c2478e72c946->enter($__internal_ce44e10e46ea67c139939c14444db8cea5a56ec9cae213e040e7c2478e72c946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_ce44e10e46ea67c139939c14444db8cea5a56ec9cae213e040e7c2478e72c946->leave($__internal_ce44e10e46ea67c139939c14444db8cea5a56ec9cae213e040e7c2478e72c946_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d438c1c774959486cf2c26529e1386d96c3fcf1db4efcd5e0db698994ac0d3e9 = $this->env->getExtension("native_profiler");
        $__internal_d438c1c774959486cf2c26529e1386d96c3fcf1db4efcd5e0db698994ac0d3e9->enter($__internal_d438c1c774959486cf2c26529e1386d96c3fcf1db4efcd5e0db698994ac0d3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebGuestBookBundle:GuestBook:show.html.twig", 67)->display($context);
        
        $__internal_d438c1c774959486cf2c26529e1386d96c3fcf1db4efcd5e0db698994ac0d3e9->leave($__internal_d438c1c774959486cf2c26529e1386d96c3fcf1db4efcd5e0db698994ac0d3e9_prof);

    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4a93d61d2797b34424982317557185b9c097ede44579da853284f4b735ccbc1f = $this->env->getExtension("native_profiler");
        $__internal_4a93d61d2797b34424982317557185b9c097ede44579da853284f4b735ccbc1f->enter($__internal_4a93d61d2797b34424982317557185b9c097ede44579da853284f4b735ccbc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 72
        echo "
    ";
        
        $__internal_4a93d61d2797b34424982317557185b9c097ede44579da853284f4b735ccbc1f->leave($__internal_4a93d61d2797b34424982317557185b9c097ede44579da853284f4b735ccbc1f_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGuestBookBundle:GuestBook:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 72,  167 => 71,  159 => 67,  153 => 66,  141 => 5,  131 => 74,  129 => 71,  125 => 69,  123 => 66,  111 => 56,  105 => 55,  98 => 51,  91 => 47,  84 => 43,  77 => 39,  70 => 35,  63 => 31,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
