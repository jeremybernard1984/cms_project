<?php

/* PointWebPageBundle:Page:index.html.twig */
class __TwigTemplate_e9542f03bb4aaf6ab984e63dc8cc0a86a25d61f23c510c5799e79185b3b4042e extends Twig_Template
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
        $__internal_c6c9f7278f4db9c79767a9772b02314f06534fe2ffc03dffdca20449bf7c65ee = $this->env->getExtension("native_profiler");
        $__internal_c6c9f7278f4db9c79767a9772b02314f06534fe2ffc03dffdca20449bf7c65ee->enter($__internal_c6c9f7278f4db9c79767a9772b02314f06534fe2ffc03dffdca20449bf7c65ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPageBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6c9f7278f4db9c79767a9772b02314f06534fe2ffc03dffdca20449bf7c65ee->leave($__internal_c6c9f7278f4db9c79767a9772b02314f06534fe2ffc03dffdca20449bf7c65ee_prof);

    }

    // line 2
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_5ee2a7f546101e99e64c29bfb490124482b73098a996e4273cb7790eaec4df8d = $this->env->getExtension("native_profiler");
        $__internal_5ee2a7f546101e99e64c29bfb490124482b73098a996e4273cb7790eaec4df8d->enter($__internal_5ee2a7f546101e99e64c29bfb490124482b73098a996e4273cb7790eaec4df8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
            <th style=\"width: 1%;\">ID</th>
            <th class=\"titleTable\">Nom</th>
            <th style=\"width: 15%;\">Date de début</th>
            <th style=\"width: 15%;\">Date de fin</th>
            <th style=\"width: 15%;\">Actions</th>
            <th style=\"width: 3%;\"></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 29
            echo "                    <tr data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                        <td>";
            // line 30
            if ($this->getAttribute($context["entity"], "online", array())) {
                echo "<i class=\"fa fa-eye\"></i>";
            } else {
                echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
            }
            echo "</td>
                        <td style=\"width: 1%;\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                        <td class=\"titleTable\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</a></td>

                        <td>";
            // line 34
            if ($this->getAttribute($context["entity"], "startDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "startDate", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 35
            if ($this->getAttribute($context["entity"], "endDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endDate", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                        <td>
                            <div class=\"btn-group\">
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                <a href=\"#\" onClick=\"
                                        if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                                        document.forms.Suppr";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form.submit();
                                        else
                                        return false;
                                        \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                            </div>
                            <form action=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" name=\"Suppr";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form\" style=\"display: none;\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                ";
            // line 49
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
        // line 55
        echo "        </tbody>
    </table>

    ";
        // line 58
        $this->loadTemplate("PointWebAdminBundle::_pager.html.twig", "PointWebPageBundle:Page:index.html.twig", 58)->display($context);
        // line 59
        echo "

";
        
        $__internal_5ee2a7f546101e99e64c29bfb490124482b73098a996e4273cb7790eaec4df8d->leave($__internal_5ee2a7f546101e99e64c29bfb490124482b73098a996e4273cb7790eaec4df8d_prof);

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
        return array (  169 => 59,  167 => 58,  162 => 55,  150 => 49,  143 => 47,  135 => 42,  129 => 39,  125 => 38,  117 => 35,  111 => 34,  104 => 32,  100 => 31,  92 => 30,  87 => 29,  83 => 28,  63 => 11,  60 => 10,  51 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
/*             <th style="width: 1%;">ID</th>*/
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
/*                         <td style="width: 1%;">{{ entity.id }}</td>*/
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
