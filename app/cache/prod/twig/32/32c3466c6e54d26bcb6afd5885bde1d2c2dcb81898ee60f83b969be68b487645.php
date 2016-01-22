<?php

/* PointWebAdminBundle:Reglage:new.html.twig */
class __TwigTemplate_c2b453dfdc81a533576f31502347e458dcaf0a947efb6b8a70fd276439ffd567 extends Twig_Template
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
        $__internal_91c3934dc18221942a4cf8299948af3f4e23e541a72aa79f28726867f237eccb = $this->env->getExtension("native_profiler");
        $__internal_91c3934dc18221942a4cf8299948af3f4e23e541a72aa79f28726867f237eccb->enter($__internal_91c3934dc18221942a4cf8299948af3f4e23e541a72aa79f28726867f237eccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Reglage:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c3934dc18221942a4cf8299948af3f4e23e541a72aa79f28726867f237eccb->leave($__internal_91c3934dc18221942a4cf8299948af3f4e23e541a72aa79f28726867f237eccb_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_27af5db8b41b1be2a3bf4d5cd95dccd3f6a4e119ad2f1822c21bd2d86e96649b = $this->env->getExtension("native_profiler");
        $__internal_27af5db8b41b1be2a3bf4d5cd95dccd3f6a4e119ad2f1822c21bd2d86e96649b->enter($__internal_27af5db8b41b1be2a3bf4d5cd95dccd3f6a4e119ad2f1822c21bd2d86e96649b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        echo $this->env->getExtension('routing')->getPath("admin_news");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
        </div>
        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_27af5db8b41b1be2a3bf4d5cd95dccd3f6a4e119ad2f1822c21bd2d86e96649b->leave($__internal_27af5db8b41b1be2a3bf4d5cd95dccd3f6a4e119ad2f1822c21bd2d86e96649b_prof);

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
/*             <a href="{{ path('admin_news') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
