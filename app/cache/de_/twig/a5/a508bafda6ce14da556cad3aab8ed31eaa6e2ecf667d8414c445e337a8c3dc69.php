<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_fff0d8c765332f091a449e80619c18a5647417693b0cc5bbd45f6d77bf8e611e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_94030ff48c6d296a741003af25c5e90549b94c121624521767e159d1aeb9fbd4 = $this->env->getExtension("native_profiler");
        $__internal_94030ff48c6d296a741003af25c5e90549b94c121624521767e159d1aeb9fbd4->enter($__internal_94030ff48c6d296a741003af25c5e90549b94c121624521767e159d1aeb9fbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94030ff48c6d296a741003af25c5e90549b94c121624521767e159d1aeb9fbd4->leave($__internal_94030ff48c6d296a741003af25c5e90549b94c121624521767e159d1aeb9fbd4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7775c6365f735f8f9fb8de0d6048cbb00d2ce2d947ffead1f8f42abdac622d98 = $this->env->getExtension("native_profiler");
        $__internal_7775c6365f735f8f9fb8de0d6048cbb00d2ce2d947ffead1f8f42abdac622d98->enter($__internal_7775c6365f735f8f9fb8de0d6048cbb00d2ce2d947ffead1f8f42abdac622d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7775c6365f735f8f9fb8de0d6048cbb00d2ce2d947ffead1f8f42abdac622d98->leave($__internal_7775c6365f735f8f9fb8de0d6048cbb00d2ce2d947ffead1f8f42abdac622d98_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
