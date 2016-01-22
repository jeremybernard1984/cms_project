<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_683ef7ff69f954eb7780847da0188f1eb828d759be9cf5eb054fc12673c89076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27283e0734f8fcad4198053f2f8e809e9398f970f0fa871c8c1f1bcf7cf20c6a = $this->env->getExtension("native_profiler");
        $__internal_27283e0734f8fcad4198053f2f8e809e9398f970f0fa871c8c1f1bcf7cf20c6a->enter($__internal_27283e0734f8fcad4198053f2f8e809e9398f970f0fa871c8c1f1bcf7cf20c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27283e0734f8fcad4198053f2f8e809e9398f970f0fa871c8c1f1bcf7cf20c6a->leave($__internal_27283e0734f8fcad4198053f2f8e809e9398f970f0fa871c8c1f1bcf7cf20c6a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6663d9e3fbe7967ebce160f295742bc2300cac568809449be6cd2213cd99eaba = $this->env->getExtension("native_profiler");
        $__internal_6663d9e3fbe7967ebce160f295742bc2300cac568809449be6cd2213cd99eaba->enter($__internal_6663d9e3fbe7967ebce160f295742bc2300cac568809449be6cd2213cd99eaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_6663d9e3fbe7967ebce160f295742bc2300cac568809449be6cd2213cd99eaba->leave($__internal_6663d9e3fbe7967ebce160f295742bc2300cac568809449be6cd2213cd99eaba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
