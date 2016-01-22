<?php

/* @PointWebAdmin/Reglage/new.html.twig */
class __TwigTemplate_b1a2ecde56a436d0dc9ec39e09abfc6f9d234b580a03f7ed4d896ffb333c2d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "@PointWebAdmin/Reglage/new.html.twig", 1);
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
        $__internal_2b0acbbbb09486514accef0c3c532f87c27ffdba2b60e159c8e3b37ee1a83bf3 = $this->env->getExtension("native_profiler");
        $__internal_2b0acbbbb09486514accef0c3c532f87c27ffdba2b60e159c8e3b37ee1a83bf3->enter($__internal_2b0acbbbb09486514accef0c3c532f87c27ffdba2b60e159c8e3b37ee1a83bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebAdmin/Reglage/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b0acbbbb09486514accef0c3c532f87c27ffdba2b60e159c8e3b37ee1a83bf3->leave($__internal_2b0acbbbb09486514accef0c3c532f87c27ffdba2b60e159c8e3b37ee1a83bf3_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_a5063e6469fd856a2675caf72738f06db5a73386cee32e8b4d81f3250f4c2d27 = $this->env->getExtension("native_profiler");
        $__internal_a5063e6469fd856a2675caf72738f06db5a73386cee32e8b4d81f3250f4c2d27->enter($__internal_a5063e6469fd856a2675caf72738f06db5a73386cee32e8b4d81f3250f4c2d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        
        $__internal_a5063e6469fd856a2675caf72738f06db5a73386cee32e8b4d81f3250f4c2d27->leave($__internal_a5063e6469fd856a2675caf72738f06db5a73386cee32e8b4d81f3250f4c2d27_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebAdmin/Reglage/new.html.twig";
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
