<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_eebb87d321b01ead2294891714bda09e75a41b257ac039baa7b3c91a185a2c6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_710753a5a8a644f138694dce3c409658735e2c18eb2c8d7e2bddb066830e5d36 = $this->env->getExtension("native_profiler");
        $__internal_710753a5a8a644f138694dce3c409658735e2c18eb2c8d7e2bddb066830e5d36->enter($__internal_710753a5a8a644f138694dce3c409658735e2c18eb2c8d7e2bddb066830e5d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_710753a5a8a644f138694dce3c409658735e2c18eb2c8d7e2bddb066830e5d36->leave($__internal_710753a5a8a644f138694dce3c409658735e2c18eb2c8d7e2bddb066830e5d36_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d6b89d61db9e05c285bf3750a5d6905e2974376f1071955a42e4e896d017e84 = $this->env->getExtension("native_profiler");
        $__internal_8d6b89d61db9e05c285bf3750a5d6905e2974376f1071955a42e4e896d017e84->enter($__internal_8d6b89d61db9e05c285bf3750a5d6905e2974376f1071955a42e4e896d017e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8d6b89d61db9e05c285bf3750a5d6905e2974376f1071955a42e4e896d017e84->leave($__internal_8d6b89d61db9e05c285bf3750a5d6905e2974376f1071955a42e4e896d017e84_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
