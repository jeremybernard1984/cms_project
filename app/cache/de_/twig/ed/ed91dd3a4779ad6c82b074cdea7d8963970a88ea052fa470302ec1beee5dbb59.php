<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_8bf3b0f4144d3d8098cb9df685a179f27e87a421ddc052aa6579a8c0f9faf684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_1ac86bf9001ccff49497acec73b5a8de2ef01f7a4670677427248a4b399dcc2b = $this->env->getExtension("native_profiler");
        $__internal_1ac86bf9001ccff49497acec73b5a8de2ef01f7a4670677427248a4b399dcc2b->enter($__internal_1ac86bf9001ccff49497acec73b5a8de2ef01f7a4670677427248a4b399dcc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ac86bf9001ccff49497acec73b5a8de2ef01f7a4670677427248a4b399dcc2b->leave($__internal_1ac86bf9001ccff49497acec73b5a8de2ef01f7a4670677427248a4b399dcc2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4b77270cc10ac4469abfaad2bb355a710dd76fed29bc9877ae37b436ed3f0b8 = $this->env->getExtension("native_profiler");
        $__internal_d4b77270cc10ac4469abfaad2bb355a710dd76fed29bc9877ae37b436ed3f0b8->enter($__internal_d4b77270cc10ac4469abfaad2bb355a710dd76fed29bc9877ae37b436ed3f0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d4b77270cc10ac4469abfaad2bb355a710dd76fed29bc9877ae37b436ed3f0b8->leave($__internal_d4b77270cc10ac4469abfaad2bb355a710dd76fed29bc9877ae37b436ed3f0b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
