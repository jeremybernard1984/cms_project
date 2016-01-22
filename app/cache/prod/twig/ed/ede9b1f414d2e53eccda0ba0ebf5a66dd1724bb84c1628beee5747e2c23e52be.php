<?php

/* PointWebAppBundle::_header.html.twig */
class __TwigTemplate_b44eec685aa2a15157a415399d6c3cfbe8125d6756393142f1aacf982115da4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc72a13676eb3a5a88637cc0f3a274a3fcf8950c1df14134b23b54982084bdb4 = $this->env->getExtension("native_profiler");
        $__internal_cc72a13676eb3a5a88637cc0f3a274a3fcf8950c1df14134b23b54982084bdb4->enter($__internal_cc72a13676eb3a5a88637cc0f3a274a3fcf8950c1df14134b23b54982084bdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::_header.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "clientName", array()), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "clientName", array()), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "keyword", array()), "html", null, true);
        echo "\" />

<!-- Bootstrap Core CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
<!-- Custom Fonts -->
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
<!-- Custom Fonts -->
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/bootstrap-datepicker/datepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
<!-- fancybox -->
<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/jquery.fancybox.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
<!-- Custom isotop PORTFOLIO -->
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/isotop-portfolio.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
<!-- star-rating -->
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/star-rating.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
<!-- Customisation via : http://ironsummitmedia.github.io/startbootstrap-modern-business/index.html -->
<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/modern-business.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>


<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
</head>";
        
        $__internal_cc72a13676eb3a5a88637cc0f3a274a3fcf8950c1df14134b23b54982084bdb4->leave($__internal_cc72a13676eb3a5a88637cc0f3a274a3fcf8950c1df14134b23b54982084bdb4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea9e7aa44a1b23a1dbaf9ebdd606322eaccdff4ff4fa9ddbb5c89b6f4e91cfba = $this->env->getExtension("native_profiler");
        $__internal_ea9e7aa44a1b23a1dbaf9ebdd606322eaccdff4ff4fa9ddbb5c89b6f4e91cfba->enter($__internal_ea9e7aa44a1b23a1dbaf9ebdd606322eaccdff4ff4fa9ddbb5c89b6f4e91cfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "clientName", array()), "html", null, true);
        
        $__internal_ea9e7aa44a1b23a1dbaf9ebdd606322eaccdff4ff4fa9ddbb5c89b6f4e91cfba->leave($__internal_ea9e7aa44a1b23a1dbaf9ebdd606322eaccdff4ff4fa9ddbb5c89b6f4e91cfba_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 4,  85 => 28,  79 => 25,  74 => 23,  69 => 21,  64 => 19,  59 => 17,  54 => 15,  49 => 13,  43 => 10,  39 => 9,  35 => 8,  28 => 4,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <title>{% block title %}{{ reglage.clientName }}{% endblock %}</title>*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta name="description" content="{{ reglage.clientName }}">*/
/* <meta name="author" content="{{ reglage.clientName }}">*/
/* <meta name="keywords" content="{{ reglage.keyword }}" />*/
/* */
/* <!-- Bootstrap Core CSS -->*/
/* <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}" type="text/css" media="all"/>*/
/* <!-- Custom Fonts -->*/
/* <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.css') }}" type="text/css" media="all"/>*/
/* <!-- Custom Fonts -->*/
/* <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/datepicker.css') }}" type="text/css" media="all"/>*/
/* <!-- fancybox -->*/
/* <link rel="stylesheet" href="{{ asset('dist/css/jquery.fancybox.css') }}" type="text/css" media="all"/>*/
/* <!-- Custom isotop PORTFOLIO -->*/
/* <link rel="stylesheet" href="{{ asset('dist/css/isotop-portfolio.css') }}" type="text/css" media="all"/>*/
/* <!-- star-rating -->*/
/* <link rel="stylesheet" href="{{ asset('dist/css/star-rating.css') }}" type="text/css" media="all"/>*/
/* <!-- Customisation via : http://ironsummitmedia.github.io/startbootstrap-modern-business/index.html -->*/
/* <link rel="stylesheet" href="{{ asset('dist/css/modern-business.css') }}" type="text/css" media="all"/>*/
/* */
/* */
/* <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/* <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/* <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/* <!--[if lt IE 9]>*/
/* <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/* <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/* <![endif]-->*/
/* </head>*/
