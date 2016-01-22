<?php

/* PointWebFaqBundle:faq:index1.html.twig */
class __TwigTemplate_029c6d53b6ae410a2b11be7e6f2255b6cd9912c5e621c1b53ea59c64dd5b45da extends Twig_Template
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
        $__internal_4d31aeea3036a7d570b9b87785bf615bb245d81e17a15d72c485ad254c77a78e = $this->env->getExtension("native_profiler");
        $__internal_4d31aeea3036a7d570b9b87785bf615bb245d81e17a15d72c485ad254c77a78e->enter($__internal_4d31aeea3036a7d570b9b87785bf615bb245d81e17a15d72c485ad254c77a78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebFaqBundle:faq:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d31aeea3036a7d570b9b87785bf615bb245d81e17a15d72c485ad254c77a78e->leave($__internal_4d31aeea3036a7d570b9b87785bf615bb245d81e17a15d72c485ad254c77a78e_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_c77cea9ce558cfb2624bd585ef3c43011eef8f6508b8d8525a447cbbb654c3be = $this->env->getExtension("native_profiler");
        $__internal_c77cea9ce558cfb2624bd585ef3c43011eef8f6508b8d8525a447cbbb654c3be->enter($__internal_c77cea9ce558cfb2624bd585ef3c43011eef8f6508b8d8525a447cbbb654c3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        
        $__internal_c77cea9ce558cfb2624bd585ef3c43011eef8f6508b8d8525a447cbbb654c3be->leave($__internal_c77cea9ce558cfb2624bd585ef3c43011eef8f6508b8d8525a447cbbb654c3be_prof);

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
