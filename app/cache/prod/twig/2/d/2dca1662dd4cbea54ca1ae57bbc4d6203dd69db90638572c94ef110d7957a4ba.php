<?php

/* PointWebAppBundle:Default:index1.html.twig */
class __TwigTemplate_2dca1662dd4cbea54ca1ae57bbc4d6203dd69db90638572c94ef110d7957a4ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebAppBundle:Default:index1.html.twig", 1);
        $this->blocks = array(
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c76d707cc0f9f0776792a15bc58473883815a400d805826fde39632fdbb2f87d = $this->env->getExtension("native_profiler");
        $__internal_c76d707cc0f9f0776792a15bc58473883815a400d805826fde39632fdbb2f87d->enter($__internal_c76d707cc0f9f0776792a15bc58473883815a400d805826fde39632fdbb2f87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Default:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c76d707cc0f9f0776792a15bc58473883815a400d805826fde39632fdbb2f87d->leave($__internal_c76d707cc0f9f0776792a15bc58473883815a400d805826fde39632fdbb2f87d_prof);

    }

    // line 2
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_a7160e482db1be45f110c6671648fd8676a1acb1888a458312a9d06066f9b8be = $this->env->getExtension("native_profiler");
        $__internal_a7160e482db1be45f110c6671648fd8676a1acb1888a458312a9d06066f9b8be->enter($__internal_a7160e482db1be45f110c6671648fd8676a1acb1888a458312a9d06066f9b8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 3
        echo "    Bienvenue
";
        
        $__internal_a7160e482db1be45f110c6671648fd8676a1acb1888a458312a9d06066f9b8be->leave($__internal_a7160e482db1be45f110c6671648fd8676a1acb1888a458312a9d06066f9b8be_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Default:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
