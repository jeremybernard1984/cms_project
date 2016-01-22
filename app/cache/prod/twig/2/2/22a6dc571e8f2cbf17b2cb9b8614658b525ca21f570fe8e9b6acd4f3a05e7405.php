<?php

/* PointWebPartnerBundle:PartnerCategory:new.html.twig */
class __TwigTemplate_22a6dc571e8f2cbf17b2cb9b8614658b525ca21f570fe8e9b6acd4f3a05e7405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebPartnerBundle:PartnerCategory:new.html.twig", 1);
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
        $__internal_d292a6fa8d18a23097d97945920f0cba9dfd5875d61949df90f44ea9175c0b14 = $this->env->getExtension("native_profiler");
        $__internal_d292a6fa8d18a23097d97945920f0cba9dfd5875d61949df90f44ea9175c0b14->enter($__internal_d292a6fa8d18a23097d97945920f0cba9dfd5875d61949df90f44ea9175c0b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:PartnerCategory:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d292a6fa8d18a23097d97945920f0cba9dfd5875d61949df90f44ea9175c0b14->leave($__internal_d292a6fa8d18a23097d97945920f0cba9dfd5875d61949df90f44ea9175c0b14_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_80aac7ff43f132307f8be01bc4257ce9527adffb62efd69d23747b59e44479fe = $this->env->getExtension("native_profiler");
        $__internal_80aac7ff43f132307f8be01bc4257ce9527adffb62efd69d23747b59e44479fe->enter($__internal_80aac7ff43f132307f8be01bc4257ce9527adffb62efd69d23747b59e44479fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        
        $__internal_80aac7ff43f132307f8be01bc4257ce9527adffb62efd69d23747b59e44479fe->leave($__internal_80aac7ff43f132307f8be01bc4257ce9527adffb62efd69d23747b59e44479fe_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:PartnerCategory:new.html.twig";
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
