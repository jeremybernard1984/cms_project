<?php

/* PointWebPageBundle:Page:index.html.twig */
class __TwigTemplate_0b82ff7e2a9acd6d23f2cadfef513d7a50a165b7ca8859879d2c7e2f3fc923dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebPageBundle:Page:index.html.twig", 1);
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
        $__internal_518602e6533a23c18d7852e1e4b2524ac13bb49f36dd6d8d2f8c9d53b0b7b5e7 = $this->env->getExtension("native_profiler");
        $__internal_518602e6533a23c18d7852e1e4b2524ac13bb49f36dd6d8d2f8c9d53b0b7b5e7->enter($__internal_518602e6533a23c18d7852e1e4b2524ac13bb49f36dd6d8d2f8c9d53b0b7b5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPageBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_518602e6533a23c18d7852e1e4b2524ac13bb49f36dd6d8d2f8c9d53b0b7b5e7->leave($__internal_518602e6533a23c18d7852e1e4b2524ac13bb49f36dd6d8d2f8c9d53b0b7b5e7_prof);

    }

    // line 2
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_4e6e9f939e4663ce0f2fcdef11e7e67b1682fa1e532f403fa40e867681ce444a = $this->env->getExtension("native_profiler");
        $__internal_4e6e9f939e4663ce0f2fcdef11e7e67b1682fa1e532f403fa40e867681ce444a->enter($__internal_4e6e9f939e4663ce0f2fcdef11e7e67b1682fa1e532f403fa40e867681ce444a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 3
        echo "    <h1>Liste des pages</h1>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "        <div class=\"alert alert-success alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    <div class=\"btAjout\">
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_page_new");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    </div>

    <table id=\"dataTables\" class=\"table table-striped table-bordered table-hover sortable\" >
        <thead>

        <tr>
            <th style=\"width: 2%;\"></th>
            <th class=\"titleTable\">Nom</th>
            <th style=\"width: 15%;\">Date de début</th>
            <th style=\"width: 15%;\">Date de fin</th>
            <th style=\"width: 15%;\">Actions</th>
            <th style=\"width: 3%;\"></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "                    <tr data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                        <td>";
            // line 29
            if ($this->getAttribute($context["entity"], "online", array())) {
                echo "<i class=\"fa fa-eye\"></i>";
            } else {
                echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
            }
            echo "</td>
                        <td class=\"titleTable\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</a></td>

                        <td>";
            // line 32
            if ($this->getAttribute($context["entity"], "startDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "startDate", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 33
            if ($this->getAttribute($context["entity"], "endDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endDate", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                        <td>
                            <div class=\"btn-group\">
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                <a href=\"#\" onClick=\"
                                        if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                                        document.forms.Suppr";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form.submit();
                                        else
                                        return false;
                                        \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                            </div>
                            <form action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" name=\"Suppr";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form\" style=\"display: none;\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'widget');
            echo "
                            </form>
                        </td>
                        <td class=\"sorter\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Déplacer la colonne\"><i class=\"fa fa-arrows-v\" ></i></td>
                    </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

    ";
        // line 56
        $this->loadTemplate("PointWebAdminBundle::_pager.html.twig", "PointWebPageBundle:Page:index.html.twig", 56)->display($context);
        // line 57
        echo "

";
        
        $__internal_4e6e9f939e4663ce0f2fcdef11e7e67b1682fa1e532f403fa40e867681ce444a->leave($__internal_4e6e9f939e4663ce0f2fcdef11e7e67b1682fa1e532f403fa40e867681ce444a_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPageBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 57,  162 => 56,  157 => 53,  145 => 47,  138 => 45,  130 => 40,  124 => 37,  120 => 36,  112 => 33,  106 => 32,  99 => 30,  91 => 29,  86 => 28,  82 => 27,  63 => 11,  60 => 10,  51 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* {% block content_right %}*/
/*     <h1>Liste des pages</h1>*/
/*     {% for message in app.session.flashbag.get('info') %}*/
/*         <div class="alert alert-success alert-dismissable">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*             {{ message }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div class="btAjout">*/
/*         <a href="{{ path('admin_page_new') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Ajouter</a>*/
/*     </div>*/
/* */
/*     <table id="dataTables" class="table table-striped table-bordered table-hover sortable" >*/
/*         <thead>*/
/* */
/*         <tr>*/
/*             <th style="width: 2%;"></th>*/
/*             <th class="titleTable">Nom</th>*/
/*             <th style="width: 15%;">Date de début</th>*/
/*             <th style="width: 15%;">Date de fin</th>*/
/*             <th style="width: 15%;">Actions</th>*/
/*             <th style="width: 3%;"></th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*                     <tr data-url="{{ path('admin_page_sort', {'id':entity.id}) }}">*/
/*                         <td>{% if entity.online %}<i class="fa fa-eye"></i>{% else %}<i class="fa fa-eye-slash" style="color:#d4dddc;"></i>{% endif %}</td>*/
/*                         <td class="titleTable"><a href="{{ path('admin_page_edit', { 'id': entity.id }) }}">{{ entity.title }}</a></td>*/
/* */
/*                         <td>{% if entity.startDate %}{{ entity.startDate|date('d-m-Y') }}{% endif %}</td>*/
/*                         <td>{% if entity.endDate %}{{ entity.endDate|date('d-m-Y') }}{% endif %}</td>*/
/*                         <td>*/
/*                             <div class="btn-group">*/
/*                                 <a href="{{ path('admin_page_show', {'id':entity.id}) }}" class="btn btn-primary fancybox" data-fancybox-type="iframe" data-width="75%"><i class="fa fa-eye"></i></a>*/
/*                                 <a href="{{ path('admin_page_edit', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                                 <a href="#" onClick="*/
/*                                         if(confirm('Voulez-vous Supprimer cet enregistrement ?'))*/
/*                                         document.forms.Suppr{{ entity.id }}Form.submit();*/
/*                                         else*/
/*                                         return false;*/
/*                                         " class="btn btn-danger"><i class="fa fa-trash"></i></a>*/
/*                             </div>*/
/*                             <form action="{{ path('admin_page_delete', {'id': entity.id}) }}" method="post" name="Suppr{{ entity.id }}Form" style="display: none;">*/
/*                                 <input type="hidden" name="_method" value="DELETE" />*/
/*                                 {{ form_widget(deleteForms[entity.id]) }}*/
/*                             </form>*/
/*                         </td>*/
/*                         <td class="sorter" data-toggle="tooltip" data-placement="left" title="Déplacer la colonne"><i class="fa fa-arrows-v" ></i></td>*/
/*                     </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     {% include 'PointWebAdminBundle::_pager.html.twig' %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
