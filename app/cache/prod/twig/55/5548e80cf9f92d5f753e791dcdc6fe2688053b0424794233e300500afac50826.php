<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_38b859102910d2e66c13eb9961604afeae89b995ae49ec68af28e67c5e8c1ce3 extends Twig_Template
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
        $__internal_e2b3867090776de1fe742d862fede479f6f0f00be1e0b59a17e7d0b9d2bbe626 = $this->env->getExtension("native_profiler");
        $__internal_e2b3867090776de1fe742d862fede479f6f0f00be1e0b59a17e7d0b9d2bbe626->enter($__internal_e2b3867090776de1fe742d862fede479f6f0f00be1e0b59a17e7d0b9d2bbe626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_e2b3867090776de1fe742d862fede479f6f0f00be1e0b59a17e7d0b9d2bbe626->leave($__internal_e2b3867090776de1fe742d862fede479f6f0f00be1e0b59a17e7d0b9d2bbe626_prof);

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
