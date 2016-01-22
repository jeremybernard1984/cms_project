<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_97f8747ef011cc5537f26b72a8c78c5962dacd45916108c7ce17e7bedd11f745 extends Twig_Template
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
        $__internal_f8c898d9b3fc8198a74e5b8cbaecc49b6619a6872e5f55cf9262cdb3150b7b2b = $this->env->getExtension("native_profiler");
        $__internal_f8c898d9b3fc8198a74e5b8cbaecc49b6619a6872e5f55cf9262cdb3150b7b2b->enter($__internal_f8c898d9b3fc8198a74e5b8cbaecc49b6619a6872e5f55cf9262cdb3150b7b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::base.html.twig"));

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
        
        $__internal_f8c898d9b3fc8198a74e5b8cbaecc49b6619a6872e5f55cf9262cdb3150b7b2b->leave($__internal_f8c898d9b3fc8198a74e5b8cbaecc49b6619a6872e5f55cf9262cdb3150b7b2b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8ec22d7eca545477e6c1ea7780c7973e09b92cf6c5eea1e6c2eb05312df11a9 = $this->env->getExtension("native_profiler");
        $__internal_e8ec22d7eca545477e6c1ea7780c7973e09b92cf6c5eea1e6c2eb05312df11a9->enter($__internal_e8ec22d7eca545477e6c1ea7780c7973e09b92cf6c5eea1e6c2eb05312df11a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e8ec22d7eca545477e6c1ea7780c7973e09b92cf6c5eea1e6c2eb05312df11a9->leave($__internal_e8ec22d7eca545477e6c1ea7780c7973e09b92cf6c5eea1e6c2eb05312df11a9_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bde520053940d9f7ea2d6e053560d7d38055d96e70c02a00f5e7a1749cacba0e = $this->env->getExtension("native_profiler");
        $__internal_bde520053940d9f7ea2d6e053560d7d38055d96e70c02a00f5e7a1749cacba0e->enter($__internal_bde520053940d9f7ea2d6e053560d7d38055d96e70c02a00f5e7a1749cacba0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 8
        echo "            ";
        $this->loadTemplate("PointWebAppBundle::_menu.html.twig", "PointWebAppBundle::base.html.twig", 8)->display($context);
        // line 9
        echo "        ";
        
        $__internal_bde520053940d9f7ea2d6e053560d7d38055d96e70c02a00f5e7a1749cacba0e->leave($__internal_bde520053940d9f7ea2d6e053560d7d38055d96e70c02a00f5e7a1749cacba0e_prof);

    }

    // line 10
    public function block_slider($context, array $blocks = array())
    {
        $__internal_e2f9d716779b7924b988610033798d0589baf7976e477382caa3cadf6d629e3a = $this->env->getExtension("native_profiler");
        $__internal_e2f9d716779b7924b988610033798d0589baf7976e477382caa3cadf6d629e3a->enter($__internal_e2f9d716779b7924b988610033798d0589baf7976e477382caa3cadf6d629e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 11
        echo "
        ";
        
        $__internal_e2f9d716779b7924b988610033798d0589baf7976e477382caa3cadf6d629e3a->leave($__internal_e2f9d716779b7924b988610033798d0589baf7976e477382caa3cadf6d629e3a_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_e49d65dcd5c41acca3b230641357bf7b227e0b858cff1d35300112450c4a95ef = $this->env->getExtension("native_profiler");
        $__internal_e49d65dcd5c41acca3b230641357bf7b227e0b858cff1d35300112450c4a95ef->enter($__internal_e49d65dcd5c41acca3b230641357bf7b227e0b858cff1d35300112450c4a95ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
                ";
        // line 18
        $this->loadTemplate("PointWebAppBundle:Default:index.html.twig", "PointWebAppBundle::base.html.twig", 18)->display($context);
        // line 19
        echo "            ";
        
        $__internal_e49d65dcd5c41acca3b230641357bf7b227e0b858cff1d35300112450c4a95ef->leave($__internal_e49d65dcd5c41acca3b230641357bf7b227e0b858cff1d35300112450c4a95ef_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9df140738df4de79a2b4b218be1d87907fb09375b978ff4efabec236e6284935 = $this->env->getExtension("native_profiler");
        $__internal_9df140738df4de79a2b4b218be1d87907fb09375b978ff4efabec236e6284935->enter($__internal_9df140738df4de79a2b4b218be1d87907fb09375b978ff4efabec236e6284935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "                ";
        $this->loadTemplate("PointWebAppBundle::_footer.html.twig", "PointWebAppBundle::base.html.twig", 21)->display($context);
        // line 22
        echo "            ";
        
        $__internal_9df140738df4de79a2b4b218be1d87907fb09375b978ff4efabec236e6284935->leave($__internal_9df140738df4de79a2b4b218be1d87907fb09375b978ff4efabec236e6284935_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7003d9505ae705fac2341629c1cbd2f12e46dc7c007a5fdf617d72a08dec76d = $this->env->getExtension("native_profiler");
        $__internal_f7003d9505ae705fac2341629c1cbd2f12e46dc7c007a5fdf617d72a08dec76d->enter($__internal_f7003d9505ae705fac2341629c1cbd2f12e46dc7c007a5fdf617d72a08dec76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        ";
        $this->loadTemplate("PointWebAppBundle::_js.html.twig", "PointWebAppBundle::base.html.twig", 26)->display($context);
        // line 27
        echo "    ";
        
        $__internal_f7003d9505ae705fac2341629c1cbd2f12e46dc7c007a5fdf617d72a08dec76d->leave($__internal_f7003d9505ae705fac2341629c1cbd2f12e46dc7c007a5fdf617d72a08dec76d_prof);

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
