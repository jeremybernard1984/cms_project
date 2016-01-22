<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_ec4fe646e5f189f5d9c9d868d5c8f83d48aca07d30e00938a19850a3c432e69a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'slider' => array($this, 'block_slider'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db18c046bacd5fef56dd7f9ea917da9fa9619333e262587e38b330810824227b = $this->env->getExtension("native_profiler");
        $__internal_db18c046bacd5fef56dd7f9ea917da9fa9619333e262587e38b330810824227b->enter($__internal_db18c046bacd5fef56dd7f9ea917da9fa9619333e262587e38b330810824227b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::base.html.twig"));

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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:header"));
        echo "
</head>
<body>
";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "</body>
</html>";
        
        $__internal_db18c046bacd5fef56dd7f9ea917da9fa9619333e262587e38b330810824227b->leave($__internal_db18c046bacd5fef56dd7f9ea917da9fa9619333e262587e38b330810824227b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_acdd350a3a834fb2e9d042899e7a8763bc7899a1601f7c8ba4f6b8e9334a170f = $this->env->getExtension("native_profiler");
        $__internal_acdd350a3a834fb2e9d042899e7a8763bc7899a1601f7c8ba4f6b8e9334a170f->enter($__internal_acdd350a3a834fb2e9d042899e7a8763bc7899a1601f7c8ba4f6b8e9334a170f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MON SITE !!!!!! gygygygy";
        
        $__internal_acdd350a3a834fb2e9d042899e7a8763bc7899a1601f7c8ba4f6b8e9334a170f->leave($__internal_acdd350a3a834fb2e9d042899e7a8763bc7899a1601f7c8ba4f6b8e9334a170f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca57e6dcff5ac6623a78fa237112561d33a00cc1abc6aa11d2888d0103134c26 = $this->env->getExtension("native_profiler");
        $__internal_ca57e6dcff5ac6623a78fa237112561d33a00cc1abc6aa11d2888d0103134c26->enter($__internal_ca57e6dcff5ac6623a78fa237112561d33a00cc1abc6aa11d2888d0103134c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('slider', $context, $blocks);
        // line 16
        echo "        <!-- Page Content -->
        <div class=\"container\">
            ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 24
        echo "        </div>
        <!-- /.container -->
    ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_ca57e6dcff5ac6623a78fa237112561d33a00cc1abc6aa11d2888d0103134c26->leave($__internal_ca57e6dcff5ac6623a78fa237112561d33a00cc1abc6aa11d2888d0103134c26_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_488b566b5ee831f086ff2a06731fe0e9dcdf17e2763d45265c20ccb1c3008f94 = $this->env->getExtension("native_profiler");
        $__internal_488b566b5ee831f086ff2a06731fe0e9dcdf17e2763d45265c20ccb1c3008f94->enter($__internal_488b566b5ee831f086ff2a06731fe0e9dcdf17e2763d45265c20ccb1c3008f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 11
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:menu"));
        echo "
        ";
        
        $__internal_488b566b5ee831f086ff2a06731fe0e9dcdf17e2763d45265c20ccb1c3008f94->leave($__internal_488b566b5ee831f086ff2a06731fe0e9dcdf17e2763d45265c20ccb1c3008f94_prof);

    }

    // line 13
    public function block_slider($context, array $blocks = array())
    {
        $__internal_431b6730fded960ba89c9b4165c67bd5fff564a414bb906769672120722b3cb3 = $this->env->getExtension("native_profiler");
        $__internal_431b6730fded960ba89c9b4165c67bd5fff564a414bb906769672120722b3cb3->enter($__internal_431b6730fded960ba89c9b4165c67bd5fff564a414bb906769672120722b3cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 14
        echo "
        ";
        
        $__internal_431b6730fded960ba89c9b4165c67bd5fff564a414bb906769672120722b3cb3->leave($__internal_431b6730fded960ba89c9b4165c67bd5fff564a414bb906769672120722b3cb3_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d6178cc1725637285270ace6703c2d7ffe7dbf8c135514187b3e56dcd637cc6 = $this->env->getExtension("native_profiler");
        $__internal_1d6178cc1725637285270ace6703c2d7ffe7dbf8c135514187b3e56dcd637cc6->enter($__internal_1d6178cc1725637285270ace6703c2d7ffe7dbf8c135514187b3e56dcd637cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "                ";
        $this->loadTemplate("PointWebAppBundle:Default:index.html.twig", "PointWebAppBundle::base.html.twig", 19)->display($context);
        // line 20
        echo "            ";
        
        $__internal_1d6178cc1725637285270ace6703c2d7ffe7dbf8c135514187b3e56dcd637cc6->leave($__internal_1d6178cc1725637285270ace6703c2d7ffe7dbf8c135514187b3e56dcd637cc6_prof);

    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f60e69d58b7fb63ba863228fe47fea5ddbd4f169e8f72143051aa9ede2371bf1 = $this->env->getExtension("native_profiler");
        $__internal_f60e69d58b7fb63ba863228fe47fea5ddbd4f169e8f72143051aa9ede2371bf1->enter($__internal_f60e69d58b7fb63ba863228fe47fea5ddbd4f169e8f72143051aa9ede2371bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 22
        echo "                ";
        $this->loadTemplate("PointWebAppBundle::_footer.html.twig", "PointWebAppBundle::base.html.twig", 22)->display($context);
        // line 23
        echo "            ";
        
        $__internal_f60e69d58b7fb63ba863228fe47fea5ddbd4f169e8f72143051aa9ede2371bf1->leave($__internal_f60e69d58b7fb63ba863228fe47fea5ddbd4f169e8f72143051aa9ede2371bf1_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c4dc1c812d94b253d89a707910452ebda9c263f996fdb95b54ac2b6d69a7255 = $this->env->getExtension("native_profiler");
        $__internal_3c4dc1c812d94b253d89a707910452ebda9c263f996fdb95b54ac2b6d69a7255->enter($__internal_3c4dc1c812d94b253d89a707910452ebda9c263f996fdb95b54ac2b6d69a7255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "        ";
        $this->loadTemplate("PointWebAppBundle::_js.html.twig", "PointWebAppBundle::base.html.twig", 27)->display($context);
        // line 28
        echo "    ";
        
        $__internal_3c4dc1c812d94b253d89a707910452ebda9c263f996fdb95b54ac2b6d69a7255->leave($__internal_3c4dc1c812d94b253d89a707910452ebda9c263f996fdb95b54ac2b6d69a7255_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 28,  167 => 27,  161 => 26,  154 => 23,  151 => 22,  145 => 21,  138 => 20,  135 => 19,  129 => 18,  121 => 14,  115 => 13,  105 => 11,  99 => 10,  92 => 26,  88 => 24,  85 => 21,  83 => 18,  79 => 16,  76 => 13,  73 => 10,  67 => 9,  55 => 5,  47 => 30,  45 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}MON SITE !!!!!! gygygygy{% endblock %}</title>*/
/*     {{ render(controller("PointWebAppBundle:Default:header")) }}*/
/* </head>*/
/* <body>*/
/* {% block body %}*/
/*         {% block menu %}*/
/*             {{ render(controller('PointWebAppBundle:Default:menu')) }}*/
/*         {% endblock %}*/
/*         {% block slider %}*/
/* */
/*         {% endblock %}*/
/*         <!-- Page Content -->*/
/*         <div class="container">*/
/*             {% block content %}*/
/*                 {% include 'PointWebAppBundle:Default:index.html.twig' %}*/
/*             {% endblock %}*/
/*             {% block footer %}*/
/*                 {% include 'PointWebAppBundle::_footer.html.twig' %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     {% block javascripts %}*/
/*         {% include 'PointWebAppBundle::_js.html.twig' %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
