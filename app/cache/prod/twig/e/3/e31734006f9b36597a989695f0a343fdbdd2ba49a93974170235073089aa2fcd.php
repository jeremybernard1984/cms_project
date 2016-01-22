<?php

/* PointWebPartnerBundle:Partner:index1.html.twig */
class __TwigTemplate_e31734006f9b36597a989695f0a343fdbdd2ba49a93974170235073089aa2fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c05f065969847fc0e1c81b675a709ab2195fdcf6e6a21cb90c7f617f5057d74f = $this->env->getExtension("native_profiler");
        $__internal_c05f065969847fc0e1c81b675a709ab2195fdcf6e6a21cb90c7f617f5057d74f->enter($__internal_c05f065969847fc0e1c81b675a709ab2195fdcf6e6a21cb90c7f617f5057d74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:Partner:index1.html.twig"));

        // line 1
        echo "


    <h1>Liste des produits</h1>

    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partner_category"]) ? $context["partner_category"] : $this->getContext($context, "partner_category")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "        <div class=\"col-xs-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">
                        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">
                            ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "
                            <i class=\"fa fa-bars\" style=\"float: right\"></i>
                        </a>
                    </h3>
                </div>
                <div class=\"panel-body\">

                        <div id=\"collapse-";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse in\">
                            <table class=\"table table-striped table-hover sortable\" >
                                <thead>
                                <tr>
                                    <th style=\"width: 5px;\"></th>
                                    <th style=\"width: 60%\">Titre</th>
                                    <th style=\"width: 20%\">Prix</th>
                                    <th style=\"width: 20%\">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "partners", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 31
                echo "                                    <tr data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                        <td class=\"sorter\"><i class=\"mdi-action-swap-vert\"></i></td>
                                        <td>
                                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                echo "</a>
                                        </td>
                                        <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
                echo " €</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                                                <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                </tbody>
                            </table>
                        </div>


                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    <ul class=\"col-xs-12\">
        <li>
            <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("admin_product_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter
                un produit</a>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\" class=\"btn btn-primary\">Modifier les catégories</a>
        </li>
    </ul>

";
        
        $__internal_c05f065969847fc0e1c81b675a709ab2195fdcf6e6a21cb90c7f617f5057d74f->leave($__internal_c05f065969847fc0e1c81b675a709ab2195fdcf6e6a21cb90c7f617f5057d74f_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:Partner:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 58,  124 => 56,  120 => 54,  106 => 45,  95 => 40,  91 => 39,  85 => 36,  78 => 34,  71 => 31,  67 => 30,  53 => 19,  43 => 12,  39 => 11,  33 => 7,  29 => 6,  22 => 1,);
    }
}
