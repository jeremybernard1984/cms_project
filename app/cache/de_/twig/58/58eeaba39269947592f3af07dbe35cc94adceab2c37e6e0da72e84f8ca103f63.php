<?php

/* PointWebNewsBundle:Default:index.html.twig */
class __TwigTemplate_d35bc1d00a53e1a34052fab32aa2d6c3e6395b885a9b11e2352402ee5de038d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebNewsBundle:Default:index.html.twig", 1);
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
        $__internal_c56fafdbe5094f9ad0c5dd1f4e1b7117319cb62ce0b10bd09b3c63bd06eaea0f = $this->env->getExtension("native_profiler");
        $__internal_c56fafdbe5094f9ad0c5dd1f4e1b7117319cb62ce0b10bd09b3c63bd06eaea0f->enter($__internal_c56fafdbe5094f9ad0c5dd1f4e1b7117319cb62ce0b10bd09b3c63bd06eaea0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebNewsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c56fafdbe5094f9ad0c5dd1f4e1b7117319cb62ce0b10bd09b3c63bd06eaea0f->leave($__internal_c56fafdbe5094f9ad0c5dd1f4e1b7117319cb62ce0b10bd09b3c63bd06eaea0f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_a45aab41f95980921b59d7bf0851b579bb434bfba05cfd598059299fb2976ba1 = $this->env->getExtension("native_profiler");
        $__internal_a45aab41f95980921b59d7bf0851b579bb434bfba05cfd598059299fb2976ba1->enter($__internal_a45aab41f95980921b59d7bf0851b579bb434bfba05cfd598059299fb2976ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "Listing des news :</br>
<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listnews"]) ? $context["listnews"] : $this->getContext($context, "listnews")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "        <li>
            ID : ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</br>
            Titre : ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</br>
            Description : ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
            echo "</br>
            Date de création : le ";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "createDate", array()), "d-m-Y"), "html", null, true);
            echo "</br>
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Voir le détail</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
";
        
        $__internal_a45aab41f95980921b59d7bf0851b579bb434bfba05cfd598059299fb2976ba1->leave($__internal_a45aab41f95980921b59d7bf0851b579bb434bfba05cfd598059299fb2976ba1_prof);

    }

    public function getTemplateName()
    {
        return "PointWebNewsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/* Listing des news :</br>*/
/* <ul>*/
/*     {% for item in listnews %}*/
/*         <li>*/
/*             ID : {{ item.id }}</br>*/
/*             Titre : {{ item.title }}</br>*/
/*             Description : {{ item.content }}</br>*/
/*             Date de création : le {{ item.createDate|date('d-m-Y') }}</br>*/
/*             <a href="{{ path('news_show',  { 'id': item.id }) }}">Voir le détail</a>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* {% endblock %}*/
