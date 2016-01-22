<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_ccd28670a1a0c9a85d75d3ba6331b89cdf5d0e67cbb4c7c358c096848af05b16 extends Twig_Template
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
        $__internal_a97fbaa58406d0b4d67d47f5e0ec56966f4ce3e6fc82f617c90fcfee36b89839 = $this->env->getExtension("native_profiler");
        $__internal_a97fbaa58406d0b4d67d47f5e0ec56966f4ce3e6fc82f617c90fcfee36b89839->enter($__internal_a97fbaa58406d0b4d67d47f5e0ec56966f4ce3e6fc82f617c90fcfee36b89839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_a97fbaa58406d0b4d67d47f5e0ec56966f4ce3e6fc82f617c90fcfee36b89839->leave($__internal_a97fbaa58406d0b4d67d47f5e0ec56966f4ce3e6fc82f617c90fcfee36b89839_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5008d4e346ebf0aeecb6ff07370c15e817de2ae60b3b4d9df4abec32c7262d08 = $this->env->getExtension("native_profiler");
        $__internal_5008d4e346ebf0aeecb6ff07370c15e817de2ae60b3b4d9df4abec32c7262d08->enter($__internal_5008d4e346ebf0aeecb6ff07370c15e817de2ae60b3b4d9df4abec32c7262d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_5008d4e346ebf0aeecb6ff07370c15e817de2ae60b3b4d9df4abec32c7262d08->leave($__internal_5008d4e346ebf0aeecb6ff07370c15e817de2ae60b3b4d9df4abec32c7262d08_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45f8e42be3bb35e10c3c4689f0d280c57593494e4f40cc6657b7e3f5dca09505 = $this->env->getExtension("native_profiler");
        $__internal_45f8e42be3bb35e10c3c4689f0d280c57593494e4f40cc6657b7e3f5dca09505->enter($__internal_45f8e42be3bb35e10c3c4689f0d280c57593494e4f40cc6657b7e3f5dca09505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_45f8e42be3bb35e10c3c4689f0d280c57593494e4f40cc6657b7e3f5dca09505->leave($__internal_45f8e42be3bb35e10c3c4689f0d280c57593494e4f40cc6657b7e3f5dca09505_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d8ba53928ae49ffdec8f57728546c1add8e60cba464ee2db8d98ca65c65923a = $this->env->getExtension("native_profiler");
        $__internal_4d8ba53928ae49ffdec8f57728546c1add8e60cba464ee2db8d98ca65c65923a->enter($__internal_4d8ba53928ae49ffdec8f57728546c1add8e60cba464ee2db8d98ca65c65923a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_4d8ba53928ae49ffdec8f57728546c1add8e60cba464ee2db8d98ca65c65923a->leave($__internal_4d8ba53928ae49ffdec8f57728546c1add8e60cba464ee2db8d98ca65c65923a_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27c2d269ef17d9d24fc40f1d1171888ce09a40acd4b20396c82168dd3a81942d = $this->env->getExtension("native_profiler");
        $__internal_27c2d269ef17d9d24fc40f1d1171888ce09a40acd4b20396c82168dd3a81942d->enter($__internal_27c2d269ef17d9d24fc40f1d1171888ce09a40acd4b20396c82168dd3a81942d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_27c2d269ef17d9d24fc40f1d1171888ce09a40acd4b20396c82168dd3a81942d->leave($__internal_27c2d269ef17d9d24fc40f1d1171888ce09a40acd4b20396c82168dd3a81942d_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title 'CoreSphere Console' %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/coresphereconsole/css/base.css') }}" type="text/css" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body '' %}*/
/*         {% block javascripts %}*/
/*             {# Load jQuery from Google CDN with a local fallback when not laded yet #}*/
/*             <script>*/
/*             window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"><\/script>')*/
/*             </script>*/
/*             <script>*/
/*             window.jQuery || document.write("<script src=\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\"><\/script>");*/
/*             </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
