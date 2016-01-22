<?php

/* @PointWebApp/_slider.html.twig */
class __TwigTemplate_3a430b5333d682c0a0b4143b1fa23ff738c1854d24b64d2aa397149943b73daf extends Twig_Template
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
        $__internal_e37569c2e7eda0edee59c3f500eaee6593fdaf5f9c7a4a8af9163ceba163c289 = $this->env->getExtension("native_profiler");
        $__internal_e37569c2e7eda0edee59c3f500eaee6593fdaf5f9c7a4a8af9163ceba163c289->enter($__internal_e37569c2e7eda0edee59c3f500eaee6593fdaf5f9c7a4a8af9163ceba163c289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebApp/_slider.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebGalleryBundle:Default:gallerySliderHome", array("id" => "1")));
        
        $__internal_e37569c2e7eda0edee59c3f500eaee6593fdaf5f9c7a4a8af9163ceba163c289->leave($__internal_e37569c2e7eda0edee59c3f500eaee6593fdaf5f9c7a4a8af9163ceba163c289_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebApp/_slider.html.twig";
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
