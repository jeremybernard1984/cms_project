<?php

/* PointWebGedBundle:Folder:index1.html.twig */
class __TwigTemplate_104cc45b9a2963d940e807ac174c55bd0e9308743871b649a5d2ebbf0e74758a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebGedBundle:Folder:index1.html.twig", 1);
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
        $__internal_975490760169cf449a4da83fc15546151f0870ed7a25cf6cedbdb1eacc8e707f = $this->env->getExtension("native_profiler");
        $__internal_975490760169cf449a4da83fc15546151f0870ed7a25cf6cedbdb1eacc8e707f->enter($__internal_975490760169cf449a4da83fc15546151f0870ed7a25cf6cedbdb1eacc8e707f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGedBundle:Folder:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_975490760169cf449a4da83fc15546151f0870ed7a25cf6cedbdb1eacc8e707f->leave($__internal_975490760169cf449a4da83fc15546151f0870ed7a25cf6cedbdb1eacc8e707f_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_cd676c80566d4df26eb39281cf027deccdd87415d57d50a307e1a530c07c6288 = $this->env->getExtension("native_profiler");
        $__internal_cd676c80566d4df26eb39281cf027deccdd87415d57d50a307e1a530c07c6288->enter($__internal_cd676c80566d4df26eb39281cf027deccdd87415d57d50a307e1a530c07c6288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Liste des dossiers</h1>

    <table class=\"table table-striped table-hover sortable\">
        <thead>
        <tr>
            <th style=\"width: 5px;\"></th>
            <th>Nom</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_folder_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <td class=\"sorter\"><i class=\"mdi-action-swap-vert\"></i></td>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_folder_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_folder_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_folder_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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

    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("admin_folder_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
";
        
        $__internal_cd676c80566d4df26eb39281cf027deccdd87415d57d50a307e1a530c07c6288->leave($__internal_cd676c80566d4df26eb39281cf027deccdd87415d57d50a307e1a530c07c6288_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGedBundle:Folder:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  95 => 31,  83 => 25,  78 => 23,  70 => 20,  64 => 19,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
