<?php

/* PointWebAppBundle:Contact:index1.html.twig */
class __TwigTemplate_0631e0025a3af0933d36ac30ccc63a5031ef88636da22c7eaeda744bffcf6c35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAppBundle:Contact:index1.html.twig", 1);
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
        $__internal_b47a6382bd144d841ac9371933eae8a882b44195de593c708a767b6c420aeaef = $this->env->getExtension("native_profiler");
        $__internal_b47a6382bd144d841ac9371933eae8a882b44195de593c708a767b6c420aeaef->enter($__internal_b47a6382bd144d841ac9371933eae8a882b44195de593c708a767b6c420aeaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Contact:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47a6382bd144d841ac9371933eae8a882b44195de593c708a767b6c420aeaef->leave($__internal_b47a6382bd144d841ac9371933eae8a882b44195de593c708a767b6c420aeaef_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_d0b750d6add3c89e934c26e00b76b2178383f4ef2e59873c1f7eec9f976639a2 = $this->env->getExtension("native_profiler");
        $__internal_d0b750d6add3c89e934c26e00b76b2178383f4ef2e59873c1f7eec9f976639a2->enter($__internal_d0b750d6add3c89e934c26e00b76b2178383f4ef2e59873c1f7eec9f976639a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        $context['_parent'] = (array) $context;
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
        
        $__internal_d0b750d6add3c89e934c26e00b76b2178383f4ef2e59873c1f7eec9f976639a2->leave($__internal_d0b750d6add3c89e934c26e00b76b2178383f4ef2e59873c1f7eec9f976639a2_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Contact:index1.html.twig";
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
