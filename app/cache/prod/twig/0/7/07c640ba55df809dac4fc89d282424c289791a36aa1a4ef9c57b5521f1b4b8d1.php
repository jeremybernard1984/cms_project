<?php

/* PointWebProductBundle:Category:sub_cat_table.html.twig */
class __TwigTemplate_07c640ba55df809dac4fc89d282424c289791a36aa1a4ef9c57b5521f1b4b8d1 extends Twig_Template
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
        $__internal_78bc6c9fbe7b813631468c8bb152306790da428ccb28af49e632d3ffe9f05ea5 = $this->env->getExtension("native_profiler");
        $__internal_78bc6c9fbe7b813631468c8bb152306790da428ccb28af49e632d3ffe9f05ea5->enter($__internal_78bc6c9fbe7b813631468c8bb152306790da428ccb28af49e632d3ffe9f05ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Category:sub_cat_table.html.twig"));

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
        
        $__internal_78bc6c9fbe7b813631468c8bb152306790da428ccb28af49e632d3ffe9f05ea5->leave($__internal_78bc6c9fbe7b813631468c8bb152306790da428ccb28af49e632d3ffe9f05ea5_prof);

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
        return array (  107 => 35,  99 => 30,  93 => 27,  89 => 26,  84 => 23,  78 => 20,  74 => 19,  71 => 18,  69 => 17,  63 => 16,  58 => 13,  54 => 11,  46 => 8,  41 => 7,  39 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
