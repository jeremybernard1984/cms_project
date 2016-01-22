<?php

/* PointWebAppBundle:Default:index.html.twig */
class __TwigTemplate_2af478f75ca6fef2dc9d16fb486a335a95e8f77fe1927c4a894f2df974940d50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebAppBundle:Default:index.html.twig", 1);
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
        $__internal_3d9bb00e4c362ab5bcc9e66cb86f978ba103b15a20bb04f81a457b356094ca04 = $this->env->getExtension("native_profiler");
        $__internal_3d9bb00e4c362ab5bcc9e66cb86f978ba103b15a20bb04f81a457b356094ca04->enter($__internal_3d9bb00e4c362ab5bcc9e66cb86f978ba103b15a20bb04f81a457b356094ca04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d9bb00e4c362ab5bcc9e66cb86f978ba103b15a20bb04f81a457b356094ca04->leave($__internal_3d9bb00e4c362ab5bcc9e66cb86f978ba103b15a20bb04f81a457b356094ca04_prof);

    }

    // line 2
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_9dfb04ba9edcba07418ed647124b9434c2261fadc761f7c2ce73d3767b9ac307 = $this->env->getExtension("native_profiler");
        $__internal_9dfb04ba9edcba07418ed647124b9434c2261fadc761f7c2ce73d3767b9ac307->enter($__internal_9dfb04ba9edcba07418ed647124b9434c2261fadc761f7c2ce73d3767b9ac307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 3
        echo "    Bienvenue
";
        
        $__internal_9dfb04ba9edcba07418ed647124b9434c2261fadc761f7c2ce73d3767b9ac307->leave($__internal_9dfb04ba9edcba07418ed647124b9434c2261fadc761f7c2ce73d3767b9ac307_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Default:index.html.twig";
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
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block body_content %}*/
/*     Bienvenue*/
/* {% endblock %}*/
