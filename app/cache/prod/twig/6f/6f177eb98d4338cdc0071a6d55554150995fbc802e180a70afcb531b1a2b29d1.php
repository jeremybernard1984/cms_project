<?php

/* PointWebAppBundle:Default:index.html.twig */
class __TwigTemplate_dc21cf3a0dfae79dee09bb08d724e5b04de30abd2d0a20a10d22a55b7a40e99d extends Twig_Template
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
        $__internal_26dadf31e1e377a508fc68f38e176f0ac39e6670ef3b3cc53e619d3e83eb7634 = $this->env->getExtension("native_profiler");
        $__internal_26dadf31e1e377a508fc68f38e176f0ac39e6670ef3b3cc53e619d3e83eb7634->enter($__internal_26dadf31e1e377a508fc68f38e176f0ac39e6670ef3b3cc53e619d3e83eb7634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26dadf31e1e377a508fc68f38e176f0ac39e6670ef3b3cc53e619d3e83eb7634->leave($__internal_26dadf31e1e377a508fc68f38e176f0ac39e6670ef3b3cc53e619d3e83eb7634_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_560af26bab07873d0fbdd4570b77b84d4cfc37e5c79737a333ee10733e19cead = $this->env->getExtension("native_profiler");
        $__internal_560af26bab07873d0fbdd4570b77b84d4cfc37e5c79737a333ee10733e19cead->enter($__internal_560af26bab07873d0fbdd4570b77b84d4cfc37e5c79737a333ee10733e19cead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebGalleryBundle:Default:gallerySliderHome", array("id" => "1")));
        // line 6
        echo "
";
        
        $__internal_560af26bab07873d0fbdd4570b77b84d4cfc37e5c79737a333ee10733e19cead->leave($__internal_560af26bab07873d0fbdd4570b77b84d4cfc37e5c79737a333ee10733e19cead_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_202880fb80b09870366c9c5373c16277bb1905c143ac88a1c15e7213b921293b = $this->env->getExtension("native_profiler");
        $__internal_202880fb80b09870366c9c5373c16277bb1905c143ac88a1c15e7213b921293b->enter($__internal_202880fb80b09870366c9c5373c16277bb1905c143ac88a1c15e7213b921293b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_202880fb80b09870366c9c5373c16277bb1905c143ac88a1c15e7213b921293b->leave($__internal_202880fb80b09870366c9c5373c16277bb1905c143ac88a1c15e7213b921293b_prof);

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
