<?php

/* PointWebFaqBundle:faq:new.html.twig */
class __TwigTemplate_3ff33b3d01fcbf831136473b792faa39fea0cb11461ddf4b27c1d021c521ab19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebFaqBundle:faq:new.html.twig", 1);
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
        $__internal_50108a2ac31b544bc0340c1f546609068f503ffdab79a89a9e5f6c3c98c52bd5 = $this->env->getExtension("native_profiler");
        $__internal_50108a2ac31b544bc0340c1f546609068f503ffdab79a89a9e5f6c3c98c52bd5->enter($__internal_50108a2ac31b544bc0340c1f546609068f503ffdab79a89a9e5f6c3c98c52bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebFaqBundle:faq:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50108a2ac31b544bc0340c1f546609068f503ffdab79a89a9e5f6c3c98c52bd5->leave($__internal_50108a2ac31b544bc0340c1f546609068f503ffdab79a89a9e5f6c3c98c52bd5_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_9406dcd182762a542712a0616a36e1ac2157e49f3304a10e5d6ad42f4786d2a2 = $this->env->getExtension("native_profiler");
        $__internal_9406dcd182762a542712a0616a36e1ac2157e49f3304a10e5d6ad42f4786d2a2->enter($__internal_9406dcd182762a542712a0616a36e1ac2157e49f3304a10e5d6ad42f4786d2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Ajout d'une question</h1>
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
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answer", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answer", array()), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answer", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'widget');
        echo "
            </div>
        </div>

    </fieldset>


    <div class=\"row submitBt\">
        <div style=\"float: left\">
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("admin_faq");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
        </div>
        ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_9406dcd182762a542712a0616a36e1ac2157e49f3304a10e5d6ad42f4786d2a2->leave($__internal_9406dcd182762a542712a0616a36e1ac2157e49f3304a10e5d6ad42f4786d2a2_prof);

    }

    public function getTemplateName()
    {
        return "PointWebFaqBundle:faq:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 38,  104 => 36,  92 => 27,  88 => 26,  83 => 24,  75 => 19,  71 => 18,  66 => 16,  59 => 12,  55 => 11,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Ajout d'une question</h1>*/
/*     {{ form_start(form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.title) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.title) }}*/
/*                 {{ form_widget(form.title) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.answer) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.answer) }}*/
/*                 {{ form_widget(form.answer) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.online) }}*/
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
/*             <a href="{{ path('admin_faq') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
