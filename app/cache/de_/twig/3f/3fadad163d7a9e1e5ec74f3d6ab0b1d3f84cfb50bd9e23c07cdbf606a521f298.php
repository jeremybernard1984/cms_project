<?php

/* PointWebAppBundle::_header.html.twig */
class __TwigTemplate_8da5c24e16e0132df6d775c1401820dc58bad6ebea22c0787d6a27a2497bbc74 extends Twig_Template
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
        $__internal_f32bb41115ad0eb76ccabb8149e6bc27547fe78b64d71edf8141fb5d72ba36fd = $this->env->getExtension("native_profiler");
        $__internal_f32bb41115ad0eb76ccabb8149e6bc27547fe78b64d71edf8141fb5d72ba36fd->enter($__internal_f32bb41115ad0eb76ccabb8149e6bc27547fe78b64d71edf8141fb5d72ba36fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::_header.html.twig"));

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
        
        $__internal_f32bb41115ad0eb76ccabb8149e6bc27547fe78b64d71edf8141fb5d72ba36fd->leave($__internal_f32bb41115ad0eb76ccabb8149e6bc27547fe78b64d71edf8141fb5d72ba36fd_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_755c0002a416c9fb055832a0b9c67e3a4968c2b0d91daf82570ba19c29c65fde = $this->env->getExtension("native_profiler");
        $__internal_755c0002a416c9fb055832a0b9c67e3a4968c2b0d91daf82570ba19c29c65fde->enter($__internal_755c0002a416c9fb055832a0b9c67e3a4968c2b0d91daf82570ba19c29c65fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "clientName", array()), "html", null, true);
        
        $__internal_755c0002a416c9fb055832a0b9c67e3a4968c2b0d91daf82570ba19c29c65fde->leave($__internal_755c0002a416c9fb055832a0b9c67e3a4968c2b0d91daf82570ba19c29c65fde_prof);

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
