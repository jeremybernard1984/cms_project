<?php

/* PointWebAppBundle:Default:sitemap.html.twig */
class __TwigTemplate_4965c087896ce8af18743a17bebed61c249471ae517d959316a2d2e52d36d749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebAppBundle:Default:sitemap.html.twig", 1);
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
        $__internal_2d8e24223224cad19edb08b8977d3f9a2dff20e3e3a9fe34aa5abaf8da97470b = $this->env->getExtension("native_profiler");
        $__internal_2d8e24223224cad19edb08b8977d3f9a2dff20e3e3a9fe34aa5abaf8da97470b->enter($__internal_2d8e24223224cad19edb08b8977d3f9a2dff20e3e3a9fe34aa5abaf8da97470b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Default:sitemap.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d8e24223224cad19edb08b8977d3f9a2dff20e3e3a9fe34aa5abaf8da97470b->leave($__internal_2d8e24223224cad19edb08b8977d3f9a2dff20e3e3a9fe34aa5abaf8da97470b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_9da3d0e42e34372bd23c6e63b2b0acc1b0a9476b17d06faa69620834297466c1 = $this->env->getExtension("native_profiler");
        $__internal_9da3d0e42e34372bd23c6e63b2b0acc1b0a9476b17d06faa69620834297466c1->enter($__internal_9da3d0e42e34372bd23c6e63b2b0acc1b0a9476b17d06faa69620834297466c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9da3d0e42e34372bd23c6e63b2b0acc1b0a9476b17d06faa69620834297466c1->leave($__internal_9da3d0e42e34372bd23c6e63b2b0acc1b0a9476b17d06faa69620834297466c1_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Default:sitemap.html.twig";
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
