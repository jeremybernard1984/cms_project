<?php

/* PointWebFaqBundle:faq:index1.html.twig */
class __TwigTemplate_5a32ad8f0048c9d9289291c577799f2560e92c5e0e8b13698f8403a50db0a891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebFaqBundle:faq:index1.html.twig", 1);
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
        $__internal_97c1c9ede693befa2d656fc9c84ef8c9c77609aa3289ef3af46054ce1dc4574a = $this->env->getExtension("native_profiler");
        $__internal_97c1c9ede693befa2d656fc9c84ef8c9c77609aa3289ef3af46054ce1dc4574a->enter($__internal_97c1c9ede693befa2d656fc9c84ef8c9c77609aa3289ef3af46054ce1dc4574a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebFaqBundle:faq:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97c1c9ede693befa2d656fc9c84ef8c9c77609aa3289ef3af46054ce1dc4574a->leave($__internal_97c1c9ede693befa2d656fc9c84ef8c9c77609aa3289ef3af46054ce1dc4574a_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_0bf430a5396f154e17c34b2d4614c2657c9d6e061222eb4ca759b279b4264add = $this->env->getExtension("native_profiler");
        $__internal_0bf430a5396f154e17c34b2d4614c2657c9d6e061222eb4ca759b279b4264add->enter($__internal_0bf430a5396f154e17c34b2d4614c2657c9d6e061222eb4ca759b279b4264add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Liste des F.A.Q</h1>

    <table class=\"table table-striped table-hover sortable\">
        <thead>
            <tr>
                <th style=\"width: 5px;\"></th>
                <th>Question</th>
                <th>En ligne</th>
                <th>Position</th>
                <th style=\"width: 125px;\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <td class=\"sorter\"><i class=\"mdi-action-swap-vert\"></i></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "question", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "online", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"btn-group-vertical\">
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-pencil\"></i> Modifier</a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("admin_faq_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    ";
        
        $__internal_0bf430a5396f154e17c34b2d4614c2657c9d6e061222eb4ca759b279b4264add->leave($__internal_0bf430a5396f154e17c34b2d4614c2657c9d6e061222eb4ca759b279b4264add_prof);

    }

    public function getTemplateName()
    {
        return "PointWebFaqBundle:faq:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  96 => 33,  84 => 27,  79 => 25,  73 => 22,  69 => 21,  65 => 20,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
