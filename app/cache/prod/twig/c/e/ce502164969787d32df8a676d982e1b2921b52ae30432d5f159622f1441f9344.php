<?php

/* PointWebFaqBundle:faq:edit.html.twig */
class __TwigTemplate_ce502164969787d32df8a676d982e1b2921b52ae30432d5f159622f1441f9344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebFaqBundle:faq:edit.html.twig", 1);
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
        $__internal_8e554a5aa5754890ff627fdf4d0160db1717cfbe264c0cdadfd727e8e1f62941 = $this->env->getExtension("native_profiler");
        $__internal_8e554a5aa5754890ff627fdf4d0160db1717cfbe264c0cdadfd727e8e1f62941->enter($__internal_8e554a5aa5754890ff627fdf4d0160db1717cfbe264c0cdadfd727e8e1f62941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebFaqBundle:faq:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e554a5aa5754890ff627fdf4d0160db1717cfbe264c0cdadfd727e8e1f62941->leave($__internal_8e554a5aa5754890ff627fdf4d0160db1717cfbe264c0cdadfd727e8e1f62941_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_17c1d31006dbdeeb99154214b3077ed8e920bea807c0c4b5105a1bb32ca816a1 = $this->env->getExtension("native_profiler");
        $__internal_17c1d31006dbdeeb99154214b3077ed8e920bea807c0c4b5105a1bb32ca816a1->enter($__internal_17c1d31006dbdeeb99154214b3077ed8e920bea807c0c4b5105a1bb32ca816a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Modification FAQ</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "question", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "question", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "question", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "answer", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "answer", array()), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "answer", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'widget');
        echo "
            </div>
        </div>
    </fieldset>
    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_faq");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_17c1d31006dbdeeb99154214b3077ed8e920bea807c0c4b5105a1bb32ca816a1->leave($__internal_17c1d31006dbdeeb99154214b3077ed8e920bea807c0c4b5105a1bb32ca816a1_prof);

    }

    public function getTemplateName()
    {
        return "PointWebFaqBundle:faq:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  103 => 32,  98 => 30,  91 => 26,  87 => 25,  82 => 23,  75 => 19,  71 => 18,  66 => 16,  59 => 12,  55 => 11,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
