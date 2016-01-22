<?php

/* :default:index.html.twig */
class __TwigTemplate_90b6a854579530d78b38f7b44d7d0a53205b3f4f33dd4163b088a5c1158e4933 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9850c262233d4dd98c05b5e079672029abe70e3a4979da21128c361931ba1c23 = $this->env->getExtension("native_profiler");
        $__internal_9850c262233d4dd98c05b5e079672029abe70e3a4979da21128c361931ba1c23->enter($__internal_9850c262233d4dd98c05b5e079672029abe70e3a4979da21128c361931ba1c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9850c262233d4dd98c05b5e079672029abe70e3a4979da21128c361931ba1c23->leave($__internal_9850c262233d4dd98c05b5e079672029abe70e3a4979da21128c361931ba1c23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ddf17fd72c1272e16fff909530486a9850560ac759e97cd090c939c1ad2a5c9 = $this->env->getExtension("native_profiler");
        $__internal_6ddf17fd72c1272e16fff909530486a9850560ac759e97cd090c939c1ad2a5c9->enter($__internal_6ddf17fd72c1272e16fff909530486a9850560ac759e97cd090c939c1ad2a5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_6ddf17fd72c1272e16fff909530486a9850560ac759e97cd090c939c1ad2a5c9->leave($__internal_6ddf17fd72c1272e16fff909530486a9850560ac759e97cd090c939c1ad2a5c9_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Homepage.*/
/* {% endblock %}*/
/* */
