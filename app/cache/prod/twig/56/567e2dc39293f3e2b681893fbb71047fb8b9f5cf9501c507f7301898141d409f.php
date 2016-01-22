<?php

/* PointWebUserBundle::base.html.twig */
class __TwigTemplate_141cecbd972e7202c89698b2559c688afd759cba458a5bdc966f9f2b06e159f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34e7ff0a877baef8977c873a2ae897d945f51d3a97287d9c238ba5a09fe608d4 = $this->env->getExtension("native_profiler");
        $__internal_34e7ff0a877baef8977c873a2ae897d945f51d3a97287d9c238ba5a09fe608d4->enter($__internal_34e7ff0a877baef8977c873a2ae897d945f51d3a97287d9c238ba5a09fe608d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebUserBundle::base.html.twig"));

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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAdminBundle:Default:headerAdmin"));
        echo "
</head>
<body>
<div id=\"wrapper\">



    <div class=\"container\">
        <div class=\"center-div\">
            ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 21
        echo "            <div class=\"row\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 23
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "                        <div class=\"alert alert-info flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" role=\"alert\">
                            ";
                // line 25
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 32
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 34
        echo "                </div>
            </div>
        </div>

    </div>
</div>
<!-- /#wrapper -->

";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "</body>
<footer>
    ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "</footer>
</html>";
        
        $__internal_34e7ff0a877baef8977c873a2ae897d945f51d3a97287d9c238ba5a09fe608d4->leave($__internal_34e7ff0a877baef8977c873a2ae897d945f51d3a97287d9c238ba5a09fe608d4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5f0cb71689e05c3ba12ba808933841c16b69b811c4ec79119da8648fdc0c5f6 = $this->env->getExtension("native_profiler");
        $__internal_e5f0cb71689e05c3ba12ba808933841c16b69b811c4ec79119da8648fdc0c5f6->enter($__internal_e5f0cb71689e05c3ba12ba808933841c16b69b811c4ec79119da8648fdc0c5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_e5f0cb71689e05c3ba12ba808933841c16b69b811c4ec79119da8648fdc0c5f6->leave($__internal_e5f0cb71689e05c3ba12ba808933841c16b69b811c4ec79119da8648fdc0c5f6_prof);

    }

    // line 32
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa8aa38242f6550c39efc534e1d4a329d405a3afcac7d9b127fb36b2fbd3696c = $this->env->getExtension("native_profiler");
        $__internal_fa8aa38242f6550c39efc534e1d4a329d405a3afcac7d9b127fb36b2fbd3696c->enter($__internal_fa8aa38242f6550c39efc534e1d4a329d405a3afcac7d9b127fb36b2fbd3696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 33
        echo "                    ";
        
        $__internal_fa8aa38242f6550c39efc534e1d4a329d405a3afcac7d9b127fb36b2fbd3696c->leave($__internal_fa8aa38242f6550c39efc534e1d4a329d405a3afcac7d9b127fb36b2fbd3696c_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f47f767f84131f883f254991cf40fbf9647b82fc1ba1478a3fe2d61eaf0c32e = $this->env->getExtension("native_profiler");
        $__internal_7f47f767f84131f883f254991cf40fbf9647b82fc1ba1478a3fe2d61eaf0c32e->enter($__internal_7f47f767f84131f883f254991cf40fbf9647b82fc1ba1478a3fe2d61eaf0c32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebUserBundle::base.html.twig", 43)->display($context);
        
        $__internal_7f47f767f84131f883f254991cf40fbf9647b82fc1ba1478a3fe2d61eaf0c32e->leave($__internal_7f47f767f84131f883f254991cf40fbf9647b82fc1ba1478a3fe2d61eaf0c32e_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4deb5dfe90ee1d1e220cf651c19bf2448dbdb317ce1bb4835a70ade0c68cbefa = $this->env->getExtension("native_profiler");
        $__internal_4deb5dfe90ee1d1e220cf651c19bf2448dbdb317ce1bb4835a70ade0c68cbefa->enter($__internal_4deb5dfe90ee1d1e220cf651c19bf2448dbdb317ce1bb4835a70ade0c68cbefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "
    ";
        
        $__internal_4deb5dfe90ee1d1e220cf651c19bf2448dbdb317ce1bb4835a70ade0c68cbefa->leave($__internal_4deb5dfe90ee1d1e220cf651c19bf2448dbdb317ce1bb4835a70ade0c68cbefa_prof);

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
        return array (  175 => 48,  169 => 47,  161 => 43,  155 => 42,  148 => 33,  142 => 32,  130 => 5,  122 => 50,  120 => 47,  116 => 45,  114 => 42,  104 => 34,  102 => 32,  97 => 29,  91 => 28,  82 => 25,  77 => 24,  72 => 23,  68 => 22,  65 => 21,  59 => 18,  55 => 17,  50 => 16,  48 => 15,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}ESPACE D'ADMINISTRATION{% endblock %}</title>*/
/*     {{ render(controller("PointWebAdminBundle:Default:headerAdmin")) }}*/
/* </head>*/
/* <body>*/
/* <div id="wrapper">*/
/* */
/* */
/* */
/*     <div class="container">*/
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
/* </div>*/
/* <!-- /#wrapper -->*/
/* */
/* {% block javascripts %}*/
/*     {% include 'PointWebAdminBundle::_js.html.twig' %}*/
/* {% endblock %}*/
/* </body>*/
/* <footer>*/
/*     {% block footer %}*/
/* */
/*     {% endblock %}*/
/* </footer>*/
/* </html>*/
