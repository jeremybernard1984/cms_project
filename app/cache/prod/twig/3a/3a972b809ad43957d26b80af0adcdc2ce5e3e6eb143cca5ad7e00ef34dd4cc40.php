<?php

/* PointWebPageBundle:Page:new.html.twig */
class __TwigTemplate_692e2ef7e6c8cc6b0fc892e97f9bfedeceaed6560b84e4263bcd8c47d5c6e5d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebPageBundle:Page:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_2aae71c67278ee0a1cedd4e7b50f157f518230d297d744dc4e5ad6a607c6da3e' => array($this, 'block___internal_2aae71c67278ee0a1cedd4e7b50f157f518230d297d744dc4e5ad6a607c6da3e'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1fe2740163201dc032c31f2bb60eb2a7332127b9660aecc591640516a17cfe8 = $this->env->getExtension("native_profiler");
        $__internal_c1fe2740163201dc032c31f2bb60eb2a7332127b9660aecc591640516a17cfe8->enter($__internal_c1fe2740163201dc032c31f2bb60eb2a7332127b9660aecc591640516a17cfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPageBundle:Page:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1fe2740163201dc032c31f2bb60eb2a7332127b9660aecc591640516a17cfe8->leave($__internal_c1fe2740163201dc032c31f2bb60eb2a7332127b9660aecc591640516a17cfe8_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_9b73ff88f153f34d8792a8d5eeb04a4ce0842ac458c715bf05d1ef71e81e48d7 = $this->env->getExtension("native_profiler");
        $__internal_9b73ff88f153f34d8792a8d5eeb04a4ce0842ac458c715bf05d1ef71e81e48d7->enter($__internal_9b73ff88f153f34d8792a8d5eeb04a4ce0842ac458c715bf05d1ef71e81e48d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Modification de la page</h1>
    ";
        // line 5
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
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'errors');
        echo "

                <div class='input-group date' class='date_picker'>
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'widget');
        echo "
                    <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'errors');
        echo "
                <div class='input-group date' class='date_picker'>
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'widget');
        echo "
                    <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>

                    </span>
                </div>
            </div>
        </div>
        <div class=\"col-lg-12 docTitle\">
            Gestion des images/documents
        </div>
        <div id=\"dropZoneFile\" class=\"col-lg-2\">
            <iframe src=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\"></iframe>
            <div class=\"fichierInfos\">
                <p>Déplacez vos fichiers<br>
                    ou cliquez dans la zone</p>
            </div>
        </div>
        <div class=\"col-lg-10\">
            <ul class=\"files\" data-prototype=\"";
        // line 74
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_2aae71c67278ee0a1cedd4e7b50f157f518230d297d744dc4e5ad6a607c6da3e", $context, $blocks));
        echo "\">
                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 76
            echo "                    <li class=\"formFile col-sm-3\">
                        ";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'errors');
            echo "
                        ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'widget');
            echo "
                        <div style=\"clear:both;width: 100%;height: 80px;background: url('";
            // line 79
            if ($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            }
            echo "') no-repeat center #e1e1e8;background-size: contain;\"></div>
                        ";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'errors');
            echo "
                        ";
            // line 81
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'widget');
            echo "
                        ";
            // line 82
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'errors');
            echo "
                        ";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'widget', array("attr" => array("value" => "0")));
            echo "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </ul>
        </div>
    </fieldset>
    ";
        // line 89
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 90
        echo "

    <div class=\"col-lg-12 submitBt\">
        <div style=\"float: left\">
            <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("admin_page");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
        </div>
        ";
        // line 96
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_9b73ff88f153f34d8792a8d5eeb04a4ce0842ac458c715bf05d1ef71e81e48d7->leave($__internal_9b73ff88f153f34d8792a8d5eeb04a4ce0842ac458c715bf05d1ef71e81e48d7_prof);

    }

    // line 74
    public function block___internal_2aae71c67278ee0a1cedd4e7b50f157f518230d297d744dc4e5ad6a607c6da3e($context, array $blocks = array())
    {
        $__internal_a27d7096339d0ee74e163ef385ce0d7e71d9748483b6d0b9535d323c119f1d3c = $this->env->getExtension("native_profiler");
        $__internal_a27d7096339d0ee74e163ef385ce0d7e71d9748483b6d0b9535d323c119f1d3c->enter($__internal_a27d7096339d0ee74e163ef385ce0d7e71d9748483b6d0b9535d323c119f1d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_2aae71c67278ee0a1cedd4e7b50f157f518230d297d744dc4e5ad6a607c6da3e"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebPageBundle:Page:new.html.twig", 74)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_a27d7096339d0ee74e163ef385ce0d7e71d9748483b6d0b9535d323c119f1d3c->leave($__internal_a27d7096339d0ee74e163ef385ce0d7e71d9748483b6d0b9535d323c119f1d3c_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPageBundle:Page:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 74,  237 => 96,  232 => 94,  226 => 90,  224 => 89,  219 => 86,  210 => 83,  206 => 82,  202 => 81,  198 => 80,  192 => 79,  188 => 78,  184 => 77,  181 => 76,  177 => 75,  173 => 74,  163 => 67,  148 => 55,  143 => 53,  138 => 51,  127 => 43,  121 => 40,  116 => 38,  109 => 34,  105 => 33,  100 => 31,  93 => 27,  89 => 26,  84 => 24,  77 => 20,  73 => 19,  68 => 17,  60 => 12,  56 => 11,  51 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Modification de la page</h1>*/
/*     {{ form_start(form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.title) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.title) }}*/
/*                 {{ form_widget(form.title) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.content) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.content) }}*/
/*                 {{ form_widget(form.content, { 'attr': {'class': 'ckeditor'} }) }}*/
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
/*             {{ form_label(form.online) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.online) }}*/
/*                 {{ form_widget(form.online) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.startDate) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.startDate) }}*/
/* */
/*                 <div class='input-group date' class='date_picker'>*/
/*                     {{ form_widget(form.startDate) }}*/
/*                     <span class="input-group-addon">*/
/*                         <span class="glyphicon glyphicon-calendar"></span>*/
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.endDate) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.endDate) }}*/
/*                 <div class='input-group date' class='date_picker'>*/
/*                     {{ form_widget(form.endDate) }}*/
/*                     <span class="input-group-addon">*/
/*                         <span class="glyphicon glyphicon-calendar"></span>*/
/* */
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
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
/*             <a href="{{ path('admin_page') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
