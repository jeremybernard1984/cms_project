<?php

/* PointWebAdminBundle:Form:prototype.html.twig */
class __TwigTemplate_020c2116bcdf87b34f7097df7bcc68073e7a9c76660ef9bb3a671efa60e4adc2 extends Twig_Template
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
        $__internal_f527da9870fb7a395736107f36332bc2b51a23f12fbcd8d6deb1e3ebeb877527 = $this->env->getExtension("native_profiler");
        $__internal_f527da9870fb7a395736107f36332bc2b51a23f12fbcd8d6deb1e3ebeb877527->enter($__internal_f527da9870fb7a395736107f36332bc2b51a23f12fbcd8d6deb1e3ebeb877527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Form:prototype.html.twig"));

        // line 1
        echo "<div class=\"form-group\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
    <div class=\"col-lg-10\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
    </div>
</div>
<div class=\"form-group\">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
    <div class=\"col-lg-10\">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
    </div>
</div>
<div class=\"form-group\">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "
    <div class=\"col-lg-10\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
    </div>
</div>
";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tmpPath", array()), 'widget');
        echo "
<div class=\"form-group\">
    <label class=\"col-lg-2 control-label\">
        Fichier :
    </label>

    <div class=\"col-lg-10\">
        <img class=\"formFilePicture\"
             src=\"";
        // line 30
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
        }
        echo "\"/>
    </div>
</div>
";
        
        $__internal_f527da9870fb7a395736107f36332bc2b51a23f12fbcd8d6deb1e3ebeb877527->leave($__internal_f527da9870fb7a395736107f36332bc2b51a23f12fbcd8d6deb1e3ebeb877527_prof);

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
        return array (  83 => 30,  72 => 22,  66 => 19,  62 => 18,  57 => 16,  50 => 12,  46 => 11,  41 => 9,  34 => 5,  30 => 4,  25 => 2,  22 => 1,);
    }
}
