<?php

/* PointWebGuestBookBundle:GuestBook:index1.html.twig */
class __TwigTemplate_984cd5c9163750b4dd0db7910953f11e5e838f8fe0259600ff6c3299595bf04e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebGuestBookBundle:GuestBook:index1.html.twig", 1);
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
        $__internal_952356a9ae6515cdf794ac16988a2d2d1967ab26c74e872e4909a167d84399c3 = $this->env->getExtension("native_profiler");
        $__internal_952356a9ae6515cdf794ac16988a2d2d1967ab26c74e872e4909a167d84399c3->enter($__internal_952356a9ae6515cdf794ac16988a2d2d1967ab26c74e872e4909a167d84399c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGuestBookBundle:GuestBook:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952356a9ae6515cdf794ac16988a2d2d1967ab26c74e872e4909a167d84399c3->leave($__internal_952356a9ae6515cdf794ac16988a2d2d1967ab26c74e872e4909a167d84399c3_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_2c5b6e0da6daf64b079a9cb9f3b333451ff4b2525526261e8b76699e7e47b801 = $this->env->getExtension("native_profiler");
        $__internal_2c5b6e0da6daf64b079a9cb9f3b333451ff4b2525526261e8b76699e7e47b801->enter($__internal_2c5b6e0da6daf64b079a9cb9f3b333451ff4b2525526261e8b76699e7e47b801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Liste des commentaires du livre d'or</h1>

    <table class=\"table table-striped table-hover sortable\">
        <thead>
        <tr>
            <th style=\"width: 5px;\"></th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Commentaire</th>
            <th>Notation</th>
            <th>Position</th>
            <th>En ligne</th>
            <th style=\"width: 125px;\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_guestbook_sort", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                <td class=\"sorter\"><i class=\"mdi-action-swap-vert\"></i></td>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_guestbook_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lastname", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo $this->getAttribute($context["entity"], "comment", array());
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "notation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["entity"], "online", array())) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "</td>
                <td>
                    <div class=\"btn-group-vertical\">
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_guestbook_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_guestbook_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 41
        echo "        </tbody>
    </table>

    ";
        // line 44
        $this->loadTemplate("PointWebAdminBundle::_pager.html.twig", "PointWebGuestBookBundle:GuestBook:index1.html.twig", 44)->display($context);
        // line 45
        echo "
    <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("admin_guestbook_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
";
        
        $__internal_2c5b6e0da6daf64b079a9cb9f3b333451ff4b2525526261e8b76699e7e47b801->leave($__internal_2c5b6e0da6daf64b079a9cb9f3b333451ff4b2525526261e8b76699e7e47b801_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGuestBookBundle:GuestBook:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  129 => 45,  127 => 44,  122 => 41,  110 => 35,  105 => 33,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  69 => 24,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
