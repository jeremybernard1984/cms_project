<?php

/* PointWebAdminBundle:Form:prototype.html.twig */
class __TwigTemplate_8545cdaef434638458cbaf7268812987be91d2f06aa6430e76176529944a1bbe extends Twig_Template
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
        $__internal_6bbe7d76b4985cc78456313f4405006b5b5c9d6e7902b94eac69cced0828fb30 = $this->env->getExtension("native_profiler");
        $__internal_6bbe7d76b4985cc78456313f4405006b5b5c9d6e7902b94eac69cced0828fb30->enter($__internal_6bbe7d76b4985cc78456313f4405006b5b5c9d6e7902b94eac69cced0828fb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Form:prototype.html.twig"));

        // line 1
        echo "
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
    <div style=\"clear:both;width: 100%;height: 80px;background: #e1e1e8;text-align: center;\">
        <img height=\"80\" class=\"formFilePicture\" src=\"";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
        }
        echo "\"/>
    </div>
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget', array("attr" => array("value" => "0")));
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tmpPath", array()), 'widget');
        echo "

";
        
        $__internal_6bbe7d76b4985cc78456313f4405006b5b5c9d6e7902b94eac69cced0828fb30->leave($__internal_6bbe7d76b4985cc78456313f4405006b5b5c9d6e7902b94eac69cced0828fb30_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Form:prototype.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  34 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/*     {{ form_errors(form.name) }}*/
/*     {{ form_widget(form.name) }}*/
/*     <div style="clear:both;width: 100%;height: 80px;background: #e1e1e8;text-align: center;">*/
/*         <img height="80" class="formFilePicture" src="{% if form.vars.value %}{{ asset(form.vars.value.getWebPath(base)) }}{% endif %}"/>*/
/*     </div>*/
/*     {{ form_errors(form.description) }}*/
/*     {{ form_widget(form.description) }}*/
/*     {{ form_errors(form.position) }}*/
/*     {{ form_widget(form.position, {'attr': {'value': '0'} }) }}*/
/*     {{ form_widget(form.tmpPath) }}*/
/* */
/* */
