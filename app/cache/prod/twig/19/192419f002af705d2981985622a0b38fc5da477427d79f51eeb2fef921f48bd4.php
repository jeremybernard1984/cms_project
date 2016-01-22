<?php

/* PointWebProductBundle:Product:sub_products_table.html.twig */
class __TwigTemplate_3c9b0cbff461cde50482a3ae58368c7fe478dedea043be72378bef6ad50250d0 extends Twig_Template
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
        $__internal_2cdf398e2d8a538a0da258fcb5e65b6c227a414359b70adf8b343c8889e17d38 = $this->env->getExtension("native_profiler");
        $__internal_2cdf398e2d8a538a0da258fcb5e65b6c227a414359b70adf8b343c8889e17d38->enter($__internal_2cdf398e2d8a538a0da258fcb5e65b6c227a414359b70adf8b343c8889e17d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Product:sub_products_table.html.twig"));

        // line 1
        echo "<table id=\"dataTables\" class=\"table table-striped table-bordered table-hover sortable\" >
    <thead>
    <tr style=\"background-color:#d4dddc;\">
        <th style=\"width: 2%;\"></th>
        <th style=\"width: 2%;\"></th>
        <th class=\"titleTable\">Titre</th>
        <th style=\"width: 15%;\">Prix</th>
        <th style=\"width: 15%;\">Actions</th>
        <th style=\"width: 3%;\"></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listProducts"]) ? $context["listProducts"] : $this->getContext($context, "listProducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 14
            echo "    ";
            if (($this->getAttribute($context["entity"], "category", array()) == $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title", array()))) {
                // line 15
                echo "        <tr data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
            <td style=\"width: 2%;\">";
                // line 16
                if ($this->getAttribute($context["entity"], "online", array())) {
                    echo "<i class=\"fa fa-eye\"></i>";
                } else {
                    echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
                }
                echo "</td>
            <td style=\"width: 2%;\">
                ";
                // line 18
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "pictures", array())) > 0)) {
                    // line 19
                    echo "                    <a class=\"fancybox\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                        <img  height=\"30\" alt=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "name", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\" data-image=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                    echo "\">
                    </a>
                ";
                } else {
                    // line 23
                    echo "                    -
                ";
                }
                // line 25
                echo "            </td>
            <td class=\"titleTable\"><a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
                echo "</a></td>
            <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
                echo " €</td>
            <td style=\"width: 15%;\">
                <div class=\"btn-group\">
                    <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    <a href=\"#\" onClick=\"
                            if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                            document.forms.Suppr";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "Form.submit();
                            else
                            return false;
                            \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                </div>
                <form action=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" method=\"post\" name=\"Suppr";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "Form\" style=\"display: none;\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                    ";
                // line 41
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'widget');
                echo "
                </form>
            </td>
            <td style=\"width: 3%;\" class=\"sorter\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Déplacer la colonne\"><i class=\"fa fa-arrows-v\" ></i></td>
        </tr>
    ";
            }
            // line 47
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </tbody>
</table>";
        
        $__internal_2cdf398e2d8a538a0da258fcb5e65b6c227a414359b70adf8b343c8889e17d38->leave($__internal_2cdf398e2d8a538a0da258fcb5e65b6c227a414359b70adf8b343c8889e17d38_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Product:sub_products_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 48,  129 => 47,  120 => 41,  113 => 39,  105 => 34,  99 => 31,  95 => 30,  89 => 27,  81 => 26,  78 => 25,  74 => 23,  64 => 20,  59 => 19,  57 => 18,  48 => 16,  43 => 15,  40 => 14,  36 => 13,  22 => 1,);
    }
}
/* <table id="dataTables" class="table table-striped table-bordered table-hover sortable" >*/
/*     <thead>*/
/*     <tr style="background-color:#d4dddc;">*/
/*         <th style="width: 2%;"></th>*/
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
/*             <td style="width: 2%;">*/
/*                 {% if entity.pictures|length >0 %}*/
/*                     <a class="fancybox" href="{{ asset(entity.pictures[0].getWebPath(base)) }}">*/
/*                         <img  height="30" alt="{{ entity.pictures[0].name }}" src="{{ asset(entity.pictures[0].getWebPath(base)) }}" data-image="{{ asset(entity.pictures[0].getWebPath(base)) }}">*/
/*                     </a>*/
/*                 {% else %}*/
/*                     -*/
/*                 {% endif %}*/
/*             </td>*/
/*             <td class="titleTable"><a href="{{ path('admin_product_edit', { 'id': entity.id }) }}">{{ entity.title }} - {{ entity.position }}</a></td>*/
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
