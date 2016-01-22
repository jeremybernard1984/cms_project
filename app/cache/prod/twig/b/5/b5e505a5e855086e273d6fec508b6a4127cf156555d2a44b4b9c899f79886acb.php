<?php

/* PointWebProductBundle:PartnerCategory:show.html.twig */
class __TwigTemplate_b5e505a5e855086e273d6fec508b6a4127cf156555d2a44b4b9c899f79886acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:PartnerCategory:show.html.twig", 1);
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
        $__internal_90798c25930975fcbab5b6ef971929efc433ec43093ef7cc73b9bf6a88e9a686 = $this->env->getExtension("native_profiler");
        $__internal_90798c25930975fcbab5b6ef971929efc433ec43093ef7cc73b9bf6a88e9a686->enter($__internal_90798c25930975fcbab5b6ef971929efc433ec43093ef7cc73b9bf6a88e9a686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:PartnerCategory:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90798c25930975fcbab5b6ef971929efc433ec43093ef7cc73b9bf6a88e9a686->leave($__internal_90798c25930975fcbab5b6ef971929efc433ec43093ef7cc73b9bf6a88e9a686_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_9f5ba864ec628c1d6a3ed0f389a4f0c6edde3f08f3cb48d5d1c8cd757f4f1b48 = $this->env->getExtension("native_profiler");
        $__internal_9f5ba864ec628c1d6a3ed0f389a4f0c6edde3f08f3cb48d5d1c8cd757f4f1b48->enter($__internal_9f5ba864ec628c1d6a3ed0f389a4f0c6edde3f08f3cb48d5d1c8cd757f4f1b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Catégorie</h1>


    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Titre</div>
        <div class=\"panel-body\">
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Description</div>
        <div class=\"panel-body\">
            ";
        // line 16
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Position</div>
        <div class=\"panel-body\">
            ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Online</div>
        <div class=\"panel-body\">
            ";
        // line 28
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array()) == 0)) {
            echo "<td> Non </td>";
        } else {
            echo "<td> Oui </td>";
        }
        // line 29
        echo "        </div>
    </div>

            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la
                liste</a>
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i>
                Modifier</a>
    ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_9f5ba864ec628c1d6a3ed0f389a4f0c6edde3f08f3cb48d5d1c8cd757f4f1b48->leave($__internal_9f5ba864ec628c1d6a3ed0f389a4f0c6edde3f08f3cb48d5d1c8cd757f4f1b48_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:PartnerCategory:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 36,  91 => 34,  86 => 32,  81 => 29,  75 => 28,  66 => 22,  57 => 16,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
