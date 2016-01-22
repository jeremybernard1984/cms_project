<?php

/* @PointWebApp/_logo.html.twig */
class __TwigTemplate_d5a75f8497883f31e5d7fdbe7269e4103f296b08379faffb8d99c7fffb616e94 extends Twig_Template
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
        $__internal_dd87e81e15a53c99c1c822b2b123032d296f094fb58b3c944256ac68c19e3323 = $this->env->getExtension("native_profiler");
        $__internal_dd87e81e15a53c99c1c822b2b123032d296f094fb58b3c944256ac68c19e3323->enter($__internal_dd87e81e15a53c99c1c822b2b123032d296f094fb58b3c944256ac68c19e3323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebApp/_logo.html.twig"));

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
        
        $__internal_dd87e81e15a53c99c1c822b2b123032d296f094fb58b3c944256ac68c19e3323->leave($__internal_dd87e81e15a53c99c1c822b2b123032d296f094fb58b3c944256ac68c19e3323_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebApp/_logo.html.twig";
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
