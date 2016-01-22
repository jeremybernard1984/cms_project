<?php

/* PointWebNewsBundle:News:new.html.twig */
class __TwigTemplate_f981ec56ad246ed1f337428e82080728097077c08761a0fe326e9b493d7f0535 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebNewsBundle:News:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_292f87b0ffa0a6e6bef26b1b24d225bdc85bda79cdcf800c161370197c516d6b' => array($this, 'block___internal_292f87b0ffa0a6e6bef26b1b24d225bdc85bda79cdcf800c161370197c516d6b'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef6de4f13dd195c8cf9d186225f327eb881605e025f07df636dede74f42197d4 = $this->env->getExtension("native_profiler");
        $__internal_ef6de4f13dd195c8cf9d186225f327eb881605e025f07df636dede74f42197d4->enter($__internal_ef6de4f13dd195c8cf9d186225f327eb881605e025f07df636dede74f42197d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebNewsBundle:News:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef6de4f13dd195c8cf9d186225f327eb881605e025f07df636dede74f42197d4->leave($__internal_ef6de4f13dd195c8cf9d186225f327eb881605e025f07df636dede74f42197d4_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_cdb03f545a8390d0b4c47f7c6664c8283f885b04af2c2d2fbfb2df8ba5c6a066 = $this->env->getExtension("native_profiler");
        $__internal_cdb03f545a8390d0b4c47f7c6664c8283f885b04af2c2d2fbfb2df8ba5c6a066->enter($__internal_cdb03f545a8390d0b4c47f7c6664c8283f885b04af2c2d2fbfb2df8ba5c6a066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Création d'une news</h1>

    ";
        // line 6
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget');
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
        <div class=\"form-group\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'errors');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-lg-2 control-label\">
                Déplacez vos fichiers ou cliquez dans la zone :
            </label>

            <div id=\"dropZoneFile\" class=\"col-lg-10\">
                <iframe src=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\">
                </iframe>
            </div>
        </div>
        <ul class=\"files\"
            data-prototype=\"";
        // line 56
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_292f87b0ffa0a6e6bef26b1b24d225bdc85bda79cdcf800c161370197c516d6b", $context, $blocks));
        echo "\">
        </ul>
    </fieldset>
    ";
        // line 59
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 60
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("admin_news");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
";
        
        $__internal_cdb03f545a8390d0b4c47f7c6664c8283f885b04af2c2d2fbfb2df8ba5c6a066->leave($__internal_cdb03f545a8390d0b4c47f7c6664c8283f885b04af2c2d2fbfb2df8ba5c6a066_prof);

    }

    // line 56
    public function block___internal_292f87b0ffa0a6e6bef26b1b24d225bdc85bda79cdcf800c161370197c516d6b($context, array $blocks = array())
    {
        $__internal_ef8e2236f0b3e06575873071dcf465e8d09cd8312964ee435e510e9ce9c8156e = $this->env->getExtension("native_profiler");
        $__internal_ef8e2236f0b3e06575873071dcf465e8d09cd8312964ee435e510e9ce9c8156e->enter($__internal_ef8e2236f0b3e06575873071dcf465e8d09cd8312964ee435e510e9ce9c8156e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_292f87b0ffa0a6e6bef26b1b24d225bdc85bda79cdcf800c161370197c516d6b"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebNewsBundle:News:new.html.twig", 56)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_ef8e2236f0b3e06575873071dcf465e8d09cd8312964ee435e510e9ce9c8156e->leave($__internal_ef8e2236f0b3e06575873071dcf465e8d09cd8312964ee435e510e9ce9c8156e_prof);

    }

    public function getTemplateName()
    {
        return "PointWebNewsBundle:News:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 56,  160 => 62,  154 => 60,  152 => 59,  146 => 56,  138 => 51,  125 => 41,  121 => 40,  116 => 38,  109 => 34,  105 => 33,  100 => 31,  93 => 27,  89 => 26,  84 => 24,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
