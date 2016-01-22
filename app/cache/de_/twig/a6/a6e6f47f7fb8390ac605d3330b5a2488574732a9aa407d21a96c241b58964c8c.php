<?php

/* PointWebPartnerBundle:Partner:index.html.twig */
class __TwigTemplate_6e53de4ca12b9ab8c3fa3fdf8365f02c2f845551ca6820d5477c4986182dc2b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebPartnerBundle:Partner:index.html.twig", 1);
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
        $__internal_f61cfde2744bcf776a98647596adf724505513d72884bacec641afa995a2396a = $this->env->getExtension("native_profiler");
        $__internal_f61cfde2744bcf776a98647596adf724505513d72884bacec641afa995a2396a->enter($__internal_f61cfde2744bcf776a98647596adf724505513d72884bacec641afa995a2396a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:Partner:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f61cfde2744bcf776a98647596adf724505513d72884bacec641afa995a2396a->leave($__internal_f61cfde2744bcf776a98647596adf724505513d72884bacec641afa995a2396a_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_545735d11b8543e48c68abad8e7a8e01d7406e884a3d15aa324791bd7f818b41 = $this->env->getExtension("native_profiler");
        $__internal_545735d11b8543e48c68abad8e7a8e01d7406e884a3d15aa324791bd7f818b41->enter($__internal_545735d11b8543e48c68abad8e7a8e01d7406e884a3d15aa324791bd7f818b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "
    <h1>Liste des partenaires</h1>
    ";
        // line 6
        $context['_parent'] = $context;
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
        echo "    <div class=\"btAjout\">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_partner_new");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    </div>
";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["entitiesSsCat"]) ? $context["entitiesSsCat"] : $this->getContext($context, "entitiesSsCat"))) > 0)) {
            // line 16
            echo "        <table id=\"dataTables\" class=\"table table-striped table-bordered table-hover sortable\" >
            <thead>
            <tr>
                <th style=\"width: 2%;\"></th>
                <th style=\"width: 2%;\"></th>
                <th class=\"titleTable\">Nom</th>
                <th style=\"width: 15%;\">Date de début</th>
                <th style=\"width: 15%;\">Date de fin</th>
                <th style=\"width: 2%;\">Lien</th>
                <th style=\"width: 15%;\">Actions</th>
                <th style=\"width: 3%;\"></th>
            </tr>
            </thead>
            <tbody>

                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entitiesSsCat"]) ? $context["entitiesSsCat"] : $this->getContext($context, "entitiesSsCat")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 32
                echo "                    <tr data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                        <td style=\"width: 2%;\">";
                // line 33
                if ($this->getAttribute($context["entity"], "online", array())) {
                    echo "<i class=\"fa fa-eye\"></i>";
                } else {
                    echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
                }
                echo "</td>
                        <td style=\"width: 2%;\">
                            ";
                // line 36
                echo "                            ";
                if ( !(null === $this->getAttribute($context["entity"], "image", array()))) {
                    // line 37
                    echo "                                <a class=\"fancybox\" href=\"../../../";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "AssetPath", array()), "html", null, true);
                    echo "\">
                                    <img src=\"../../../";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "AssetPath", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "name", array()), "html", null, true);
                    echo "\" height=\"30\">
                                </a>
                            ";
                } else {
                    // line 41
                    echo "                                -
                            ";
                }
                // line 43
                echo "                        </td>
                        <td class=\"titleTable\"><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                echo "</a></td>
                        <td style=\"width: 15%;\">";
                // line 45
                if ($this->getAttribute($context["entity"], "startDate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "startDate", array()), "d-m-Y"), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
                        <td style=\"width: 15%;\">";
                // line 46
                if ($this->getAttribute($context["entity"], "endDate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endDate", array()), "d-m-Y"), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
                        <td style=\"width: 2%;\">";
                // line 47
                if ($this->getAttribute($context["entity"], "link", array())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "link", array()), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fa fa-link\"></i></a> ";
                } else {
                    echo "<i class=\"fa fa-link\" style=\"color:#d4dddc;\"></i>";
                }
                echo "</td>
                        <td style=\"width: 15%;\">
                            <div class=\"btn-group\">
                                <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                                <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                <a href=\"#\" onClick=\"
                                        if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                                        document.forms.Suppr";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "Form.submit();
                                        else
                                        return false;
                                        \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                            </div>


                            <form action=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" method=\"post\" name=\"Suppr";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "Form\" style=\"display: none;\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                ";
                // line 63
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
            // line 69
            echo "
            </tbody>
        </table>
";
        }
        // line 73
        echo "    <div class=\"panel-group\" id=\"accordion\">
        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 75
            echo "        <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">
                    ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "
                    <i class=\"fa fa-bars\" style=\"float: right\"></i>
                </a>
            </h3>
        </div>
        <div id=\"collapse-";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse out\" data-parent=\"#accordion\">
            <table id=\"dataTables\" class=\"table table-striped table-bordered table-hover sortable\" >
                <thead>
                <tr>
                    <th style=\"width: 2%;\"></th>
                    <th style=\"width: 2%;\"></th>
                    <th class=\"titleTable\">Nom</th>
                    <th style=\"width: 15%;\">Date de début</th>
                    <th style=\"width: 15%;\">Date de fin</th>
                    <th style=\"width: 2%;\">Lien</th>
                    <th style=\"width: 15%;\">Actions</th>
                    <th style=\"width: 3%;\"></th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 99
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "partners", array())) > 0)) {
                // line 100
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "partners", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                    // line 101
                    echo "                    <tr data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                        <td style=\"width: 2%;\">";
                    // line 102
                    if ($this->getAttribute($context["entity"], "online", array())) {
                        echo "<i class=\"fa fa-eye\"></i>";
                    } else {
                        echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
                    }
                    echo "</td>
                        <td style=\"width: 2%;\">
                            ";
                    // line 105
                    echo "                            ";
                    if ( !(null === $this->getAttribute($context["entity"], "image", array()))) {
                        // line 106
                        echo "                                <a class=\"fancybox\" href=\"../../../";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "AssetPath", array()), "html", null, true);
                        echo "\">
                                    <img src=\"../../../";
                        // line 107
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "AssetPath", array()), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "name", array()), "html", null, true);
                        echo "\" height=\"30\">
                                </a>
                            ";
                    } else {
                        // line 110
                        echo "                                -
                            ";
                    }
                    // line 112
                    echo "                        </td>
                        <td class=\"titleTable\"><a href=\"";
                    // line 113
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                    echo "</a></td>
                        <td style=\"width: 15%;\">";
                    // line 114
                    if ($this->getAttribute($context["entity"], "startDate", array())) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "startDate", array()), "d-m-Y"), "html", null, true);
                    } else {
                        echo "-";
                    }
                    echo "</td>
                        <td style=\"width: 15%;\">";
                    // line 115
                    if ($this->getAttribute($context["entity"], "endDate", array())) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endDate", array()), "d-m-Y"), "html", null, true);
                    } else {
                        echo "-";
                    }
                    echo "</td>
                        <td style=\"width: 2%;\">";
                    // line 116
                    if ($this->getAttribute($context["entity"], "link", array())) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "link", array()), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"fa fa-link\"></i></a> ";
                    } else {
                        echo "<i class=\"fa fa-link\" style=\"color:#d4dddc;\"></i>";
                    }
                    echo "</td>
                        <td style=\"width: 15%;\">
                            <div class=\"btn-group\">
                                <a href=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                                <a href=\"";
                    // line 120
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                <a href=\"#\" onClick=\"
                                        if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                                            document.forms.Suppr";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                    echo "Form.submit();
                                        else
                                            return false;
                                        \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                            </div>
                            <form action=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" method=\"post\" name=\"Suppr";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                    echo "Form\" style=\"display: none;\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                ";
                    // line 130
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
                // line 136
                echo "                ";
            }
            // line 137
            echo "                </tbody>
            </table>
        </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "    </div>

    ";
        // line 144
        $this->loadTemplate("PointWebAdminBundle::_pager.html.twig", "PointWebPartnerBundle:Partner:index.html.twig", 144)->display($context);
        // line 145
        echo "
