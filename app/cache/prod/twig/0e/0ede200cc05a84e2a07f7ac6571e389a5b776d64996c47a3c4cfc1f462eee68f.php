<?php

/* PointWebPartnerBundle:Partner:new.html.twig */
class __TwigTemplate_029160ecb0699732e4d03dd7ec4be68bc6b65b218d53d03276ee5570b3055692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebPartnerBundle:Partner:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_dbc63f2e93dbc492f66530c77a0cedb9487ef484cff5b807427582e2082229d0' => array($this, 'block___internal_dbc63f2e93dbc492f66530c77a0cedb9487ef484cff5b807427582e2082229d0'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_886de6daa52e51fe761055ced1bf55a81323e0172f596f752b3d539d64179569 = $this->env->getExtension("native_profiler");
        $__internal_886de6daa52e51fe761055ced1bf55a81323e0172f596f752b3d539d64179569->enter($__internal_886de6daa52e51fe761055ced1bf55a81323e0172f596f752b3d539d64179569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:Partner:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_886de6daa52e51fe761055ced1bf55a81323e0172f596f752b3d539d64179569->leave($__internal_886de6daa52e51fe761055ced1bf55a81323e0172f596f752b3d539d64179569_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_a81d9856ac6aee3bbd0ec45d76715e3e6f863fa2a0f53fe4899b6d74149862f0 = $this->env->getExtension("native_profiler");
        $__internal_a81d9856ac6aee3bbd0ec45d76715e3e6f863fa2a0f53fe4899b6d74149862f0->enter($__internal_a81d9856ac6aee3bbd0ec45d76715e3e6f863fa2a0f53fe4899b6d74149862f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Modification du partenaire</h1>
    ";
        // line 5
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "partner_category", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "partner_category", array()), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "partner_category", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'errors');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'errors');
        echo "

                <div class='input-group date' class='date_picker'>
                    ";
        // line 57
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
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'errors');
        echo "
                <div class='input-group date' class='date_picker'>
                    ";
        // line 69
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
        // line 81
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\"></iframe>
            <div class=\"fichierInfos\">
                <p>Déplacez vos fichiers<br>
                    ou cliquez dans la zone</p>
            </div>
        </div>
        <div class=\"col-lg-10\">
            <ul class=\"files\" data-prototype=\"";
        // line 88
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_dbc63f2e93dbc492f66530c77a0cedb9487ef484cff5b807427582e2082229d0", $context, $blocks));
        echo "\">
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 90
            echo "                    <li class=\"formFile col-sm-3\">
                        ";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'errors');
            echo "
                        ";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'widget');
            echo "
                        <div style=\"clear:both;width: 100%;height: 80px;background: url('";
            // line 93
            if ($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            }
            echo "') no-repeat center #e1e1e8;background-size: contain;\"></div>
                        ";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'errors');
            echo "
                        ";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'widget');
            echo "
                        ";
            // line 96
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'errors');
            echo "
                        ";
            // line 97
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'widget', array("attr" => array("value" => "0")));
            echo "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "            </ul>
        </div>
    </fieldset>
    ";
        // line 103
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 104
        echo "

    <div class=\"col-lg-12 submitBt\">
        <div style=\"float: left\">
            <a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("admin_partner");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
        </div>
        ";
        // line 110
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_a81d9856ac6aee3bbd0ec45d76715e3e6f863fa2a0f53fe4899b6d74149862f0->leave($__internal_a81d9856ac6aee3bbd0ec45d76715e3e6f863fa2a0f53fe4899b6d74149862f0_prof);

    }

    // line 88
    public function block___internal_dbc63f2e93dbc492f66530c77a0cedb9487ef484cff5b807427582e2082229d0($context, array $blocks = array())
    {
        $__internal_c9e96acf65e7eb0d7ffab93825cf5edc1a4f771dafccde42f69508d99c27dbdd = $this->env->getExtension("native_profiler");
        $__internal_c9e96acf65e7eb0d7ffab93825cf5edc1a4f771dafccde42f69508d99c27dbdd->enter($__internal_c9e96acf65e7eb0d7ffab93825cf5edc1a4f771dafccde42f69508d99c27dbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_dbc63f2e93dbc492f66530c77a0cedb9487ef484cff5b807427582e2082229d0"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebPartnerBundle:Partner:new.html.twig", 88)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_c9e96acf65e7eb0d7ffab93825cf5edc1a4f771dafccde42f69508d99c27dbdd->leave($__internal_c9e96acf65e7eb0d7ffab93825cf5edc1a4f771dafccde42f69508d99c27dbdd_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:Partner:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 88,  269 => 110,  264 => 108,  258 => 104,  256 => 103,  251 => 100,  242 => 97,  238 => 96,  234 => 95,  230 => 94,  224 => 93,  220 => 92,  216 => 91,  213 => 90,  209 => 89,  205 => 88,  195 => 81,  180 => 69,  175 => 67,  170 => 65,  159 => 57,  153 => 54,  148 => 52,  141 => 48,  137 => 47,  132 => 45,  124 => 40,  120 => 39,  115 => 37,  108 => 33,  104 => 32,  99 => 30,  92 => 26,  88 => 25,  83 => 23,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Modification du partenaire</h1>*/
/*     {{ form_start(form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.name) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.name) }}*/
/*                 {{ form_widget(form.name) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.partner_category) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.partner_category) }}*/
/*                 {{ form_widget(form.partner_category) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.image) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.image) }}*/
/*                 {{ form_widget(form.image) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.content) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.content) }}*/
/*                 {{ form_widget(form.content, { 'attr': {'class': 'ckeditor'} }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.link) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.link) }}*/
/*                 {{ form_widget(form.link) }}*/
/*             </div>*/
/*         </div>*/
/* */
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
/*             <a href="{{ path('admin_partner') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
