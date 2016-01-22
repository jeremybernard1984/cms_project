<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_2997b297da6cfa9fbbbffdfbd675eb20af103310476c5718d52d4da888e0ac78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09556cab2392d53d548813d646d46d83e803edf80dad1c022ae4471485866d72 = $this->env->getExtension("native_profiler");
        $__internal_09556cab2392d53d548813d646d46d83e803edf80dad1c022ae4471485866d72->enter($__internal_09556cab2392d53d548813d646d46d83e803edf80dad1c022ae4471485866d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09556cab2392d53d548813d646d46d83e803edf80dad1c022ae4471485866d72->leave($__internal_09556cab2392d53d548813d646d46d83e803edf80dad1c022ae4471485866d72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d0f73074d2716030a28c2eb42c2ea968ec448c09211f843dc7ed63bbfacf7d9 = $this->env->getExtension("native_profiler");
        $__internal_2d0f73074d2716030a28c2eb42c2ea968ec448c09211f843dc7ed63bbfacf7d9->enter($__internal_2d0f73074d2716030a28c2eb42c2ea968ec448c09211f843dc7ed63bbfacf7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2d0f73074d2716030a28c2eb42c2ea968ec448c09211f843dc7ed63bbfacf7d9->leave($__internal_2d0f73074d2716030a28c2eb42c2ea968ec448c09211f843dc7ed63bbfacf7d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4dd99e7471724be6a21986a1e1712eaee9be58ab6973a15a9de313cbf1b2cb3 = $this->env->getExtension("native_profiler");
        $__internal_c4dd99e7471724be6a21986a1e1712eaee9be58ab6973a15a9de313cbf1b2cb3->enter($__internal_c4dd99e7471724be6a21986a1e1712eaee9be58ab6973a15a9de313cbf1b2cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c4dd99e7471724be6a21986a1e1712eaee9be58ab6973a15a9de313cbf1b2cb3->leave($__internal_c4dd99e7471724be6a21986a1e1712eaee9be58ab6973a15a9de313cbf1b2cb3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ea2cc6e8bde5572e7ed6d429b1d2697f7eec1764418ef556d21e4e894fd2c9c = $this->env->getExtension("native_profiler");
        $__internal_4ea2cc6e8bde5572e7ed6d429b1d2697f7eec1764418ef556d21e4e894fd2c9c->enter($__internal_4ea2cc6e8bde5572e7ed6d429b1d2697f7eec1764418ef556d21e4e894fd2c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ea2cc6e8bde5572e7ed6d429b1d2697f7eec1764418ef556d21e4e894fd2c9c->leave($__internal_4ea2cc6e8bde5572e7ed6d429b1d2697f7eec1764418ef556d21e4e894fd2c9c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
