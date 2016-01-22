<?php

/* PointWebAppBundle::_logo.html.twig */
class __TwigTemplate_8c4b5503ca4c275a2723f4268fab9bc30d9e554b72ee23eb0034f6262cfda49a extends Twig_Template
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
        $__internal_bedd4d2b0d7283fd1d6648e439c43eaf8c681b8645d8762dd71d70b106a8344c = $this->env->getExtension("native_profiler");
        $__internal_bedd4d2b0d7283fd1d6648e439c43eaf8c681b8645d8762dd71d70b106a8344c->enter($__internal_bedd4d2b0d7283fd1d6648e439c43eaf8c681b8645d8762dd71d70b106a8344c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::_logo.html.twig"));

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
        
        $__internal_bedd4d2b0d7283fd1d6648e439c43eaf8c681b8645d8762dd71d70b106a8344c->leave($__internal_bedd4d2b0d7283fd1d6648e439c43eaf8c681b8645d8762dd71d70b106a8344c_prof);

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
