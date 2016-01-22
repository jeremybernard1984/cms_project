<?php

/* PointWebProductBundle:Product:sub1.html.twig */
class __TwigTemplate_1b2ca98d3353d229429fa0a5e895dcc17ad701aad788a702890748be0cf27b8e extends Twig_Template
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
        $__internal_2a968e81b2b122ab9e8105b848ee0b5854297d585639a721452ccdcf1a38a917 = $this->env->getExtension("native_profiler");
        $__internal_2a968e81b2b122ab9e8105b848ee0b5854297d585639a721452ccdcf1a38a917->enter($__internal_2a968e81b2b122ab9e8105b848ee0b5854297d585639a721452ccdcf1a38a917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Product:sub1.html.twig"));

        // line 1
        echo "<div class=\"panel-group\" id=\"accordion2\" style=\"margin: 10px;\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["SScategories"]) ? $context["SScategories"] : $this->getContext($context, "SScategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["SScategory"]) {
            // line 3
            echo "        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title", array()), "html", null, true);
            echo "
                        <i class=\"fa fa-bars\" style=\"float: right\"></i>
                    </a>
                </h3>
            </div>

                <div id=\"collapse-";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse out\">
                    <table id=\"dataTables\" class=\"table table-striped table-bordered table-hover sortable\" >
                        <thead>
                        <tr style=\"background-color:#d4dddc;\">
                            <th style=\"width: 2%;\"></th>
                            <th class=\"titleTable\">Titre</th>
                            <th style=\"width: 15%;\">Prix</th>
                            <th style=\"width: 15%;\">Actions</th>
                            <th style=\"width: 3%;\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["SScategory"]);
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 26
                echo "                            <tr data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                <td style=\"width: 2%;\">";
                // line 27
                if ($this->getAttribute($context["entity"], "online", array())) {
                    echo "<i class=\"fa fa-eye\"></i>";
                } else {
                    echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
                }
                echo "</td>
                                <td class=\"titleTable\"><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
                echo " €</td>
                                <td style=\"width: 15%;\">
                                    <div class=\"btn-group\">
                                        <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"#\" onClick=\"
                                                if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                                                document.forms.Suppr";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "Form.submit();
                                                else
                                                return false;
                                                \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                                    </div>
                                    <form action=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" method=\"post\" name=\"Suppr";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "Form\" style=\"display: none;\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                        ";
                // line 43
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'widget');
                echo "
                                    </form>
                                </td>
                                <td style=\"width: 3%;\" class=\"sorter\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Déplacer la colonne\"><i class=\"fa fa-arrows-v\" ></i></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                        </tbody>
                    </table>
                </div>
                
                ";
            // line 53
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "childrens", array())) > 0)) {
                // line 54
                echo "                    <div id=\"catChilds-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "html", null, true);
                echo "\" class=\"catChilds\"
                         data-url=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_subcat", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
                echo "\"></div>
                ";
            }
            // line 57
            echo "        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['SScategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</div>";
        
        $__internal_2a968e81b2b122ab9e8105b848ee0b5854297d585639a721452ccdcf1a38a917->leave($__internal_2a968e81b2b122ab9e8105b848ee0b5854297d585639a721452ccdcf1a38a917_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Product:sub1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 59,  146 => 57,  141 => 55,  136 => 54,  134 => 53,  128 => 49,  116 => 43,  109 => 41,  101 => 36,  95 => 33,  91 => 32,  85 => 29,  79 => 28,  71 => 27,  66 => 26,  62 => 25,  47 => 13,  38 => 7,  34 => 6,  29 => 3,  25 => 2,  22 => 1,);
    }
}
