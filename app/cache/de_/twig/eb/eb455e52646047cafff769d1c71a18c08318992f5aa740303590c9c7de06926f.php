<?php

/* PointWebGedBundle:Folder:new.html.twig */
class __TwigTemplate_7fe82bfdeeea98faeb0153630745d2943ac672be8a168427059556c343c5f35f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebGedBundle:Folder:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_fb122c0d8531059a9be6145d00bc8f109b116e0854a908356d59e812169d82ee' => array($this, 'block___internal_fb122c0d8531059a9be6145d00bc8f109b116e0854a908356d59e812169d82ee'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21706a3fa0d7f92ef01142c3e8a68e1ac424ef028787c53fd35fed267b01a8df = $this->env->getExtension("native_profiler");
        $__internal_21706a3fa0d7f92ef01142c3e8a68e1ac424ef028787c53fd35fed267b01a8df->enter($__internal_21706a3fa0d7f92ef01142c3e8a68e1ac424ef028787c53fd35fed267b01a8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGedBundle:Folder:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21706a3fa0d7f92ef01142c3e8a68e1ac424ef028787c53fd35fed267b01a8df->leave($__internal_21706a3fa0d7f92ef01142c3e8a68e1ac424ef028787c53fd35fed267b01a8df_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_a7e88ee2aeaf3b2579d11b26f21496b3f9a5fdc7dfa241ad04429bfd03463f48 = $this->env->getExtension("native_profiler");
        $__internal_a7e88ee2aeaf3b2579d11b26f21496b3f9a5fdc7dfa241ad04429bfd03463f48->enter($__internal_a7e88ee2aeaf3b2579d11b26f21496b3f9a5fdc7dfa241ad04429bfd03463f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_fb122c0d8531059a9be6145d00bc8f109b116e0854a908356d59e812169d82ee", $context, $blocks));
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
        
        $__internal_a7e88ee2aeaf3b2579d11b26f21496b3f9a5fdc7dfa241ad04429bfd03463f48->leave($__internal_a7e88ee2aeaf3b2579d11b26f21496b3f9a5fdc7dfa241ad04429bfd03463f48_prof);

    }

    // line 41
    public function block___internal_fb122c0d8531059a9be6145d00bc8f109b116e0854a908356d59e812169d82ee($context, array $blocks = array())
    {
        $__internal_34340107a5487ef63db355254d4598e8fddfdea1f063867d7db5f45e7c5253f3 = $this->env->getExtension("native_profiler");
        $__internal_34340107a5487ef63db355254d4598e8fddfdea1f063867d7db5f45e7c5253f3->enter($__internal_34340107a5487ef63db355254d4598e8fddfdea1f063867d7db5f45e7c5253f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_fb122c0d8531059a9be6145d00bc8f109b116e0854a908356d59e812169d82ee"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebGedBundle:Folder:new.html.twig", 41)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_34340107a5487ef63db355254d4598e8fddfdea1f063867d7db5f45e7c5253f3->leave($__internal_34340107a5487ef63db355254d4598e8fddfdea1f063867d7db5f45e7c5253f3_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGedBundle:Folder:new.html.twig";
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
