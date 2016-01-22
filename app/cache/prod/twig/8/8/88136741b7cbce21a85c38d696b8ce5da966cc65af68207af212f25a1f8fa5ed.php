<?php

/* PointWebPartnerBundle:Partner:index1.html.twig */
class __TwigTemplate_88136741b7cbce21a85c38d696b8ce5da966cc65af68207af212f25a1f8fa5ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebPartnerBundle:Partner:index1.html.twig", 1);
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
        $__internal_c9b7dccce05eda3b498ec939f628196ad097a1d256079daf3ef0bf73e1e95352 = $this->env->getExtension("native_profiler");
        $__internal_c9b7dccce05eda3b498ec939f628196ad097a1d256079daf3ef0bf73e1e95352->enter($__internal_c9b7dccce05eda3b498ec939f628196ad097a1d256079daf3ef0bf73e1e95352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:Partner:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9b7dccce05eda3b498ec939f628196ad097a1d256079daf3ef0bf73e1e95352->leave($__internal_c9b7dccce05eda3b498ec939f628196ad097a1d256079daf3ef0bf73e1e95352_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_fa346ee4563a4df07b44cbc664e80081f703420653f807c60b7869766200a16a = $this->env->getExtension("native_profiler");
        $__internal_fa346ee4563a4df07b44cbc664e80081f703420653f807c60b7869766200a16a->enter($__internal_fa346ee4563a4df07b44cbc664e80081f703420653f807c60b7869766200a16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Liste des partenaires</h1>

    <table class=\"table table-striped table-hover sortable\">
        <thead>
        <tr>
            <th style=\"width: 5px;\"></th>
            <th>Nom</th>
            <th>Lien</th>
            <th>En ligne</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th style=\"width: 125px;\">Actions</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <td class=\"sorter\"><i class=\"mdi-action-swap-vert\"></i></td>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "link", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["entity"], "online", array())) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["entity"], "startDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "startDate", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["entity"], "endDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "endDate", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>
                    <div class=\"btn-group-vertical\">
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 37
        echo "        </tbody>
    </table>

    ";
        // line 40
        $this->loadTemplate("PointWebAdminBundle::_pager.html.twig", "PointWebPartnerBundle:Partner:index1.html.twig", 40)->display($context);
        // line 41
        echo "
    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("admin_partner_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
";
        
        $__internal_fa346ee4563a4df07b44cbc664e80081f703420653f807c60b7869766200a16a->leave($__internal_fa346ee4563a4df07b44cbc664e80081f703420653f807c60b7869766200a16a_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:Partner:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  123 => 41,  121 => 40,  116 => 37,  104 => 31,  99 => 29,  91 => 26,  85 => 25,  77 => 24,  73 => 23,  67 => 22,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
