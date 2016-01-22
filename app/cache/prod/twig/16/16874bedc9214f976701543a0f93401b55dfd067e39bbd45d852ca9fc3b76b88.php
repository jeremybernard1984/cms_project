<?php

/* PointWebFaqBundle:Default:index.html.twig */
class __TwigTemplate_a1f00de60c76138266b39220dd379eb38448ab1541e6a1ba95fe92b70b329e24 extends Twig_Template
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
        $__internal_6ce6f35ad4086e03a88b71f1aeef936885966065843259be19066da1b4a16adb = $this->env->getExtension("native_profiler");
        $__internal_6ce6f35ad4086e03a88b71f1aeef936885966065843259be19066da1b4a16adb->enter($__internal_6ce6f35ad4086e03a88b71f1aeef936885966065843259be19066da1b4a16adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebFaqBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ce6f35ad4086e03a88b71f1aeef936885966065843259be19066da1b4a16adb->leave($__internal_6ce6f35ad4086e03a88b71f1aeef936885966065843259be19066da1b4a16adb_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef6456db75c01aa009e65b83051913455af0159ad2e3e577878d919a840bf0cb = $this->env->getExtension("native_profiler");
        $__internal_ef6456db75c01aa009e65b83051913455af0159ad2e3e577878d919a840bf0cb->enter($__internal_ef6456db75c01aa009e65b83051913455af0159ad2e3e577878d919a840bf0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ef6456db75c01aa009e65b83051913455af0159ad2e3e577878d919a840bf0cb->leave($__internal_ef6456db75c01aa009e65b83051913455af0159ad2e3e577878d919a840bf0cb_prof);

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
