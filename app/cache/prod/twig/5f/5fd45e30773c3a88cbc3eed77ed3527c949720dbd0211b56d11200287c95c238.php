<?php

/* PointWebPartnerBundle:Partner:edit.html.twig */
class __TwigTemplate_76f39bcce5d02771a942b6a63dc558208ec695bcf68d33657cd24d3db28b33c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebPartnerBundle:Partner:edit.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_c382c8eb96d45638954260cf08d4157ce62b1fedd81f96f52aa8c671ddef8f02' => array($this, 'block___internal_c382c8eb96d45638954260cf08d4157ce62b1fedd81f96f52aa8c671ddef8f02'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_423083b579cdf02f5ec609361c3e276298a2158f19963aee0aff57928b4e8b89 = $this->env->getExtension("native_profiler");
        $__internal_423083b579cdf02f5ec609361c3e276298a2158f19963aee0aff57928b4e8b89->enter($__internal_423083b579cdf02f5ec609361c3e276298a2158f19963aee0aff57928b4e8b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:Partner:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_423083b579cdf02f5ec609361c3e276298a2158f19963aee0aff57928b4e8b89->leave($__internal_423083b579cdf02f5ec609361c3e276298a2158f19963aee0aff57928b4e8b89_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_29769694ae4b46edc4ae435edb32f90ddcb1b93f137a30a7b5b8a5092327fbbc = $this->env->getExtension("native_profiler");
        $__internal_29769694ae4b46edc4ae435edb32f90ddcb1b93f137a30a7b5b8a5092327fbbc->enter($__internal_29769694ae4b46edc4ae435edb32f90ddcb1b93f137a30a7b5b8a5092327fbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Modification du partenaire</h1>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>

        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "partner_category", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "partner_category", array()), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "partner_category", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'widget');
        echo "
            ";
        // line 27
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array())) {
            // line 28
            echo "                <!---->
                <a class=\"fancybox\" href=\"../../../";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "AssetPath", array()), "html", null, true);
            echo "\"><img src=\"../../../";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "AssetPath", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "name", array()), "html", null, true);
            echo "\" style=\"width:150px;float: left\"></a>
            ";
        } else {
            // line 31
            echo "                ...
            ";
        }
        // line 33
        echo "            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "content", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "content", array()), 'errors');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "content", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "link", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "link", array()), 'errors');
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "link", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'errors');
        echo "
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startDate", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startDate", array()), 'errors');
        echo "

                <div class='input-group date' class='date_picker'>
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startDate", array()), 'widget');
        echo "
                    <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "endDate", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "endDate", array()), 'errors');
        echo "
                <div class='input-group date' class='date_picker'>
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "endDate", array()), 'widget');
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
        // line 87
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\"></iframe>
            <div class=\"fichierInfos\">
                <p>Déplacez vos fichiers<br>
                ou cliquez dans la zone</p>
            </div>
        </div>
        <div class=\"col-lg-10\">
            <ul class=\"files\" data-prototype=\"";
        // line 94
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_c382c8eb96d45638954260cf08d4157ce62b1fedd81f96f52aa8c671ddef8f02", $context, $blocks));
        echo "\">
                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 96
            echo "                    <li class=\"formFile col-sm-3\">
                        ";
            // line 97
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'errors');
            echo "
                        ";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'widget');
            echo "
                        <div style=\"clear:both;width: 100%;height: 80px;background: url('";
            // line 99
            if ($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            }
            echo "') no-repeat center #e1e1e8;background-size: contain;\"></div>
                        ";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'errors');
            echo "
                        ";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'widget');
            echo "
                        ";
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'errors');
            echo "
                        ";
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'widget', array("attr" => array("value" => "0")));
            echo "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "            </ul>
        </div>
    </fieldset>
    ";
        // line 109
        $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()), "setRendered", array());
        // line 110
        echo "

    <div class=\"col-lg-12 submitBt\">
        <div style=\"float: left\">
            <a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("admin_partner");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
        </div>
        ";
        // line 116
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        ";
        // line 117
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    </div>
";
        
        $__internal_29769694ae4b46edc4ae435edb32f90ddcb1b93f137a30a7b5b8a5092327fbbc->leave($__internal_29769694ae4b46edc4ae435edb32f90ddcb1b93f137a30a7b5b8a5092327fbbc_prof);

    }

    // line 94
    public function block___internal_c382c8eb96d45638954260cf08d4157ce62b1fedd81f96f52aa8c671ddef8f02($context, array $blocks = array())
    {
        $__internal_3079a410fad96de0ed07110d8c3c1bb614d75299fb513c735be7e017490ee305 = $this->env->getExtension("native_profiler");
        $__internal_3079a410fad96de0ed07110d8c3c1bb614d75299fb513c735be7e017490ee305->enter($__internal_3079a410fad96de0ed07110d8c3c1bb614d75299fb513c735be7e017490ee305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_c382c8eb96d45638954260cf08d4157ce62b1fedd81f96f52aa8c671ddef8f02"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebPartnerBundle:Partner:edit.html.twig", 94)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_3079a410fad96de0ed07110d8c3c1bb614d75299fb513c735be7e017490ee305->leave($__internal_3079a410fad96de0ed07110d8c3c1bb614d75299fb513c735be7e017490ee305_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:Partner:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 94,  293 => 117,  289 => 116,  284 => 114,  278 => 110,  276 => 109,  271 => 106,  262 => 103,  258 => 102,  254 => 101,  250 => 100,  244 => 99,  240 => 98,  236 => 97,  233 => 96,  229 => 95,  225 => 94,  215 => 87,  200 => 75,  195 => 73,  190 => 71,  179 => 63,  173 => 60,  168 => 58,  161 => 54,  157 => 53,  152 => 51,  144 => 46,  140 => 45,  135 => 43,  128 => 39,  124 => 38,  119 => 36,  114 => 33,  110 => 31,  101 => 29,  98 => 28,  96 => 27,  92 => 26,  88 => 25,  83 => 23,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Modification du partenaire</h1>*/
/*     {{ form_start(edit_form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.name) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.name) }}*/
/*                 {{ form_widget(edit_form.name) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.partner_category) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.partner_category) }}*/
/*                 {{ form_widget(edit_form.partner_category) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.image) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.image) }}*/
/*                 {{ form_widget(edit_form.image) }}*/
/*             {% if entity.image %}*/
/*                 <!---->*/
/*                 <a class="fancybox" href="../../../{{ entity.image.AssetPath }}"><img src="../../../{{ entity.image.AssetPath }}" alt="{{ entity.image.name }}" style="width:150px;float: left"></a>*/
/*             {% else %}*/
/*                 ...*/
/*             {% endif %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.content) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.content) }}*/
/*                 {{ form_widget(edit_form.content, { 'attr': {'class': 'ckeditor'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.link) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.link) }}*/
/*                 {{ form_widget(edit_form.link) }}*/
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
/*             {{ form_label(edit_form.startDate) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.startDate) }}*/
/* */
/*                 <div class='input-group date' class='date_picker'>*/
/*                     {{ form_widget(edit_form.startDate) }}*/
/*                     <span class="input-group-addon">*/
/*                         <span class="glyphicon glyphicon-calendar"></span>*/
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.endDate) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.endDate) }}*/
/*                 <div class='input-group date' class='date_picker'>*/
/*                     {{ form_widget(edit_form.endDate) }}*/
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
/*                 ou cliquez dans la zone</p>*/
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
/*     <div class="col-lg-12 submitBt">*/
/*         <div style="float: left">*/
/*             <a href="{{ path('admin_partner') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*         </div>*/
/*         {{ form_end(edit_form) }}*/
/*         {{ form(delete_form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
