<?php

/* @PointWebApp/Default/index.html.twig */
class __TwigTemplate_7c6b2b6ce35797bb02e2f18ada402c41583dcec3f27921a9447113aaf7267ac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "@PointWebApp/Default/index.html.twig", 1);
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
        $__internal_4f3b57479006521472db1f7f2fc730175a82e5603962a0b687e20b6a7e8c9d73 = $this->env->getExtension("native_profiler");
        $__internal_4f3b57479006521472db1f7f2fc730175a82e5603962a0b687e20b6a7e8c9d73->enter($__internal_4f3b57479006521472db1f7f2fc730175a82e5603962a0b687e20b6a7e8c9d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebApp/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f3b57479006521472db1f7f2fc730175a82e5603962a0b687e20b6a7e8c9d73->leave($__internal_4f3b57479006521472db1f7f2fc730175a82e5603962a0b687e20b6a7e8c9d73_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_4708d6da6fb63c6d6ac9d903db67f4db8046f8b680b23569343215941280ceeb = $this->env->getExtension("native_profiler");
        $__internal_4708d6da6fb63c6d6ac9d903db67f4db8046f8b680b23569343215941280ceeb->enter($__internal_4708d6da6fb63c6d6ac9d903db67f4db8046f8b680b23569343215941280ceeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebGalleryBundle:Default:gallerySliderHome", array("id" => "1")));
        // line 6
        echo "
";
        
        $__internal_4708d6da6fb63c6d6ac9d903db67f4db8046f8b680b23569343215941280ceeb->leave($__internal_4708d6da6fb63c6d6ac9d903db67f4db8046f8b680b23569343215941280ceeb_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_da0c10d07bce36ba5213e2d008831e8b857810949d6836315a60b08d5f5e623e = $this->env->getExtension("native_profiler");
        $__internal_da0c10d07bce36ba5213e2d008831e8b857810949d6836315a60b08d5f5e623e->enter($__internal_da0c10d07bce36ba5213e2d008831e8b857810949d6836315a60b08d5f5e623e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_da0c10d07bce36ba5213e2d008831e8b857810949d6836315a60b08d5f5e623e->leave($__internal_da0c10d07bce36ba5213e2d008831e8b857810949d6836315a60b08d5f5e623e_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebApp/Default/index.html.twig";
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
