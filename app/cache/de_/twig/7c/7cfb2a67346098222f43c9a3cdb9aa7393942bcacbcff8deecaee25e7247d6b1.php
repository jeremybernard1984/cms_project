<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_bc8ac139f68a96b8ab667713c591925e0ec2cd1a194d405c760e2929da4bd2f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_8214e573274d37d49f378638a4736ea2a11a55cd5783af8d826261b3b4e6a034 = $this->env->getExtension("native_profiler");
        $__internal_8214e573274d37d49f378638a4736ea2a11a55cd5783af8d826261b3b4e6a034->enter($__internal_8214e573274d37d49f378638a4736ea2a11a55cd5783af8d826261b3b4e6a034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8214e573274d37d49f378638a4736ea2a11a55cd5783af8d826261b3b4e6a034->leave($__internal_8214e573274d37d49f378638a4736ea2a11a55cd5783af8d826261b3b4e6a034_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f8aa46a05c7e9204d28a1a2aa382dbc0254b10d88e207ccc48df168350e913f = $this->env->getExtension("native_profiler");
        $__internal_4f8aa46a05c7e9204d28a1a2aa382dbc0254b10d88e207ccc48df168350e913f->enter($__internal_4f8aa46a05c7e9204d28a1a2aa382dbc0254b10d88e207ccc48df168350e913f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_4f8aa46a05c7e9204d28a1a2aa382dbc0254b10d88e207ccc48df168350e913f->leave($__internal_4f8aa46a05c7e9204d28a1a2aa382dbc0254b10d88e207ccc48df168350e913f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
