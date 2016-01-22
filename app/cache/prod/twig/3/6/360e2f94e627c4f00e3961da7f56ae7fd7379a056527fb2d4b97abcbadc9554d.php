<?php

/* PointWebGalleryBundle:Gallery:index1.html.twig */
class __TwigTemplate_360e2f94e627c4f00e3961da7f56ae7fd7379a056527fb2d4b97abcbadc9554d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebGalleryBundle:Gallery:index1.html.twig", 1);
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
        $__internal_5ecff54ce6b581f23ad2bbafa09db260876e2e63089bc5d54684db798cc7f2d6 = $this->env->getExtension("native_profiler");
        $__internal_5ecff54ce6b581f23ad2bbafa09db260876e2e63089bc5d54684db798cc7f2d6->enter($__internal_5ecff54ce6b581f23ad2bbafa09db260876e2e63089bc5d54684db798cc7f2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGalleryBundle:Gallery:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ecff54ce6b581f23ad2bbafa09db260876e2e63089bc5d54684db798cc7f2d6->leave($__internal_5ecff54ce6b581f23ad2bbafa09db260876e2e63089bc5d54684db798cc7f2d6_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_4bd87305037db94aac1c7ef34346a07e8b632e836b3287aab2fabaad2de3c63a = $this->env->getExtension("native_profiler");
        $__internal_4bd87305037db94aac1c7ef34346a07e8b632e836b3287aab2fabaad2de3c63a->enter($__internal_4bd87305037db94aac1c7ef34346a07e8b632e836b3287aab2fabaad2de3c63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Liste des galeries</h1>

    <table class=\"table table-striped table-hover sortable\">
        <thead>
        <tr>
            <th style=\"width: 5px;\"></th>
            <th>Nom</th>
            <th>Date de création</th>
            <th style=\"width: 125px;\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_gallery_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <td class=\"sorter\"><i class=\"mdi-action-swap-vert\"></i></td>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_gallery_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["entity"], "createDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createDate", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>
                    <div class=\"btn-group-vertical\">
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_gallery_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_gallery_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-pencil\"></i> Modifier</a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("admin_gallery_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
";
        
        $__internal_4bd87305037db94aac1c7ef34346a07e8b632e836b3287aab2fabaad2de3c63a->leave($__internal_4bd87305037db94aac1c7ef34346a07e8b632e836b3287aab2fabaad2de3c63a_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGalleryBundle:Gallery:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  95 => 31,  83 => 25,  78 => 23,  70 => 20,  64 => 19,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
