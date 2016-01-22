<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_fd21a62d19f5a0f9bebbb087bdcd07d6d1e9f40501122151c793f85cfcd8ab8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_177ac373c720751efa669aed0424d3132cefbe96d78c2c96392e5b5c5d4d056d = $this->env->getExtension("native_profiler");
        $__internal_177ac373c720751efa669aed0424d3132cefbe96d78c2c96392e5b5c5d4d056d->enter($__internal_177ac373c720751efa669aed0424d3132cefbe96d78c2c96392e5b5c5d4d056d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_177ac373c720751efa669aed0424d3132cefbe96d78c2c96392e5b5c5d4d056d->leave($__internal_177ac373c720751efa669aed0424d3132cefbe96d78c2c96392e5b5c5d4d056d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52c8629c7b126951533587f10e2e9a0295b249a2a62939ba12403c5bff47220d = $this->env->getExtension("native_profiler");
        $__internal_52c8629c7b126951533587f10e2e9a0295b249a2a62939ba12403c5bff47220d->enter($__internal_52c8629c7b126951533587f10e2e9a0295b249a2a62939ba12403c5bff47220d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_52c8629c7b126951533587f10e2e9a0295b249a2a62939ba12403c5bff47220d->leave($__internal_52c8629c7b126951533587f10e2e9a0295b249a2a62939ba12403c5bff47220d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
