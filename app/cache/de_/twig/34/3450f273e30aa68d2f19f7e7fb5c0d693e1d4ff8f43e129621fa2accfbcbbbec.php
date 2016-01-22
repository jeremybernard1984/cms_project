<?php

/* PointWebMapBundle:Default:index.html.twig */
class __TwigTemplate_22e8422ae8d3ca882412de3f0f3167d2e9851c8868191fe9ab012a61daf57769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebMapBundle:Default:index.html.twig", 1);
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
        $__internal_a0c56bf817f4929183ca111de3d4d880a0616714c0c6403e4ad8dd02ace7d414 = $this->env->getExtension("native_profiler");
        $__internal_a0c56bf817f4929183ca111de3d4d880a0616714c0c6403e4ad8dd02ace7d414->enter($__internal_a0c56bf817f4929183ca111de3d4d880a0616714c0c6403e4ad8dd02ace7d414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebMapBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c56bf817f4929183ca111de3d4d880a0616714c0c6403e4ad8dd02ace7d414->leave($__internal_a0c56bf817f4929183ca111de3d4d880a0616714c0c6403e4ad8dd02ace7d414_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9a73ad581f5c17596f7c7fcc76eea23be69f0f80928f0eeb3171347b962a817 = $this->env->getExtension("native_profiler");
        $__internal_c9a73ad581f5c17596f7c7fcc76eea23be69f0f80928f0eeb3171347b962a817->enter($__internal_c9a73ad581f5c17596f7c7fcc76eea23be69f0f80928f0eeb3171347b962a817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c9a73ad581f5c17596f7c7fcc76eea23be69f0f80928f0eeb3171347b962a817->leave($__internal_c9a73ad581f5c17596f7c7fcc76eea23be69f0f80928f0eeb3171347b962a817_prof);

    }

    public function getTemplateName()
    {
        return "PointWebMapBundle:Default:index.html.twig";
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
