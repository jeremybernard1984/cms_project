<?php

/* PointWebAppBundle:Default:index.html.twig */
class __TwigTemplate_c5be47c02a8caeeed5501c647b6126e6f32ad1e4f93bc56afe303adb4d33cfd2 extends Twig_Template
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
        $__internal_606e66be5dc37a5c0124eb1b672d7b44709c870e66decd38cfef591a15fc4b9f = $this->env->getExtension("native_profiler");
        $__internal_606e66be5dc37a5c0124eb1b672d7b44709c870e66decd38cfef591a15fc4b9f->enter($__internal_606e66be5dc37a5c0124eb1b672d7b44709c870e66decd38cfef591a15fc4b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_606e66be5dc37a5c0124eb1b672d7b44709c870e66decd38cfef591a15fc4b9f->leave($__internal_606e66be5dc37a5c0124eb1b672d7b44709c870e66decd38cfef591a15fc4b9f_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_ceadfcea3cfa50ee23c347e152e9690625727f85232c04f9cfd8aade53d849a7 = $this->env->getExtension("native_profiler");
        $__internal_ceadfcea3cfa50ee23c347e152e9690625727f85232c04f9cfd8aade53d849a7->enter($__internal_ceadfcea3cfa50ee23c347e152e9690625727f85232c04f9cfd8aade53d849a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebGalleryBundle:Default:gallerySliderHome", array("id" => "1")));
        // line 6
        echo "
";
        
        $__internal_ceadfcea3cfa50ee23c347e152e9690625727f85232c04f9cfd8aade53d849a7->leave($__internal_ceadfcea3cfa50ee23c347e152e9690625727f85232c04f9cfd8aade53d849a7_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_0f8d96dad4d23f3a1f336d800994ad64f08d32671228aab21bc24d56c2542905 = $this->env->getExtension("native_profiler");
        $__internal_0f8d96dad4d23f3a1f336d800994ad64f08d32671228aab21bc24d56c2542905->enter($__internal_0f8d96dad4d23f3a1f336d800994ad64f08d32671228aab21bc24d56c2542905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-md-8 col-sm-6\">
            ";
        // line 11
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebPageBundle:Default:homePage", array("id" => "1")));
        echo "
        </div>
        ";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebNewsBundle:Default:lastNews"));
        echo "
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 17
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebProductBundle:Default:categoriesThumbnails"));
        echo "
        </div>
    </div>
";
        
        $__internal_0f8d96dad4d23f3a1f336d800994ad64f08d32671228aab21bc24d56c2542905->leave($__internal_0f8d96dad4d23f3a1f336d800994ad64f08d32671228aab21bc24d56c2542905_prof);

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
        return array (  74 => 17,  67 => 13,  62 => 11,  58 => 9,  52 => 8,  44 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
/*     <div class="row">*/
/*         <div class="col-md-8 col-sm-6">*/
/*             {{ render(controller('PointWebPageBundle:Default:homePage',{'id': '1' })) }}*/
/*         </div>*/
/*         {{ render(controller('PointWebNewsBundle:Default:lastNews'))}}*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ render(controller('PointWebProductBundle:Default:categoriesThumbnails'))}}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
