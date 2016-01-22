<?php

/* PointWebAdminBundle:Form:prototype2.html.twig */
class __TwigTemplate_50078e82bfd2f45ba0b2ff029564198499edda0c715961708d17403203f4f7e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9216be117ee62735a995ffc239918732eda0a3c00b942f34faba28986da598aa = $this->env->getExtension("native_profiler");
        $__internal_9216be117ee62735a995ffc239918732eda0a3c00b942f34faba28986da598aa->enter($__internal_9216be117ee62735a995ffc239918732eda0a3c00b942f34faba28986da598aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Form:prototype2.html.twig"));

        // line 1
        echo "

<div class=\"form-group\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
    <div class=\"col-lg-10\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
    </div>
</div>
<div class=\"form-group\">
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
    <div class=\"col-lg-10\">
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
    </div>
</div>
<div class=\"form-group\">
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "
    <div class=\"col-lg-10\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
    </div>
</div>
";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tmpPath", array()), 'widget');
        echo "
<div class=\"form-group\">
    <label class=\"col-lg-2 control-label\">
        Fichier :
    </label>

    <div class=\"col-lg-10\">
        <img class=\"formFilePicture\"
             src=\"";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
        }
        echo "\"/>
    </div>
</div>
";
        
        $__internal_9216be117ee62735a995ffc239918732eda0a3c00b942f34faba28986da598aa->leave($__internal_9216be117ee62735a995ffc239918732eda0a3c00b942f34faba28986da598aa_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Form:prototype2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  74 => 24,  68 => 21,  64 => 20,  59 => 18,  52 => 14,  48 => 13,  43 => 11,  36 => 7,  32 => 6,  27 => 4,  22 => 1,);
    }
}
/* */
/* */
/* <div class="form-group">*/
/*     {{ form_label(form.name) }}*/
/*     <div class="col-lg-10">*/
/*         {{ form_errors(form.name) }}*/
/*         {{ form_widget(form.name) }}*/
/*     </div>*/
/* </div>*/
/* <div class="form-group">*/
/*     {{ form_label(form.description) }}*/
/*     <div class="col-lg-10">*/
/*         {{ form_errors(form.description) }}*/
/*         {{ form_widget(form.description) }}*/
/*     </div>*/
/* </div>*/
/* <div class="form-group">*/
/*     {{ form_label(form.position) }}*/
/*     <div class="col-lg-10">*/
/*         {{ form_errors(form.position) }}*/
/*         {{ form_widget(form.position) }}*/
/*     </div>*/
/* </div>*/
/* {{ form_widget(form.tmpPath) }}*/
/* <div class="form-group">*/
/*     <label class="col-lg-2 control-label">*/
/*         Fichier :*/
/*     </label>*/
/* */
/*     <div class="col-lg-10">*/
/*         <img class="formFilePicture"*/
/*              src="{% if form.vars.value %}{{ asset(form.vars.value.getWebPath(base)) }}{% endif %}"/>*/
/*     </div>*/
/* </div>*/
/* */
