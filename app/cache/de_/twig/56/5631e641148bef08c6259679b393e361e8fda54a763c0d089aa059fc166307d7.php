<?php

/* PointWebAppBundle::_pager_classic.html.twig */
class __TwigTemplate_c22064af28991526b058265b7eacad4c0d645f7120cf610372fa8e03d1754702 extends Twig_Template
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
        $__internal_9c5fee8abb0cbda9737b3c37ae1663124f568748d85a11d934512deede46b26e = $this->env->getExtension("native_profiler");
        $__internal_9c5fee8abb0cbda9737b3c37ae1663124f568748d85a11d934512deede46b26e->enter($__internal_9c5fee8abb0cbda9737b3c37ae1663124f568748d85a11d934512deede46b26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::_pager_classic.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "affiche", array())) {
            // line 2
            echo "
<div class=\"col-xs-12\" align=\"center\">
    <ul class=\"pagination\">
            ";
            // line 5
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) > 1)) {
                // line 6
                echo "                <li>
                    <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(                // line 8
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => 1))), "html", null, true);
                echo "\">Début</a>
                </li>
                <li>
                <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(                // line 12
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 1)))), "html", null, true);
                echo "\">«</a>
                </li>
            ";
            }
            // line 15
            echo "            ";
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 4), 1), min(($this->getAttribute(            // line 17
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 4), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 18
                echo "                    <li";
                if (($context["p"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()))) {
                    echo " class=\"active\"";
                }
                echo ">
                        <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(                // line 20
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => $context["p"]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a>
                    </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            ";
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count", array()))) {
                // line 24
                echo "                <li>
                    <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(                // line 26
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 1)))), "html", null, true);
                echo "\">»</a>
                </li>
                <li>
                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(                // line 30
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count", array())))), "html", null, true);
                echo "\">Fin</a>
                </li>
            ";
            }
            // line 33
            echo "    </ul>
</div>

";
        }
        
        $__internal_9c5fee8abb0cbda9737b3c37ae1663124f568748d85a11d934512deede46b26e->leave($__internal_9c5fee8abb0cbda9737b3c37ae1663124f568748d85a11d934512deede46b26e_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::_pager_classic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  89 => 30,  88 => 29,  82 => 26,  81 => 25,  78 => 24,  75 => 23,  64 => 20,  63 => 19,  56 => 18,  53 => 17,  50 => 16,  48 => 15,  42 => 12,  41 => 11,  35 => 8,  34 => 7,  31 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }
}
/* {% if pagination.affiche %}*/
/* */
/* <div class="col-xs-12" align="center">*/
/*     <ul class="pagination">*/
/*             {% if pagination.page>1 %}*/
/*                 <li>*/
/*                     <a href="{{ path(pagination.route,*/
/*                     pagination.route_params|merge({'page': 1 })) }}">Début</a>*/
/*                 </li>*/
/*                 <li>*/
/*                 <a href="{{ path(pagination.route,*/
/*                 pagination.route_params|merge({'page': pagination.page-1})) }}">«</a>*/
/*                 </li>*/
/*             {% endif %}*/
/*             {#display p numbers only from p-4 to p+4 but don't go <1 or >pages_count#}*/
/*             {% for p in range(max(pagination.page-4, 1),*/
/*             min(pagination.page+4, pagination.pages_count)) %}*/
/*                     <li{% if p == pagination.page %} class="active"{% endif %}>*/
/*                         <a href="{{ path(pagination.route,*/
/*                         pagination.route_params|merge({'page': p})) }}">{{ p }}</a>*/
/*                     </li>*/
/*             {% endfor %}*/
/*             {% if pagination.page<pagination.pages_count %}*/
/*                 <li>*/
/*                     <a href="{{ path(pagination.route,*/
/*                     pagination.route_params|merge({'page': pagination.page+1})) }}">»</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path(pagination.route,*/
/*                     pagination.route_params|merge({'page': pagination.pages_count})) }}">Fin</a>*/
/*                 </li>*/
/*             {% endif %}*/
/*     </ul>*/
/* </div>*/
/* */
/* {% endif %}*/
/* */