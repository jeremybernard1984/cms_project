<?php

/* PointWebEcommerceBundle:Administration:Produits/layout/new.html.twig */
class __TwigTemplate_273723c200e7e52f0a08df1ad6ad2f6c1f3ad8ce5797f55eab0bfd393fbac08f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebEcommerceBundle:Administration:Produits/layout/new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07bf1aa7cbcc6798387ee351c039b7f2897fbd9052b61ad7e60311db77abfc3b = $this->env->getExtension("native_profiler");
        $__internal_07bf1aa7cbcc6798387ee351c039b7f2897fbd9052b61ad7e60311db77abfc3b->enter($__internal_07bf1aa7cbcc6798387ee351c039b7f2897fbd9052b61ad7e60311db77abfc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebEcommerceBundle:Administration:Produits/layout/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07bf1aa7cbcc6798387ee351c039b7f2897fbd9052b61ad7e60311db77abfc3b->leave($__internal_07bf1aa7cbcc6798387ee351c039b7f2897fbd9052b61ad7e60311db77abfc3b_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_c74a53de3061579453d82f54af76b0bd47b06acb34672d64ba699a167459d834 = $this->env->getExtension("native_profiler");
        $__internal_c74a53de3061579453d82f54af76b0bd47b06acb34672d64ba699a167459d834->enter($__internal_c74a53de3061579453d82f54af76b0bd47b06acb34672d64ba699a167459d834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Produits creation</h1>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_ecommerce_create");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </form>
    
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_ecommerce");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_c74a53de3061579453d82f54af76b0bd47b06acb34672d64ba699a167459d834->leave($__internal_c74a53de3061579453d82f54af76b0bd47b06acb34672d64ba699a167459d834_prof);

    }

    public function getTemplateName()
    {
        return "PointWebEcommerceBundle:Administration:Produits/layout/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  50 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
