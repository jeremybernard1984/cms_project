<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_b28b5de29c88c42edd3057b53dcbfd6b9c78fb9f0fefb0fcd8b895e6c67bfd4e extends Twig_Template
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
        $__internal_1bb9358a773e49747984f790709d6f95e32ef68785df694c478c5cf6e7bdcbc8 = $this->env->getExtension("native_profiler");
        $__internal_1bb9358a773e49747984f790709d6f95e32ef68785df694c478c5cf6e7bdcbc8->enter($__internal_1bb9358a773e49747984f790709d6f95e32ef68785df694c478c5cf6e7bdcbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_1bb9358a773e49747984f790709d6f95e32ef68785df694c478c5cf6e7bdcbc8->leave($__internal_1bb9358a773e49747984f790709d6f95e32ef68785df694c478c5cf6e7bdcbc8_prof);

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
