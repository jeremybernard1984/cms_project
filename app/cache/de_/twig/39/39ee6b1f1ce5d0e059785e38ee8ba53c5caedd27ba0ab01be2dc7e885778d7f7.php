<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_de45d7c6a972b2388f1c98b3549637de73fb152cc60af8c28409d93b39088b40 extends Twig_Template
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
        $__internal_0cd6d5a382efa0e6f8fec5700cef2552c0b17cc003068b2158c8b1df63720ce8 = $this->env->getExtension("native_profiler");
        $__internal_0cd6d5a382efa0e6f8fec5700cef2552c0b17cc003068b2158c8b1df63720ce8->enter($__internal_0cd6d5a382efa0e6f8fec5700cef2552c0b17cc003068b2158c8b1df63720ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0cd6d5a382efa0e6f8fec5700cef2552c0b17cc003068b2158c8b1df63720ce8->leave($__internal_0cd6d5a382efa0e6f8fec5700cef2552c0b17cc003068b2158c8b1df63720ce8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
