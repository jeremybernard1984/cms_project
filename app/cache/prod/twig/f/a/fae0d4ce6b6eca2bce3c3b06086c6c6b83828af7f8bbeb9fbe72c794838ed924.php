<?php

/* PointWebProductBundle:Product:index.html.twig */
class __TwigTemplate_fae0d4ce6b6eca2bce3c3b06086c6c6b83828af7f8bbeb9fbe72c794838ed924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:Product:index.html.twig", 1);
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
        $__internal_5e443b642984b672e10289f7a3a821c32c2fda725d7c348481b5b2300a97ad77 = $this->env->getExtension("native_profiler");
        $__internal_5e443b642984b672e10289f7a3a821c32c2fda725d7c348481b5b2300a97ad77->enter($__internal_5e443b642984b672e10289f7a3a821c32c2fda725d7c348481b5b2300a97ad77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Product:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e443b642984b672e10289f7a3a821c32c2fda725d7c348481b5b2300a97ad77->leave($__internal_5e443b642984b672e10289f7a3a821c32c2fda725d7c348481b5b2300a97ad77_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_aac9435a6f623cddb5759ad755b85862f4eb2926e3072066c6c75f47afb88e8f = $this->env->getExtension("native_profiler");
        $__internal_aac9435a6f623cddb5759ad755b85862f4eb2926e3072066c6c75f47afb88e8f->enter($__internal_aac9435a6f623cddb5759ad755b85862f4eb2926e3072066c6c75f47afb88e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "
    <h1>Liste des produits</h1>
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        <div class=\"alert alert-success alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <a style=\"float: left\" href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\" class=\"btn btn-primary\">Modifier les catégories</a>
    <div class=\"btAjout\">
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_product_new");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    </div>
    ";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["entitiesSansCat"]) ? $context["entitiesSansCat"] : $this->getContext($context, "entitiesSansCat"))) > 0)) {
            // line 17
            echo "        <table id=\"dataTables\" class=\"table table-striped table-bordered table-hover sortable\" >
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
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entitiesSansCat"]) ? $context["entitiesSansCat"] : $this->getContext($context, "entitiesSansCat")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 29
                echo "                <tr data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                    <td style=\"width: 2%;\">";
                // line 30
                if ($this->getAttribute($context["entity"], "online", array())) {
                    echo "<i class=\"fa fa-eye\"></i>";
                } else {
                    echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
                }
                echo "</td>
                    <td class=\"titleTable\"><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
                echo " €</td>
                    <td style=\"width: 15%;\">
                        <div class=\"btn-group\">
                            <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                            <a href=\"#\" onClick=\"
                                    if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                                    document.forms.Suppr";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "Form.submit();
                                    else
                                    return false;
                                    \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                        </div>
                        <form action=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" method=\"post\" name=\"Suppr";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "Form\" style=\"display: none;\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                            ";
                // line 46
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
            // line 52
            echo "            </tbody>
        </table>
    ";
        }
        // line 55
        echo "













<div class=\"panel-group\" id=\"accordion\">
    ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesParent"]) ? $context["categoriesParent"] : $this->getContext($context, "categoriesParent")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 71
            echo "        <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">
                        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">
                            ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "parent", array()), "html", null, true);
            echo "
                            <i class=\"fa fa-bars\" style=\"float: right\"></i>
                        </a>
                    </h3>
                </div>
                    ";
            // line 80
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "products", array())) > 0)) {
                // line 81
                echo "                        <div id=\"collapse-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse out\" data-parent=\"#accordion\">
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
                // line 93
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "products", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                    // line 94
                    echo "                                    <tr data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                        <td style=\"width: 2%;\">";
                    // line 95
                    if ($this->getAttribute($context["entity"], "online", array())) {
                        echo "<i class=\"fa fa-eye\"></i>";
                    } else {
                        echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
                    }
                    echo "</td>
                                        <td class=\"titleTable\"><a href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                    echo "</a></td>
                                        <td>";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
                    echo " €</td>
                                        <td style=\"width: 15%;\">
                                            <div class=\"btn-group\">
                                                <a href=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                                                <a href=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" onClick=\"
                                                        if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                                                        document.forms.Suppr";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                    echo "Form.submit();
                                                        else
                                                        return false;
                                                        \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                                            </div>
                                            <form action=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" method=\"post\" name=\"Suppr";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                    echo "Form\" style=\"display: none;\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                ";
                    // line 111
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
                // line 117
                echo "                                </tbody>
                            </table>
                        </div>
                    ";
            }
            // line 121
            echo "            </div>
            ";
            // line 122
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["sScategory"]) {
                // line 123
                echo "            ";
                if (($this->getAttribute($context["sScategory"], "parent", array()) == $this->getAttribute($context["category"], "title", array()))) {
                    // line 124
                    echo "                <div class=\"panel panel-info\" style=\"margin: 10px\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sScategory"], "id", array()), "html", null, true);
                    echo "\">
                                ";
                    // line 128
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sScategory"], "title", array()), "html", null, true);
                    echo "
                                <i class=\"fa fa-bars\" style=\"float: right\"></i>
                            </a>
                        </h3>
                    </div>
                    ";
                    // line 133
                    if ((twig_length_filter($this->env, $this->getAttribute($context["sScategory"], "products", array())) > 0)) {
                        // line 134
                        echo "                        <div id=\"collapse-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sScategory"], "id", array()), "html", null, true);
                        echo "\" class=\"panel-collapse collapse out\" data-parent=\"#accordion\">
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
                        // line 146
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sScategory"], "products", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                            // line 147
                            echo "                                    <tr data-url=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                            echo "\">
                                        <td style=\"width: 2%;\">";
                            // line 148
                            if ($this->getAttribute($context["entity"], "online", array())) {
                                echo "<i class=\"fa fa-eye\"></i>";
                            } else {
                                echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
                            }
                            echo "</td>
                                        <td class=\"titleTable\"><a href=\"";
                            // line 149
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                            echo "</a></td>
                                        <td>";
                            // line 150
                            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
                            echo " €</td>
                                        <td style=\"width: 15%;\">
                                            <div class=\"btn-group\">
                                                <a href=\"";
                            // line 153
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                            echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                                                <a href=\"";
                            // line 154
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                                <a href=\"#\" onClick=\"
                                                        if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                                                        document.forms.Suppr";
                            // line 157
                            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                            echo "Form.submit();
                                                        else
                                                        return false;
                                                        \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                                            </div>
                                            <form action=\"";
                            // line 162
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                            echo "\" method=\"post\" name=\"Suppr";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                            echo "Form\" style=\"display: none;\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                                ";
                            // line 164
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
                        // line 170
                        echo "                                </tbody>
                            </table>
                        </div>
                    ";
                    }
                    // line 174
                    echo "                </div>
            ";
                }
                // line 176
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sScategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_aac9435a6f623cddb5759ad755b85862f4eb2926e3072066c6c75f47afb88e8f->leave($__internal_aac9435a6f623cddb5759ad755b85862f4eb2926e3072066c6c75f47afb88e8f_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 177,  409 => 176,  405 => 174,  399 => 170,  387 => 164,  380 => 162,  372 => 157,  366 => 154,  362 => 153,  356 => 150,  350 => 149,  342 => 148,  337 => 147,  333 => 146,  317 => 134,  315 => 133,  307 => 128,  303 => 127,  298 => 124,  295 => 123,  291 => 122,  288 => 121,  282 => 117,  270 => 111,  263 => 109,  255 => 104,  249 => 101,  245 => 100,  239 => 97,  233 => 96,  225 => 95,  220 => 94,  216 => 93,  200 => 81,  198 => 80,  188 => 75,  184 => 74,  179 => 71,  175 => 70,  158 => 55,  153 => 52,  141 => 46,  134 => 44,  126 => 39,  120 => 36,  116 => 35,  110 => 32,  104 => 31,  96 => 30,  91 => 29,  87 => 28,  74 => 17,  72 => 16,  67 => 14,  61 => 12,  52 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
