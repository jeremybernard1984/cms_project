<?php

/* PointWebFaqBundle:Faq:index.html.twig */
class __TwigTemplate_1cb78d9929bd3d8531234e03ef811841c9c8c3a9c377c9ac24a9ee1d578b5ff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebFaqBundle:Faq:index.html.twig", 1);
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
        $__internal_c15228972a117c3f5cd851ff2c3945ac3fccfb4dc5c306ff40ff4829120e9456 = $this->env->getExtension("native_profiler");
        $__internal_c15228972a117c3f5cd851ff2c3945ac3fccfb4dc5c306ff40ff4829120e9456->enter($__internal_c15228972a117c3f5cd851ff2c3945ac3fccfb4dc5c306ff40ff4829120e9456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebFaqBundle:Faq:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c15228972a117c3f5cd851ff2c3945ac3fccfb4dc5c306ff40ff4829120e9456->leave($__internal_c15228972a117c3f5cd851ff2c3945ac3fccfb4dc5c306ff40ff4829120e9456_prof);

    }

    // line 2
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_c979e108ccd2a6a58ea7094993080407e4593523e4554db1bdc9714f8d8e4ec8 = $this->env->getExtension("native_profiler");
        $__internal_c979e108ccd2a6a58ea7094993080407e4593523e4554db1bdc9714f8d8e4ec8->enter($__internal_c979e108ccd2a6a58ea7094993080407e4593523e4554db1bdc9714f8d8e4ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 3
        echo "    <h1>Liste des questions de la FAQ</h1>
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "        <div class=\"alert alert-success alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    <div class=\"btAjout\">
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_faq_new");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    </div>

    <table class=\"table table-striped table-hover sortable\">
        <thead>

        <tr style=\"background-color:#d4dddc;\">
            <th style=\"width: 2%;\"></th>
            <th class=\"titleTable\">Question</th>
            <th style=\"width: 15%;\">Actions</th>
            <th style=\"width: 3%;\"></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <tr data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <td>";
            // line 27
            if ($this->getAttribute($context["entity"], "online", array())) {
                echo "<i class=\"fa fa-eye\"></i>";
            } else {
                echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
            }
            echo "</td>
                <td class=\"titleTable\"><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "question", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <div class=\"btn-group\">
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                        <a href=\"#\" onClick=\"
                                if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                                document.forms.Suppr";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form.submit();
                                else
                                return false;
                                \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                    </div>
                    <form action=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" name=\"Suppr";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                        ";
            // line 42
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
        // line 48
        echo "        </tbody>
    </table>

    ";
        // line 51
        $this->loadTemplate("PointWebAdminBundle::_pager.html.twig", "PointWebFaqBundle:Faq:index.html.twig", 51)->display($context);
        
        $__internal_c979e108ccd2a6a58ea7094993080407e4593523e4554db1bdc9714f8d8e4ec8->leave($__internal_c979e108ccd2a6a58ea7094993080407e4593523e4554db1bdc9714f8d8e4ec8_prof);

    }

    public function getTemplateName()
    {
        return "PointWebFaqBundle:Faq:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 51,  142 => 48,  130 => 42,  123 => 40,  115 => 35,  109 => 32,  105 => 31,  97 => 28,  89 => 27,  84 => 26,  80 => 25,  63 => 11,  60 => 10,  51 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
