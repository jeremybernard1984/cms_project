<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_c18dc011647235460ae1fd31c5a0bf7770621beb478a592e333f5efc79d8cd4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_70a23535ff9f45b4e2ff45b9cfe8924114ba6a9e01898c8bc7adff1f8b5da0c5 = $this->env->getExtension("native_profiler");
        $__internal_70a23535ff9f45b4e2ff45b9cfe8924114ba6a9e01898c8bc7adff1f8b5da0c5->enter($__internal_70a23535ff9f45b4e2ff45b9cfe8924114ba6a9e01898c8bc7adff1f8b5da0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70a23535ff9f45b4e2ff45b9cfe8924114ba6a9e01898c8bc7adff1f8b5da0c5->leave($__internal_70a23535ff9f45b4e2ff45b9cfe8924114ba6a9e01898c8bc7adff1f8b5da0c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_384cc9d602098060bef89ea9aafe8bb3ea30847dcb53c45559611c12d4fb0c35 = $this->env->getExtension("native_profiler");
        $__internal_384cc9d602098060bef89ea9aafe8bb3ea30847dcb53c45559611c12d4fb0c35->enter($__internal_384cc9d602098060bef89ea9aafe8bb3ea30847dcb53c45559611c12d4fb0c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_384cc9d602098060bef89ea9aafe8bb3ea30847dcb53c45559611c12d4fb0c35->leave($__internal_384cc9d602098060bef89ea9aafe8bb3ea30847dcb53c45559611c12d4fb0c35_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
