<?php

/* PointWebProductBundle:Product:index1.html.twig */
class __TwigTemplate_710e0714d75af5e97c1a3ff0f22e522057954cff4a6dd3726a902fe75082102e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:Product:index1.html.twig", 1);
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
        $__internal_f941400ba6ea8e9b418fda3489316fddd6158104dfae7c2ad9a7013b81a65a10 = $this->env->getExtension("native_profiler");
        $__internal_f941400ba6ea8e9b418fda3489316fddd6158104dfae7c2ad9a7013b81a65a10->enter($__internal_f941400ba6ea8e9b418fda3489316fddd6158104dfae7c2ad9a7013b81a65a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Product:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f941400ba6ea8e9b418fda3489316fddd6158104dfae7c2ad9a7013b81a65a10->leave($__internal_f941400ba6ea8e9b418fda3489316fddd6158104dfae7c2ad9a7013b81a65a10_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_7462868ace9550caf0eb84172ecad2ed64a13b6caf6f7f26f860d36c982545f7 = $this->env->getExtension("native_profiler");
        $__internal_7462868ace9550caf0eb84172ecad2ed64a13b6caf6f7f26f860d36c982545f7->enter($__internal_7462868ace9550caf0eb84172ecad2ed64a13b6caf6f7f26f860d36c982545f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Liste des produits</h1>

    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
                    ";
            // line 18
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "products", array())) > 0)) {
                // line 19
                echo "                        <div id=\"collapse-";
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "products", array()));
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
                    ";
            }
            // line 49
            echo "                    ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "childrens", array())) > 0)) {
                // line 50
                echo "                        <div id=\"catChilds-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" class=\"catChilds\"
                             data-url=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_subcat", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\"></div>
                    ";
            }
            // line 53
            echo "                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    <ul class=\"col-xs-12\">
        <li>
            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("admin_product_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter
                un produit</a>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\" class=\"btn btn-primary\">Modifier les catégories</a>
        </li>
    </ul>
";
        
        $__internal_7462868ace9550caf0eb84172ecad2ed64a13b6caf6f7f26f860d36c982545f7->leave($__internal_7462868ace9550caf0eb84172ecad2ed64a13b6caf6f7f26f860d36c982545f7_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Product:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 61,  155 => 59,  151 => 57,  142 => 53,  137 => 51,  132 => 50,  129 => 49,  123 => 45,  112 => 40,  108 => 39,  102 => 36,  95 => 34,  88 => 31,  84 => 30,  69 => 19,  67 => 18,  58 => 12,  54 => 11,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
