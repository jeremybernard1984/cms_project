<?php

/* @PointWebUser/User/edit.html.twig */
class __TwigTemplate_34d6dbde66ef303a1624cafa2d5d51e35d46618a944bc19a3c53464111b57fa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "@PointWebUser/User/edit.html.twig", 1);
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
        $__internal_8003db4b8a35c147176e7b0355e5eb2b66837ba4136b6b55dbea834dffaa9aea = $this->env->getExtension("native_profiler");
        $__internal_8003db4b8a35c147176e7b0355e5eb2b66837ba4136b6b55dbea834dffaa9aea->enter($__internal_8003db4b8a35c147176e7b0355e5eb2b66837ba4136b6b55dbea834dffaa9aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebUser/User/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8003db4b8a35c147176e7b0355e5eb2b66837ba4136b6b55dbea834dffaa9aea->leave($__internal_8003db4b8a35c147176e7b0355e5eb2b66837ba4136b6b55dbea834dffaa9aea_prof);

    }

    // line 2
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_6d9efe0c1d9b0bc02001d68211efc2a72b317cd2d5098565afda006b4de9b16c = $this->env->getExtension("native_profiler");
        $__internal_6d9efe0c1d9b0bc02001d68211efc2a72b317cd2d5098565afda006b4de9b16c->enter($__internal_6d9efe0c1d9b0bc02001d68211efc2a72b317cd2d5098565afda006b4de9b16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 3
        echo "    <h1>Modification de l'utilisateur</h1>
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>
    <div class=\"form-group\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'errors');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'widget');
        echo "
            ";
        // line 18
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array())) {
            // line 19
            echo "                <!---->
                <a class=\"fancybox\" href=\"../../../";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "AssetPath", array()), "html", null, true);
            echo "\"><img src=\"../../../";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "AssetPath", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "name", array()), "html", null, true);
            echo "\" style=\"width:150px;float: left\"></a>
            ";
        } else {
            // line 22
            echo "                ...
            ";
        }
        // line 24
        echo "        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'errors');
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'errors');
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "first", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "first", array()), 'errors');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "first", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "second", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "second", array()), 'errors');
        echo "
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "second", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "roles", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "roles", array()), 'errors');
        echo "
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "roles", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "enabled", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "enabled", array()), 'errors');
        echo "
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "enabled", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"row submitBt\">
        <div style=\"float: left\">
            <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
        </div>
        ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        ";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    </div>
";
        
        $__internal_6d9efe0c1d9b0bc02001d68211efc2a72b317cd2d5098565afda006b4de9b16c->leave($__internal_6d9efe0c1d9b0bc02001d68211efc2a72b317cd2d5098565afda006b4de9b16c_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebUser/User/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 80,  219 => 79,  214 => 77,  206 => 72,  202 => 71,  197 => 69,  190 => 65,  186 => 64,  181 => 62,  174 => 58,  170 => 57,  165 => 55,  158 => 51,  154 => 50,  149 => 48,  142 => 44,  138 => 43,  133 => 41,  126 => 37,  122 => 36,  117 => 34,  110 => 30,  106 => 29,  101 => 27,  96 => 24,  92 => 22,  83 => 20,  80 => 19,  78 => 18,  74 => 17,  70 => 16,  65 => 14,  58 => 10,  54 => 9,  49 => 7,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* {% block content_right %}*/
/*     <h1>Modification de l'utilisateur</h1>*/
/*     {{ form_start(edit_form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/*     <div class="form-group">*/
/*         {{ form_label(edit_form.username) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(edit_form.username) }}*/
/*             {{ form_widget(edit_form.username) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_label(edit_form.image) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(edit_form.image) }}*/
/*             {{ form_widget(edit_form.image) }}*/
/*             {% if entity.image %}*/
/*                 <!---->*/
/*                 <a class="fancybox" href="../../../{{ entity.image.AssetPath }}"><img src="../../../{{ entity.image.AssetPath }}" alt="{{ entity.image.name }}" style="width:150px;float: left"></a>*/
/*             {% else %}*/
/*                 ...*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_label(edit_form.firstName) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(edit_form.firstName) }}*/
/*             {{ form_widget(edit_form.firstName) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_label(edit_form.lastName) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(edit_form.lastName) }}*/
/*             {{ form_widget(edit_form.lastName) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_label(edit_form.email) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(edit_form.email) }}*/
/*             {{ form_widget(edit_form.email) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_label(edit_form.password.first) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(edit_form.password.first) }}*/
/*             {{ form_widget(edit_form.password.first) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_label(edit_form.password.second) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(edit_form.password.second) }}*/
/*             {{ form_widget(edit_form.password.second) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_label(edit_form.roles) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(edit_form.roles) }}*/
/*             {{ form_widget(edit_form.roles) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {{ form_label(edit_form.enabled) }}*/
/*         <div class="col-lg-10">*/
/*             {{ form_errors(edit_form.enabled) }}*/
/*             {{ form_widget(edit_form.enabled) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="row submitBt">*/
/*         <div style="float: left">*/
/*             <a href="{{ path('admin_user') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*         </div>*/
/*         {{ form_end(edit_form) }}*/
/*         {{ form(delete_form) }}*/
/*     </div>*/
/* {% endblock %}*/
