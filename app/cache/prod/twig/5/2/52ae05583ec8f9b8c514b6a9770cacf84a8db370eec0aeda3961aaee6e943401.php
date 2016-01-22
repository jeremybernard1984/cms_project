<?php

/* PointWebEcommerceBundle:Administration:Produits/layout/show.html.twig */
class __TwigTemplate_52ae05583ec8f9b8c514b6a9770cacf84a8db370eec0aeda3961aaee6e943401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebEcommerceBundle:Administration:Produits/layout/show.html.twig", 1);
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
        $__internal_dceebecde9b8bbe16292abbfe1d67206b0ee56747737c34cc6d292566f5a7e3f = $this->env->getExtension("native_profiler");
        $__internal_dceebecde9b8bbe16292abbfe1d67206b0ee56747737c34cc6d292566f5a7e3f->enter($__internal_dceebecde9b8bbe16292abbfe1d67206b0ee56747737c34cc6d292566f5a7e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebEcommerceBundle:Administration:Produits/layout/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dceebecde9b8bbe16292abbfe1d67206b0ee56747737c34cc6d292566f5a7e3f->leave($__internal_dceebecde9b8bbe16292abbfe1d67206b0ee56747737c34cc6d292566f5a7e3f_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_c46532aa765305204b29bea3feb75cc0f2d9e50fd9098a6d80978389ec652d66 = $this->env->getExtension("native_profiler");
        $__internal_c46532aa765305204b29bea3feb75cc0f2d9e50fd9098a6d80978389ec652d66->enter($__internal_c46532aa765305204b29bea3feb75cc0f2d9e50fd9098a6d80978389ec652d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Produits</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponible</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "disponible", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("admin_ecommerce");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_ecommerce_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_c46532aa765305204b29bea3feb75cc0f2d9e50fd9098a6d80978389ec652d66->leave($__internal_c46532aa765305204b29bea3feb75cc0f2d9e50fd9098a6d80978389ec652d66_prof);

    }

    public function getTemplateName()
    {
        return "PointWebEcommerceBundle:Administration:Produits/layout/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  94 => 38,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
