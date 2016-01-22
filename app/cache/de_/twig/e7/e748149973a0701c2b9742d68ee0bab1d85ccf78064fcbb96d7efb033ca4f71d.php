<?php

/* @PointWebApp/base.html.twig */
class __TwigTemplate_191d3264754f5df3a12ab65f23262fa053af17ef3b4bfb6b992d350679dccd06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        $__internal_4d0b6a1cc1b3736d2a55c471824ab5f03965522089c5beef50beb9deb61ad4da = $this->env->getExtension("native_profiler");
        $__internal_4d0b6a1cc1b3736d2a55c471824ab5f03965522089c5beef50beb9deb61ad4da->enter($__internal_4d0b6a1cc1b3736d2a55c471824ab5f03965522089c5beef50beb9deb61ad4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebApp/base.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:header"));
        echo "

<body>
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "</body>
</html>";
        
        $__internal_4d0b6a1cc1b3736d2a55c471824ab5f03965522089c5beef50beb9deb61ad4da->leave($__internal_4d0b6a1cc1b3736d2a55c471824ab5f03965522089c5beef50beb9deb61ad4da_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_445a74a4a06ed0ea5d18dd20352880ba15d11826f3c5a63b2fdbcc1f95a966f7 = $this->env->getExtension("native_profiler");
        $__internal_445a74a4a06ed0ea5d18dd20352880ba15d11826f3c5a63b2fdbcc1f95a966f7->enter($__internal_445a74a4a06ed0ea5d18dd20352880ba15d11826f3c5a63b2fdbcc1f95a966f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
        ";
        // line 7
        $this->displayBlock('menu', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('slider', $context, $blocks);
        // line 13
        echo "        <!-- Page Content -->
        <div class=\"container content\">

            ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "        </div>
        <!-- /.container -->
    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_445a74a4a06ed0ea5d18dd20352880ba15d11826f3c5a63b2fdbcc1f95a966f7->leave($__internal_445a74a4a06ed0ea5d18dd20352880ba15d11826f3c5a63b2fdbcc1f95a966f7_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ec580e78bd16373ab506f42534e31c0229bf69bee007a6935039893d1abf414 = $this->env->getExtension("native_profiler");
        $__internal_1ec580e78bd16373ab506f42534e31c0229bf69bee007a6935039893d1abf414->enter($__internal_1ec580e78bd16373ab506f42534e31c0229bf69bee007a6935039893d1abf414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 8
        echo "            ";
        $this->loadTemplate("PointWebAppBundle::_menu.html.twig", "@PointWebApp/base.html.twig", 8)->display($context);
        // line 9
        echo "        ";
        
        $__internal_1ec580e78bd16373ab506f42534e31c0229bf69bee007a6935039893d1abf414->leave($__internal_1ec580e78bd16373ab506f42534e31c0229bf69bee007a6935039893d1abf414_prof);

    }

    // line 10
    public function block_slider($context, array $blocks = array())
    {
        $__internal_8e1e6f3f121d27f9954a97430480d531a0779d91f1e160ffaaa0a45e00e8fd9f = $this->env->getExtension("native_profiler");
        $__internal_8e1e6f3f121d27f9954a97430480d531a0779d91f1e160ffaaa0a45e00e8fd9f->enter($__internal_8e1e6f3f121d27f9954a97430480d531a0779d91f1e160ffaaa0a45e00e8fd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 11
        echo "
        ";
        
        $__internal_8e1e6f3f121d27f9954a97430480d531a0779d91f1e160ffaaa0a45e00e8fd9f->leave($__internal_8e1e6f3f121d27f9954a97430480d531a0779d91f1e160ffaaa0a45e00e8fd9f_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed7587ef977f9ef73007cbd8bec14f33432c16f9c141dfc22953c10c8e226b08 = $this->env->getExtension("native_profiler");
        $__internal_ed7587ef977f9ef73007cbd8bec14f33432c16f9c141dfc22953c10c8e226b08->enter($__internal_ed7587ef977f9ef73007cbd8bec14f33432c16f9c141dfc22953c10c8e226b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
                ";
        // line 18
        $this->loadTemplate("PointWebAppBundle:Default:index.html.twig", "@PointWebApp/base.html.twig", 18)->display($context);
        // line 19
        echo "            ";
        
        $__internal_ed7587ef977f9ef73007cbd8bec14f33432c16f9c141dfc22953c10c8e226b08->leave($__internal_ed7587ef977f9ef73007cbd8bec14f33432c16f9c141dfc22953c10c8e226b08_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d93d50ce4abd9bf21974648305d654ef5b5540fe33bdc6b72ae13a8dede7e8e9 = $this->env->getExtension("native_profiler");
        $__internal_d93d50ce4abd9bf21974648305d654ef5b5540fe33bdc6b72ae13a8dede7e8e9->enter($__internal_d93d50ce4abd9bf21974648305d654ef5b5540fe33bdc6b72ae13a8dede7e8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "                ";
        $this->loadTemplate("PointWebAppBundle::_footer.html.twig", "@PointWebApp/base.html.twig", 21)->display($context);
        // line 22
        echo "            ";
        
        $__internal_d93d50ce4abd9bf21974648305d654ef5b5540fe33bdc6b72ae13a8dede7e8e9->leave($__internal_d93d50ce4abd9bf21974648305d654ef5b5540fe33bdc6b72ae13a8dede7e8e9_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ccda4db42cbaa06bccf108a8eb2730da9e928d8a0339577f2c29e33e6c2d32b = $this->env->getExtension("native_profiler");
        $__internal_4ccda4db42cbaa06bccf108a8eb2730da9e928d8a0339577f2c29e33e6c2d32b->enter($__internal_4ccda4db42cbaa06bccf108a8eb2730da9e928d8a0339577f2c29e33e6c2d32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        ";
        $this->loadTemplate("PointWebAppBundle::_js.html.twig", "@PointWebApp/base.html.twig", 26)->display($context);
        // line 27
        echo "    ";
        
        $__internal_4ccda4db42cbaa06bccf108a8eb2730da9e928d8a0339577f2c29e33e6c2d32b->leave($__internal_4ccda4db42cbaa06bccf108a8eb2730da9e928d8a0339577f2c29e33e6c2d32b_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebApp/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 27,  152 => 26,  146 => 25,  139 => 22,  136 => 21,  130 => 20,  123 => 19,  121 => 18,  118 => 17,  112 => 16,  104 => 11,  98 => 10,  91 => 9,  88 => 8,  82 => 7,  75 => 25,  71 => 23,  68 => 20,  66 => 16,  61 => 13,  58 => 10,  56 => 7,  53 => 6,  47 => 5,  39 => 29,  37 => 5,  31 => 2,  28 => 1,);
    }
}
/* */
/* {{ render(controller("PointWebAppBundle:Default:header")) }}*/
/* */
/* <body>*/
/* {% block body %}*/
/* */
/*         {% block menu %}*/
/*             {% include 'PointWebAppBundle::_menu.html.twig' %}*/
/*         {% endblock %}*/
/*         {% block slider %}*/
/* */
/*         {% endblock %}*/
/*         <!-- Page Content -->*/
/*         <div class="container content">*/
/* */
/*             {% block content %}*/
/* */
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
