<?php

/* @PointWebFaq/faq/index.html.twig */
class __TwigTemplate_b36583e272dea167352bbce2aaa56834dbabfe2cd90ca64d790fd926f4c8acec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "@PointWebFaq/faq/index.html.twig", 1);
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
        $__internal_37c5bd67e4d6d5cd69098388706bb03d8f57fd375aeb38dfafc4e6ae8a7f9355 = $this->env->getExtension("native_profiler");
        $__internal_37c5bd67e4d6d5cd69098388706bb03d8f57fd375aeb38dfafc4e6ae8a7f9355->enter($__internal_37c5bd67e4d6d5cd69098388706bb03d8f57fd375aeb38dfafc4e6ae8a7f9355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebFaq/faq/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37c5bd67e4d6d5cd69098388706bb03d8f57fd375aeb38dfafc4e6ae8a7f9355->leave($__internal_37c5bd67e4d6d5cd69098388706bb03d8f57fd375aeb38dfafc4e6ae8a7f9355_prof);

    }

    // line 2
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_3d3558631975587ec18abe7a399e7fd66c1b76004bd74a6f30d97fb23ae54561 = $this->env->getExtension("native_profiler");
        $__internal_3d3558631975587ec18abe7a399e7fd66c1b76004bd74a6f30d97fb23ae54561->enter($__internal_3d3558631975587ec18abe7a399e7fd66c1b76004bd74a6f30d97fb23ae54561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 3
        echo "    <h1>Liste des questions de la FAQ</h1>
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
        echo $this->env->getExtension('routing')->getPath("admin_faq_new");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    </div>

    <table id=\"dataTables\" class=\"table table-striped table-bordered table-hover sortable\" >
        <thead>

        <tr>
            <th style=\"width: 2%;\"></th>
            <th class=\"titleTable\">Question</th>
            <th style=\"width: 15%;\">Actions</th>
            <th style=\"width: 3%;\"></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <tr data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <td>";
            // line 27
            if ($this->getAttribute($context["entity"], "online", array())) {
                echo "<i class=\"fa fa-eye\"></i>";
            } else {
                echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
            }
            echo "</td>
                <td class=\"titleTable\"><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <div class=\"btn-group\">
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                        <a href=\"#\" onClick=\"
                                if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                                document.forms.Suppr";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form.submit();
                                else
                                return false;
                                \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                    </div>
                    <form action=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" name=\"Suppr";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                        ";
            // line 42
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
        // line 48
        echo "        </tbody>
    </table>

    ";
        // line 51
        $this->loadTemplate("PointWebAdminBundle::_pager.html.twig", "@PointWebFaq/faq/index.html.twig", 51)->display($context);
        
        $__internal_3d3558631975587ec18abe7a399e7fd66c1b76004bd74a6f30d97fb23ae54561->leave($__internal_3d3558631975587ec18abe7a399e7fd66c1b76004bd74a6f30d97fb23ae54561_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebFaq/faq/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 51,  142 => 48,  130 => 42,  123 => 40,  115 => 35,  109 => 32,  105 => 31,  97 => 28,  89 => 27,  84 => 26,  80 => 25,  63 => 11,  60 => 10,  51 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* {% block content_right %}*/
/*     <h1>Liste des questions de la FAQ</h1>*/
/*     {% for message in app.session.flashbag.get('info') %}*/
/*         <div class="alert alert-success alert-dismissable">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*             {{ message }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div class="btAjout">*/
/*         <a href="{{ path('admin_faq_new') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Ajouter</a>*/
/*     </div>*/
/* */
/*     <table id="dataTables" class="table table-striped table-bordered table-hover sortable" >*/
/*         <thead>*/
/* */
/*         <tr>*/
/*             <th style="width: 2%;"></th>*/
/*             <th class="titleTable">Question</th>*/
/*             <th style="width: 15%;">Actions</th>*/
/*             <th style="width: 3%;"></th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr data-url="{{ path('admin_faq_sort', {'id':entity.id}) }}">*/
/*                 <td>{% if entity.online %}<i class="fa fa-eye"></i>{% else %}<i class="fa fa-eye-slash" style="color:#d4dddc;"></i>{% endif %}</td>*/
/*                 <td class="titleTable"><a href="{{ path('admin_faq_edit', { 'id': entity.id }) }}">{{ entity.title }}</a></td>*/
/*                 <td>*/
/*                     <div class="btn-group">*/
/*                         <a href="{{ path('admin_faq_show', {'id':entity.id}) }}" class="btn btn-primary fancybox" data-fancybox-type="iframe" data-width="75%"><i class="fa fa-eye"></i></a>*/
/*                         <a href="{{ path('admin_faq_edit', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                         <a href="#" onClick="*/
/*                                 if(confirm('Voulez-vous Supprimer cet enregistrement ?'))*/
/*                                 document.forms.Suppr{{ entity.id }}Form.submit();*/
/*                                 else*/
/*                                 return false;*/
/*                                 " class="btn btn-danger"><i class="fa fa-trash"></i></a>*/
/*                     </div>*/
/*                     <form action="{{ path('admin_faq_delete', {'id': entity.id}) }}" method="post" name="Suppr{{ entity.id }}Form" style="display: none;">*/
/*                         <input type="hidden" name="_method" value="DELETE" />*/
/*                         {{ form_widget(deleteForms[entity.id]) }}*/
/*                     </form>*/
/*                 </td>*/
/*                 <td class="sorter" data-toggle="tooltip" data-placement="left" title="Déplacer la colonne"><i class="fa fa-arrows-v" ></i></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     {% include 'PointWebAdminBundle::_pager.html.twig' %}*/
/* {% endblock %}*/
/* */
