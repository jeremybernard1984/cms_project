<?php

/* PointWebAppBundle::_menu.html.twig */
class __TwigTemplate_2495afdde6f0ac82f217496e17ba2d2076a5edf59b216fe031a5c206fda88b69 extends Twig_Template
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
        $__internal_b65f4daa70bafc8f8a132087a747489624acde5c2c40feed437e8b782bc7df96 = $this->env->getExtension("native_profiler");
        $__internal_b65f4daa70bafc8f8a132087a747489624acde5c2c40feed437e8b782bc7df96->enter($__internal_b65f4daa70bafc8f8a132087a747489624acde5c2c40feed437e8b782bc7df96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::_menu.html.twig"));

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
            <a class=\"navbar-brand\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\">Logo</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            ";
        // line 18
        echo $this->env->getExtension('knp_menu')->render("main", array("currentClass" => "active", "template" => "PointWebAppBundle::knp_menu.html.twig"));
        echo "
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>";
        
        $__internal_b65f4daa70bafc8f8a132087a747489624acde5c2c40feed437e8b782bc7df96->leave($__internal_b65f4daa70bafc8f8a132087a747489624acde5c2c40feed437e8b782bc7df96_prof);

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
        return array (  44 => 18,  37 => 14,  22 => 1,);
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
/*             <a class="navbar-brand" href="{{ path("point_web_app_homepage") }}">Logo</a>*/
/*         </div>*/
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             {{ knp_menu_render('main', {'currentClass': 'active', 'template': 'PointWebAppBundle::knp_menu.html.twig'}) }}*/
/*         </div>*/
/*         <!-- /.navbar-collapse -->*/
/*     </div>*/
/*     <!-- /.container -->*/
/* </nav>*/
