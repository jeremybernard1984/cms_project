<?php

/* PointWebProductBundle:Category:sub_products_table.html.twig */
class __TwigTemplate_a5497b7cf5fad75362c02c91f6374ca638a4e578e68f58ad9604fa18c0d324d7 extends Twig_Template
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
        $__internal_a21d184e35ac0882d18d788de60cc8353b3cf55c4e964460317f68777277497b = $this->env->getExtension("native_profiler");
        $__internal_a21d184e35ac0882d18d788de60cc8353b3cf55c4e964460317f68777277497b->enter($__internal_a21d184e35ac0882d18d788de60cc8353b3cf55c4e964460317f68777277497b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Category:sub_products_table.html.twig"));

        // line 1
        echo "<table id=\"dataTables\" class=\"table table-striped table-bordered table-hover sortable\" >
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
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listProducts"]) ? $context["listProducts"] : $this->getContext($context, "listProducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 13
            echo "    ";
            if (($this->getAttribute($context["entity"], "category", array()) == $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title", array()))) {
                // line 14
                echo "        <tr data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
            <td style=\"width: 2%;\">";
                // line 15
                if ($this->getAttribute($context["entity"], "online", array())) {
                    echo "<i class=\"fa fa-eye\"></i>";
                } else {
                    echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
                }
                echo "</td>
            <td class=\"titleTable\"><a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                echo "</a></td>
            <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
                echo " €</td>
            <td style=\"width: 15%;\">
                <div class=\"btn-group\">
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    <a href=\"#\" onClick=\"
                            if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                            document.forms.Suppr";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "Form.submit();
                            else
                            return false;
                            \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                </div>
                <form action=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" method=\"post\" name=\"Suppr";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "Form\" style=\"display: none;\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                    ";
                // line 31
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'widget');
                echo "
                </form>
            </td>
            <td style=\"width: 3%;\" class=\"sorter\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Déplacer la colonne\"><i class=\"fa fa-arrows-v\" ></i></td>
        </tr>
    ";
            }
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </tbody>
</table>";
        
        $__internal_a21d184e35ac0882d18d788de60cc8353b3cf55c4e964460317f68777277497b->leave($__internal_a21d184e35ac0882d18d788de60cc8353b3cf55c4e964460317f68777277497b_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Category:sub_products_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  101 => 37,  92 => 31,  85 => 29,  77 => 24,  71 => 21,  67 => 20,  61 => 17,  55 => 16,  47 => 15,  42 => 14,  39 => 13,  35 => 12,  22 => 1,);
    }
}
/* <table id="dataTables" class="table table-striped table-bordered table-hover sortable" >*/
/*     <thead>*/
/*     <tr style="background-color:#d4dddc;">*/
/*         <th style="width: 2%;"></th>*/
/*         <th class="titleTable">Titre</th>*/
/*         <th style="width: 15%;">Prix</th>*/
/*         <th style="width: 15%;">Actions</th>*/
/*         <th style="width: 3%;"></th>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for entity in listProducts %}*/
/*     {% if entity.category == category.title %}*/
/*         <tr data-url="{{ path('admin_product_sort', {'id':entity.id}) }}">*/
/*             <td style="width: 2%;">{% if entity.online %}<i class="fa fa-eye"></i>{% else %}<i class="fa fa-eye-slash" style="color:#d4dddc;"></i>{% endif %}</td>*/
/*             <td class="titleTable"><a href="{{ path('admin_product_edit', { 'id': entity.id }) }}">{{ entity.title }}</a></td>*/
/*             <td>{{ entity.price }} €</td>*/
/*             <td style="width: 15%;">*/
/*                 <div class="btn-group">*/
/*                     <a href="{{ path('admin_product_show', {'id':entity.id}) }}" class="btn btn-primary fancybox" data-fancybox-type="iframe" data-width="75%"><i class="fa fa-eye"></i></a>*/
/*                     <a href="{{ path('admin_product_edit', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                     <a href="#" onClick="*/
/*                             if(confirm('Voulez-vous Supprimer cet enregistrement ?'))*/
/*                             document.forms.Suppr{{ entity.id }}Form.submit();*/
/*                             else*/
/*                             return false;*/
/*                             " class="btn btn-danger"><i class="fa fa-trash"></i></a>*/
/*                 </div>*/
/*                 <form action="{{ path('admin_product_delete', {'id': entity.id}) }}" method="post" name="Suppr{{ entity.id }}Form" style="display: none;">*/
/*                     <input type="hidden" name="_method" value="DELETE" />*/
/*                     {{ form_widget(deleteForms[entity.id]) }}*/
/*                 </form>*/
/*             </td>*/
/*             <td style="width: 3%;" class="sorter" data-toggle="tooltip" data-placement="left" title="Déplacer la colonne"><i class="fa fa-arrows-v" ></i></td>*/
/*         </tr>*/
/*     {% endif %}*/
/*     {% endfor %}*/
/*     </tbody>*/
/* </table>*/
