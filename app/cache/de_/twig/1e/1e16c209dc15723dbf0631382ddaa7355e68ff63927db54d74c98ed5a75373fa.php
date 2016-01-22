<?php

/* PointWebFaqBundle:Default:index.html.twig */
class __TwigTemplate_33b6550a8a3985127e953d7bacce1b7f6f9471f6a3d30c89f61ba4497834154e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebFaqBundle:Default:index.html.twig", 1);
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
        $__internal_3b93a52fac4b2c9461e903f2ac53a8883de7e0a01789be05ec7d1037298bb4a9 = $this->env->getExtension("native_profiler");
        $__internal_3b93a52fac4b2c9461e903f2ac53a8883de7e0a01789be05ec7d1037298bb4a9->enter($__internal_3b93a52fac4b2c9461e903f2ac53a8883de7e0a01789be05ec7d1037298bb4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebFaqBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b93a52fac4b2c9461e903f2ac53a8883de7e0a01789be05ec7d1037298bb4a9->leave($__internal_3b93a52fac4b2c9461e903f2ac53a8883de7e0a01789be05ec7d1037298bb4a9_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_4828ad6cc682602dcc8ce7abcf96e6e593a35f854e43b0b84290c3c7eb07adb1 = $this->env->getExtension("native_profiler");
        $__internal_4828ad6cc682602dcc8ce7abcf96e6e593a35f854e43b0b84290c3c7eb07adb1->enter($__internal_4828ad6cc682602dcc8ce7abcf96e6e593a35f854e43b0b84290c3c7eb07adb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "Listing :</br>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        ID : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " / Question : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "question", array()), "html", null, true);
            echo "</br>
        Réponse : ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "answer", array()), "html", null, true);
            echo "</br>
        </br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4828ad6cc682602dcc8ce7abcf96e6e593a35f854e43b0b84290c3c7eb07adb1->leave($__internal_4828ad6cc682602dcc8ce7abcf96e6e593a35f854e43b0b84290c3c7eb07adb1_prof);

    }

    public function getTemplateName()
    {
        return "PointWebFaqBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/* Listing :</br>*/
/*     {% for item in list %}*/
/*         ID : {{ item.id }} / Question : {{ item.question }}</br>*/
/*         Réponse : {{ item.answer }}</br>*/
/*         </br>*/
/* {% endfor %}*/
/* {% endblock %}*/
