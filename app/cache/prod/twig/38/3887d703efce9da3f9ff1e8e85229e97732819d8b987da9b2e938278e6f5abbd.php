<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_efdd6ff8df124602b72dd00db8217177a1f15eca8e39e6cd72f12634391565e4 extends Twig_Template
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
        $__internal_76ef9622929fbadd0b1dee19d7de5306b3d7a39eea49dfdfa9b997e192c3ae8c = $this->env->getExtension("native_profiler");
        $__internal_76ef9622929fbadd0b1dee19d7de5306b3d7a39eea49dfdfa9b997e192c3ae8c->enter($__internal_76ef9622929fbadd0b1dee19d7de5306b3d7a39eea49dfdfa9b997e192c3ae8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::base.html.twig"));

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
        
        $__internal_76ef9622929fbadd0b1dee19d7de5306b3d7a39eea49dfdfa9b997e192c3ae8c->leave($__internal_76ef9622929fbadd0b1dee19d7de5306b3d7a39eea49dfdfa9b997e192c3ae8c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b159cc5d524b14b654f5fcd7ac9c847966299c9fac35866f1ed648e414d9585 = $this->env->getExtension("native_profiler");
        $__internal_7b159cc5d524b14b654f5fcd7ac9c847966299c9fac35866f1ed648e414d9585->enter($__internal_7b159cc5d524b14b654f5fcd7ac9c847966299c9fac35866f1ed648e414d9585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MON SITE !!!!!! gygygygy";
        
        $__internal_7b159cc5d524b14b654f5fcd7ac9c847966299c9fac35866f1ed648e414d9585->leave($__internal_7b159cc5d524b14b654f5fcd7ac9c847966299c9fac35866f1ed648e414d9585_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_16b715160d11205a2bef917ea1fc20cf0f801f68587eb1f6dbf901831c225436 = $this->env->getExtension("native_profiler");
        $__internal_16b715160d11205a2bef917ea1fc20cf0f801f68587eb1f6dbf901831c225436->enter($__internal_16b715160d11205a2bef917ea1fc20cf0f801f68587eb1f6dbf901831c225436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_16b715160d11205a2bef917ea1fc20cf0f801f68587eb1f6dbf901831c225436->leave($__internal_16b715160d11205a2bef917ea1fc20cf0f801f68587eb1f6dbf901831c225436_prof);

    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1dfa84150bd86fd01300cf3233a3d37093b0908c0f3422c4b40f07eb100f79e = $this->env->getExtension("native_profiler");
        $__internal_e1dfa84150bd86fd01300cf3233a3d37093b0908c0f3422c4b40f07eb100f79e->enter($__internal_e1dfa84150bd86fd01300cf3233a3d37093b0908c0f3422c4b40f07eb100f79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 11
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:menu"));
        echo "
        ";
        
        $__internal_e1dfa84150bd86fd01300cf3233a3d37093b0908c0f3422c4b40f07eb100f79e->leave($__internal_e1dfa84150bd86fd01300cf3233a3d37093b0908c0f3422c4b40f07eb100f79e_prof);

    }

    // line 13
    public function block_slider($context, array $blocks = array())
    {
        $__internal_b5b46620e33637a828650433178f99ae72c3b1fef075628f163775987e5a5cc5 = $this->env->getExtension("native_profiler");
        $__internal_b5b46620e33637a828650433178f99ae72c3b1fef075628f163775987e5a5cc5->enter($__internal_b5b46620e33637a828650433178f99ae72c3b1fef075628f163775987e5a5cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 14
        echo "
        ";
        
        $__internal_b5b46620e33637a828650433178f99ae72c3b1fef075628f163775987e5a5cc5->leave($__internal_b5b46620e33637a828650433178f99ae72c3b1fef075628f163775987e5a5cc5_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_7c47bd7e92498dd8558cdbb65cc77b2103609f7a3c76f6c54753037f56b5c062 = $this->env->getExtension("native_profiler");
        $__internal_7c47bd7e92498dd8558cdbb65cc77b2103609f7a3c76f6c54753037f56b5c062->enter($__internal_7c47bd7e92498dd8558cdbb65cc77b2103609f7a3c76f6c54753037f56b5c062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "                ";
        $this->loadTemplate("PointWebAppBundle:Default:index.html.twig", "PointWebAppBundle::base.html.twig", 19)->display($context);
        // line 20
        echo "            ";
        
        $__internal_7c47bd7e92498dd8558cdbb65cc77b2103609f7a3c76f6c54753037f56b5c062->leave($__internal_7c47bd7e92498dd8558cdbb65cc77b2103609f7a3c76f6c54753037f56b5c062_prof);

    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7fc9fc2768143563decb81917b59d80a8d6d2db38ea74f8c09458a65acf18dd3 = $this->env->getExtension("native_profiler");
        $__internal_7fc9fc2768143563decb81917b59d80a8d6d2db38ea74f8c09458a65acf18dd3->enter($__internal_7fc9fc2768143563decb81917b59d80a8d6d2db38ea74f8c09458a65acf18dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 22
        echo "                ";
        $this->loadTemplate("PointWebAppBundle::_footer.html.twig", "PointWebAppBundle::base.html.twig", 22)->display($context);
        // line 23
        echo "            ";
        
        $__internal_7fc9fc2768143563decb81917b59d80a8d6d2db38ea74f8c09458a65acf18dd3->leave($__internal_7fc9fc2768143563decb81917b59d80a8d6d2db38ea74f8c09458a65acf18dd3_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88e79f0fc39ac7d42e5d9e2bbb4b6a2f2aed2fbd3dede67ec2aa79a4f7db6833 = $this->env->getExtension("native_profiler");
        $__internal_88e79f0fc39ac7d42e5d9e2bbb4b6a2f2aed2fbd3dede67ec2aa79a4f7db6833->enter($__internal_88e79f0fc39ac7d42e5d9e2bbb4b6a2f2aed2fbd3dede67ec2aa79a4f7db6833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "        ";
        $this->loadTemplate("PointWebAppBundle::_js.html.twig", "PointWebAppBundle::base.html.twig", 27)->display($context);
        // line 28
        echo "    ";
        
        $__internal_88e79f0fc39ac7d42e5d9e2bbb4b6a2f2aed2fbd3dede67ec2aa79a4f7db6833->leave($__internal_88e79f0fc39ac7d42e5d9e2bbb4b6a2f2aed2fbd3dede67ec2aa79a4f7db6833_prof);

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
