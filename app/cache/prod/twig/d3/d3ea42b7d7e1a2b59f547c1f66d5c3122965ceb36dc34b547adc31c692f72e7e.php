<?php

/* PointWebProductBundle:Category:sub_cat_table.html.twig */
class __TwigTemplate_df9dbe0276e3bed7377abe84738d3050aef125ea88e3c594c734104fac5196e8 extends Twig_Template
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
        // line 1
        echo "<table class=\"table table-striped table-bordered table-hover\" style=\"margin: 0\">
    <tbody>
    <tr data-url=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_sort", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" style=\"margin: 10px\">
        <td style=\"width: 2%\">";
        // line 4
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "<i class=\"fa fa-eye\"></i>";
        } else {
            echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
        }
        echo "</td>
        <td style=\"width: 3%\">
            ";
        // line 6
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 7
            echo "                <a class=\"fancybox\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()), 0, array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method"), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "AssetPath", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()), 0, array()), "name", array()), "html", null, true);
            echo "\" height=\"30\">
                </a>
            ";
        } else {
            // line 11
            echo "                -
            ";
        }
        // line 13
        echo "
        </td>
        <td class=\"titleTable\">
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</a>
            ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "childrens", array())) > 0)) {
            // line 18
            echo "                <span href=\"#\" class=\"menuParent\"
                      data-url=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_submenu", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\"
                      data-id=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "\">
                            </span>
            ";
        }
        // line 23
        echo "        </td>
        <td style=\"width: 15%\">
            <div class=\"btn-group\">
                <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                <a href=\"#\" onClick=\"
                        if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                        document.forms.Suppr";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "Form.submit();
                        else
                        return false;
                        \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
            </div>
            <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" name=\"Suppr";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "Form\" style=\"display: none;\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />

            </form>
        </td>
        <td style=\"width: 3%\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Remonter la catégorie d'un niveau\"><i class=\"fa fa-arrows-v\" ></i></td>
    </tr>
</tbody>
    </table>";
    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Category:sub_cat_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  96 => 30,  90 => 27,  86 => 26,  81 => 23,  75 => 20,  71 => 19,  68 => 18,  66 => 17,  60 => 16,  55 => 13,  51 => 11,  43 => 8,  38 => 7,  36 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <table class="table table-striped table-bordered table-hover" style="margin: 0">*/
/*     <tbody>*/
/*     <tr data-url="{{ path('admin_category_sort', {'id':entity.id}) }}" style="margin: 10px">*/
/*         <td style="width: 2%">{% if entity.online %}<i class="fa fa-eye"></i>{% else %}<i class="fa fa-eye-slash" style="color:#d4dddc;"></i>{% endif %}</td>*/
/*         <td style="width: 3%">*/
/*             {% if entity.pictures|length >0 %}*/
/*                 <a class="fancybox" href="{{ entity.pictures.0.getWebPath(base) }}">*/
/*                     <img src="{{ entity.image.AssetPath }}" alt="{{ entity.pictures.0.name }}" height="30">*/
/*                 </a>*/
/*             {% else %}*/
/*                 -*/
/*             {% endif %}*/
/* */
/*         </td>*/
/*         <td class="titleTable">*/
/*             <a href="{{ path('admin_news_edit', { 'id': entity.id }) }}">{{ entity.title }}</a>*/
/*             {% if entity.childrens|length > 0 %}*/
/*                 <span href="#" class="menuParent"*/
/*                       data-url="{{ path('admin_category_submenu', {'id':entity.id}) }}"*/
/*                       data-id="{{ entity.id }}">*/
/*                             </span>*/
/*             {% endif %}*/
/*         </td>*/
/*         <td style="width: 15%">*/
/*             <div class="btn-group">*/
/*                 <a href="{{ path('admin_category_show', {'id':entity.id}) }}" class="btn btn-primary fancybox" data-fancybox-type="iframe" data-width="75%"><i class="fa fa-eye"></i></a>*/
/*                 <a href="{{ path('admin_category_edit', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                 <a href="#" onClick="*/
/*                         if(confirm('Voulez-vous Supprimer cet enregistrement ?'))*/
/*                         document.forms.Suppr{{ entity.id }}Form.submit();*/
/*                         else*/
/*                         return false;*/
/*                         " class="btn btn-danger"><i class="fa fa-trash"></i></a>*/
/*             </div>*/
/*             <form action="{{ path('admin_category_delete', {'id': entity.id}) }}" method="post" name="Suppr{{ entity.id }}Form" style="display: none;">*/
/*                 <input type="hidden" name="_method" value="DELETE" />*/
/* */
/*             </form>*/
/*         </td>*/
/*         <td style="width: 3%" data-toggle="tooltip" data-placement="left" title="Remonter la catégorie d'un niveau"><i class="fa fa-arrows-v" ></i></td>*/
/*     </tr>*/
/* </tbody>*/
/*     </table>*/
