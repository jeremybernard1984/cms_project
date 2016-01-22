<?php

/* PointWebNewsBundle:Default:show.html.twig */
class __TwigTemplate_1e8fbf506640c7b8e8d178cf258ae4cbe102a2d91bf5bad4617e0b220f6c7891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebNewsBundle:Default:show.html.twig", 1);
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
        $__internal_8d50c9541eb06afc5ee40903231c0755788f038717a50322e105a74191933623 = $this->env->getExtension("native_profiler");
        $__internal_8d50c9541eb06afc5ee40903231c0755788f038717a50322e105a74191933623->enter($__internal_8d50c9541eb06afc5ee40903231c0755788f038717a50322e105a74191933623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebNewsBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d50c9541eb06afc5ee40903231c0755788f038717a50322e105a74191933623->leave($__internal_8d50c9541eb06afc5ee40903231c0755788f038717a50322e105a74191933623_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_a73556e27c9a24e6599380bc84da2ad03f345f958fd1986e0df4fcd3e54da2a5 = $this->env->getExtension("native_profiler");
        $__internal_a73556e27c9a24e6599380bc84da2ad03f345f958fd1986e0df4fcd3e54da2a5->enter($__internal_a73556e27c9a24e6599380bc84da2ad03f345f958fd1986e0df4fcd3e54da2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<table>
    <tbody>
    <tr>
        <th>Id</th>
        <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailnews"]) ? $context["detailnews"] : $this->getContext($context, "detailnews")), "id", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Title</th>
        <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailnews"]) ? $context["detailnews"] : $this->getContext($context, "detailnews")), "title", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Content</th>
        <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailnews"]) ? $context["detailnews"] : $this->getContext($context, "detailnews")), "content", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Date</th>
        <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detailnews"]) ? $context["detailnews"] : $this->getContext($context, "detailnews")), "createDate", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th></th>
        <td><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("news");
        echo "\">Retour</a></td>
    </tr>

    </tbody>
</table>
";
        
        $__internal_a73556e27c9a24e6599380bc84da2ad03f345f958fd1986e0df4fcd3e54da2a5->leave($__internal_a73556e27c9a24e6599380bc84da2ad03f345f958fd1986e0df4fcd3e54da2a5_prof);

    }

    public function getTemplateName()
    {
        return "PointWebNewsBundle:Default:show.html.twig";
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
/*         <td>{{ detailnews.id }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <th>Title</th>*/
/*         <td>{{ detailnews.title }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <th>Content</th>*/
/*         <td>{{ detailnews.content }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <th>Date</th>*/
/*         <td>{{ detailnews.createDate|date('Y-m-d H:i:s') }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*         <th></th>*/
/*         <td><a href="{{ path('news') }}">Retour</a></td>*/
/*     </tr>*/
/* */
/*     </tbody>*/
/* </table>*/
/* {% endblock %}*/
