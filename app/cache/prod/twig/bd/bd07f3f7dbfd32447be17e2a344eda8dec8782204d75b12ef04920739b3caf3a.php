<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_17e988c0460c78528f4deba514c360ede29f336bd2bf205677f46ca3bcebc23b extends Twig_Template
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
        $__internal_e9f46775a4c0bb494253a20d3cf49f3d1d36deb1e5ff88e1d8eda6dff9f36a78 = $this->env->getExtension("native_profiler");
        $__internal_e9f46775a4c0bb494253a20d3cf49f3d1d36deb1e5ff88e1d8eda6dff9f36a78->enter($__internal_e9f46775a4c0bb494253a20d3cf49f3d1d36deb1e5ff88e1d8eda6dff9f36a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_e9f46775a4c0bb494253a20d3cf49f3d1d36deb1e5ff88e1d8eda6dff9f36a78->leave($__internal_e9f46775a4c0bb494253a20d3cf49f3d1d36deb1e5ff88e1d8eda6dff9f36a78_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
