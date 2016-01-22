<?php

/* PointWebNewsBundle:News:index1.html.twig */
class __TwigTemplate_82a0f0ab9b68ed8c15df00bedb951c7e5ff0486493c3b2358b2983093b4a7221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebNewsBundle:News:index1.html.twig", 1);
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
        $__internal_303150447e9074e8e0e06a97ac0d1cb1998ef524a88f3f32fed9b8dbd77ec100 = $this->env->getExtension("native_profiler");
        $__internal_303150447e9074e8e0e06a97ac0d1cb1998ef524a88f3f32fed9b8dbd77ec100->enter($__internal_303150447e9074e8e0e06a97ac0d1cb1998ef524a88f3f32fed9b8dbd77ec100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebNewsBundle:News:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_303150447e9074e8e0e06a97ac0d1cb1998ef524a88f3f32fed9b8dbd77ec100->leave($__internal_303150447e9074e8e0e06a97ac0d1cb1998ef524a88f3f32fed9b8dbd77ec100_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_a373c28682b87cfe7dbd3775bf1bc6cd7838027487d32334cbe8326af5c7dbb1 = $this->env->getExtension("native_profiler");
        $__internal_a373c28682b87cfe7dbd3775bf1bc6cd7838027487d32334cbe8326af5c7dbb1->enter($__internal_a373c28682b87cfe7dbd3775bf1bc6cd7838027487d32334cbe8326af5c7dbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Liste des news</h1>

    <table class=\"table table-striped table-hover sortable\">
        <thead>
        <tr>
            <th style=\"width: 5px;\"></th>
            <th>Titre</th>
            <th>Date de création</th>
            <th style=\"width: 125px;\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <td class=\"sorter\"><i class=\"mdi-action-swap-vert\"></i></td>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["entity"], "createDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createDate", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>
                    <div class=\"btn-group-vertical\">
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 31
        echo "        </tbody>
    </table>

    ";
        // line 34
        $this->loadTemplate("PointWebAdminBundle::_pager.html.twig", "PointWebNewsBundle:News:index1.html.twig", 34)->display($context);
        // line 35
        echo "
    <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("admin_news_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
";
        
        $__internal_a373c28682b87cfe7dbd3775bf1bc6cd7838027487d32334cbe8326af5c7dbb1->leave($__internal_a373c28682b87cfe7dbd3775bf1bc6cd7838027487d32334cbe8326af5c7dbb1_prof);

    }

    public function getTemplateName()
    {
        return "PointWebNewsBundle:News:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  102 => 35,  100 => 34,  95 => 31,  83 => 25,  78 => 23,  70 => 20,  64 => 19,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
