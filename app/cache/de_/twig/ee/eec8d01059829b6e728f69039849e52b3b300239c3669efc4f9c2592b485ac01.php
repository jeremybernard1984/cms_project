<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_36909144beb9e322a82cdc93bde75a6834c4fb84a5f23c9aa46fb6d1f6659694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_2bce12785dc2d30bab9bd264e7a70880164fea18563acdbfded93b509a7a9267 = $this->env->getExtension("native_profiler");
        $__internal_2bce12785dc2d30bab9bd264e7a70880164fea18563acdbfded93b509a7a9267->enter($__internal_2bce12785dc2d30bab9bd264e7a70880164fea18563acdbfded93b509a7a9267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bce12785dc2d30bab9bd264e7a70880164fea18563acdbfded93b509a7a9267->leave($__internal_2bce12785dc2d30bab9bd264e7a70880164fea18563acdbfded93b509a7a9267_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43b38224f0caafbee0b789336dd7b9a9b122697c70aa2c47ccc671e5a2ea8207 = $this->env->getExtension("native_profiler");
        $__internal_43b38224f0caafbee0b789336dd7b9a9b122697c70aa2c47ccc671e5a2ea8207->enter($__internal_43b38224f0caafbee0b789336dd7b9a9b122697c70aa2c47ccc671e5a2ea8207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_43b38224f0caafbee0b789336dd7b9a9b122697c70aa2c47ccc671e5a2ea8207->leave($__internal_43b38224f0caafbee0b789336dd7b9a9b122697c70aa2c47ccc671e5a2ea8207_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
