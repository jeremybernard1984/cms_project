<?php

/* PointWebAppBundle:Default:index.html.twig */
class __TwigTemplate_0c0716a58b8b60da28d2bc6dedb74f50cc4702fe35457764a8d69381ab668c63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebAppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f6bc20de8f873b1401185eaa90c5fc72be17891a508a11c0143191b2b75a14c = $this->env->getExtension("native_profiler");
        $__internal_4f6bc20de8f873b1401185eaa90c5fc72be17891a508a11c0143191b2b75a14c->enter($__internal_4f6bc20de8f873b1401185eaa90c5fc72be17891a508a11c0143191b2b75a14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f6bc20de8f873b1401185eaa90c5fc72be17891a508a11c0143191b2b75a14c->leave($__internal_4f6bc20de8f873b1401185eaa90c5fc72be17891a508a11c0143191b2b75a14c_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_eebf9e0e5c3a609d5f8ce246ccb352dbd23469710d0fee96d5405f4a7b0c5711 = $this->env->getExtension("native_profiler");
        $__internal_eebf9e0e5c3a609d5f8ce246ccb352dbd23469710d0fee96d5405f4a7b0c5711->enter($__internal_eebf9e0e5c3a609d5f8ce246ccb352dbd23469710d0fee96d5405f4a7b0c5711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebGalleryBundle:Default:gallerySliderHome", array("id" => "1")));
        // line 6
        echo "
";
        
        $__internal_eebf9e0e5c3a609d5f8ce246ccb352dbd23469710d0fee96d5405f4a7b0c5711->leave($__internal_eebf9e0e5c3a609d5f8ce246ccb352dbd23469710d0fee96d5405f4a7b0c5711_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c965992f446d17c86657e9046d9e7498a4367b8205d9ff8062810d7ba6d363e = $this->env->getExtension("native_profiler");
        $__internal_1c965992f446d17c86657e9046d9e7498a4367b8205d9ff8062810d7ba6d363e->enter($__internal_1c965992f446d17c86657e9046d9e7498a4367b8205d9ff8062810d7ba6d363e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebPageBundle:Default:pageDetail", array("id" => "1")));
        // line 12
        echo "
    ";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebProductBundle:Default:categoriesThumbnails"));
        // line 14
        echo "

";
        
        $__internal_1c965992f446d17c86657e9046d9e7498a4367b8205d9ff8062810d7ba6d363e->leave($__internal_1c965992f446d17c86657e9046d9e7498a4367b8205d9ff8062810d7ba6d363e_prof);

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
        return array (  66 => 14,  64 => 13,  61 => 12,  58 => 9,  52 => 8,  44 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block slider %}*/
/*     {{ render(controller('PointWebGalleryBundle:Default:gallerySliderHome',{*/
/*         'id': '1'*/
/*     }))*/
/*     }}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     {{ render(controller('PointWebPageBundle:Default:pageDetail',{*/
/*         'id': '1'*/
/*     }))*/
/*     }}*/
/*     {{ render(controller('PointWebProductBundle:Default:categoriesThumbnails'))*/
/*     }}*/
/* */
/* {% endblock %}*/
/* */
