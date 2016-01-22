<?php

/* @PointWebApp/Default/sitemap.html.twig */
class __TwigTemplate_cb154be6aa62a655dd4452b1f5114861efe5c0e34563ef3d00bb6585f0a3e96f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "@PointWebApp/Default/sitemap.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a4bd647a6e8010e040da3231683ed03dd838eb88ccbcf2e677672a5e358140c = $this->env->getExtension("native_profiler");
        $__internal_9a4bd647a6e8010e040da3231683ed03dd838eb88ccbcf2e677672a5e358140c->enter($__internal_9a4bd647a6e8010e040da3231683ed03dd838eb88ccbcf2e677672a5e358140c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebApp/Default/sitemap.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a4bd647a6e8010e040da3231683ed03dd838eb88ccbcf2e677672a5e358140c->leave($__internal_9a4bd647a6e8010e040da3231683ed03dd838eb88ccbcf2e677672a5e358140c_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7503e24a1bde2a32d7f726197ba70db4e96abed4e9c121c0eaf8396a75fd0a6f = $this->env->getExtension("native_profiler");
        $__internal_7503e24a1bde2a32d7f726197ba70db4e96abed4e9c121c0eaf8396a75fd0a6f->enter($__internal_7503e24a1bde2a32d7f726197ba70db4e96abed4e9c121c0eaf8396a75fd0a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<ul>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["routes"]) ? $context["routes"] : $this->getContext($context, "routes")));
        foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
            // line 5
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["route"], "pattern", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
";
        
        $__internal_7503e24a1bde2a32d7f726197ba70db4e96abed4e9c121c0eaf8396a75fd0a6f->leave($__internal_7503e24a1bde2a32d7f726197ba70db4e96abed4e9c121c0eaf8396a75fd0a6f_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebApp/Default/sitemap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/* <ul>*/
/*     {% for route in routes %}*/
/*         <li>{{ route.pattern }}</li>*/
/*     {% endfor %}*/
/* </ul>*/
/* {% endblock %}*/
