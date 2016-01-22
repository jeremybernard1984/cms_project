<?php

/* PointWebAdminBundle:Reglage:new.html.twig */
class __TwigTemplate_a0a292940f99a5214d5f9da937ba1e7bc42f00b46ab0ab1825d4d0335df43b6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Reglage:new.html.twig", 1);
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
        $__internal_80760962b022eb87265bb7f2dc85247a0460bea1d34efbc17e675d18aec4931d = $this->env->getExtension("native_profiler");
        $__internal_80760962b022eb87265bb7f2dc85247a0460bea1d34efbc17e675d18aec4931d->enter($__internal_80760962b022eb87265bb7f2dc85247a0460bea1d34efbc17e675d18aec4931d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Reglage:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80760962b022eb87265bb7f2dc85247a0460bea1d34efbc17e675d18aec4931d->leave($__internal_80760962b022eb87265bb7f2dc85247a0460bea1d34efbc17e675d18aec4931d_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_ebd6969f343c60456113180b6ad76e03ed8595b315c01d5f31439874ca34a8de = $this->env->getExtension("native_profiler");
        $__internal_ebd6969f343c60456113180b6ad76e03ed8595b315c01d5f31439874ca34a8de->enter($__internal_ebd6969f343c60456113180b6ad76e03ed8595b315c01d5f31439874ca34a8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Ajout des réglages</h1>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>

        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientName", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientName", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "clientName", array()), 'widget');
        echo "
            </div>
        </div>



    </fieldset>


    <div class=\"col-lg-12 submitBt\">
        <div style=\"float: left\">
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_reglage");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
        </div>
        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_ebd6969f343c60456113180b6ad76e03ed8595b315c01d5f31439874ca34a8de->leave($__internal_ebd6969f343c60456113180b6ad76e03ed8595b315c01d5f31439874ca34a8de_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Reglage:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  73 => 23,  59 => 12,  55 => 11,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Ajout des réglages</h1>*/
/*     {{ form_start(form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.clientName) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.clientName) }}*/
/*                 {{ form_widget(form.clientName) }}*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*     </fieldset>*/
/* */
/* */
/*     <div class="col-lg-12 submitBt">*/
/*         <div style="float: left">*/
/*             <a href="{{ path('admin_reglage') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
