<?php

/* @PointWebPartner/PartnerCategory/new.html.twig */
class __TwigTemplate_d5986b1070461c475678754b3e2ab917380fb49b026440a436829641894b7aca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "@PointWebPartner/PartnerCategory/new.html.twig", 1);
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
        $__internal_8c3ee46c5ac520d9a789316e3fbb3780f57316762b6c150882c4f1bc7db96760 = $this->env->getExtension("native_profiler");
        $__internal_8c3ee46c5ac520d9a789316e3fbb3780f57316762b6c150882c4f1bc7db96760->enter($__internal_8c3ee46c5ac520d9a789316e3fbb3780f57316762b6c150882c4f1bc7db96760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebPartner/PartnerCategory/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c3ee46c5ac520d9a789316e3fbb3780f57316762b6c150882c4f1bc7db96760->leave($__internal_8c3ee46c5ac520d9a789316e3fbb3780f57316762b6c150882c4f1bc7db96760_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_b87f8a75c0ed5f3eef46734fff96fb2f6ddf29d89e744fcca3d63c9edcadd337 = $this->env->getExtension("native_profiler");
        $__internal_b87f8a75c0ed5f3eef46734fff96fb2f6ddf29d89e744fcca3d63c9edcadd337->enter($__internal_b87f8a75c0ed5f3eef46734fff96fb2f6ddf29d89e744fcca3d63c9edcadd337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "<h1>Modification de la catégorie</h1>
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
<fieldset>

    <div class=\"form-group\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'errors');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'widget');
        echo "
        </div>
    </div>

    <div class=\"col-lg-12 submitBt\">
        <div style=\"float: left\">
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("admin_partner_category");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
        </div>
        ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    ";
        
        $__internal_b87f8a75c0ed5f3eef46734fff96fb2f6ddf29d89e744fcca3d63c9edcadd337->leave($__internal_b87f8a75c0ed5f3eef46734fff96fb2f6ddf29d89e744fcca3d63c9edcadd337_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebPartner/PartnerCategory/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 43,  118 => 41,  109 => 35,  105 => 34,  100 => 32,  92 => 27,  88 => 26,  83 => 24,  76 => 20,  72 => 19,  67 => 17,  59 => 12,  55 => 11,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/* <h1>Modification de la catégorie</h1>*/
/* {{ form_start(form, {'attr': {'class':'form-horizontal' }}) }}*/
/* <fieldset>*/
/* */
/*     <div class="form-group">*/
/*         {{ form_label(form.title) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(form.title) }}*/
/*             {{ form_widget(form.title) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {{ form_label(form.description) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(form.description) }}*/
/*             {{ form_widget(form.description, { 'attr': {'class': 'ckeditor'} }) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_label(form.position) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(form.position) }}*/
/*             {{ form_widget(form.position) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {{ form_label(form.online) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(form.online) }}*/
/*             {{ form_widget(form.online) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-lg-12 submitBt">*/
/*         <div style="float: left">*/
/*             <a href="{{ path('admin_partner_category') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     {% endblock %}*/
/* */
