<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_bdbd8e0cccc86e31162bce2b3f3337b741112bdebbf12af1a63a3d6d2a39cc28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_3dad41dd26fb9291c5a46b4772228fec1cd90cc46afea1e7699f98eeb6e52e6c = $this->env->getExtension("native_profiler");
        $__internal_3dad41dd26fb9291c5a46b4772228fec1cd90cc46afea1e7699f98eeb6e52e6c->enter($__internal_3dad41dd26fb9291c5a46b4772228fec1cd90cc46afea1e7699f98eeb6e52e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dad41dd26fb9291c5a46b4772228fec1cd90cc46afea1e7699f98eeb6e52e6c->leave($__internal_3dad41dd26fb9291c5a46b4772228fec1cd90cc46afea1e7699f98eeb6e52e6c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f66faa886ad453e56c2bfd3bfe50797de38912d9d62dd4e019cccfb11fa40c86 = $this->env->getExtension("native_profiler");
        $__internal_f66faa886ad453e56c2bfd3bfe50797de38912d9d62dd4e019cccfb11fa40c86->enter($__internal_f66faa886ad453e56c2bfd3bfe50797de38912d9d62dd4e019cccfb11fa40c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f66faa886ad453e56c2bfd3bfe50797de38912d9d62dd4e019cccfb11fa40c86->leave($__internal_f66faa886ad453e56c2bfd3bfe50797de38912d9d62dd4e019cccfb11fa40c86_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
