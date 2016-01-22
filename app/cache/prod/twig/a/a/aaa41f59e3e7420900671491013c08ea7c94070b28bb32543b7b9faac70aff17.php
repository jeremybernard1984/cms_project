<?php

/* PointWebUserBundle::base.html.twig */
class __TwigTemplate_aaa41f59e3e7420900671491013c08ea7c94070b28bb32543b7b9faac70aff17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9837928ceebd24d52e20dded61e4bda11d450ded7f72ece933ce68fc97f93d8e = $this->env->getExtension("native_profiler");
        $__internal_9837928ceebd24d52e20dded61e4bda11d450ded7f72ece933ce68fc97f93d8e->enter($__internal_9837928ceebd24d52e20dded61e4bda11d450ded7f72ece933ce68fc97f93d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebUserBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.11.4.custom/external/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.11.4.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.11.4.custom/jquery-ui.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "</body>
<footer>
    ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "</footer>
</html>";
        
        $__internal_9837928ceebd24d52e20dded61e4bda11d450ded7f72ece933ce68fc97f93d8e->leave($__internal_9837928ceebd24d52e20dded61e4bda11d450ded7f72ece933ce68fc97f93d8e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ea991cdd5853fc9bfed588aeddf321206aa6a503eede3c3d9f0b12379ff1c22 = $this->env->getExtension("native_profiler");
        $__internal_3ea991cdd5853fc9bfed588aeddf321206aa6a503eede3c3d9f0b12379ff1c22->enter($__internal_3ea991cdd5853fc9bfed588aeddf321206aa6a503eede3c3d9f0b12379ff1c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_3ea991cdd5853fc9bfed588aeddf321206aa6a503eede3c3d9f0b12379ff1c22->leave($__internal_3ea991cdd5853fc9bfed588aeddf321206aa6a503eede3c3d9f0b12379ff1c22_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_f58d0a1169786d489594f1c406845939e19b668f3713613537beb4434a9d3cb5 = $this->env->getExtension("native_profiler");
        $__internal_f58d0a1169786d489594f1c406845939e19b668f3713613537beb4434a9d3cb5->enter($__internal_f58d0a1169786d489594f1c406845939e19b668f3713613537beb4434a9d3cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <div class=\"container\">

        <div class=\"center-div\">
            ";
        // line 19
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 20
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 25
        echo "            <div class=\"row\">
                ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 28
                echo "                        <div class=\"alert alert-info flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" role=\"alert\">
                            ";
                // line 29
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 36
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 38
        echo "                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_f58d0a1169786d489594f1c406845939e19b668f3713613537beb4434a9d3cb5->leave($__internal_f58d0a1169786d489594f1c406845939e19b668f3713613537beb4434a9d3cb5_prof);

    }

    // line 36
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_088ef99e2f45d1df43f6547374f072eb4f12f7518d27753d46587992443007b0 = $this->env->getExtension("native_profiler");
        $__internal_088ef99e2f45d1df43f6547374f072eb4f12f7518d27753d46587992443007b0->enter($__internal_088ef99e2f45d1df43f6547374f072eb4f12f7518d27753d46587992443007b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 37
        echo "                    ";
        
        $__internal_088ef99e2f45d1df43f6547374f072eb4f12f7518d27753d46587992443007b0->leave($__internal_088ef99e2f45d1df43f6547374f072eb4f12f7518d27753d46587992443007b0_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7012338bcc7fe863097fac5e9e630b4a40b88e96690e565c8ed0c805345a405e = $this->env->getExtension("native_profiler");
        $__internal_7012338bcc7fe863097fac5e9e630b4a40b88e96690e565c8ed0c805345a405e->enter($__internal_7012338bcc7fe863097fac5e9e630b4a40b88e96690e565c8ed0c805345a405e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7012338bcc7fe863097fac5e9e630b4a40b88e96690e565c8ed0c805345a405e->leave($__internal_7012338bcc7fe863097fac5e9e630b4a40b88e96690e565c8ed0c805345a405e_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d6c68477f0451f7c97ab10a28d94161f917457a9c07aaf01c275c39d0625ca82 = $this->env->getExtension("native_profiler");
        $__internal_d6c68477f0451f7c97ab10a28d94161f917457a9c07aaf01c275c39d0625ca82->enter($__internal_d6c68477f0451f7c97ab10a28d94161f917457a9c07aaf01c275c39d0625ca82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_d6c68477f0451f7c97ab10a28d94161f917457a9c07aaf01c275c39d0625ca82->leave($__internal_d6c68477f0451f7c97ab10a28d94161f917457a9c07aaf01c275c39d0625ca82_prof);

    }

    public function getTemplateName()
    {
        return "PointWebUserBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 47,  189 => 44,  182 => 37,  176 => 36,  164 => 38,  162 => 36,  157 => 33,  151 => 32,  142 => 29,  137 => 28,  132 => 27,  128 => 26,  125 => 25,  119 => 22,  115 => 21,  110 => 20,  108 => 19,  103 => 16,  97 => 15,  85 => 5,  77 => 48,  75 => 47,  71 => 45,  69 => 44,  67 => 15,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
