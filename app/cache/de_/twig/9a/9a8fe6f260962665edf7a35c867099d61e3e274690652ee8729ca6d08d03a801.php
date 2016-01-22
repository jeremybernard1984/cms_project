<?php

/* PointWebAdminBundle:Default:index.html.twig */
class __TwigTemplate_dc3cb2fc9d66749411bd14942b3d92ad2e42011badd7113701290593bb996768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a541f8854f6d31893cd26c3bf537016b903426bd8638aa96e34964c3c12ce0e = $this->env->getExtension("native_profiler");
        $__internal_0a541f8854f6d31893cd26c3bf537016b903426bd8638aa96e34964c3c12ce0e->enter($__internal_0a541f8854f6d31893cd26c3bf537016b903426bd8638aa96e34964c3c12ce0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a541f8854f6d31893cd26c3bf537016b903426bd8638aa96e34964c3c12ce0e->leave($__internal_0a541f8854f6d31893cd26c3bf537016b903426bd8638aa96e34964c3c12ce0e_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_d5ca9df57c40ea2dc6aab75138e12e6171c7d46c3528d01b726cc48a8d047dbb = $this->env->getExtension("native_profiler");
        $__internal_d5ca9df57c40ea2dc6aab75138e12e6171c7d46c3528d01b726cc48a8d047dbb->enter($__internal_d5ca9df57c40ea2dc6aab75138e12e6171c7d46c3528d01b726cc48a8d047dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    Bienvenue dans la plate-forme d'administration de votre site.
";
        
        $__internal_d5ca9df57c40ea2dc6aab75138e12e6171c7d46c3528d01b726cc48a8d047dbb->leave($__internal_d5ca9df57c40ea2dc6aab75138e12e6171c7d46c3528d01b726cc48a8d047dbb_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     Bienvenue dans la plate-forme d'administration de votre site.*/
/* {% endblock %}*/
