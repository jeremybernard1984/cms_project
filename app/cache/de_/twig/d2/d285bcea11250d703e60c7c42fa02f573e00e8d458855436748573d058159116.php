<?php

/* PointWebAppBundle::_menu.html.twig */
class __TwigTemplate_79b3f04c09d5f21b96d8237a5558b13ed8b5c727af784fa2a3a664793f32d2dc extends Twig_Template
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
        $__internal_f93a7bc30a3ded579abbb089d5e7368a58e7ada710bd1c69871d4b6ad040e165 = $this->env->getExtension("native_profiler");
        $__internal_f93a7bc30a3ded579abbb089d5e7368a58e7ada710bd1c69871d4b6ad040e165->enter($__internal_f93a7bc30a3ded579abbb089d5e7368a58e7ada710bd1c69871d4b6ad040e165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::_menu.html.twig"));

        // line 1
        echo "

<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div id=\"logo\">
                    ";
        // line 18
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:logo"));
        echo "
                </div>

            </div>
            <div class=\"col-md-9\">
                <ul class=\"social-network social-circle\">
                    <li><a href=\"#\" class=\"icoRss\" title=\"Rss\"><i class=\"fa fa-rss\"></i></a></li>
                    <li><a href=\"#\" class=\"icoFacebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
                    <li><a href=\"#\" class=\"icoTwitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
                    <li><a href=\"#\" class=\"icoGoogle\" title=\"Google +\"><i class=\"fa fa-google-plus\"></i></a></li>
                    <li><a href=\"#\" class=\"icoLinkedin\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
                </ul>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    ";
        // line 32
        echo $this->env->getExtension('knp_menu')->render("main", array("currentClass" => "active", "template" => "PointWebAppBundle::knp_menu.html.twig"));
        echo "
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>



    </div>
    <!-- /.container -->
</nav>";
        
        $__internal_f93a7bc30a3ded579abbb089d5e7368a58e7ada710bd1c69871d4b6ad040e165->leave($__internal_f93a7bc30a3ded579abbb089d5e7368a58e7ada710bd1c69871d4b6ad040e165_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 32,  41 => 18,  22 => 1,);
    }
}
/* */
/* */
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*     <div class="container">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <div id="logo">*/
/*                     {{ render(controller("PointWebAppBundle:Default:logo")) }}*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="col-md-9">*/
/*                 <ul class="social-network social-circle">*/
/*                     <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>*/
/*                     <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>*/
/*                     <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>*/
/*                     <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>*/
/*                     <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>*/
/*                 </ul>*/
/*                 <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                     {{ knp_menu_render('main', {'currentClass': 'active', 'template': 'PointWebAppBundle::knp_menu.html.twig'}) }}*/
/*                 </div>*/
/*                 <!-- /.navbar-collapse -->*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*     </div>*/
/*     <!-- /.container -->*/
/* </nav>*/
