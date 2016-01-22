<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_bb84f5f42725bea3d53b05eb10e611baf8180875e67c1d5d6a0028307ead90af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_512573f0f2d09bbe2a1a21905ec15b2f13566f0f3fdfa697ffbbb6ddb5f1a62a = $this->env->getExtension("native_profiler");
        $__internal_512573f0f2d09bbe2a1a21905ec15b2f13566f0f3fdfa697ffbbb6ddb5f1a62a->enter($__internal_512573f0f2d09bbe2a1a21905ec15b2f13566f0f3fdfa697ffbbb6ddb5f1a62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_512573f0f2d09bbe2a1a21905ec15b2f13566f0f3fdfa697ffbbb6ddb5f1a62a->leave($__internal_512573f0f2d09bbe2a1a21905ec15b2f13566f0f3fdfa697ffbbb6ddb5f1a62a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe83978e03a7ed318c2dda45a3957a950f8da9807db1f70129ec93aad455dc6b = $this->env->getExtension("native_profiler");
        $__internal_fe83978e03a7ed318c2dda45a3957a950f8da9807db1f70129ec93aad455dc6b->enter($__internal_fe83978e03a7ed318c2dda45a3957a950f8da9807db1f70129ec93aad455dc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_fe83978e03a7ed318c2dda45a3957a950f8da9807db1f70129ec93aad455dc6b->leave($__internal_fe83978e03a7ed318c2dda45a3957a950f8da9807db1f70129ec93aad455dc6b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
