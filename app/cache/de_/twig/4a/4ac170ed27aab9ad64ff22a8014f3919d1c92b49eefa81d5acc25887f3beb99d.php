<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_892ff89dbd697c9c9f9cad9971053ee58538fee46e374333536f5311c9a8e3b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_57694ef2572726304b2acf6e41efee9d76ebd5de1eb546e8f4e0505d949c7bc3 = $this->env->getExtension("native_profiler");
        $__internal_57694ef2572726304b2acf6e41efee9d76ebd5de1eb546e8f4e0505d949c7bc3->enter($__internal_57694ef2572726304b2acf6e41efee9d76ebd5de1eb546e8f4e0505d949c7bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57694ef2572726304b2acf6e41efee9d76ebd5de1eb546e8f4e0505d949c7bc3->leave($__internal_57694ef2572726304b2acf6e41efee9d76ebd5de1eb546e8f4e0505d949c7bc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c39cc6fa9a7c282bc0ce47beadd55dfbafee89f9d430b97b3ae6f091aa878d0 = $this->env->getExtension("native_profiler");
        $__internal_2c39cc6fa9a7c282bc0ce47beadd55dfbafee89f9d430b97b3ae6f091aa878d0->enter($__internal_2c39cc6fa9a7c282bc0ce47beadd55dfbafee89f9d430b97b3ae6f091aa878d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2c39cc6fa9a7c282bc0ce47beadd55dfbafee89f9d430b97b3ae6f091aa878d0->leave($__internal_2c39cc6fa9a7c282bc0ce47beadd55dfbafee89f9d430b97b3ae6f091aa878d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
