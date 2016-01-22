<?php

/* PointWebAppBundle:Default:index.html.twig */
class __TwigTemplate_c27ad4d45f6f55eed709eee716a5a80b5ba85d01cc2a20bf169c7c93a1e0c664 extends Twig_Template
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
        $__internal_efe2f184f1d0df567c41b6adf3fdd3993f82b8407f40b33203700d028192d364 = $this->env->getExtension("native_profiler");
        $__internal_efe2f184f1d0df567c41b6adf3fdd3993f82b8407f40b33203700d028192d364->enter($__internal_efe2f184f1d0df567c41b6adf3fdd3993f82b8407f40b33203700d028192d364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efe2f184f1d0df567c41b6adf3fdd3993f82b8407f40b33203700d028192d364->leave($__internal_efe2f184f1d0df567c41b6adf3fdd3993f82b8407f40b33203700d028192d364_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_0e1b75e9e9db2f42ad7eb863558fb9af2f7de26eaa438559960280b7b7a05229 = $this->env->getExtension("native_profiler");
        $__internal_0e1b75e9e9db2f42ad7eb863558fb9af2f7de26eaa438559960280b7b7a05229->enter($__internal_0e1b75e9e9db2f42ad7eb863558fb9af2f7de26eaa438559960280b7b7a05229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebGalleryBundle:Default:gallerySliderHome", array("id" => "1")));
        // line 6
        echo "
";
        
        $__internal_0e1b75e9e9db2f42ad7eb863558fb9af2f7de26eaa438559960280b7b7a05229->leave($__internal_0e1b75e9e9db2f42ad7eb863558fb9af2f7de26eaa438559960280b7b7a05229_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_df00a1d184b7ab8fb14ca8332aac9f034a6c51ad1ee47b709cdc49874d11a41f = $this->env->getExtension("native_profiler");
        $__internal_df00a1d184b7ab8fb14ca8332aac9f034a6c51ad1ee47b709cdc49874d11a41f->enter($__internal_df00a1d184b7ab8fb14ca8332aac9f034a6c51ad1ee47b709cdc49874d11a41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_df00a1d184b7ab8fb14ca8332aac9f034a6c51ad1ee47b709cdc49874d11a41f->leave($__internal_df00a1d184b7ab8fb14ca8332aac9f034a6c51ad1ee47b709cdc49874d11a41f_prof);

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
