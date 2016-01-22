<?php

/* PointWebAppBundle::_logo.html.twig */
class __TwigTemplate_072a6565dd1a6fea12a60900749be6cb7a12eb55c066fff502d769565cdb44ad extends Twig_Template
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
        echo "<div align=\"center\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\">
        ";
        // line 3
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 4
            echo "            <!---->
            <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logo"]) ? $context["logo"] : null), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : null)), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logo"]) ? $context["logo"] : null), "name", array()), "html", null, true);
            echo "\">
        ";
        } else {
            // line 7
            echo "            Pas de logo
        ";
        }
        // line 9
        echo "    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::_logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  38 => 7,  31 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div align="center">*/
/*     <a href="{{ path("point_web_app_homepage") }}">*/
/*         {% if logo %}*/
/*             <!---->*/
/*             <img src="{{ logo.getWebPath(base) }}" alt="{{ logo.name }}">*/
/*         {% else %}*/
/*             Pas de logo*/
/*         {% endif %}*/
/*     </a>*/
/* </div>*/
/* */
