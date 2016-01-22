<?php

/* PointWebAppBundle:Default:index.html.twig */
class __TwigTemplate_c46a3e3d970e16c0ae8377c1d198b925dd2111340bc0a615df56693234f08063 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebGalleryBundle:Default:gallerySliderHome", array("id" => "1")));
        // line 6
        echo "
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
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
        return array (  59 => 17,  52 => 13,  47 => 11,  43 => 9,  40 => 8,  35 => 6,  32 => 3,  29 => 2,  11 => 1,);
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
