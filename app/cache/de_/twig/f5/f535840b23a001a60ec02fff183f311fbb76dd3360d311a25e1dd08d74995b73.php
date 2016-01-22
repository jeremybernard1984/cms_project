<?php

/* PointWebUserBundle:Default:index.html.twig */
class __TwigTemplate_c77e615d199a3cd560a30c5107f785cd7fa8bac1f3f18bc2bbe321a2e9fb8bcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5f612c36ce840ee668eb7d2e942159bcc1707deab3382e73e58c9224b6a8e4a = $this->env->getExtension("native_profiler");
        $__internal_d5f612c36ce840ee668eb7d2e942159bcc1707deab3382e73e58c9224b6a8e4a->enter($__internal_d5f612c36ce840ee668eb7d2e942159bcc1707deab3382e73e58c9224b6a8e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebUserBundle:Default:index.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) ? $context["folders"] : $this->getContext($context, "folders")));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["folder"], "name", array()), "html", null, true);
            echo "
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["folder"], "pictures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 4
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "
        ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "description", array()), "html", null, true);
                echo "
        <img src=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "\"/>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d5f612c36ce840ee668eb7d2e942159bcc1707deab3382e73e58c9224b6a8e4a->leave($__internal_d5f612c36ce840ee668eb7d2e942159bcc1707deab3382e73e58c9224b6a8e4a_prof);

    }

    public function getTemplateName()
    {
        return "PointWebUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 5,  35 => 4,  31 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for folder in folders %}*/
/*     {{ folder.name }}*/
/*     {% for picture in folder.pictures %}*/
/*         {{ picture.name }}*/
/*         {{ picture.description }}*/
/*         <img src="{{ asset(picture.getWebPath(base)) }}" alt="{{ picture.name }}"/>*/
/*         {% endfor %}*/
/* {% endfor %}*/
/* */
