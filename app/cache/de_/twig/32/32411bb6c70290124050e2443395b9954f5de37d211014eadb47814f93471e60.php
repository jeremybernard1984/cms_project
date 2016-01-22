<?php

/* @PointWebAdmin/_header.html.twig */
class __TwigTemplate_9dc5eb22f5d73b0865a2c228f63401e63f1d7d82cdbb21d9ec44f9628e86b242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b7621a7ba915598b5fc6a91608c37f84d7a4a7a153baac5935734c85f4c60d2 = $this->env->getExtension("native_profiler");
        $__internal_6b7621a7ba915598b5fc6a91608c37f84d7a4a7a153baac5935734c85f4c60d2->enter($__internal_6b7621a7ba915598b5fc6a91608c37f84d7a4a7a153baac5935734c85f4c60d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebAdmin/_header.html.twig"));

        // line 1
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<!-- Bootstrap Core CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
<!-- MetisMenu CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/metisMenu/dist/metisMenu.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
<!-- Custom Fonts -->
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
<!-- Custom Fonts -->
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/bootstrap-datepicker/datepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
<!-- DataTables CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- DataTables Responsive CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/datatables-responsive/css/dataTables.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- fancybox -->
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/jquery.fancybox.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
<!-- custom de style bootstrap : http://www.lavishbootstrap.com/-->
";
        // line 22
        if (((isset($context["backgroundStyle"]) ? $context["backgroundStyle"] : $this->getContext($context, "backgroundStyle")) || ((isset($context["backgroundStyle"]) ? $context["backgroundStyle"] : $this->getContext($context, "backgroundStyle")) != 0))) {
            // line 23
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("dist/css/bootstrap_custom/lavish-bootstrapv" . (isset($context["backgroundStyle"]) ? $context["backgroundStyle"] : $this->getContext($context, "backgroundStyle"))) . ".css")), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
";
        }
        // line 25
        echo "<!-- loader -->
<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/loader.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
<!-- Custom CSS-->
<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>

<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->";
        
        $__internal_6b7621a7ba915598b5fc6a91608c37f84d7a4a7a153baac5935734c85f4c60d2->leave($__internal_6b7621a7ba915598b5fc6a91608c37f84d7a4a7a153baac5935734c85f4c60d2_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebAdmin/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  82 => 28,  77 => 26,  74 => 25,  68 => 23,  66 => 22,  61 => 20,  56 => 18,  51 => 16,  46 => 14,  41 => 12,  36 => 10,  31 => 8,  22 => 1,);
    }
}
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta name="description" content="">*/
/* <meta name="author" content="">*/
/* */
/* <!-- Bootstrap Core CSS -->*/
/* <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}" type="text/css" media="all"/>*/
/* <!-- MetisMenu CSS -->*/
/* <link rel="stylesheet" href="{{ asset('bower_components/metisMenu/dist/metisMenu.css') }}" type="text/css" media="all"/>*/
/* <!-- Custom Fonts -->*/
/* <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.css') }}" type="text/css" media="all"/>*/
/* <!-- Custom Fonts -->*/
/* <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/datepicker.css') }}" type="text/css" media="all"/>*/
/* <!-- DataTables CSS -->*/
/* <link rel="stylesheet" href="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">*/
/* <!-- DataTables Responsive CSS -->*/
/* <link rel="stylesheet" href="{{ asset('bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">*/
/* <!-- fancybox -->*/
/* <link rel="stylesheet" href="{{ asset('dist/css/jquery.fancybox.css') }}" type="text/css" media="all"/>*/
/* <!-- custom de style bootstrap : http://www.lavishbootstrap.com/-->*/
/* {% if backgroundStyle or backgroundStyle != 0 %}*/
/* <link rel="stylesheet" href="{{ asset('dist/css/bootstrap_custom/lavish-bootstrapv' ~ backgroundStyle ~ '.css') }}" type="text/css" media="all"/>*/
/* {% endif %}*/
/* <!-- loader -->*/
/* <link rel="stylesheet" href="{{ asset('dist/css/loader.css') }}" type="text/css" media="all"/>*/
/* <!-- Custom CSS-->*/
/* <link rel="stylesheet" href="{{ asset('dist/css/sb-admin-2.css') }}" type="text/css" media="all"/>*/
/* */
/* <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/* <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/* <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/* <!--[if lt IE 9]>*/
/* <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/* <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/* <![endif]-->*/
