<?php

/* PointWebEcommerceBundle:Administration:Produits/layout/edit.html.twig */
class __TwigTemplate_b957607ff6a281ea66b747b877563a2d0379745bc5eabb273b0947e6e0370b84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebEcommerceBundle:Administration:Produits/layout/edit.html.twig", 1);
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
        $__internal_b91839e8c14d2bc78b28f8dc1069f452a36d93dfa490d7f6df62736831bc87ef = $this->env->getExtension("native_profiler");
        $__internal_b91839e8c14d2bc78b28f8dc1069f452a36d93dfa490d7f6df62736831bc87ef->enter($__internal_b91839e8c14d2bc78b28f8dc1069f452a36d93dfa490d7f6df62736831bc87ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebEcommerceBundle:Administration:Produits/layout/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91839e8c14d2bc78b28f8dc1069f452a36d93dfa490d7f6df62736831bc87ef->leave($__internal_b91839e8c14d2bc78b28f8dc1069f452a36d93dfa490d7f6df62736831bc87ef_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_6732c4beb68896d221779a2e0504431d8b08b41b4b0a33643781af42a9c002e0 = $this->env->getExtension("native_profiler");
        $__internal_6732c4beb68896d221779a2e0504431d8b08b41b4b0a33643781af42a9c002e0->enter($__internal_6732c4beb68896d221779a2e0504431d8b08b41b4b0a33643781af42a9c002e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Produits edit</h1>
    
    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_ecommerce_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_6732c4beb68896d221779a2e0504431d8b08b41b4b0a33643781af42a9c002e0->leave($__internal_6732c4beb68896d221779a2e0504431d8b08b41b4b0a33643781af42a9c002e0_prof);

    }

    public function getTemplateName()
    {
        return "PointWebEcommerceBundle:Administration:Produits/layout/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  58 => 12,  50 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
