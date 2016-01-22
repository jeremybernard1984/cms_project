<?php

/* PointWebPartnerBundle:PartnerCategory:index.html.twig */
class __TwigTemplate_d074a3967abf804b937d29a3dab450d11a11c6386a5ba1949afc007abe113c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebPartnerBundle:PartnerCategory:index.html.twig", 1);
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
        $__internal_016b29505628dd2e531923c1a875b66624eb0d8ac82be5b45f814ee82f2c6f48 = $this->env->getExtension("native_profiler");
        $__internal_016b29505628dd2e531923c1a875b66624eb0d8ac82be5b45f814ee82f2c6f48->enter($__internal_016b29505628dd2e531923c1a875b66624eb0d8ac82be5b45f814ee82f2c6f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:PartnerCategory:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_016b29505628dd2e531923c1a875b66624eb0d8ac82be5b45f814ee82f2c6f48->leave($__internal_016b29505628dd2e531923c1a875b66624eb0d8ac82be5b45f814ee82f2c6f48_prof);

    }

    // line 2
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_5f2e3a0dd5d705562315e97095e5e2d75b84ad35ef015eb8d4d68826814f7c0b = $this->env->getExtension("native_profiler");
        $__internal_5f2e3a0dd5d705562315e97095e5e2d75b84ad35ef015eb8d4d68826814f7c0b->enter($__internal_5f2e3a0dd5d705562315e97095e5e2d75b84ad35ef015eb8d4d68826814f7c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 3
        echo "    <h1>Liste des catégories</h1>
    <div class=\"btAjout\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_partner_category_new");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    </div>

    <table class=\"table table-striped table-hover sortable\">
        <thead>

        <tr style=\"background-color:#d4dddc;\">
            <th style=\"width: 2%;\"></th>
            <th class=\"titleTable\">Titre</th>
            <th style=\"width: 15%;\">Actions</th>
            <th style=\"width: 3%;\"></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_category_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <td>";
            // line 21
            if ($this->getAttribute($context["entity"], "online", array())) {
                echo "<i class=\"fa fa-eye\"></i>";
            } else {
                echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
            }
            echo "</td>
                <td class=\"titleTable\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_category_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</a></td>

                <td>
                    <div class=\"btn-group\">
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_category_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_category_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                        <a href=\"#\" onClick=\"
                                if(confirm('Voulez-vous Supprimer cet enregistrement ? \\nATTENTION ! LES PARTENAIRES LIÉS SERONT SUPPRIMÉS.'))
                                document.forms.Suppr";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form.submit();
                                else
                                return false;
                                \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                    </div>


                    <form action=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_category_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" name=\"Suppr";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                        ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'widget');
            echo "
                    </form>
                </td>
                <td class=\"sorter\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Déplacer la colonne\"><i class=\"fa fa-arrows-v\" ></i></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    ";
        // line 48
        $this->loadTemplate("PointWebAdminBundle::_pager.html.twig", "PointWebPartnerBundle:PartnerCategory:index.html.twig", 48)->display($context);
        // line 49
        echo "

";
        
        $__internal_5f2e3a0dd5d705562315e97095e5e2d75b84ad35ef015eb8d4d68826814f7c0b->leave($__internal_5f2e3a0dd5d705562315e97095e5e2d75b84ad35ef015eb8d4d68826814f7c0b_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:PartnerCategory:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 49,  131 => 48,  126 => 45,  114 => 39,  107 => 37,  97 => 30,  91 => 27,  87 => 26,  78 => 22,  70 => 21,  65 => 20,  61 => 19,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
