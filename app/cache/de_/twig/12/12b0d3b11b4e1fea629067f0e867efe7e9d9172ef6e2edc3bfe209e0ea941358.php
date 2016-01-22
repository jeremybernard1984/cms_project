<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5ea41b602aca6166ffe95faf4b679a771d9e418ac53e0c3c24981690d05d6e80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81ff746913416a71fd19f1ccf5fb8b77387d30ca90c5cf37c8250b7111079231 = $this->env->getExtension("native_profiler");
        $__internal_81ff746913416a71fd19f1ccf5fb8b77387d30ca90c5cf37c8250b7111079231->enter($__internal_81ff746913416a71fd19f1ccf5fb8b77387d30ca90c5cf37c8250b7111079231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81ff746913416a71fd19f1ccf5fb8b77387d30ca90c5cf37c8250b7111079231->leave($__internal_81ff746913416a71fd19f1ccf5fb8b77387d30ca90c5cf37c8250b7111079231_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29ff8f79f2a3ad063affaf7d5d336e0cb832c760609df4c1f43d260230aa3f65 = $this->env->getExtension("native_profiler");
        $__internal_29ff8f79f2a3ad063affaf7d5d336e0cb832c760609df4c1f43d260230aa3f65->enter($__internal_29ff8f79f2a3ad063affaf7d5d336e0cb832c760609df4c1f43d260230aa3f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_29ff8f79f2a3ad063affaf7d5d336e0cb832c760609df4c1f43d260230aa3f65->leave($__internal_29ff8f79f2a3ad063affaf7d5d336e0cb832c760609df4c1f43d260230aa3f65_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_149b43c89350a4a145560891a3bbe75d06a3484a4bab677f4350ff29e25498ed = $this->env->getExtension("native_profiler");
        $__internal_149b43c89350a4a145560891a3bbe75d06a3484a4bab677f4350ff29e25498ed->enter($__internal_149b43c89350a4a145560891a3bbe75d06a3484a4bab677f4350ff29e25498ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_149b43c89350a4a145560891a3bbe75d06a3484a4bab677f4350ff29e25498ed->leave($__internal_149b43c89350a4a145560891a3bbe75d06a3484a4bab677f4350ff29e25498ed_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
