<?php

/* PointWebAdminBundle:Menu:new.html.twig */
class __TwigTemplate_fcb4ed21dbbb18ff253e2a71d57b5598a819c4ab782b68f83e966c63a6be0dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Menu:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_0bde98e6a77c2707066439445a9725e7ba8fc57d167f98d3d4fb5e6fbdb93ec9' => array($this, 'block___internal_0bde98e6a77c2707066439445a9725e7ba8fc57d167f98d3d4fb5e6fbdb93ec9'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00aaca7c310cabf92050cc00da69fe08dd5f5deb5b2aab27b022e666ccd1dc93 = $this->env->getExtension("native_profiler");
        $__internal_00aaca7c310cabf92050cc00da69fe08dd5f5deb5b2aab27b022e666ccd1dc93->enter($__internal_00aaca7c310cabf92050cc00da69fe08dd5f5deb5b2aab27b022e666ccd1dc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Menu:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00aaca7c310cabf92050cc00da69fe08dd5f5deb5b2aab27b022e666ccd1dc93->leave($__internal_00aaca7c310cabf92050cc00da69fe08dd5f5deb5b2aab27b022e666ccd1dc93_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_79557720d35325b001cf4fe89864b21c5a876564d55045fb24a434383c496c66 = $this->env->getExtension("native_profiler");
        $__internal_79557720d35325b001cf4fe89864b21c5a876564d55045fb24a434383c496c66->enter($__internal_79557720d35325b001cf4fe89864b21c5a876564d55045fb24a434383c496c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Création du menu</h1>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-lg-2 control-label\">
                Déplacez vos fichiers ou cliquez dans la zone :
            </label>

            <div id=\"dropZoneFile\" class=\"col-lg-10\">
                <iframe src=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\">
                </iframe>
            </div>
        </div>
        <ul class=\"files\"
            data-prototype=\"";
        // line 54
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_0bde98e6a77c2707066439445a9725e7ba8fc57d167f98d3d4fb5e6fbdb93ec9", $context, $blocks));
        echo "\">
        </ul>
    </fieldset>
    ";
        // line 57
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 58
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("admin_menu");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
";
        
        $__internal_79557720d35325b001cf4fe89864b21c5a876564d55045fb24a434383c496c66->leave($__internal_79557720d35325b001cf4fe89864b21c5a876564d55045fb24a434383c496c66_prof);

    }

    // line 54
    public function block___internal_0bde98e6a77c2707066439445a9725e7ba8fc57d167f98d3d4fb5e6fbdb93ec9($context, array $blocks = array())
    {
        $__internal_20acb2492365da8c5479d8794c4031aa16f064cdcc6e82ebd5e1c9c3f679d956 = $this->env->getExtension("native_profiler");
        $__internal_20acb2492365da8c5479d8794c4031aa16f064cdcc6e82ebd5e1c9c3f679d956->enter($__internal_20acb2492365da8c5479d8794c4031aa16f064cdcc6e82ebd5e1c9c3f679d956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_0bde98e6a77c2707066439445a9725e7ba8fc57d167f98d3d4fb5e6fbdb93ec9"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebAdminBundle:Menu:new.html.twig", 54)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_20acb2492365da8c5479d8794c4031aa16f064cdcc6e82ebd5e1c9c3f679d956->leave($__internal_20acb2492365da8c5479d8794c4031aa16f064cdcc6e82ebd5e1c9c3f679d956_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Menu:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 54,  158 => 60,  152 => 58,  150 => 57,  144 => 54,  136 => 49,  124 => 40,  120 => 39,  115 => 37,  108 => 33,  104 => 32,  99 => 30,  92 => 26,  88 => 25,  83 => 23,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Création du menu</h1>*/
/* */
/*     {{ form_start(form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.title) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.title) }}*/
/*                 {{ form_widget(form.title) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.description) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.description) }}*/
/*                 {{ form_widget(form.description) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.path) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.path) }}*/
/*                 {{ form_widget(form.path) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.position) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.position) }}*/
/*                 {{ form_widget(form.position) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.parent) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.parent) }}*/
/*                 {{ form_widget(form.parent) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-lg-2 control-label">*/
/*                 Déplacez vos fichiers ou cliquez dans la zone :*/
/*             </label>*/
/* */
/*             <div id="dropZoneFile" class="col-lg-10">*/
/*                 <iframe src="{{ path('point_web_admin_update') }}">*/
/*                 </iframe>*/
/*             </div>*/
/*         </div>*/
/*         <ul class="files"*/
/*             data-prototype="{% filter escape %}{% include 'PointWebAdminBundle:Form:prototype.html.twig' with {'form': form.pictures.vars.prototype} %}{% endfilter %}">*/
/*         </ul>*/
/*     </fieldset>*/
/*     {% do form.pictures.setRendered %}*/
/*     {{ form_end(form) }}*/
/* */
/*     <a href="{{ path('admin_menu') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/* {% endblock %}*/
/* */
