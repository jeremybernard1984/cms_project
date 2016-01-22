<?php

/* PointWebAdminBundle:Menu:edit.html.twig */
class __TwigTemplate_822a0ab0f85171a1eb9746f8fa09f2266767f4814c550583b13293a7e39f564f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Menu:edit.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_2815e992feb2d6b7b06027046776b4a5964807f2f5a786f7ddb7b3034ffd5076' => array($this, 'block___internal_2815e992feb2d6b7b06027046776b4a5964807f2f5a786f7ddb7b3034ffd5076'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6a715bdc46e84317183780411f1c951bc57e84863ff96904bd0e4eadf4d01a7 = $this->env->getExtension("native_profiler");
        $__internal_a6a715bdc46e84317183780411f1c951bc57e84863ff96904bd0e4eadf4d01a7->enter($__internal_a6a715bdc46e84317183780411f1c951bc57e84863ff96904bd0e4eadf4d01a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Menu:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6a715bdc46e84317183780411f1c951bc57e84863ff96904bd0e4eadf4d01a7->leave($__internal_a6a715bdc46e84317183780411f1c951bc57e84863ff96904bd0e4eadf4d01a7_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_0029576f03359725fb611b8753e5a50ab9166215e7bda94bce1e064e532e10a8 = $this->env->getExtension("native_profiler");
        $__internal_0029576f03359725fb611b8753e5a50ab9166215e7bda94bce1e064e532e10a8->enter($__internal_0029576f03359725fb611b8753e5a50ab9166215e7bda94bce1e064e532e10a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Modification du menu</h1>

    ";
        // line 6
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
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "path", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "path", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "path", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "parent", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "parent", array()), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "parent", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-lg-2 control-label\">
                Déplacez vos fichiers ou cliquez dans la zone :
            </label>
            <div id=\"dropZoneFile\" class=\"col-lg-10\">
                <iframe src=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\">
                </iframe>
            </div>
        </div>
        <ul class=\"files\"
            data-prototype=\"";
        // line 53
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_2815e992feb2d6b7b06027046776b4a5964807f2f5a786f7ddb7b3034ffd5076", $context, $blocks));
        echo "\">
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 55
            echo "                <li class=\"formFile\">
                    <div class=\"form-group\">
                        ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'label');
            echo "
                        <div class=\"col-lg-10\">
                            ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'errors');
            echo "
                            ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'widget');
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'label');
            echo "
                        <div class=\"col-lg-10\">
                            ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'errors');
            echo "
                            ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'widget');
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'label');
            echo "
                        <div class=\"col-lg-10\">
                            ";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'errors');
            echo "
                            ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'widget');
            echo "
                        </div>
                    </div>
                    ";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "tmpPath", array()), 'widget');
            echo "
                    <div class=\"form-group\">
                        <label class=\"col-lg-2 control-label\">
                            Fichier :
                        </label>
                        <div class=\"col-lg-10\">
                            <img class=\"formFilePicture\"
                                 src=\"";
            // line 84
            if ($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            }
            echo "\"/>
                        </div>
                    </div>

                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        </ul>


    </fieldset>
    ";
        // line 94
        $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()), "setRendered", array());
        // line 95
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("admin_menu");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
    ";
        // line 98
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_0029576f03359725fb611b8753e5a50ab9166215e7bda94bce1e064e532e10a8->leave($__internal_0029576f03359725fb611b8753e5a50ab9166215e7bda94bce1e064e532e10a8_prof);

    }

    // line 53
    public function block___internal_2815e992feb2d6b7b06027046776b4a5964807f2f5a786f7ddb7b3034ffd5076($context, array $blocks = array())
    {
        $__internal_2682143f90276f10fac05fe0109934a81542ececec222c33ca3204b976d48c84 = $this->env->getExtension("native_profiler");
        $__internal_2682143f90276f10fac05fe0109934a81542ececec222c33ca3204b976d48c84->enter($__internal_2682143f90276f10fac05fe0109934a81542ececec222c33ca3204b976d48c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_2815e992feb2d6b7b06027046776b4a5964807f2f5a786f7ddb7b3034ffd5076"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebAdminBundle:Menu:edit.html.twig", 53)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_2682143f90276f10fac05fe0109934a81542ececec222c33ca3204b976d48c84->leave($__internal_2682143f90276f10fac05fe0109934a81542ececec222c33ca3204b976d48c84_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Menu:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 53,  244 => 98,  240 => 97,  234 => 95,  232 => 94,  226 => 90,  212 => 84,  202 => 77,  196 => 74,  192 => 73,  187 => 71,  180 => 67,  176 => 66,  171 => 64,  164 => 60,  160 => 59,  155 => 57,  151 => 55,  147 => 54,  143 => 53,  135 => 48,  124 => 40,  120 => 39,  115 => 37,  108 => 33,  104 => 32,  99 => 30,  92 => 26,  88 => 25,  83 => 23,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Modification du menu</h1>*/
/* */
/*     {{ form_start(edit_form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.title) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.title) }}*/
/*                 {{ form_widget(edit_form.title) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.description) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.description) }}*/
/*                 {{ form_widget(edit_form.description) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.path) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.path) }}*/
/*                 {{ form_widget(edit_form.path) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.position) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.position) }}*/
/*                 {{ form_widget(edit_form.position) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.parent) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.parent) }}*/
/*                 {{ form_widget(edit_form.parent) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-lg-2 control-label">*/
/*                 Déplacez vos fichiers ou cliquez dans la zone :*/
/*             </label>*/
/*             <div id="dropZoneFile" class="col-lg-10">*/
/*                 <iframe src="{{ path('point_web_admin_update') }}">*/
/*                 </iframe>*/
/*             </div>*/
/*         </div>*/
/*         <ul class="files"*/
/*             data-prototype="{% filter escape %}{% include 'PointWebAdminBundle:Form:prototype.html.twig' with {'form': edit_form.pictures.vars.prototype} %}{% endfilter %}">*/
/*             {% for picture in edit_form.pictures %}*/
/*                 <li class="formFile">*/
/*                     <div class="form-group">*/
/*                         {{ form_label(picture.name) }}*/
/*                         <div class="col-lg-10">*/
/*                             {{ form_errors(picture.name) }}*/
/*                             {{ form_widget(picture.name) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(picture.description) }}*/
/*                         <div class="col-lg-10">*/
/*                             {{ form_errors(picture.description) }}*/
/*                             {{ form_widget(picture.description) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(picture.position) }}*/
/*                         <div class="col-lg-10">*/
/*                             {{ form_errors(picture.position) }}*/
/*                             {{ form_widget(picture.position) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     {{ form_widget(picture.tmpPath) }}*/
/*                     <div class="form-group">*/
/*                         <label class="col-lg-2 control-label">*/
/*                             Fichier :*/
/*                         </label>*/
/*                         <div class="col-lg-10">*/
/*                             <img class="formFilePicture"*/
/*                                  src="{% if picture.vars.value %}{{ asset(picture.vars.value.getWebPath(base)) }}{% endif %}"/>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/* */
/* */
/*     </fieldset>*/
/*     {% do edit_form.pictures.setRendered %}*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <a href="{{ path('admin_menu') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*     {{ form(delete_form) }}*/
/* {% endblock %}*/
/* */
