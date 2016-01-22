<?php

/* PointWebProductBundle:Product:sub.html.twig */
class __TwigTemplate_a8f046ea06ab2f798ad94c221b06a6f9fdf455e4bec9a1732217ddea3408a1d9 extends Twig_Template
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
        $__internal_013c5afb5d87088ad459364a089884339a5a7e1adaba0dd74071a13579592d22 = $this->env->getExtension("native_profiler");
        $__internal_013c5afb5d87088ad459364a089884339a5a7e1adaba0dd74071a13579592d22->enter($__internal_013c5afb5d87088ad459364a089884339a5a7e1adaba0dd74071a13579592d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Product:sub.html.twig"));

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "childrens", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "    <div class=\"col-xs-12\">
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "
                        <i class=\"fa fa-bars\" style=\"float: right\"></i>
                    </a>
                </h3>
            </div>
            <div class=\"panel-body\">
                ";
            // line 13
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "products", array())) > 0)) {
                // line 14
                echo "                <div id=\"collapse-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse out\">
                    <table class=\"table table-striped table-hover sortable\">
                        <thead>
                        <tr>
                            <th style=\"width: 5px;\"></th>
                            <th style=\"width: 50%\">Titre</th>
                            <th style=\"width: 25%\">Prix</th>
                            <th style=\"width: 25%\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "products", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                    // line 26
                    echo "                            <tr data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                <td class=\"sorter\"><i class=\"mdi-action-swap-vert\"></i></td>
                                <td>
                                    <a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                    echo "</a>
                                </td>
                                <td>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
                    echo "</td>
                                <td>
                                    <div class=\"btn-group\">
                                        <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\"
                                           class=\"btn btn-primary\"><i
                                                    class=\"fa fa-eye\"></i></a>
                                        <a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\"
                                           class=\"btn btn-primary\"><i
                                                    class=\"fa fa-pencil\"></i></a>
                                    </div>
                                </td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                        </tbody>
                    </table>
                </div>
                ";
            }
            // line 48
            echo "                ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "childrens", array())) > 0)) {
                // line 49
                echo "                    <div id=\"catChilds-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" class=\"catChilds\"
                         data-url=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_subcat", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\"></div>
                ";
            }
            // line 52
            echo "            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_013c5afb5d87088ad459364a089884339a5a7e1adaba0dd74071a13579592d22->leave($__internal_013c5afb5d87088ad459364a089884339a5a7e1adaba0dd74071a13579592d22_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Product:sub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 52,  119 => 50,  114 => 49,  111 => 48,  105 => 44,  92 => 37,  86 => 34,  80 => 31,  73 => 29,  66 => 26,  62 => 25,  47 => 14,  45 => 13,  36 => 7,  32 => 6,  26 => 2,  22 => 1,);
    }
}
