<?php

/* PointWebGedBundle:Folder:index.html.twig */
class __TwigTemplate_5003cfa0bf604502fc9b0c5dc124593eda0e77674b712103ba0552eab3d579c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebGedBundle:Folder:index.html.twig", 1);
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
        $__internal_c3f085728d13486fdae5b43f7ce733e0c919679339a0315f3106962aab9560f0 = $this->env->getExtension("native_profiler");
        $__internal_c3f085728d13486fdae5b43f7ce733e0c919679339a0315f3106962aab9560f0->enter($__internal_c3f085728d13486fdae5b43f7ce733e0c919679339a0315f3106962aab9560f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGedBundle:Folder:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f085728d13486fdae5b43f7ce733e0c919679339a0315f3106962aab9560f0->leave($__internal_c3f085728d13486fdae5b43f7ce733e0c919679339a0315f3106962aab9560f0_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_4547100980d9386cc3238dccb648b17a8928d9bd0bfc66e5ded34f2214091db9 = $this->env->getExtension("native_profiler");
        $__internal_4547100980d9386cc3238dccb648b17a8928d9bd0bfc66e5ded34f2214091db9->enter($__internal_4547100980d9386cc3238dccb648b17a8928d9bd0bfc66e5ded34f2214091db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Liste des dossiers</h1>

    <table class=\"table table-striped table-hover sortable\">
        <thead>
        <tr>
            <th style=\"width: 5px;\"></th>
            <th>Nom</th>
            <th>Date de création</th>
            <th style=\"width: 125px;\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_folder_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <td class=\"sorter\"><i class=\"mdi-action-swap-vert\"></i></td>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_folder_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["entity"], "createDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createDate", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>
                    <div class=\"btn-group-vertical\">
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_folder_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_folder_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-pencil\"></i> Modifier</a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("admin_folder_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
";
        
        $__internal_4547100980d9386cc3238dccb648b17a8928d9bd0bfc66e5ded34f2214091db9->leave($__internal_4547100980d9386cc3238dccb648b17a8928d9bd0bfc66e5ded34f2214091db9_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGedBundle:Folder:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  95 => 31,  83 => 25,  78 => 23,  70 => 20,  64 => 19,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block  content_right %}*/
/*     <h1>Liste des dossiers</h1>*/
/* */
/*     <table class="table table-striped table-hover sortable">*/
/*         <thead>*/
/*         <tr>*/
/*             <th style="width: 5px;"></th>*/
/*             <th>Nom</th>*/
/*             <th>Date de création</th>*/
/*             <th style="width: 125px;">Actions</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr data-url="{{ path('admin_folder_sort', {'id':entity.id}) }}">*/
/*                 <td class="sorter"><i class="mdi-action-swap-vert"></i></td>*/
/*                 <td><a href="{{ path('admin_folder_show', { 'id': entity.id }) }}">{{ entity.name }}</a></td>*/
/*                 <td>{% if entity.createDate %}{{ entity.createDate|date('d-m-Y') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <div class="btn-group-vertical">*/
/*                         <a href="{{ path('admin_folder_show', {'id':entity.id}) }}" class="btn btn-primary"><i*/
/*                                     class="fa fa-eye"></i> Voir</a>*/
/*                         <a href="{{ path('admin_folder_edit', {'id':entity.id}) }}" class="btn btn-primary"><i*/
/*                                     class="fa fa-pencil"></i> Modifier</a>*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <a href="{{ path('admin_folder_new') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Ajouter</a>*/
/* {% endblock %}*/
