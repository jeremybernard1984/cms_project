<?php

/* PointWebMapBundle:Map:edit.html.twig */
class __TwigTemplate_a4976a8f90b9b466a15d88ea43a66b915fde64b723fc268836b0f756bf9e6f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebMapBundle:Map:edit.html.twig", 1);
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
        $__internal_f6b01cfea0a0c61b2428c37ed073a60a0c6edf49b84cf95b92b007df790bdbe3 = $this->env->getExtension("native_profiler");
        $__internal_f6b01cfea0a0c61b2428c37ed073a60a0c6edf49b84cf95b92b007df790bdbe3->enter($__internal_f6b01cfea0a0c61b2428c37ed073a60a0c6edf49b84cf95b92b007df790bdbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebMapBundle:Map:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6b01cfea0a0c61b2428c37ed073a60a0c6edf49b84cf95b92b007df790bdbe3->leave($__internal_f6b01cfea0a0c61b2428c37ed073a60a0c6edf49b84cf95b92b007df790bdbe3_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_4b4771b8414810e601971d227922938a5d1fc13f5ebf9bcbd7e8333bec9dbb62 = $this->env->getExtension("native_profiler");
        $__internal_4b4771b8414810e601971d227922938a5d1fc13f5ebf9bcbd7e8333bec9dbb62->enter($__internal_4b4771b8414810e601971d227922938a5d1fc13f5ebf9bcbd7e8333bec9dbb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Modification de la question</h1>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>

        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "code", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                <div style=\"margin-bottom: 10px\">
                    Rendez-vous sur la page <a href=\"https://www.google.fr/maps\" target=\"_blank\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Copier/coller le code dans le champs ci-dessous\"><i class=\"fa fa-map-marker\" ></i> GoogleMap </a>et copier/coller le code d'intégration de la carte comme l'exemple ci-dessous.
                </div>
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "code", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "code", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'errors');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'errors');
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'widget');
        echo "
            </div>
        </div>

    </fieldset>


    <div class=\"col-lg-12 submitBt\">
        <div style=\"float: left\">
            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("admin_map");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
        </div>
        ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    </div>
";
        
        $__internal_4b4771b8414810e601971d227922938a5d1fc13f5ebf9bcbd7e8333bec9dbb62->leave($__internal_4b4771b8414810e601971d227922938a5d1fc13f5ebf9bcbd7e8333bec9dbb62_prof);

    }

    public function getTemplateName()
    {
        return "PointWebMapBundle:Map:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 55,  143 => 54,  138 => 52,  126 => 43,  122 => 42,  117 => 40,  110 => 36,  106 => 35,  101 => 33,  94 => 29,  90 => 28,  85 => 26,  78 => 22,  74 => 21,  66 => 16,  59 => 12,  55 => 11,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Modification de la question</h1>*/
/*     {{ form_start(edit_form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.title) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.title) }}*/
/*                 {{ form_widget(edit_form.title) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.code) }}*/
/*             <div class="col-lg-10">*/
/*                 <div style="margin-bottom: 10px">*/
/*                     Rendez-vous sur la page <a href="https://www.google.fr/maps" target="_blank" data-toggle="tooltip" data-placement="top" title="Copier/coller le code dans le champs ci-dessous"><i class="fa fa-map-marker" ></i> GoogleMap </a>et copier/coller le code d'intégration de la carte comme l'exemple ci-dessous.*/
/*                 </div>*/
/*                 {{ form_errors(edit_form.code) }}*/
/*                 {{ form_widget(edit_form.code) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.description) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.description) }}*/
/*                 {{ form_widget(edit_form.description) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.position) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.position) }}*/
/*                 {{ form_widget(edit_form.position) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.online) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.online) }}*/
/*                 {{ form_widget(edit_form.online) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </fieldset>*/
/* */
/* */
/*     <div class="col-lg-12 submitBt">*/
/*         <div style="float: left">*/
/*             <a href="{{ path('admin_map') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*         </div>*/
/*         {{ form_end(edit_form) }}*/
/*         {{ form(delete_form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
