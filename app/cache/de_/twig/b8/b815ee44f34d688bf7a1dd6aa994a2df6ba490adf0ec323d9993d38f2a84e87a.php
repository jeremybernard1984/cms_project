<?php

/* PointWebAppBundle::_slider.html.twig */
class __TwigTemplate_462823acbdaa4d85e030cf35046d224f1a717b040e9441df19330e233627970d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_500ed0077834cfe3f717657c8c8bbf1442066c49fb22f1fbf1736719d597e146 = $this->env->getExtension("native_profiler");
        $__internal_500ed0077834cfe3f717657c8c8bbf1442066c49fb22f1fbf1736719d597e146->enter($__internal_500ed0077834cfe3f717657c8c8bbf1442066c49fb22f1fbf1736719d597e146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::_slider.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebGalleryBundle:Default:gallerySliderHome", array("id" => "1")));
        
        $__internal_500ed0077834cfe3f717657c8c8bbf1442066c49fb22f1fbf1736719d597e146->leave($__internal_500ed0077834cfe3f717657c8c8bbf1442066c49fb22f1fbf1736719d597e146_prof);

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
        return array (  22 => 1,);
    }
}
/* {{ render(controller('PointWebGalleryBundle:Default:gallerySliderHome',{*/
/*     'id': '1'*/
/* }))*/
/* }}*/
