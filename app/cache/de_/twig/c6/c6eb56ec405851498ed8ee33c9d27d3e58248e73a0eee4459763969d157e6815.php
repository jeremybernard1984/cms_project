<?php

/* @PointWebPartner/Default/show.html.twig */
class __TwigTemplate_766f7645dc24e3d4620a1186baa597a07bb0383bb22e8dc05ee6a6f5eb7c7010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "@PointWebPartner/Default/show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69e32d514276244f214653e17e6bc91cb6d2bbf8acf53bf7d003b904cbd7ff6e = $this->env->getExtension("native_profiler");
        $__internal_69e32d514276244f214653e17e6bc91cb6d2bbf8acf53bf7d003b904cbd7ff6e->enter($__internal_69e32d514276244f214653e17e6bc91cb6d2bbf8acf53bf7d003b904cbd7ff6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebPartner/Default/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69e32d514276244f214653e17e6bc91cb6d2bbf8acf53bf7d003b904cbd7ff6e->leave($__internal_69e32d514276244f214653e17e6bc91cb6d2bbf8acf53bf7d003b904cbd7ff6e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_efc33a89cb0f63a41f5ffca65474929dbe67348dd76a22b04d5e3801f196a594 = $this->env->getExtension("native_profiler");
        $__internal_efc33a89cb0f63a41f5ffca65474929dbe67348dd76a22b04d5e3801f196a594->enter($__internal_efc33a89cb0f63a41f5ffca65474929dbe67348dd76a22b04d5e3801f196a594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<table>
    <tbody>
    <tr>
        <th>Id</th>
        <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "id", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Title</th>
        <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "name", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Content</th>
        <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "content", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Date</th>
        <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "createDate", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th></th>
        <td><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("partner");
        echo "\">Retour</a></td>
    </tr>

    </tbody>
</table>
";
        
        $__internal_efc33a89cb0f63a41f5ffca65474929dbe67348dd76a22b04d5e3801f196a594->leave($__internal_efc33a89cb0f63a41f5ffca65474929dbe67348dd76a22b04d5e3801f196a594_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebPartner/Default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  67 => 19,  60 => 15,  53 => 11,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/* <table>*/
/*     <tbody>*/
/*     <tr>*/
/*         <th>Id</th>*/
/*         <td>{{ detail.id }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <th>Title</th>*/
/*         <td>{{ detail.name }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <th>Content</th>*/
/*         <td>{{ detail.content }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <th>Date</th>*/
/*         <td>{{ detail.createDate|date('Y-m-d H:i:s') }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <th></th>*/
/*         <td><a href="{{ path('partner') }}">Retour</a></td>*/
/*     </tr>*/
/* */
/*     </tbody>*/
/* </table>*/
/* {% endblock %}*/
