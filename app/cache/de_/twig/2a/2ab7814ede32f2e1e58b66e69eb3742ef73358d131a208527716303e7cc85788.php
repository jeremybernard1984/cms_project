<?php

/* PointWebAdminBundle:Menu:sub_menu_table.html.twig */
class __TwigTemplate_ad508c27bdeb7b04053b0783de56fdf507c21de3e28d4101945202a08d57595c extends Twig_Template
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
        $__internal_86e957d6a0672cdc93ae5a23a17e62937ff817ea2209ce513c1cf09eebf84369 = $this->env->getExtension("native_profiler");
        $__internal_86e957d6a0672cdc93ae5a23a17e62937ff817ea2209ce513c1cf09eebf84369->enter($__internal_86e957d6a0672cdc93ae5a23a17e62937ff817ea2209ce513c1cf09eebf84369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Menu:sub_menu_table.html.twig"));

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
        // line 6
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), array(), "array")) > 0)) {
            // line 7
            echo "                <a class=\"fancybox\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), array(), "array"), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            echo "\">
                    <img  height=\"30\" alt=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), array(), "array"), 0, array(), "array"), "name", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), array(), "array"), 0, array(), "array"), "getWebPathSmall", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            echo "\" data-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), array(), "array"), 0, array(), "array"), "getWebPathSmall", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            echo "\">
                </a>
            ";
        } else {
            // line 11
            echo "                -
            ";
        }
        // line 13
        echo "        </td>
        <td class=\"titleTable\">
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</a>
        </td>
        ";
        // line 17
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lvl", array()) != 0)) {
            // line 18
            echo "            <td style=\"width: 15%\">
                <div class=\"btn-group\">
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    ";
            // line 22
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "__children", array())) == 0)) {
                // line 23
                echo "                        <a href=\"#\" onClick=\"
                                if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                                document.forms.Suppr";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
                echo "Form.submit();
                                else
                                return false;
                                \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i>
                        </a>
                    ";
            } else {
                // line 31
                echo "                        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Vous devez vider la catégorie avant de supprimer\" class=\"btn btn-default\">
                            <i class=\"fa fa-trash\" ></i>
                        </a>
                    ";
            }
            // line 35
            echo "                </div>
                <form action=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" name=\"Suppr";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "Form\" style=\"display: none;\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                    ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), array(), "array"), 'widget');
            echo "
                </form>

            </td>
            <td style=\"width: 3%\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Descendre\">
                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_down", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-long-arrow-down\" ></i>
                </a>
            </td>
            <td style=\"width: 3%\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"monter\">
                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_up", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-long-arrow-up\" ></i>
                </a>
            </td>
        ";
        } else {
            // line 53
            echo "            <td colspan=\"3\" style=\"width: 2%\">
                <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
            </td>
        ";
        }
        // line 57
        echo "    </tr>
    </tbody>
</table>
";
        
        $__internal_86e957d6a0672cdc93ae5a23a17e62937ff817ea2209ce513c1cf09eebf84369->leave($__internal_86e957d6a0672cdc93ae5a23a17e62937ff817ea2209ce513c1cf09eebf84369_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Menu:sub_menu_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 57,  142 => 54,  139 => 53,  131 => 48,  123 => 43,  115 => 38,  108 => 36,  105 => 35,  99 => 31,  90 => 25,  86 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 18,  70 => 17,  61 => 15,  57 => 13,  53 => 11,  43 => 8,  38 => 7,  36 => 6,  27 => 4,  22 => 1,);
    }
}
/* <table class="table table-striped table-bordered table-hover sortable" style="margin: 0">*/
/*     <tbody>*/
/*     <tr style="margin: 10px">*/
/*         <td style="width: 2%">{% if entity.online %}<i class="fa fa-eye"></i>{% else %}<i class="fa fa-eye-slash" style="color:#d4dddc;"></i>{% endif %}</td>*/
/*         <td style="width: 2%;">*/
/*             {% if pictures[entity.id]|length >0  %}*/
/*                 <a class="fancybox" href="{{ asset(pictures[entity.id][0].getWebPath(base)) }}">*/
/*                     <img  height="30" alt="{{ pictures[entity.id][0].name }}" src="{{ asset(pictures[entity.id][0].getWebPathSmall(base)) }}" data-image="{{ asset(pictures[entity.id][0].getWebPathSmall(base)) }}">*/
/*                 </a>*/
/*             {% else %}*/
/*                 -*/
/*             {% endif %}*/
/*         </td>*/
/*         <td class="titleTable">*/
/*             <a href="{{ path('admin_menu_edit', { 'id': entity.id }) }}">{{ entity.id }} - {{ entity.title }}</a>*/
/*         </td>*/
/*         {% if entity.lvl != 0 %}*/
/*             <td style="width: 15%">*/
/*                 <div class="btn-group">*/
/*                     <a href="{{ path('admin_menu_show', {'id':entity.id}) }}" class="btn btn-primary fancybox" data-fancybox-type="iframe" data-width="75%"><i class="fa fa-eye"></i></a>*/
/*                     <a href="{{ path('admin_menu_edit', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                     {% if entity.__children|length == 0 %}*/
/*                         <a href="#" onClick="*/
/*                                 if(confirm('Voulez-vous Supprimer cet enregistrement ?'))*/
/*                                 document.forms.Suppr{{ entity.id }}Form.submit();*/
/*                                 else*/
/*                                 return false;*/
/*                                 " class="btn btn-danger"><i class="fa fa-trash"></i>*/
/*                         </a>*/
/*                     {% else %}*/
/*                         <a href="#" data-toggle="tooltip" data-placement="left" title="Vous devez vider la catégorie avant de supprimer" class="btn btn-default">*/
/*                             <i class="fa fa-trash" ></i>*/
/*                         </a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <form action="{{ path('admin_menu_delete', {'id': entity.id}) }}" method="post" name="Suppr{{ entity.id }}Form" style="display: none;">*/
/*                     <input type="hidden" name="_method" value="DELETE" />*/
/*                     {{ form_widget(deleteForms[entity.id]) }}*/
/*                 </form>*/
/* */
/*             </td>*/
/*             <td style="width: 3%" data-toggle="tooltip" data-placement="left" title="Descendre">*/
/*                 <a href="{{ path('admin_menu_down', {'id': entity.id}) }}">*/
/*                     <i class="fa fa-long-arrow-down" ></i>*/
/*                 </a>*/
/*             </td>*/
/*             <td style="width: 3%" data-toggle="tooltip" data-placement="left" title="monter">*/
/*                 <a href="{{ path('admin_menu_up', {'id': entity.id}) }}">*/
/*                     <i class="fa fa-long-arrow-up" ></i>*/
/*                 </a>*/
/*             </td>*/
/*         {% else %}*/
/*             <td colspan="3" style="width: 2%">*/
/*                 <a href="{{ path('admin_menu_edit', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*             </td>*/
/*         {% endif %}*/
/*     </tr>*/
/*     </tbody>*/
/* </table>*/
/* */
