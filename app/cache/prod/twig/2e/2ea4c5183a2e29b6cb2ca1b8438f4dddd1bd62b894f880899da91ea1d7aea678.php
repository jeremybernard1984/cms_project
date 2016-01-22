<?php

/* PointWebAdminBundle:Default:index.html.twig */
class __TwigTemplate_313ee4d9ef11aacaec8a8810e9e03eb4392d6126c95eaecf594e310d2702ca04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2073df5de1a2e97ef671ce20fb2719a052ee7fd7ad12b7b979b89fc88a20807e = $this->env->getExtension("native_profiler");
        $__internal_2073df5de1a2e97ef671ce20fb2719a052ee7fd7ad12b7b979b89fc88a20807e->enter($__internal_2073df5de1a2e97ef671ce20fb2719a052ee7fd7ad12b7b979b89fc88a20807e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2073df5de1a2e97ef671ce20fb2719a052ee7fd7ad12b7b979b89fc88a20807e->leave($__internal_2073df5de1a2e97ef671ce20fb2719a052ee7fd7ad12b7b979b89fc88a20807e_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_029d9219208b8ce827dac28787a450618a9f38f6180bb70144fb41f3e26c2fa1 = $this->env->getExtension("native_profiler");
        $__internal_029d9219208b8ce827dac28787a450618a9f38f6180bb70144fb41f3e26c2fa1->enter($__internal_029d9219208b8ce827dac28787a450618a9f38f6180bb70144fb41f3e26c2fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    Bienvenue dans la plate-forme d'administration de votre site.
";
        
        $__internal_029d9219208b8ce827dac28787a450618a9f38f6180bb70144fb41f3e26c2fa1->leave($__internal_029d9219208b8ce827dac28787a450618a9f38f6180bb70144fb41f3e26c2fa1_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Default:index.html.twig";
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
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     Bienvenue dans la plate-forme d'administration de votre site.*/
/* {% endblock %}*/
