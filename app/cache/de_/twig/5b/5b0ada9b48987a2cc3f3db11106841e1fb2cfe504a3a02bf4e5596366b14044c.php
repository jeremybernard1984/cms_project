<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_7480c42c3268ce388471423529158de992ab243aec749fda83e0643aad73fa23 extends Twig_Template
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
        $__internal_2750ddb9b3cd48acc74fb05046fc2bdfb1c0e07ae55a86b8d3b4fe6017e2b0e9 = $this->env->getExtension("native_profiler");
        $__internal_2750ddb9b3cd48acc74fb05046fc2bdfb1c0e07ae55a86b8d3b4fe6017e2b0e9->enter($__internal_2750ddb9b3cd48acc74fb05046fc2bdfb1c0e07ae55a86b8d3b4fe6017e2b0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_2750ddb9b3cd48acc74fb05046fc2bdfb1c0e07ae55a86b8d3b4fe6017e2b0e9->leave($__internal_2750ddb9b3cd48acc74fb05046fc2bdfb1c0e07ae55a86b8d3b4fe6017e2b0e9_prof);

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
