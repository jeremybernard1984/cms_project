<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_0bafc57116e651902f5c018743ccd9a8c1995699b4c87d353d2c7a464a78e4eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator:final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0a93fb032becf3748117bf9592f3adcb18e6506ad6edb9ba1e36a6e49fd0d22 = $this->env->getExtension("native_profiler");
        $__internal_c0a93fb032becf3748117bf9592f3adcb18e6506ad6edb9ba1e36a6e49fd0d22->enter($__internal_c0a93fb032becf3748117bf9592f3adcb18e6506ad6edb9ba1e36a6e49fd0d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0a93fb032becf3748117bf9592f3adcb18e6506ad6edb9ba1e36a6e49fd0d22->leave($__internal_c0a93fb032becf3748117bf9592f3adcb18e6506ad6edb9ba1e36a6e49fd0d22_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_2956706769858da4269c8f68dc217bb41e011db17f060d1a8793a95b48f4c19c = $this->env->getExtension("native_profiler");
        $__internal_2956706769858da4269c8f68dc217bb41e011db17f060d1a8793a95b48f4c19c->enter($__internal_2956706769858da4269c8f68dc217bb41e011db17f060d1a8793a95b48f4c19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_2956706769858da4269c8f68dc217bb41e011db17f060d1a8793a95b48f4c19c->leave($__internal_2956706769858da4269c8f68dc217bb41e011db17f060d1a8793a95b48f4c19c_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_65b656d6fe2027c6ee5c64848b11ca38fbbabdca5f0126f3e0c8ee9edb60e616 = $this->env->getExtension("native_profiler");
        $__internal_65b656d6fe2027c6ee5c64848b11ca38fbbabdca5f0126f3e0c8ee9edb60e616->enter($__internal_65b656d6fe2027c6ee5c64848b11ca38fbbabdca5f0126f3e0c8ee9edb60e616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_65b656d6fe2027c6ee5c64848b11ca38fbbabdca5f0126f3e0c8ee9edb60e616->leave($__internal_65b656d6fe2027c6ee5c64848b11ca38fbbabdca5f0126f3e0c8ee9edb60e616_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SensioDistributionBundle::Configurator/layout.html.twig" %}*/
/* */
/* {% block content_class %}config_done{% endblock %}*/
/* {% block content %}*/
/*     <div class="step">*/
/*         <h1>Well done!</h1>*/
/*         {% if is_writable %}*/
/*         <h2>Your distribution is configured!</h2>*/
/*         {% else %}*/
/*         <h2 class="configure-error">Your distribution is almost configured but...</h2>*/
/*         {% endif %}*/
/*         <h3>*/
/*             <span>*/
/*                 {% if is_writable %}*/
/*                     Your parameters.yml file has been overwritten with these parameters (in <em>{{ yml_path }}</em>):*/
/*                 {% else %}*/
/*                     Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>{{ yml_path }}</em>:*/
/*                 {% endif %}*/
/*             </span>*/
/*         </h3>*/
/* */
/*         <textarea class="symfony-configuration">{{ parameters }}</textarea>*/
/* */
/*         {% if welcome_url %}*/
/*             <ul>*/
/*                 <li><a href="{{ welcome_url }}">Go to the Welcome page</a></li>*/
/*             </ul>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
