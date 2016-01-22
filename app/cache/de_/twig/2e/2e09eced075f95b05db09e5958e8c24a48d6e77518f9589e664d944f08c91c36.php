<?php

/* PointWebPartnerBundle:Default:show.html.twig */
class __TwigTemplate_15ffd14c0d3dc2cdaad66e8d4761de89e628d4508f4117cc39320699980345b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebPartnerBundle:Default:show.html.twig", 1);
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
        $__internal_3ca76f04d18e842f38bdc4b6ff8a4e785ae7ee3e83a9f176d92f185f29d34804 = $this->env->getExtension("native_profiler");
        $__internal_3ca76f04d18e842f38bdc4b6ff8a4e785ae7ee3e83a9f176d92f185f29d34804->enter($__internal_3ca76f04d18e842f38bdc4b6ff8a4e785ae7ee3e83a9f176d92f185f29d34804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ca76f04d18e842f38bdc4b6ff8a4e785ae7ee3e83a9f176d92f185f29d34804->leave($__internal_3ca76f04d18e842f38bdc4b6ff8a4e785ae7ee3e83a9f176d92f185f29d34804_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_c67d71a0642b141e463f6cb29f65e4a6832f21b2b51598970b866ed2f67a7426 = $this->env->getExtension("native_profiler");
        $__internal_c67d71a0642b141e463f6cb29f65e4a6832f21b2b51598970b866ed2f67a7426->enter($__internal_c67d71a0642b141e463f6cb29f65e4a6832f21b2b51598970b866ed2f67a7426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c67d71a0642b141e463f6cb29f65e4a6832f21b2b51598970b866ed2f67a7426->leave($__internal_c67d71a0642b141e463f6cb29f65e4a6832f21b2b51598970b866ed2f67a7426_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:Default:show.html.twig";
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
