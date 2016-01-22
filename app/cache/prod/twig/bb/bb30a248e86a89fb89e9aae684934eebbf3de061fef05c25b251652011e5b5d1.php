<?php

/* PointWebProductBundle:Default:show.html.twig */
class __TwigTemplate_7d6f1627550ecd4d5db1834e03f788aad474e567b21c9f1dacd4a02272925090 extends Twig_Template
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
        $__internal_df8cd661bd0fa2e82658f3eef8f095462e83ae8a3be7983c522db0048791312d = $this->env->getExtension("native_profiler");
        $__internal_df8cd661bd0fa2e82658f3eef8f095462e83ae8a3be7983c522db0048791312d->enter($__internal_df8cd661bd0fa2e82658f3eef8f095462e83ae8a3be7983c522db0048791312d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Default:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df8cd661bd0fa2e82658f3eef8f095462e83ae8a3be7983c522db0048791312d->leave($__internal_df8cd661bd0fa2e82658f3eef8f095462e83ae8a3be7983c522db0048791312d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_437ef40a8f2e4b1ba63640c83ed733663f2891df507c1f1a078a292fe0081ba4 = $this->env->getExtension("native_profiler");
        $__internal_437ef40a8f2e4b1ba63640c83ed733663f2891df507c1f1a078a292fe0081ba4->enter($__internal_437ef40a8f2e4b1ba63640c83ed733663f2891df507c1f1a078a292fe0081ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_437ef40a8f2e4b1ba63640c83ed733663f2891df507c1f1a078a292fe0081ba4->leave($__internal_437ef40a8f2e4b1ba63640c83ed733663f2891df507c1f1a078a292fe0081ba4_prof);

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
