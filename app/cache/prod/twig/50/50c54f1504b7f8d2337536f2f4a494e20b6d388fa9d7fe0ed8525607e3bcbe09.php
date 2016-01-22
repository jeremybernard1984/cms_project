<?php

/* PointWebProductBundle:Default:show.html.twig */
class __TwigTemplate_f3d138df0610da7236fedf8f726ed3a995c707f5a1332dbca0a03b8ed8e8dac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PointWebProductBundle:Default:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdf7d7fb1a8f4f67518674860886da6638c400a0079342722e3f4702be1c49d3 = $this->env->getExtension("native_profiler");
        $__internal_cdf7d7fb1a8f4f67518674860886da6638c400a0079342722e3f4702be1c49d3->enter($__internal_cdf7d7fb1a8f4f67518674860886da6638c400a0079342722e3f4702be1c49d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf7d7fb1a8f4f67518674860886da6638c400a0079342722e3f4702be1c49d3->leave($__internal_cdf7d7fb1a8f4f67518674860886da6638c400a0079342722e3f4702be1c49d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e4c733bf63b828ec5bc1cb705e3bdd27d35a2b09a5f7fb3ed25814aeaff48db = $this->env->getExtension("native_profiler");
        $__internal_4e4c733bf63b828ec5bc1cb705e3bdd27d35a2b09a5f7fb3ed25814aeaff48db->enter($__internal_4e4c733bf63b828ec5bc1cb705e3bdd27d35a2b09a5f7fb3ed25814aeaff48db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Product</h1>

    <table class=\"record_properties\">
        <tbody>
        <tr>
            <th>Id</th>
           <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "title", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Description Produit :</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "description", array()), "html", null, true);
        echo "</td>
        </tr>

        </tbody>
    </table>

    <ul class=\"record_actions\">
        <li>

        </li>
    </ul>
";
        
        $__internal_4e4c733bf63b828ec5bc1cb705e3bdd27d35a2b09a5f7fb3ed25814aeaff48db->leave($__internal_4e4c733bf63b828ec5bc1cb705e3bdd27d35a2b09a5f7fb3ed25814aeaff48db_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Product</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*         <tr>*/
/*             <th>Id</th>*/
/*            <td>{{ detail.id }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Title</th>*/
/*             <td>{{ detail.title }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Description Produit :</th>*/
/*             <td>{{ detail.description }}</td>*/
/*         </tr>*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="record_actions">*/
/*         <li>*/
/* */
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
