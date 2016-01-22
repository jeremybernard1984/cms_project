<?php

/* PointWebProductBundle:Product:products_table.html.twig */
class __TwigTemplate_7c4b3ee486de9de65a32e3e2440f455b555b1729148af4b1288afbc80d2fb96c extends Twig_Template
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
        $__internal_ed1eb4844bce021bd6e04ed9ff83f6f76e4e255a09e42fffc2e8213cc0f1ba55 = $this->env->getExtension("native_profiler");
        $__internal_ed1eb4844bce021bd6e04ed9ff83f6f76e4e255a09e42fffc2e8213cc0f1ba55->enter($__internal_ed1eb4844bce021bd6e04ed9ff83f6f76e4e255a09e42fffc2e8213cc0f1ba55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Product:products_table.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["entitiesSansCat"]) ? $context["entitiesSansCat"] : $this->getContext($context, "entitiesSansCat")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
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
            <td style=\"width: 2%;\">
                ";
            // line 17
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "pictures", array())) > 0)) {
                // line 18
                echo "                    <a class=\"fancybox\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\">
                        <img  height=\"30\" alt=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\" data-image=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\">
                    </a>
                ";
            } else {
                // line 22
                echo "                    -
                ";
            }
            // line 24
            echo "            </td>
            <td class=\"titleTable\"><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "price", array()), "html", null, true);
            echo " €</td>
            <td style=\"width: 15%;\">
                <div class=\"btn-group\">
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    <a href=\"#\" onClick=\"
                            if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                            document.forms.Suppr";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form.submit();
                            else
                            return false;
                            \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                </div>
                <form action=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" name=\"Suppr";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form\" style=\"display: none;\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                    ";
            // line 40
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
        // line 46
        echo "    </tbody>
</table>";
        
        $__internal_ed1eb4844bce021bd6e04ed9ff83f6f76e4e255a09e42fffc2e8213cc0f1ba55->leave($__internal_ed1eb4844bce021bd6e04ed9ff83f6f76e4e255a09e42fffc2e8213cc0f1ba55_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Product:products_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  117 => 40,  110 => 38,  102 => 33,  96 => 30,  92 => 29,  86 => 26,  78 => 25,  75 => 24,  71 => 22,  61 => 19,  56 => 18,  54 => 17,  45 => 15,  40 => 14,  36 => 13,  22 => 1,);
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
/*     {% for entity in entitiesSansCat %}*/
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
/*     {% endfor %}*/
/*     </tbody>*/
/* </table>*/
