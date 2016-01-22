<?php

/* PointWebUserBundle::base.html.twig */
class __TwigTemplate_be7ba2fc18fa97473b773de5979bcb74d7cfed9c896752507a07915243ed085a extends Twig_Template
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
        $__internal_bd4e62836b24a1c7dc3896f133aa5901ee2bd8343054f441f02938740d7afa6e = $this->env->getExtension("native_profiler");
        $__internal_bd4e62836b24a1c7dc3896f133aa5901ee2bd8343054f441f02938740d7afa6e->enter($__internal_bd4e62836b24a1c7dc3896f133aa5901ee2bd8343054f441f02938740d7afa6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebUserBundle::base.html.twig"));

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
        
        $__internal_bd4e62836b24a1c7dc3896f133aa5901ee2bd8343054f441f02938740d7afa6e->leave($__internal_bd4e62836b24a1c7dc3896f133aa5901ee2bd8343054f441f02938740d7afa6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e95833fd480005dfbffb2d2f6ebabeb70b25cc3767757da9c2800bf025a20b42 = $this->env->getExtension("native_profiler");
        $__internal_e95833fd480005dfbffb2d2f6ebabeb70b25cc3767757da9c2800bf025a20b42->enter($__internal_e95833fd480005dfbffb2d2f6ebabeb70b25cc3767757da9c2800bf025a20b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_e95833fd480005dfbffb2d2f6ebabeb70b25cc3767757da9c2800bf025a20b42->leave($__internal_e95833fd480005dfbffb2d2f6ebabeb70b25cc3767757da9c2800bf025a20b42_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_d73eecc0a716e1e92b9251312a4c91c24cdcd9dcd0fecc81d88738810602a7e4 = $this->env->getExtension("native_profiler");
        $__internal_d73eecc0a716e1e92b9251312a4c91c24cdcd9dcd0fecc81d88738810602a7e4->enter($__internal_d73eecc0a716e1e92b9251312a4c91c24cdcd9dcd0fecc81d88738810602a7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "                    ";
            $context['_parent'] = $context;
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
        
        $__internal_d73eecc0a716e1e92b9251312a4c91c24cdcd9dcd0fecc81d88738810602a7e4->leave($__internal_d73eecc0a716e1e92b9251312a4c91c24cdcd9dcd0fecc81d88738810602a7e4_prof);

    }

    // line 36
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80cef9367082cc3f095a0508cb33f7f211621d42e403b085132983667277bcae = $this->env->getExtension("native_profiler");
        $__internal_80cef9367082cc3f095a0508cb33f7f211621d42e403b085132983667277bcae->enter($__internal_80cef9367082cc3f095a0508cb33f7f211621d42e403b085132983667277bcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 37
        echo "                    ";
        
        $__internal_80cef9367082cc3f095a0508cb33f7f211621d42e403b085132983667277bcae->leave($__internal_80cef9367082cc3f095a0508cb33f7f211621d42e403b085132983667277bcae_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e207237ce906a0b417c1a115f956c409b5466943bce410fc1026f56af52f357 = $this->env->getExtension("native_profiler");
        $__internal_0e207237ce906a0b417c1a115f956c409b5466943bce410fc1026f56af52f357->enter($__internal_0e207237ce906a0b417c1a115f956c409b5466943bce410fc1026f56af52f357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0e207237ce906a0b417c1a115f956c409b5466943bce410fc1026f56af52f357->leave($__internal_0e207237ce906a0b417c1a115f956c409b5466943bce410fc1026f56af52f357_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_618f8d7968cca6b3e42bb40b36762c039c8266bfd467f7117459b8d3815d87f4 = $this->env->getExtension("native_profiler");
        $__internal_618f8d7968cca6b3e42bb40b36762c039c8266bfd467f7117459b8d3815d87f4->enter($__internal_618f8d7968cca6b3e42bb40b36762c039c8266bfd467f7117459b8d3815d87f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_618f8d7968cca6b3e42bb40b36762c039c8266bfd467f7117459b8d3815d87f4->leave($__internal_618f8d7968cca6b3e42bb40b36762c039c8266bfd467f7117459b8d3815d87f4_prof);

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
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}Connexion{% endblock %}</title>*/
/*     <script type="text/javascript" src="{{ asset('jquery-ui-1.11.4.custom/external/jquery/jquery.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('jquery-ui-1.11.4.custom/jquery-ui.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('jquery-ui-1.11.4.custom/jquery-ui.min.css') }}" type="text/css" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('css/admin.css') }}" type="text/css" media="all"/>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/* </head>*/
/* <body>*/
/* {% block body %}*/
/*     <div class="container">*/
/* */
/*         <div class="center-div">*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% endif %}*/
/*             <div class="row">*/
/*                 {% for type, messages in app.session.flashbag.all() %}*/
/*                     {% for message in messages %}*/
/*                         <div class="alert alert-info flash-{{ type }}" role="alert">*/
/*                             {{ message }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-xs-12">*/
/*                     {% block fos_user_content %}*/
/*                     {% endblock fos_user_content %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* <footer>*/
/*     {% block footer %}{% endblock %}*/
/* </footer>*/
/* </html>*/
