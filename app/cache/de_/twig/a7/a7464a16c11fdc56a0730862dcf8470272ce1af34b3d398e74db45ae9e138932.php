<?php

/* PointWebProductBundle:ProductCategory:sub_cat_table.html.twig */
class __TwigTemplate_697c013d2dd1cdd0773d757e3a8c00bbed2c620c905a320259d04a9f8624d6fa extends Twig_Template
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
        $__internal_0ce20561d4e8e369482f81b7079fbec60975fc2b0a6a26583027925717679054 = $this->env->getExtension("native_profiler");
        $__internal_0ce20561d4e8e369482f81b7079fbec60975fc2b0a6a26583027925717679054->enter($__internal_0ce20561d4e8e369482f81b7079fbec60975fc2b0a6a26583027925717679054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:ProductCategory:sub_cat_table.html.twig"));

        // line 1
        echo "<table class=\"table table-striped table-bordered table-hover sortable\" style=\"margin: 0\">
    <tbody>
    <tr style=\"margin: 10px\">
        <td style=\"width: 2%\">";
        // line 4
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "<i class=\"fa fa-eye\"></i>";
        } else {
            echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
        }
        echo "</td>

        <td style=\"width: 2%;\">
                ";
        // line 7
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), array(), "array")) > 0)) {
            // line 8
            echo "                    <a class=\"fancybox\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), array(), "array"), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            echo "\">
                        <img  height=\"30\" alt=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), array(), "array"), 0, array(), "array"), "name", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), array(), "array"), 0, array(), "array"), "getWebPathSmall", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            echo "\" data-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), array(), "array"), 0, array(), "array"), "getWebPathSmall", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            echo "\">
                    </a>
                ";
        } else {
            // line 12
            echo "                    -
                ";
        }
        // line 14
        echo "        </td>
        <td class=\"titleTable\">
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</a>
        </td>
        <td style=\"width: 1%;\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
        ";
        // line 19
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lvl", array()) != 0)) {
            // line 20
            echo "            <td style=\"width: 15%\">
                <div class=\"btn-group\">
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_category_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    ";
            // line 24
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "__children", array())) == 0)) {
                // line 25
                echo "                    <a href=\"#\" onClick=\"
                            if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                            document.forms.Suppr";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
                echo "Form.submit();
                            else
                            return false;
                            \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i>
                    </a>
                    ";
            } else {
                // line 33
                echo "                    <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Vous devez vider la catégorie avant de supprimer\" class=\"btn btn-default\">
                        <i class=\"fa fa-trash\" ></i>
                    </a>
                    ";
            }
            // line 37
            echo "                </div>
                <form action=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_category_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" name=\"Suppr";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "Form\" style=\"display: none;\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                    ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), array(), "array"), 'widget');
            echo "
                </form>

            </td>
            <td style=\"width: 3%\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Descendre\">
                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_category_down", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-long-arrow-down\" ></i>
                </a>
            </td>
            <td style=\"width: 3%\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"monter\">
                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_category_up", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-long-arrow-up\" ></i>
                </a>
            </td>
        ";
        } else {
            // line 55
            echo "            <td colspan=\"3\" style=\"width: 2%\">
                <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
            </td>
        ";
        }
        // line 59
        echo "    </tr>
    </tbody>
</table>
";
        
        $__internal_0ce20561d4e8e369482f81b7079fbec60975fc2b0a6a26583027925717679054->leave($__internal_0ce20561d4e8e369482f81b7079fbec60975fc2b0a6a26583027925717679054_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:ProductCategory:sub_cat_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 59,  145 => 56,  142 => 55,  134 => 50,  126 => 45,  118 => 40,  111 => 38,  108 => 37,  102 => 33,  93 => 27,  89 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 20,  73 => 19,  69 => 18,  62 => 16,  58 => 14,  54 => 12,  44 => 9,  39 => 8,  37 => 7,  27 => 4,  22 => 1,);
    }
}
/* <table class="table table-striped table-bordered table-hover sortable" style="margin: 0">*/
/*     <tbody>*/
/*     <tr style="margin: 10px">*/
/*         <td style="width: 2%">{% if entity.online %}<i class="fa fa-eye"></i>{% else %}<i class="fa fa-eye-slash" style="color:#d4dddc;"></i>{% endif %}</td>*/
/* */
/*         <td style="width: 2%;">*/
/*                 {% if pictures[entity.id]|length >0  %}*/
/*                     <a class="fancybox" href="{{ asset(pictures[entity.id][0].getWebPath(base)) }}">*/
/*                         <img  height="30" alt="{{ pictures[entity.id][0].name }}" src="{{ asset(pictures[entity.id][0].getWebPathSmall(base)) }}" data-image="{{ asset(pictures[entity.id][0].getWebPathSmall(base)) }}">*/
/*                     </a>*/
/*                 {% else %}*/
/*                     -*/
/*                 {% endif %}*/
/*         </td>*/
/*         <td class="titleTable">*/
/*             <a href="{{ path('admin_product_category_edit', { 'id': entity.id }) }}">{{ entity.title }}</a>*/
/*         </td>*/
/*         <td style="width: 1%;">{{ entity.id }}</td>*/
/*         {% if entity.lvl != 0 %}*/
/*             <td style="width: 15%">*/
/*                 <div class="btn-group">*/
/*                     <a href="{{ path('admin_product_category_show', {'id':entity.id}) }}" class="btn btn-primary fancybox" data-fancybox-type="iframe" data-width="75%"><i class="fa fa-eye"></i></a>*/
/*                     <a href="{{ path('admin_product_category_edit', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                     {% if entity.__children|length == 0 %}*/
/*                     <a href="#" onClick="*/
/*                             if(confirm('Voulez-vous Supprimer cet enregistrement ?'))*/
/*                             document.forms.Suppr{{ entity.id }}Form.submit();*/
/*                             else*/
/*                             return false;*/
/*                             " class="btn btn-danger"><i class="fa fa-trash"></i>*/
/*                     </a>*/
/*                     {% else %}*/
/*                     <a href="#" data-toggle="tooltip" data-placement="left" title="Vous devez vider la catégorie avant de supprimer" class="btn btn-default">*/
/*                         <i class="fa fa-trash" ></i>*/
/*                     </a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <form action="{{ path('admin_product_category_delete', {'id': entity.id}) }}" method="post" name="Suppr{{ entity.id }}Form" style="display: none;">*/
/*                     <input type="hidden" name="_method" value="DELETE" />*/
/*                     {{ form_widget(deleteForms[entity.id]) }}*/
/*                 </form>*/
/* */
/*             </td>*/
/*             <td style="width: 3%" data-toggle="tooltip" data-placement="left" title="Descendre">*/
/*                 <a href="{{ path('admin_product_category_down', {'id': entity.id}) }}">*/
/*                     <i class="fa fa-long-arrow-down" ></i>*/
/*                 </a>*/
/*             </td>*/
/*             <td style="width: 3%" data-toggle="tooltip" data-placement="left" title="monter">*/
/*                 <a href="{{ path('admin_product_category_up', {'id': entity.id}) }}">*/
/*                     <i class="fa fa-long-arrow-up" ></i>*/
/*                 </a>*/
/*             </td>*/
/*         {% else %}*/
/*             <td colspan="3" style="width: 2%">*/
/*                 <a href="{{ path('admin_product_category_edit', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*             </td>*/
/*         {% endif %}*/
/*     </tr>*/
/*     </tbody>*/
/* </table>*/
/* */
