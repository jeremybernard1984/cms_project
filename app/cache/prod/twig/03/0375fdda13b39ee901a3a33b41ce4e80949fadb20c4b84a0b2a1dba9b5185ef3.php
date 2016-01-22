<?php

/* PointWebAppBundle::_logo.html.twig */
class __TwigTemplate_420b9fc36e515ffa8f358b7c7052ae81e174d32457757ed895d3ab497ae26c4e extends Twig_Template
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
        $__internal_8012c6aeee221118d3fb6a7dc8b85be7d02b51def351b48f4b3e3160ea3d5dca = $this->env->getExtension("native_profiler");
        $__internal_8012c6aeee221118d3fb6a7dc8b85be7d02b51def351b48f4b3e3160ea3d5dca->enter($__internal_8012c6aeee221118d3fb6a7dc8b85be7d02b51def351b48f4b3e3160ea3d5dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::_logo.html.twig"));

        // line 1
        echo "<div align=\"center\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\">
        ";
        // line 3
        if ((isset($context["logo"]) ? $context["logo"] : $this->getContext($context, "logo"))) {
            // line 4
            echo "            <!---->
            <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logo"]) ? $context["logo"] : $this->getContext($context, "logo")), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logo"]) ? $context["logo"] : $this->getContext($context, "logo")), "name", array()), "html", null, true);
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
        
        $__internal_8012c6aeee221118d3fb6a7dc8b85be7d02b51def351b48f4b3e3160ea3d5dca->leave($__internal_8012c6aeee221118d3fb6a7dc8b85be7d02b51def351b48f4b3e3160ea3d5dca_prof);

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
        return array (  45 => 9,  41 => 7,  34 => 5,  31 => 4,  29 => 3,  25 => 2,  22 => 1,);
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
