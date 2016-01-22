<?php

/* PointWebAdminBundle::_pager.html.twig */
class __TwigTemplate_2a2d8ebe121b0cb94d792d8540e8e6576db4c33cb04bb46cf0e67c3e97ad754d extends Twig_Template
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
        $__internal_678ebbb29f72935cf9802d4b110e826035506994852caf24207386592aa2b550 = $this->env->getExtension("native_profiler");
        $__internal_678ebbb29f72935cf9802d4b110e826035506994852caf24207386592aa2b550->enter($__internal_678ebbb29f72935cf9802d4b110e826035506994852caf24207386592aa2b550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::_pager.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "affiche", array())) {
            // line 2
            $this->displayBlock('content_right', $context, $blocks);
        }
        
        $__internal_678ebbb29f72935cf9802d4b110e826035506994852caf24207386592aa2b550->leave($__internal_678ebbb29f72935cf9802d4b110e826035506994852caf24207386592aa2b550_prof);

    }

    public function block_content_right($context, array $blocks = array())
    {
        $__internal_64672143c3ee6eff010399ec8636a064632539ac27baeb8e6f62d19ae347aef4 = $this->env->getExtension("native_profiler");
        $__internal_64672143c3ee6eff010399ec8636a064632539ac27baeb8e6f62d19ae347aef4->enter($__internal_64672143c3ee6eff010399ec8636a064632539ac27baeb8e6f62d19ae347aef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 3
        echo "<div class=\"col-xs-12\" align=\"center\">
    <ul class=\"pagination\">
            ";
        // line 5
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) > 1)) {
            // line 6
            echo "                <li>
                    <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 8
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => 1))), "html", null, true);
            echo "\">Début</a>
                </li>
                <li>
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 12
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
        $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) - 4), 1), min(($this->getAttribute(        // line 17
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 20
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 26
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "page", array()) + 1)))), "html", null, true);
            echo "\">»</a>
                </li>
                <li>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route", array()), twig_array_merge($this->getAttribute(            // line 30
(isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "route_params", array()), array("page" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pages_count", array())))), "html", null, true);
            echo "\">Fin</a>
                </li>
            ";
        }
        // line 33
        echo "    </ul>
</div>
";
        
        $__internal_64672143c3ee6eff010399ec8636a064632539ac27baeb8e6f62d19ae347aef4->leave($__internal_64672143c3ee6eff010399ec8636a064632539ac27baeb8e6f62d19ae347aef4_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle::_pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  102 => 30,  101 => 29,  95 => 26,  94 => 25,  91 => 24,  88 => 23,  77 => 20,  76 => 19,  69 => 18,  66 => 17,  63 => 16,  61 => 15,  55 => 12,  54 => 11,  48 => 8,  47 => 7,  44 => 6,  42 => 5,  38 => 3,  25 => 2,  23 => 1,);
    }
}
/* {% if pagination.affiche %}*/
/* {% block  content_right %}*/
/* <div class="col-xs-12" align="center">*/
/*     <ul class="pagination">*/
/*             {% if pagination.page>1 %}*/
/*                 <li>*/
/*                     <a href="{{ path(pagination.route,*/
/*                     pagination.route_params|merge({'page': 1})) }}">Début</a>*/
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
/* {% endblock %}*/
/* {% endif %}*/
/* */
