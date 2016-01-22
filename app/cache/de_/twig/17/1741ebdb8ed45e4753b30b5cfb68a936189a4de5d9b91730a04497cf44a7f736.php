<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_4554f624cc95fb182ac2f22ed093089f868186104364454e826176ee977e554b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_078e8446f4c0786f3134547cedb8188b4f53fdab06d475cfc4415caf943b98ee = $this->env->getExtension("native_profiler");
        $__internal_078e8446f4c0786f3134547cedb8188b4f53fdab06d475cfc4415caf943b98ee->enter($__internal_078e8446f4c0786f3134547cedb8188b4f53fdab06d475cfc4415caf943b98ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_078e8446f4c0786f3134547cedb8188b4f53fdab06d475cfc4415caf943b98ee->leave($__internal_078e8446f4c0786f3134547cedb8188b4f53fdab06d475cfc4415caf943b98ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a529119064528a3d72f025bec2fdcb45d3b8a8b080c205728b0c6f5bba8a0c66 = $this->env->getExtension("native_profiler");
        $__internal_a529119064528a3d72f025bec2fdcb45d3b8a8b080c205728b0c6f5bba8a0c66->enter($__internal_a529119064528a3d72f025bec2fdcb45d3b8a8b080c205728b0c6f5bba8a0c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a529119064528a3d72f025bec2fdcb45d3b8a8b080c205728b0c6f5bba8a0c66->leave($__internal_a529119064528a3d72f025bec2fdcb45d3b8a8b080c205728b0c6f5bba8a0c66_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
