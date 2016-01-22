<?php

/* @PointWebGuestbook/Guestbook/new.html.twig */
class __TwigTemplate_6c7228d2f4342a49e0a47400b4390a65c50932d9201cfd3fde46636a244973d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "@PointWebGuestbook/Guestbook/new.html.twig", 1);
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
        $__internal_1eb8149e309ec3326fdc17187fd07ce4139f548c70906697a1b17866cefde894 = $this->env->getExtension("native_profiler");
        $__internal_1eb8149e309ec3326fdc17187fd07ce4139f548c70906697a1b17866cefde894->enter($__internal_1eb8149e309ec3326fdc17187fd07ce4139f548c70906697a1b17866cefde894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebGuestbook/Guestbook/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eb8149e309ec3326fdc17187fd07ce4139f548c70906697a1b17866cefde894->leave($__internal_1eb8149e309ec3326fdc17187fd07ce4139f548c70906697a1b17866cefde894_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_0972dde1ab2033ab8a68f12f21a72595062e1f0ba221bdd45d23f3f841911f42 = $this->env->getExtension("native_profiler");
        $__internal_0972dde1ab2033ab8a68f12f21a72595062e1f0ba221bdd45d23f3f841911f42->enter($__internal_0972dde1ab2033ab8a68f12f21a72595062e1f0ba221bdd45d23f3f841911f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Modification du commentaire</h1>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>

        <div class=\"form-group\">
            <div class=\"col-lg-2 text-right\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-10\">
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-lg-2 text-right\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-10\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-lg-2 text-right\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-10\">
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-lg-2 text-right\">
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-10 text-right\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'errors');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-lg-2 text-right\">
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notation", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-10\">
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notation", array()), 'errors');
        echo "
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notation", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-lg-2 text-right\">
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'label');
        echo "
            </div>
            <div class=\"col-lg-10\">
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'errors');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'widget');
        echo "
            </div>
        </div>

    </fieldset>


    <div class=\"row submitBt\">
        <div style=\"float: left\">
            <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("admin_guestbook");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
        </div>
        ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_0972dde1ab2033ab8a68f12f21a72595062e1f0ba221bdd45d23f3f841911f42->leave($__internal_0972dde1ab2033ab8a68f12f21a72595062e1f0ba221bdd45d23f3f841911f42_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebGuestbook/Guestbook/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 70,  163 => 68,  151 => 59,  147 => 58,  141 => 55,  133 => 50,  129 => 49,  123 => 46,  115 => 41,  111 => 40,  105 => 37,  97 => 32,  93 => 31,  87 => 28,  79 => 23,  75 => 22,  69 => 19,  61 => 14,  57 => 13,  51 => 10,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Modification du commentaire</h1>*/
/*     {{ form_start(form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/* */
/*         <div class="form-group">*/
/*             <div class="col-lg-2 text-right">*/
/*                 {{ form_label(form.title) }}*/
/*             </div>*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.title) }}*/
/*                 {{ form_widget(form.title) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-lg-2 text-right">*/
/*                 {{ form_label(form.firstname) }}*/
/*             </div>*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.firstname) }}*/
/*                 {{ form_widget(form.firstname) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-lg-2 text-right">*/
/*                 {{ form_label(form.email) }}*/
/*             </div>*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.email) }}*/
/*                 {{ form_widget(form.email) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-lg-2 text-right">*/
/*                 {{ form_label(form.comment) }}*/
/*             </div>*/
/*             <div class="col-lg-10 text-right">*/
/*                 {{ form_errors(form.comment) }}*/
/*                 {{ form_widget(form.comment) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-lg-2 text-right">*/
/*                 {{ form_label(form.notation) }}*/
/*             </div>*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.notation) }}*/
/*                 {{ form_widget(form.notation) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-lg-2 text-right">*/
/*                 {{ form_label(form.online) }}*/
/*             </div>*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.online) }}*/
/*                 {{ form_widget(form.online) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </fieldset>*/
/* */
/* */
/*     <div class="row submitBt">*/
/*         <div style="float: left">*/
/*             <a href="{{ path('admin_guestbook') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
