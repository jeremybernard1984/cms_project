<?php

/* PointWebProductBundle:Product:sub.html.twig */
class __TwigTemplate_ce567c30cae588463deb796e4fc7ce2b5fda86649ed83af7c38baa64d43e5ad7 extends Twig_Template
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
        $__internal_c20ba0f2fc05c77fc71ad8451932b31e6d0c9463fd9c59637996cc5875f4f7ee = $this->env->getExtension("native_profiler");
        $__internal_c20ba0f2fc05c77fc71ad8451932b31e6d0c9463fd9c59637996cc5875f4f7ee->enter($__internal_c20ba0f2fc05c77fc71ad8451932b31e6d0c9463fd9c59637996cc5875f4f7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Product:sub.html.twig"));

        // line 1
        echo "<div class=\"panel-group\" id=\"accordion2\" style=\"margin: 10px;\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "childrens", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "        <div class=\"panel panel-info\">
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
                ";
            // line 12
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "products", array())) > 0)) {
                // line 13
                echo "                <div id=\"collapse-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "products", array()));
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
            }
            // line 53
            echo "                ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "childrens", array())) > 0)) {
                // line 54
                echo "                    <div id=\"catChilds-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" class=\"catChilds\"
                         data-url=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_subcat", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\"></div>
                ";
            }
            // line 57
            echo "        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</div>";
        
        $__internal_c20ba0f2fc05c77fc71ad8451932b31e6d0c9463fd9c59637996cc5875f4f7ee->leave($__internal_c20ba0f2fc05c77fc71ad8451932b31e6d0c9463fd9c59637996cc5875f4f7ee_prof);

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
        return array (  156 => 59,  149 => 57,  144 => 55,  139 => 54,  136 => 53,  130 => 49,  118 => 43,  111 => 41,  103 => 36,  97 => 33,  93 => 32,  87 => 29,  81 => 28,  73 => 27,  68 => 26,  64 => 25,  48 => 13,  46 => 12,  38 => 7,  34 => 6,  29 => 3,  25 => 2,  22 => 1,);
    }
}
