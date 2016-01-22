<?php

/* @PointWebGallery/Gallery/edit.html.twig */
class __TwigTemplate_59cb71bfbd9d84e33a00b8dae20047487eb5395fc83e9e97beafe0a6cf4596c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "@PointWebGallery/Gallery/edit.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_251883c0ab8b2d79f19aa370fbebb4337e32ac094dbb95e6533667e7db95041c' => array($this, 'block___internal_251883c0ab8b2d79f19aa370fbebb4337e32ac094dbb95e6533667e7db95041c'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8475c2533b9541e48c1c66a686f3d5d79382c80547befa27c6679fed92e72e5e = $this->env->getExtension("native_profiler");
        $__internal_8475c2533b9541e48c1c66a686f3d5d79382c80547befa27c6679fed92e72e5e->enter($__internal_8475c2533b9541e48c1c66a686f3d5d79382c80547befa27c6679fed92e72e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebGallery/Gallery/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8475c2533b9541e48c1c66a686f3d5d79382c80547befa27c6679fed92e72e5e->leave($__internal_8475c2533b9541e48c1c66a686f3d5d79382c80547befa27c6679fed92e72e5e_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_1c23384f49c31d39602f23af71f9b5b4129b57a6427858e342ea1af35bcd63c7 = $this->env->getExtension("native_profiler");
        $__internal_1c23384f49c31d39602f23af71f9b5b4129b57a6427858e342ea1af35bcd63c7->enter($__internal_1c23384f49c31d39602f23af71f9b5b4129b57a6427858e342ea1af35bcd63c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Modification de la gallerie</h1>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>

        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"col-lg-12 docTitle\">
            Gestion des images/documents
        </div>
        <div id=\"dropZoneFile\" class=\"col-lg-2\">
            <iframe src=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\"></iframe>
            <div class=\"fichierInfos\">
                <p>Déplacez vos fichiers<br>
                    ou cliquez dans la zone</p>
            </div>
        </div>
        <div class=\"col-lg-10\">
            <ul class=\"files\" data-prototype=\"";
        // line 50
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_251883c0ab8b2d79f19aa370fbebb4337e32ac094dbb95e6533667e7db95041c", $context, $blocks));
        echo "\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 52
            echo "                    <li class=\"formFile col-sm-3\">
                        ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'errors');
            echo "
                        ";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'widget');
            echo "
                        <div style=\"clear:both;width: 100%;height: 80px;background: url('";
            // line 55
            if ($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            }
            echo "') no-repeat center #e1e1e8;background-size: contain;\"></div>
                        ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'errors');
            echo "
                        ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'widget');
            echo "
                        ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'errors');
            echo "
                        ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'widget', array("attr" => array("value" => "0")));
            echo "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </ul>
        </div>
    </fieldset>
    ";
        // line 65
        $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()), "setRendered", array());
        // line 66
        echo "

    <div class=\"row submitBt\">
        <div style=\"float: left\">
            <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("admin_gallery");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
        </div>
        ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    </div>
";
        
        $__internal_1c23384f49c31d39602f23af71f9b5b4129b57a6427858e342ea1af35bcd63c7->leave($__internal_1c23384f49c31d39602f23af71f9b5b4129b57a6427858e342ea1af35bcd63c7_prof);

    }

    // line 50
    public function block___internal_251883c0ab8b2d79f19aa370fbebb4337e32ac094dbb95e6533667e7db95041c($context, array $blocks = array())
    {
        $__internal_0d00c41c7d921f1ed7d632b2900add382f9de930b37c7b03aab51644b74f34af = $this->env->getExtension("native_profiler");
        $__internal_0d00c41c7d921f1ed7d632b2900add382f9de930b37c7b03aab51644b74f34af->enter($__internal_0d00c41c7d921f1ed7d632b2900add382f9de930b37c7b03aab51644b74f34af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_251883c0ab8b2d79f19aa370fbebb4337e32ac094dbb95e6533667e7db95041c"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "@PointWebGallery/Gallery/edit.html.twig", 50)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_0d00c41c7d921f1ed7d632b2900add382f9de930b37c7b03aab51644b74f34af->leave($__internal_0d00c41c7d921f1ed7d632b2900add382f9de930b37c7b03aab51644b74f34af_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebGallery/Gallery/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 50,  199 => 73,  195 => 72,  190 => 70,  184 => 66,  182 => 65,  177 => 62,  168 => 59,  164 => 58,  160 => 57,  156 => 56,  150 => 55,  146 => 54,  142 => 53,  139 => 52,  135 => 51,  131 => 50,  121 => 43,  110 => 35,  106 => 34,  101 => 32,  94 => 28,  90 => 27,  85 => 25,  77 => 20,  73 => 19,  68 => 17,  60 => 12,  56 => 11,  51 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Modification de la gallerie</h1>*/
/*     {{ form_start(edit_form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.title) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.title) }}*/
/*                 {{ form_widget(edit_form.title) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.description) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.description) }}*/
/*                 {{ form_widget(edit_form.description, { 'attr': {'class': 'ckeditor'} }) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.online) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.online) }}*/
/*                 {{ form_widget(edit_form.online) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.position) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.position) }}*/
/*                 {{ form_widget(edit_form.position) }}*/
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
/*             <ul class="files" data-prototype="{% filter escape %}{% include 'PointWebAdminBundle:Form:prototype.html.twig' with {'form': edit_form.pictures.vars.prototype} %}{% endfilter %}">*/
/*                 {% for picture in edit_form.pictures %}*/
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
/*     {% do edit_form.pictures.setRendered %}*/
/* */
/* */
/*     <div class="row submitBt">*/
/*         <div style="float: left">*/
/*             <a href="{{ path('admin_gallery') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*         </div>*/
/*         {{ form_end(edit_form) }}*/
/*         {{ form(delete_form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
