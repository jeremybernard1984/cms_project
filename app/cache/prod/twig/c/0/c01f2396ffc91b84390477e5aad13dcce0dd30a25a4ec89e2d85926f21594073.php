<?php

/* PointWebAdminBundle::_pager.html.twig */
class __TwigTemplate_c01f2396ffc91b84390477e5aad13dcce0dd30a25a4ec89e2d85926f21594073 extends Twig_Template
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
        $__internal_348de3dbd6e5a034345fb444a229dab9a742b275e8010dbfbb47fdc572924426 = $this->env->getExtension("native_profiler");
        $__internal_348de3dbd6e5a034345fb444a229dab9a742b275e8010dbfbb47fdc572924426->enter($__internal_348de3dbd6e5a034345fb444a229dab9a742b275e8010dbfbb47fdc572924426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::_pager.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "affiche", array())) {
            // line 2
            $this->displayBlock('content_right', $context, $blocks);
        }
        
        $__internal_348de3dbd6e5a034345fb444a229dab9a742b275e8010dbfbb47fdc572924426->leave($__internal_348de3dbd6e5a034345fb444a229dab9a742b275e8010dbfbb47fdc572924426_prof);

    }

    public function block_content_right($context, array $blocks = array())
    {
        $__internal_ad980249d27d4894afab7e871c7d4d2d69276e4ea2e7d70c102637c2689b841f = $this->env->getExtension("native_profiler");
        $__internal_ad980249d27d4894afab7e871c7d4d2d69276e4ea2e7d70c102637c2689b841f->enter($__internal_ad980249d27d4894afab7e871c7d4d2d69276e4ea2e7d70c102637c2689b841f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        $context['_parent'] = (array) $context;
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
        
        $__internal_ad980249d27d4894afab7e871c7d4d2d69276e4ea2e7d70c102637c2689b841f->leave($__internal_ad980249d27d4894afab7e871c7d4d2d69276e4ea2e7d70c102637c2689b841f_prof);

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
