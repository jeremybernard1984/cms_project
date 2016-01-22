<?php

/* @PointWebAdmin/Menu/new.html.twig */
class __TwigTemplate_da03166d6c183d9a2ea82c04d12f00f90607720c1c9ea53a0306103ea67efad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "@PointWebAdmin/Menu/new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_2f699bc0e575371ea208f52296d29bb909d3051991a19fbb5359f1d78de0ad00' => array($this, 'block___internal_2f699bc0e575371ea208f52296d29bb909d3051991a19fbb5359f1d78de0ad00'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2879006205933e2f826a25b7b8a890625a89cd3bffee3c6f17242efb7f81b152 = $this->env->getExtension("native_profiler");
        $__internal_2879006205933e2f826a25b7b8a890625a89cd3bffee3c6f17242efb7f81b152->enter($__internal_2879006205933e2f826a25b7b8a890625a89cd3bffee3c6f17242efb7f81b152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebAdmin/Menu/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2879006205933e2f826a25b7b8a890625a89cd3bffee3c6f17242efb7f81b152->leave($__internal_2879006205933e2f826a25b7b8a890625a89cd3bffee3c6f17242efb7f81b152_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_ff61bafa58e5b4d275209addf6ae6519ae357dede3880e9d6d45c9644ed996d6 = $this->env->getExtension("native_profiler");
        $__internal_ff61bafa58e5b4d275209addf6ae6519ae357dede3880e9d6d45c9644ed996d6->enter($__internal_ff61bafa58e5b4d275209addf6ae6519ae357dede3880e9d6d45c9644ed996d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Création du menu</h1>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>
        <div class=\"form-group\">
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'errors');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-lg-2\"></div>
            <div class=\"col-lg-10\">
                ATTENTION ! Si vous sélectionnez une \"Route\" qui nécessite une cible <a><strong>(...of category, ...detail, etc.)</strong></a>, vous devez sélectionner une cible.
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()), 'label');
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pathId", array()), 'label');
        echo "
            <div class=\"col-lg-6\">
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()), 'errors');
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()), 'widget', array("attr" => array("data-url" => $this->env->getExtension('routing')->getPath("admin_menu_rempli_pathid", array("entitySelectOk" => "")))));
        echo "
            </div>
            <div class=\"col-lg-1 control-label\">
                <label>Cible: </label>
            </div>
            <div class=\"col-lg-3\" id=\"loading\"></div>
            <div class=\"col-lg-3\" id=\"pathId\">
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pathId", array()), 'errors');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pathId", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "main_menu", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "main_menu", array()), 'errors');
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "main_menu", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'errors');
        echo "
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"col-lg-12 docTitle\">
            Gestion des images/documents
        </div>
        <div id=\"dropZoneFile\" class=\"col-lg-2\">
            <iframe src=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\"></iframe>
            <div class=\"fichierInfos\">
                <p>Déplacez vos fichiers<br>
                    ou cliquez dans la zone</p>
            </div>
        </div>
        <div class=\"col-lg-10\">
            <ul class=\"files\" data-prototype=\"";
        // line 75
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_2f699bc0e575371ea208f52296d29bb909d3051991a19fbb5359f1d78de0ad00", $context, $blocks));
        echo "\">
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 77
            echo "                    <li class=\"formFile col-sm-3\">
                        ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'errors');
            echo "
                        ";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'widget');
            echo "
                        <div style=\"clear:both;width: 100%;height: 80px;background: url('";
            // line 80
            if ($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            }
            echo "') no-repeat center #e1e1e8;background-size: contain;\"></div>
                        ";
            // line 81
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'errors');
            echo "
                        ";
            // line 82
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'widget');
            echo "
                        ";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'errors');
            echo "
                        ";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'widget', array("attr" => array("value" => "0")));
            echo "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "            </ul>
        </div>
    </fieldset>
    ";
        // line 90
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 91
        echo "

    <div class=\"col-lg-12 submitBt\">
        <div style=\"float: left\">
            <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("admin_menu");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
        </div>
        ";
        // line 97
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_ff61bafa58e5b4d275209addf6ae6519ae357dede3880e9d6d45c9644ed996d6->leave($__internal_ff61bafa58e5b4d275209addf6ae6519ae357dede3880e9d6d45c9644ed996d6_prof);

    }

    // line 75
    public function block___internal_2f699bc0e575371ea208f52296d29bb909d3051991a19fbb5359f1d78de0ad00($context, array $blocks = array())
    {
        $__internal_f226f834014b041451a02e0e51076c0a7beae00f19008d91d8c885158807c260 = $this->env->getExtension("native_profiler");
        $__internal_f226f834014b041451a02e0e51076c0a7beae00f19008d91d8c885158807c260->enter($__internal_f226f834014b041451a02e0e51076c0a7beae00f19008d91d8c885158807c260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_2f699bc0e575371ea208f52296d29bb909d3051991a19fbb5359f1d78de0ad00"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "@PointWebAdmin/Menu/new.html.twig", 75)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_f226f834014b041451a02e0e51076c0a7beae00f19008d91d8c885158807c260->leave($__internal_f226f834014b041451a02e0e51076c0a7beae00f19008d91d8c885158807c260_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebAdmin/Menu/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 75,  244 => 97,  239 => 95,  233 => 91,  231 => 90,  226 => 87,  217 => 84,  213 => 83,  209 => 82,  205 => 81,  199 => 80,  195 => 79,  191 => 78,  188 => 77,  184 => 76,  180 => 75,  170 => 68,  159 => 60,  155 => 59,  150 => 57,  143 => 53,  139 => 52,  134 => 50,  127 => 46,  123 => 45,  118 => 43,  111 => 39,  107 => 38,  97 => 31,  93 => 30,  88 => 28,  84 => 27,  71 => 17,  66 => 15,  59 => 11,  55 => 10,  50 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Création du menu</h1>*/
/*     {{ form_start(form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.parent) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.parent) }}*/
/*                 {{ form_widget(form.parent) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.title) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_widget(form.title) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-lg-2"></div>*/
/*             <div class="col-lg-10">*/
/*                 ATTENTION ! Si vous sélectionnez une "Route" qui nécessite une cible <a><strong>(...of category, ...detail, etc.)</strong></a>, vous devez sélectionner une cible.*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.path) }}*/
/*             {{ form_label(form.pathId) }}*/
/*             <div class="col-lg-6">*/
/*                 {{ form_errors(form.path) }}*/
/*                 {{ form_widget(form.path, {'attr' : {'data-url' : path('admin_menu_rempli_pathid', {'entitySelectOk': ''}) }}) }}*/
/*             </div>*/
/*             <div class="col-lg-1 control-label">*/
/*                 <label>Cible: </label>*/
/*             </div>*/
/*             <div class="col-lg-3" id="loading"></div>*/
/*             <div class="col-lg-3" id="pathId">*/
/*                 {{ form_errors(form.pathId) }}*/
/*                 {{ form_widget(form.pathId) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.main_menu) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.main_menu) }}*/
/*                 {{ form_widget(form.main_menu) }}*/
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
/*             {{ form_label(form.online) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.online) }}*/
/*                 {{ form_widget(form.online) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-lg-12 docTitle">*/
/*             Gestion des images/documents*/
/*         </div>*/
/*         <div id="dropZoneFile" class="col-lg-2">*/
/*             <iframe src="{{ path('point_web_admin_update') }}"></iframe>*/
/*             <div class="fichierInfos">*/
/*                 <p>Déplacez vos fichiers<br>*/
/*                     ou cliquez dans la zone</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-10">*/
/*             <ul class="files" data-prototype="{% filter escape %}{% include 'PointWebAdminBundle:Form:prototype.html.twig' with {'form': form.pictures.vars.prototype} %}{% endfilter %}">*/
/*                 {% for picture in form.pictures %}*/
/*                     <li class="formFile col-sm-3">*/
/*                         {{ form_errors(picture.name) }}*/
/*                         {{ form_widget(picture.name) }}*/
/*                         <div style="clear:both;width: 100%;height: 80px;background: url('{% if picture.vars.value %}{{ asset(picture.vars.value.getWebPath(base)) }}{% endif %}') no-repeat center #e1e1e8;background-size: contain;"></div>*/
/*                         {{ form_errors(picture.description) }}*/
/*                         {{ form_widget(picture.description) }}*/
/*                         {{ form_errors(picture.position) }}*/
/*                         {{ form_widget(picture.position, {'attr': {'value': '0'} }) }}*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </fieldset>*/
/*     {% do form.pictures.setRendered %}*/
/* */
/* */
/*     <div class="col-lg-12 submitBt">*/
/*         <div style="float: left">*/
/*             <a href="{{ path('admin_menu') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
