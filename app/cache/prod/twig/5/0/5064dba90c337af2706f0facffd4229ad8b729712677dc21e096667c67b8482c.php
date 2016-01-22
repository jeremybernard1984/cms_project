<?php

/* PointWebNewsBundle:News:pagination.html.twig */
class __TwigTemplate_5064dba90c337af2706f0facffd4229ad8b729712677dc21e096667c67b8482c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ed80187d31bcef3540bd877e0684a4d465017259b7753a6d6f4b42134e03ba6 = $this->env->getExtension("native_profiler");
        $__internal_3ed80187d31bcef3540bd877e0684a4d465017259b7753a6d6f4b42134e03ba6->enter($__internal_3ed80187d31bcef3540bd877e0684a4d465017259b7753a6d6f4b42134e03ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebNewsBundle:News:pagination.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content_right', $context, $blocks);
        
        $__internal_3ed80187d31bcef3540bd877e0684a4d465017259b7753a6d6f4b42134e03ba6->leave($__internal_3ed80187d31bcef3540bd877e0684a4d465017259b7753a6d6f4b42134e03ba6_prof);

    }

    public function block_content_right($context, array $blocks = array())
    {
        $__internal_655e5b0673d0ce936a7ba258cede4f63170ca277de21ab64828509dbaa4696b2 = $this->env->getExtension("native_profiler");
        $__internal_655e5b0673d0ce936a7ba258cede4f63170ca277de21ab64828509dbaa4696b2->enter($__internal_655e5b0673d0ce936a7ba258cede4f63170ca277de21ab64828509dbaa4696b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 3
        echo "    <div class=\"pagination\">
        <div class=\"pagination-buttons\">
            ";
        // line 5
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) > 1)) {
            // line 6
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 7
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => 1))), "html", null, true);
            echo "\"><<</a>
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 9
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1)))), "html", null, true);
            echo "\"><</a>
            ";
        }
        // line 11
        echo "            ";
        // line 12
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 4), 1), min(($this->getAttribute(        // line 13
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 4), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count", array()))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 14
            echo "                <a";
            if (($context["p"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()))) {
                echo " class=\"current-page\"";
            }
            // line 15
            echo "                        href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 16
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => $context["p"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            ";
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count", array()))) {
            // line 19
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 20
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 1)))), "html", null, true);
            echo "\">></a>
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 22
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count", array())))), "html", null, true);
            echo "\">>></a>
            ";
        }
        // line 24
        echo "        </div>
    </div>
";
        
        $__internal_655e5b0673d0ce936a7ba258cede4f63170ca277de21ab64828509dbaa4696b2->leave($__internal_655e5b0673d0ce936a7ba258cede4f63170ca277de21ab64828509dbaa4696b2_prof);

    }

    public function getTemplateName()
    {
        return "PointWebNewsBundle:News:pagination.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  91 => 22,  90 => 21,  86 => 20,  84 => 19,  81 => 18,  71 => 16,  69 => 15,  64 => 14,  61 => 13,  58 => 12,  56 => 11,  51 => 9,  50 => 8,  46 => 7,  44 => 6,  42 => 5,  38 => 3,  26 => 2,  23 => 1,);
    }
}
