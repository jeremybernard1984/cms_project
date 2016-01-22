<?php

/* @PointWebNews/Default/show.html.twig */
class __TwigTemplate_a71c6fbeaaf9907e0d8a0a5ac370ed0b9532565abba7bf54a1fc95052870aac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "@PointWebNews/Default/show.html.twig", 1);
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
        $__internal_4c64bfa8189836ae0a24da4d9262a8ac4b88d01c61730d3d7fced7ff3cc8062c = $this->env->getExtension("native_profiler");
        $__internal_4c64bfa8189836ae0a24da4d9262a8ac4b88d01c61730d3d7fced7ff3cc8062c->enter($__internal_4c64bfa8189836ae0a24da4d9262a8ac4b88d01c61730d3d7fced7ff3cc8062c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebNews/Default/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c64bfa8189836ae0a24da4d9262a8ac4b88d01c61730d3d7fced7ff3cc8062c->leave($__internal_4c64bfa8189836ae0a24da4d9262a8ac4b88d01c61730d3d7fced7ff3cc8062c_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_70ef6983e3831ac3a738c97c928a894b20e9a106c3b8f0dc48402dcd79d7c1a0 = $this->env->getExtension("native_profiler");
        $__internal_70ef6983e3831ac3a738c97c928a894b20e9a106c3b8f0dc48402dcd79d7c1a0->enter($__internal_70ef6983e3831ac3a738c97c928a894b20e9a106c3b8f0dc48402dcd79d7c1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_70ef6983e3831ac3a738c97c928a894b20e9a106c3b8f0dc48402dcd79d7c1a0->leave($__internal_70ef6983e3831ac3a738c97c928a894b20e9a106c3b8f0dc48402dcd79d7c1a0_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebNews/Default/show.html.twig";
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
