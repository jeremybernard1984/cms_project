<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_2f1ca68a5e668ba0600029fdaa1660d56b2d1fb381cd4c25945681cd7273c14a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_3f95d0175db759d2eef8df26f40ea5ffada22921e8b2f09d6ff5e093533a6f92 = $this->env->getExtension("native_profiler");
        $__internal_3f95d0175db759d2eef8df26f40ea5ffada22921e8b2f09d6ff5e093533a6f92->enter($__internal_3f95d0175db759d2eef8df26f40ea5ffada22921e8b2f09d6ff5e093533a6f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f95d0175db759d2eef8df26f40ea5ffada22921e8b2f09d6ff5e093533a6f92->leave($__internal_3f95d0175db759d2eef8df26f40ea5ffada22921e8b2f09d6ff5e093533a6f92_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2949ec19f46caaace8b8deaf089db15b679ae993dba805686c8aedbad1360f0 = $this->env->getExtension("native_profiler");
        $__internal_e2949ec19f46caaace8b8deaf089db15b679ae993dba805686c8aedbad1360f0->enter($__internal_e2949ec19f46caaace8b8deaf089db15b679ae993dba805686c8aedbad1360f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e2949ec19f46caaace8b8deaf089db15b679ae993dba805686c8aedbad1360f0->leave($__internal_e2949ec19f46caaace8b8deaf089db15b679ae993dba805686c8aedbad1360f0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
