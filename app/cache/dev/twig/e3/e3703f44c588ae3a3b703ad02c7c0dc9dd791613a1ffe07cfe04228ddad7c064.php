<?php

/* PointWebAppBundle::_pager.html.twig */
class __TwigTemplate_c382473b761db44bd2a5491bea57988861fff5bdf8c34fd936dfbc7273066698 extends Twig_Template
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
        // line 1
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "affiche", array())) {
            // line 2
            echo "
<div class=\"col-xs-12\" align=\"center\">
    <ul class=\"pagination\">
            ";
            // line 5
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) > 1)) {
                // line 6
                echo "                <li>
                    <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), twig_array_merge($this->getAttribute(                // line 8
(isset($context["pagination"]) ? $context["pagination"] : null), "route_params", array()), array("page" => 1, "id" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "id", array())))), "html", null, true);
                echo "\">Début</a>
                </li>
                <li>
                <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), twig_array_merge($this->getAttribute(                // line 12
(isset($context["pagination"]) ? $context["pagination"] : null), "route_params", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) - 1), "id" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "id", array())))), "html", null, true);
                echo "\">«</a>
                </li>
            ";
            }
            // line 15
            echo "            ";
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) - 4), 1), min(($this->getAttribute(            // line 17
(isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) + 4), $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "pages_count", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 18
                echo "                    <li";
                if (($context["p"] == $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()))) {
                    echo " class=\"active\"";
                }
                echo ">
                        <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), twig_array_merge($this->getAttribute(                // line 20
(isset($context["pagination"]) ? $context["pagination"] : null), "route_params", array()), array("page" => $context["p"], "id" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "id", array())))), "html", null, true);
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
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) < $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "pages_count", array()))) {
                // line 24
                echo "                <li>
                    <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), twig_array_merge($this->getAttribute(                // line 26
(isset($context["pagination"]) ? $context["pagination"] : null), "route_params", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "page", array()) + 1), "id" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "id", array())))), "html", null, true);
                echo "\">»</a>
                </li>
                <li>
                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "route", array()), twig_array_merge($this->getAttribute(                // line 30
(isset($context["pagination"]) ? $context["pagination"] : null), "route_params", array()), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "pages_count", array()), "id" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "id", array())))), "html", null, true);
                echo "\">Fin</a>
                </li>
            ";
            }
            // line 33
            echo "    </ul>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::_pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  86 => 30,  85 => 29,  79 => 26,  78 => 25,  75 => 24,  72 => 23,  61 => 20,  60 => 19,  53 => 18,  50 => 17,  47 => 16,  45 => 15,  39 => 12,  38 => 11,  32 => 8,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if pagination.affiche %}*/
/* */
/* <div class="col-xs-12" align="center">*/
/*     <ul class="pagination">*/
/*             {% if pagination.page>1 %}*/
/*                 <li>*/
/*                     <a href="{{ path(pagination.route,*/
/*                     pagination.route_params|merge({'page': 1, 'id': pagination.id })) }}">Début</a>*/
/*                 </li>*/
/*                 <li>*/
/*                 <a href="{{ path(pagination.route,*/
/*                 pagination.route_params|merge({'page': pagination.page-1, 'id': pagination.id})) }}">«</a>*/
/*                 </li>*/
/*             {% endif %}*/
/*             {#display p numbers only from p-4 to p+4 but don't go <1 or >pages_count#}*/
/*             {% for p in range(max(pagination.page-4, 1),*/
/*             min(pagination.page+4, pagination.pages_count)) %}*/
/*                     <li{% if p == pagination.page %} class="active"{% endif %}>*/
/*                         <a href="{{ path(pagination.route,*/
/*                         pagination.route_params|merge({'page': p, 'id': pagination.id})) }}">{{ p }}</a>*/
/*                     </li>*/
/*             {% endfor %}*/
/*             {% if pagination.page<pagination.pages_count %}*/
/*                 <li>*/
/*                     <a href="{{ path(pagination.route,*/
/*                     pagination.route_params|merge({'page': pagination.page+1, 'id': pagination.id})) }}">»</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path(pagination.route,*/
/*                     pagination.route_params|merge({'page': pagination.pages_count, 'id': pagination.id})) }}">Fin</a>*/
/*                 </li>*/
/*             {% endif %}*/
/*     </ul>*/
/* </div>*/
/* */
/* {% endif %}*/
/* */
