<?php

/* PointWebUserBundle:User:index1.html.twig */
class __TwigTemplate_bac74114842ce93adc1f279750ecb05f6f33ecf5d52c2aed14e329f0c6eaa85a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebUserBundle:User:index1.html.twig", 1);
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
        $__internal_1d5968f168433b16a576302995f1756530e80223bce499632dc0302459569c99 = $this->env->getExtension("native_profiler");
        $__internal_1d5968f168433b16a576302995f1756530e80223bce499632dc0302459569c99->enter($__internal_1d5968f168433b16a576302995f1756530e80223bce499632dc0302459569c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebUserBundle:User:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d5968f168433b16a576302995f1756530e80223bce499632dc0302459569c99->leave($__internal_1d5968f168433b16a576302995f1756530e80223bce499632dc0302459569c99_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_ae365d7a8af757b31c843bc79647bebd2e8cbe29975d58d25c324388f6cdfd3e = $this->env->getExtension("native_profiler");
        $__internal_ae365d7a8af757b31c843bc79647bebd2e8cbe29975d58d25c324388f6cdfd3e->enter($__internal_ae365d7a8af757b31c843bc79647bebd2e8cbe29975d58d25c324388f6cdfd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Liste des utilisateurs</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>Nom d'utilisateur</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Actif ?</th>
            <th style=\"width: 125px;\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["entity"], "lastName", array())), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 26
                echo "                            <li>";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    </ul>
                </td>
                <td>";
            // line 30
            if (($this->getAttribute($context["entity"], "enabled", array()) == true)) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "</td>
                <td>
                    <div class=\"btn-group-vertical\">
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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

    <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("admin_user_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
";
        
        $__internal_ae365d7a8af757b31c843bc79647bebd2e8cbe29975d58d25c324388f6cdfd3e->leave($__internal_ae365d7a8af757b31c843bc79647bebd2e8cbe29975d58d25c324388f6cdfd3e_prof);

    }

    public function getTemplateName()
    {
        return "PointWebUserBundle:User:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 44,  125 => 41,  113 => 35,  108 => 33,  98 => 30,  94 => 28,  85 => 26,  81 => 25,  75 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
