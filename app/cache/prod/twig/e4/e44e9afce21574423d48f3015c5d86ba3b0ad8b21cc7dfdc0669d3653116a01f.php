<?php

/* PointWebProductBundle:Category:sub.html.twig */
class __TwigTemplate_0a14907074c1ed215654788c8e1d8d6647a7405aa638199f5a6b583549947b26 extends Twig_Template
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
        $__internal_fe35265d53de4bdc44582a23c0d641880b8832166dfe550158a8b3a9d5fc003e = $this->env->getExtension("native_profiler");
        $__internal_fe35265d53de4bdc44582a23c0d641880b8832166dfe550158a8b3a9d5fc003e->enter($__internal_fe35265d53de4bdc44582a23c0d641880b8832166dfe550158a8b3a9d5fc003e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Category:sub.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "childrens", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 2
            echo "    <table class=\"table table-striped table-bordered table-hover\" style=\"margin: 0\">
        <tbody>
        <tr data-url=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" style=\"margin: 10px\">
            <td style=\"width: 2%\">";
            // line 5
            if ($this->getAttribute($context["entity"], "online", array())) {
                echo "<i class=\"fa fa-eye\"></i>";
            } else {
                echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
            }
            echo "</td>
            <td style=\"width: 3%\">
                ";
            // line 7
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "pictures", array())) > 0)) {
                // line 8
                echo "                    <a class=\"fancybox\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method"), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "AssetPath", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array()), "name", array()), "html", null, true);
                echo "\" height=\"30\">
                    </a>
                ";
            } else {
                // line 12
                echo "                    -
                ";
            }
            // line 14
            echo "
            </td>
            <td class=\"titleTable\">
                <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</a>
                ";
            // line 18
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "childrens", array())) > 0)) {
                // line 19
                echo "                    <span href=\"#\" class=\"menuParent\"
                          data-url=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_submenu", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"
                          data-id=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\">
                            </span>
                ";
            }
            // line 24
            echo "            </td>
            <td style=\"width: 15%\">
                <div class=\"btn-group\">
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    <a href=\"#\" onClick=\"
                            if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                            document.forms.Suppr";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form.submit();
                            else
                            return false;
                            \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                </div>
                <form action=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" name=\"Suppr";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form\" style=\"display: none;\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />

                </form>
            </td>
            <td style=\"width: 3%\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Remonter la catégorie d'un niveau\"><i class=\"fa fa-arrows-v\" ></i></td>
        </tr>
        </tbody>
    </table>
    ";
            // line 45
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "childrens", array())) > 0)) {
                // line 46
                echo "        <ol>
            <li id=\"menuChilds-";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\" class=\"menuChilds list-group\"></li>
        </ol>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fe35265d53de4bdc44582a23c0d641880b8832166dfe550158a8b3a9d5fc003e->leave($__internal_fe35265d53de4bdc44582a23c0d641880b8832166dfe550158a8b3a9d5fc003e_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Category:sub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 47,  127 => 46,  125 => 45,  111 => 36,  103 => 31,  97 => 28,  93 => 27,  88 => 24,  82 => 21,  78 => 20,  75 => 19,  73 => 18,  67 => 17,  62 => 14,  58 => 12,  50 => 9,  45 => 8,  43 => 7,  34 => 5,  30 => 4,  26 => 2,  22 => 1,);
    }
}
/* {% for entity in entity.childrens %}*/
/*     <table class="table table-striped table-bordered table-hover" style="margin: 0">*/
/*         <tbody>*/
/*         <tr data-url="{{ path('admin_category_sort', {'id':entity.id}) }}" style="margin: 10px">*/
/*             <td style="width: 2%">{% if entity.online %}<i class="fa fa-eye"></i>{% else %}<i class="fa fa-eye-slash" style="color:#d4dddc;"></i>{% endif %}</td>*/
/*             <td style="width: 3%">*/
/*                 {% if entity.pictures|length >0 %}*/
/*                     <a class="fancybox" href="{{ entity.pictures.0.getWebPath(base) }}">*/
/*                         <img src="{{ entity.image.AssetPath }}" alt="{{ entity.pictures.0.name }}" height="30">*/
/*                     </a>*/
/*                 {% else %}*/
/*                     -*/
/*                 {% endif %}*/
/* */
/*             </td>*/
/*             <td class="titleTable">*/
/*                 <a href="{{ path('admin_news_edit', { 'id': entity.id }) }}">{{ entity.title }}</a>*/
/*                 {% if entity.childrens|length > 0 %}*/
/*                     <span href="#" class="menuParent"*/
/*                           data-url="{{ path('admin_category_submenu', {'id':entity.id}) }}"*/
/*                           data-id="{{ entity.id }}">*/
/*                             </span>*/
/*                 {% endif %}*/
/*             </td>*/
/*             <td style="width: 15%">*/
/*                 <div class="btn-group">*/
/*                     <a href="{{ path('admin_category_show', {'id':entity.id}) }}" class="btn btn-primary fancybox" data-fancybox-type="iframe" data-width="75%"><i class="fa fa-eye"></i></a>*/
/*                     <a href="{{ path('admin_category_edit', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                     <a href="#" onClick="*/
/*                             if(confirm('Voulez-vous Supprimer cet enregistrement ?'))*/
/*                             document.forms.Suppr{{ entity.id }}Form.submit();*/
/*                             else*/
/*                             return false;*/
/*                             " class="btn btn-danger"><i class="fa fa-trash"></i></a>*/
/*                 </div>*/
/*                 <form action="{{ path('admin_category_delete', {'id': entity.id}) }}" method="post" name="Suppr{{ entity.id }}Form" style="display: none;">*/
/*                     <input type="hidden" name="_method" value="DELETE" />*/
/* */
/*                 </form>*/
/*             </td>*/
/*             <td style="width: 3%" data-toggle="tooltip" data-placement="left" title="Remonter la catégorie d'un niveau"><i class="fa fa-arrows-v" ></i></td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/*     {% if entity.childrens|length > 0 %}*/
/*         <ol>*/
/*             <li id="menuChilds-{{ entity.id }}" class="menuChilds list-group"></li>*/
/*         </ol>*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
