<?php

/* @PointWebGed/Folder/new.html.twig */
class __TwigTemplate_addd1dc8a06347cd26735bc7e8eb85e632e3501f93ba5dee8aa6f4b0d59d3dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "@PointWebGed/Folder/new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_8aa32a1200fec13685c6d19309c6d7ac570d13bb4e28d0c2088a587e42eada2b' => array($this, 'block___internal_8aa32a1200fec13685c6d19309c6d7ac570d13bb4e28d0c2088a587e42eada2b'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8e70567421cf95d8f3f47674312fcbaab72307d0abd8c41fd4799f3bab4b8ae = $this->env->getExtension("native_profiler");
        $__internal_a8e70567421cf95d8f3f47674312fcbaab72307d0abd8c41fd4799f3bab4b8ae->enter($__internal_a8e70567421cf95d8f3f47674312fcbaab72307d0abd8c41fd4799f3bab4b8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebGed/Folder/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8e70567421cf95d8f3f47674312fcbaab72307d0abd8c41fd4799f3bab4b8ae->leave($__internal_a8e70567421cf95d8f3f47674312fcbaab72307d0abd8c41fd4799f3bab4b8ae_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_a26d8349e04c9f2562f8595853bf950f8333ecf25877eb260029cfdcf917cb71 = $this->env->getExtension("native_profiler");
        $__internal_a26d8349e04c9f2562f8595853bf950f8333ecf25877eb260029cfdcf917cb71->enter($__internal_a26d8349e04c9f2562f8595853bf950f8333ecf25877eb260029cfdcf917cb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Création d'un dossier</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-lg-2 control-label\">
                Déplacez vos fichiers ou cliquez dans la zone :
            </label>

            <div id=\"dropZoneFile\" class=\"col-lg-10\">
                <iframe src=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\">
                </iframe>
            </div>
        </div>
        <ul class=\"files\"
            data-prototype=\"";
        // line 41
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_8aa32a1200fec13685c6d19309c6d7ac570d13bb4e28d0c2088a587e42eada2b", $context, $blocks));
        echo "\">
        </ul>
    </fieldset>
    ";
        // line 44
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 45
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("admin_folder");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
";
        
        $__internal_a26d8349e04c9f2562f8595853bf950f8333ecf25877eb260029cfdcf917cb71->leave($__internal_a26d8349e04c9f2562f8595853bf950f8333ecf25877eb260029cfdcf917cb71_prof);

    }

    // line 41
    public function block___internal_8aa32a1200fec13685c6d19309c6d7ac570d13bb4e28d0c2088a587e42eada2b($context, array $blocks = array())
    {
        $__internal_2c998386dad5862b203e1a2222b9fe7354efa3b2814911ab4053eb182fb42893 = $this->env->getExtension("native_profiler");
        $__internal_2c998386dad5862b203e1a2222b9fe7354efa3b2814911ab4053eb182fb42893->enter($__internal_2c998386dad5862b203e1a2222b9fe7354efa3b2814911ab4053eb182fb42893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_8aa32a1200fec13685c6d19309c6d7ac570d13bb4e28d0c2088a587e42eada2b"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "@PointWebGed/Folder/new.html.twig", 41)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_2c998386dad5862b203e1a2222b9fe7354efa3b2814911ab4053eb182fb42893->leave($__internal_2c998386dad5862b203e1a2222b9fe7354efa3b2814911ab4053eb182fb42893_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebGed/Folder/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  127 => 47,  121 => 45,  119 => 44,  113 => 41,  105 => 36,  92 => 26,  88 => 25,  83 => 23,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Création d'un dossier</h1>*/
/* */
/*     {{ form_start(form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.name) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.name) }}*/
/*                 {{ form_widget(form.name) }}*/
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
/*             {{ form_label(form.users) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.users) }}*/
/*                 {{ form_widget(form.users) }}*/
/*             </div>*/
/*         </div>*/
/* */
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
/*     <a href="{{ path('admin_folder') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/* {% endblock %}*/
