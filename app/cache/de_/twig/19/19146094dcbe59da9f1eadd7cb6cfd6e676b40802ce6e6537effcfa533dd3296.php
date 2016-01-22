<?php

/* @PointWebGed/Folder/index.html.twig */
class __TwigTemplate_12cf84dd13b2781f00fff97920770c33ccb85aeac69780ee3de121ddb5efd856 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "@PointWebGed/Folder/index.html.twig", 1);
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
        $__internal_fc2b055017bf8768f0d9eba4f5a2c68f1dfb903b7384fd245a3ec74fa26d27da = $this->env->getExtension("native_profiler");
        $__internal_fc2b055017bf8768f0d9eba4f5a2c68f1dfb903b7384fd245a3ec74fa26d27da->enter($__internal_fc2b055017bf8768f0d9eba4f5a2c68f1dfb903b7384fd245a3ec74fa26d27da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebGed/Folder/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc2b055017bf8768f0d9eba4f5a2c68f1dfb903b7384fd245a3ec74fa26d27da->leave($__internal_fc2b055017bf8768f0d9eba4f5a2c68f1dfb903b7384fd245a3ec74fa26d27da_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_08db1cf4236b15f4fa0632ecaf2c430c948df01fefd41eadfe3b170b6904666a = $this->env->getExtension("native_profiler");
        $__internal_08db1cf4236b15f4fa0632ecaf2c430c948df01fefd41eadfe3b170b6904666a->enter($__internal_08db1cf4236b15f4fa0632ecaf2c430c948df01fefd41eadfe3b170b6904666a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        
        $__internal_08db1cf4236b15f4fa0632ecaf2c430c948df01fefd41eadfe3b170b6904666a->leave($__internal_08db1cf4236b15f4fa0632ecaf2c430c948df01fefd41eadfe3b170b6904666a_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebGed/Folder/index.html.twig";
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