";
        
        $__internal_545735d11b8543e48c68abad8e7a8e01d7406e884a3d15aa324791bd7f818b41->leave($__internal_545735d11b8543e48c68abad8e7a8e01d7406e884a3d15aa324791bd7f818b41_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:Partner:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 145,  382 => 144,  378 => 142,  368 => 137,  365 => 136,  353 => 130,  346 => 128,  338 => 123,  332 => 120,  328 => 119,  316 => 116,  308 => 115,  300 => 114,  294 => 113,  291 => 112,  287 => 110,  279 => 107,  274 => 106,  271 => 105,  262 => 102,  257 => 101,  252 => 100,  250 => 99,  232 => 84,  224 => 79,  220 => 78,  215 => 75,  211 => 74,  208 => 73,  202 => 69,  190 => 63,  183 => 61,  173 => 54,  167 => 51,  163 => 50,  151 => 47,  143 => 46,  135 => 45,  129 => 44,  126 => 43,  122 => 41,  114 => 38,  109 => 37,  106 => 36,  97 => 33,  92 => 32,  88 => 31,  71 => 16,  69 => 15,  64 => 13,  61 => 12,  52 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/* */
/*     <h1>Liste des partenaires</h1>*/
/*     {% for message in app.session.flashbag.get('info') %}*/
/*         <div class="alert alert-success alert-dismissable">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*             {{ message }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div class="btAjout">*/
/*         <a href="{{ path('admin_partner_new') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Ajouter</a>*/
/*     </div>*/
/* {% if entitiesSsCat|length > 0 %}*/
/*         <table id="dataTables" class="table table-striped table-bordered table-hover sortable" >*/
/*             <thead>*/
/*             <tr>*/
/*                 <th style="width: 2%;"></th>*/
/*                 <th style="width: 2%;"></th>*/
/*                 <th class="titleTable">Nom</th>*/
/*                 <th style="width: 15%;">Date de début</th>*/
/*                 <th style="width: 15%;">Date de fin</th>*/
/*                 <th style="width: 2%;">Lien</th>*/
/*                 <th style="width: 15%;">Actions</th>*/
/*                 <th style="width: 3%;"></th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*                 {% for entity in entitiesSsCat %}*/
/*                     <tr data-url="{{ path('admin_partner_sort', {'id':entity.id}) }}">*/
/*                         <td style="width: 2%;">{% if entity.online %}<i class="fa fa-eye"></i>{% else %}<i class="fa fa-eye-slash" style="color:#d4dddc;"></i>{% endif %}</td>*/
/*                         <td style="width: 2%;">*/
/*                             {# On vérifie qu'une image soit bien associée à l'article #}*/
/*                             {% if entity.image is not null %}*/
/*                                 <a class="fancybox" href="../../../{{ entity.image.AssetPath }}">*/
/*                                     <img src="../../../{{ entity.image.AssetPath }}" alt="{{ entity.image.name }}" height="30">*/
/*                                 </a>*/
/*                             {% else %}*/
/*                                 -*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td class="titleTable"><a href="{{ path('admin_partner_edit', { 'id': entity.id }) }}">{{ entity.title }}</a></td>*/
/*                         <td style="width: 15%;">{% if entity.startDate %}{{ entity.startDate|date('d-m-Y') }}{% else %}-{% endif %}</td>*/
/*                         <td style="width: 15%;">{% if entity.endDate %}{{ entity.endDate|date('d-m-Y') }}{% else %}-{% endif %}</td>*/
/*                         <td style="width: 2%;">{% if entity.link %}<a href="{{ entity.link }}" target="_blank"><i class="fa fa-link"></i></a> {% else %}<i class="fa fa-link" style="color:#d4dddc;"></i>{% endif %}</td>*/
/*                         <td style="width: 15%;">*/
/*                             <div class="btn-group">*/
/*                                 <a href="{{ path('admin_partner_show', {'id':entity.id}) }}" class="btn btn-primary fancybox" data-fancybox-type="iframe" data-width="75%"><i class="fa fa-eye"></i></a>*/
/*                                 <a href="{{ path('admin_partner_edit', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                                 <a href="#" onClick="*/
/*                                         if(confirm('Voulez-vous Supprimer cet enregistrement ?'))*/
/*                                         document.forms.Suppr{{ entity.id }}Form.submit();*/
/*                                         else*/
/*                                         return false;*/
/*                                         " class="btn btn-danger"><i class="fa fa-trash"></i></a>*/
/*                             </div>*/
/* */
/* */
/*                             <form action="{{ path('admin_partner_delete', {'id': entity.id}) }}" method="post" name="Suppr{{ entity.id }}Form" style="display: none;">*/
/*                                 <input type="hidden" name="_method" value="DELETE" />*/
/*                                 {{ form_widget(deleteForms[entity.id]) }}*/
/*                             </form>*/
/*                         </td>*/
/*                         <td style="width: 3%;" class="sorter" data-toggle="tooltip" data-placement="left" title="Déplacer la colonne"><i class="fa fa-arrows-v" ></i></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/* */
/*             </tbody>*/
/*         </table>*/
/* {% endif %}*/
/*     <div class="panel-group" id="accordion">*/
/*         {% for category in categories %}*/
/*         <div class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">*/
/*                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ category.id }}">*/
/*                     {{ category.title }}*/
/*                     <i class="fa fa-bars" style="float: right"></i>*/
/*                 </a>*/
/*             </h3>*/
/*         </div>*/
/*         <div id="collapse-{{ category.id }}" class="panel-collapse collapse out" data-parent="#accordion">*/
/*             <table id="dataTables" class="table table-striped table-bordered table-hover sortable" >*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th style="width: 2%;"></th>*/
/*                     <th style="width: 2%;"></th>*/
/*                     <th class="titleTable">Nom</th>*/
/*                     <th style="width: 15%;">Date de début</th>*/
/*                     <th style="width: 15%;">Date de fin</th>*/
/*                     <th style="width: 2%;">Lien</th>*/
/*                     <th style="width: 15%;">Actions</th>*/
/*                     <th style="width: 3%;"></th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% if category.partners|length > 0 %}*/
/*                 {% for entity in category.partners %}*/
/*                     <tr data-url="{{ path('admin_partner_sort', {'id':entity.id}) }}">*/
/*                         <td style="width: 2%;">{% if entity.online %}<i class="fa fa-eye"></i>{% else %}<i class="fa fa-eye-slash" style="color:#d4dddc;"></i>{% endif %}</td>*/
/*                         <td style="width: 2%;">*/
/*                             {# On vérifie qu'une image soit bien associée à l'article #}*/
/*                             {% if entity.image is not null %}*/
/*                                 <a class="fancybox" href="../../../{{ entity.image.AssetPath }}">*/
/*                                     <img src="../../../{{ entity.image.AssetPath }}" alt="{{ entity.image.name }}" height="30">*/
/*                                 </a>*/
/*                             {% else %}*/
/*                                 -*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td class="titleTable"><a href="{{ path('admin_partner_edit', { 'id': entity.id }) }}">{{ entity.title }}</a></td>*/
/*                         <td style="width: 15%;">{% if entity.startDate %}{{ entity.startDate|date('d-m-Y') }}{% else %}-{% endif %}</td>*/
/*                         <td style="width: 15%;">{% if entity.endDate %}{{ entity.endDate|date('d-m-Y') }}{% else %}-{% endif %}</td>*/
/*                         <td style="width: 2%;">{% if entity.link %}<a href="{{ entity.link }}" target="_blank"><i class="fa fa-link"></i></a> {% else %}<i class="fa fa-link" style="color:#d4dddc;"></i>{% endif %}</td>*/
/*                         <td style="width: 15%;">*/
/*                             <div class="btn-group">*/
/*                                 <a href="{{ path('admin_partner_show', {'id':entity.id}) }}" class="btn btn-primary fancybox" data-fancybox-type="iframe" data-width="75%"><i class="fa fa-eye"></i></a>*/
/*                                 <a href="{{ path('admin_partner_edit', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                                 <a href="#" onClick="*/
/*                                         if(confirm('Voulez-vous Supprimer cet enregistrement ?'))*/
/*                                             document.forms.Suppr{{ entity.id }}Form.submit();*/
/*                                         else*/
/*                                             return false;*/
/*                                         " class="btn btn-danger"><i class="fa fa-trash"></i></a>*/
/*                             </div>*/
/*                             <form action="{{ path('admin_partner_delete', {'id': entity.id}) }}" method="post" name="Suppr{{ entity.id }}Form" style="display: none;">*/
/*                                 <input type="hidden" name="_method" value="DELETE" />*/
/*                                 {{ form_widget(deleteForms[entity.id]) }}*/
/*                             </form>*/
/*                         </td>*/
/*                         <td style="width: 3%;" class="sorter" data-toggle="tooltip" data-placement="left" title="Déplacer la colonne"><i class="fa fa-arrows-v" ></i></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 {% endif %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     {% include 'PointWebAdminBundle::_pager.html.twig' %}*/
/* */
/* {% endblock %}*/
/* */
