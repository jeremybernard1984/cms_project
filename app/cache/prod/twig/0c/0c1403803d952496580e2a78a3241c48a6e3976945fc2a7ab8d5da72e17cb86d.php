<?php

/* ::base.html.twig */
class __TwigTemplate_dc50ab1fc2d34409cc1956650b21dce11d4a6d2a46918548747d7a531be6c76b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73c7335db1db2d2a9d8d6ea47e8b78980aeba274589683402e29d20a83a6c35b = $this->env->getExtension("native_profiler");
        $__internal_73c7335db1db2d2a9d8d6ea47e8b78980aeba274589683402e29d20a83a6c35b->enter($__internal_73c7335db1db2d2a9d8d6ea47e8b78980aeba274589683402e29d20a83a6c35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_73c7335db1db2d2a9d8d6ea47e8b78980aeba274589683402e29d20a83a6c35b->leave($__internal_73c7335db1db2d2a9d8d6ea47e8b78980aeba274589683402e29d20a83a6c35b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_69d3f2e5d24133420b38a65831e5440c0ef1a203315b0f4f146c05d9e436a030 = $this->env->getExtension("native_profiler");
        $__internal_69d3f2e5d24133420b38a65831e5440c0ef1a203315b0f4f146c05d9e436a030->enter($__internal_69d3f2e5d24133420b38a65831e5440c0ef1a203315b0f4f146c05d9e436a030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_69d3f2e5d24133420b38a65831e5440c0ef1a203315b0f4f146c05d9e436a030->leave($__internal_69d3f2e5d24133420b38a65831e5440c0ef1a203315b0f4f146c05d9e436a030_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7da591ed808988ac9e2429484e75ac1eb1052d77d946e5a73812a17a0ff10ef3 = $this->env->getExtension("native_profiler");
        $__internal_7da591ed808988ac9e2429484e75ac1eb1052d77d946e5a73812a17a0ff10ef3->enter($__internal_7da591ed808988ac9e2429484e75ac1eb1052d77d946e5a73812a17a0ff10ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7da591ed808988ac9e2429484e75ac1eb1052d77d946e5a73812a17a0ff10ef3->leave($__internal_7da591ed808988ac9e2429484e75ac1eb1052d77d946e5a73812a17a0ff10ef3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_987e4c5aeef6166ab3f4e3412c45f94081844032d06486628272613e5ec6da5c = $this->env->getExtension("native_profiler");
        $__internal_987e4c5aeef6166ab3f4e3412c45f94081844032d06486628272613e5ec6da5c->enter($__internal_987e4c5aeef6166ab3f4e3412c45f94081844032d06486628272613e5ec6da5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_987e4c5aeef6166ab3f4e3412c45f94081844032d06486628272613e5ec6da5c->leave($__internal_987e4c5aeef6166ab3f4e3412c45f94081844032d06486628272613e5ec6da5c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3eb6a70a8b2148cf1bb2cb4af2f2537b7645e61077baba6bc1e66c7cde096b5 = $this->env->getExtension("native_profiler");
        $__internal_c3eb6a70a8b2148cf1bb2cb4af2f2537b7645e61077baba6bc1e66c7cde096b5->enter($__internal_c3eb6a70a8b2148cf1bb2cb4af2f2537b7645e61077baba6bc1e66c7cde096b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c3eb6a70a8b2148cf1bb2cb4af2f2537b7645e61077baba6bc1e66c7cde096b5->leave($__internal_c3eb6a70a8b2148cf1bb2cb4af2f2537b7645e61077baba6bc1e66c7cde096b5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
