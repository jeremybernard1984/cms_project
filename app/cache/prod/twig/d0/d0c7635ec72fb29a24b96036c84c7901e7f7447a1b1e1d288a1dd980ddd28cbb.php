<?php

/* PointWebAppBundle::_slider.html.twig */
class __TwigTemplate_1aeb9675a25f03fb3386662b386c8b7a4e7e83fba05d52fd47592103675537ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebAppBundle::_slider.html.twig", 1);
        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79941b16519afa2e56a2dc8ea19233c4d9c932fc4357f687a4724ed57eaf2000 = $this->env->getExtension("native_profiler");
        $__internal_79941b16519afa2e56a2dc8ea19233c4d9c932fc4357f687a4724ed57eaf2000->enter($__internal_79941b16519afa2e56a2dc8ea19233c4d9c932fc4357f687a4724ed57eaf2000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::_slider.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79941b16519afa2e56a2dc8ea19233c4d9c932fc4357f687a4724ed57eaf2000->leave($__internal_79941b16519afa2e56a2dc8ea19233c4d9c932fc4357f687a4724ed57eaf2000_prof);

    }

    // line 3
    public function block_slider($context, array $blocks = array())
    {
        $__internal_2c44b7bcad06883ab7d688f218cf085baa770f7f01fd6c8568986b35874bdf23 = $this->env->getExtension("native_profiler");
        $__internal_2c44b7bcad06883ab7d688f218cf085baa770f7f01fd6c8568986b35874bdf23->enter($__internal_2c44b7bcad06883ab7d688f218cf085baa770f7f01fd6c8568986b35874bdf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 4
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebGalleryBundle:Default:gallerySliderHome", array("id" => "1")));
        // line 7
        echo "
        ";
        
        $__internal_2c44b7bcad06883ab7d688f218cf085baa770f7f01fd6c8568986b35874bdf23->leave($__internal_2c44b7bcad06883ab7d688f218cf085baa770f7f01fd6c8568986b35874bdf23_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* */
/*         {% block slider %}*/
/*             {{ render(controller('PointWebGalleryBundle:Default:gallerySliderHome',{*/
/*                 'id': '1'*/
/*             }))*/
/*             }}*/
/*         {% endblock %}*/
/* */
/* */
