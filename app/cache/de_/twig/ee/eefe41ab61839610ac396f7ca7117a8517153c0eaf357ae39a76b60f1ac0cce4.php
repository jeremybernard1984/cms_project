<?php

/* @PointWebApp/_header.html.twig */
class __TwigTemplate_d388adf9996ed7c49463798f4da0408aff897366538ca0872e7249c344094c43 extends Twig_Template
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
        $__internal_ce2aa80b52c7cc2ae7a2af71e40657f1327af4522b5ac7391c19a94aa5e3e5ae = $this->env->getExtension("native_profiler");
        $__internal_ce2aa80b52c7cc2ae7a2af71e40657f1327af4522b5ac7391c19a94aa5e3e5ae->enter($__internal_ce2aa80b52c7cc2ae7a2af71e40657f1327af4522b5ac7391c19a94aa5e3e5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebApp/_header.html.twig"));

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
        
        $__internal_ce2aa80b52c7cc2ae7a2af71e40657f1327af4522b5ac7391c19a94aa5e3e5ae->leave($__internal_ce2aa80b52c7cc2ae7a2af71e40657f1327af4522b5ac7391c19a94aa5e3e5ae_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_765c457ab933e391556ec1744705708e1a8886240fef1ca1751b99ccf36e1fee = $this->env->getExtension("native_profiler");
        $__internal_765c457ab933e391556ec1744705708e1a8886240fef1ca1751b99ccf36e1fee->enter($__internal_765c457ab933e391556ec1744705708e1a8886240fef1ca1751b99ccf36e1fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "clientName", array()), "html", null, true);
        
        $__internal_765c457ab933e391556ec1744705708e1a8886240fef1ca1751b99ccf36e1fee->leave($__internal_765c457ab933e391556ec1744705708e1a8886240fef1ca1751b99ccf36e1fee_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebApp/_header.html.twig";
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
