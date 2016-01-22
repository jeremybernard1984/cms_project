<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_6018cb2006750e70c2b16e67ac8aef8945b6a439172e01db7a1ff3af056352ca extends Twig_Template
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
        $__internal_99c1425753bed77ad927d8419adb79f9b8f3942b2827bbc522738a889d23e946 = $this->env->getExtension("native_profiler");
        $__internal_99c1425753bed77ad927d8419adb79f9b8f3942b2827bbc522738a889d23e946->enter($__internal_99c1425753bed77ad927d8419adb79f9b8f3942b2827bbc522738a889d23e946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_99c1425753bed77ad927d8419adb79f9b8f3942b2827bbc522738a889d23e946->leave($__internal_99c1425753bed77ad927d8419adb79f9b8f3942b2827bbc522738a889d23e946_prof);

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
