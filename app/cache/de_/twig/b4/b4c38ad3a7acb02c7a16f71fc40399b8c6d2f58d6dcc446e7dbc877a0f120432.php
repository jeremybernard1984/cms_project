<?php

/* PointWebAppBundle:Contact:index.html.twig */
class __TwigTemplate_49bb9246be25512270bf4e94da76233929ee83784d3803eaa6e79d9bcc1716b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAppBundle:Contact:index.html.twig", 1);
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
        $__internal_59562bb44a2bff519d69e10ab7b9a265c27bc9ccb9ba6724d62374a317061f19 = $this->env->getExtension("native_profiler");
        $__internal_59562bb44a2bff519d69e10ab7b9a265c27bc9ccb9ba6724d62374a317061f19->enter($__internal_59562bb44a2bff519d69e10ab7b9a265c27bc9ccb9ba6724d62374a317061f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59562bb44a2bff519d69e10ab7b9a265c27bc9ccb9ba6724d62374a317061f19->leave($__internal_59562bb44a2bff519d69e10ab7b9a265c27bc9ccb9ba6724d62374a317061f19_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_658a5d4936c6c8272fbcedc70cd08c77b6310db31f1a1d0ec7003f0dc69c28de = $this->env->getExtension("native_profiler");
        $__internal_658a5d4936c6c8272fbcedc70cd08c77b6310db31f1a1d0ec7003f0dc69c28de->enter($__internal_658a5d4936c6c8272fbcedc70cd08c77b6310db31f1a1d0ec7003f0dc69c28de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Liste des messages contact</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Date de création</th>
            <th style=\"width: 125px;\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_contact_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lastname", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createDate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <div class=\"btn-group-vertical\">
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_contact_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                        class=\"fa fa-eye\"></i> Voir</a>
                        </div>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
";
        
        $__internal_658a5d4936c6c8272fbcedc70cd08c77b6310db31f1a1d0ec7003f0dc69c28de->leave($__internal_658a5d4936c6c8272fbcedc70cd08c77b6310db31f1a1d0ec7003f0dc69c28de_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 35,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block  content_right %}*/
/*     <h1>Liste des messages contact</h1>*/
/* */
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Nom</th>*/
/*             <th>Prénom</th>*/
/*             <th>Téléphone</th>*/
/*             <th>Email</th>*/
/*             <th>Date de création</th>*/
/*             <th style="width: 125px;">Actions</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_contact_show', { 'id': entity.id }) }}">{{ entity.lastname }}</a></td>*/
/*                 <td>{{ entity.firstname }}</td>*/
/*                 <td>{{ entity.phone }}</td>*/
/*                 <td>{{ entity.email }}</td>*/
/*                 <td>{{ entity.createDate|date('d-m-Y') }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <div class="btn-group-vertical">*/
/*                             <a href="{{ path('admin_contact_show', {'id':entity.id}) }}" class="btn btn-primary"><i*/
/*                                         class="fa fa-eye"></i> Voir</a>*/
/*                         </div>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
