<?php

/* PointWebGedBundle:Folder:edit.html.twig */
class __TwigTemplate_70e02753f8b2e0406332c8e403fd3d1ea0a94b5d02f7f29307acea728ba4ddfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebGedBundle:Folder:edit.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_4aceacafbd9e2447b14eb15fa2e8b0cddbea0d7657d0333cc3f5cf2b3f3f47b3' => array($this, 'block___internal_4aceacafbd9e2447b14eb15fa2e8b0cddbea0d7657d0333cc3f5cf2b3f3f47b3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d32e3a1217a58f2fcc72c486c22e71f5a28f57209aae9637ebbdf9a5a1ffab5d = $this->env->getExtension("native_profiler");
        $__internal_d32e3a1217a58f2fcc72c486c22e71f5a28f57209aae9637ebbdf9a5a1ffab5d->enter($__internal_d32e3a1217a58f2fcc72c486c22e71f5a28f57209aae9637ebbdf9a5a1ffab5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGedBundle:Folder:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d32e3a1217a58f2fcc72c486c22e71f5a28f57209aae9637ebbdf9a5a1ffab5d->leave($__internal_d32e3a1217a58f2fcc72c486c22e71f5a28f57209aae9637ebbdf9a5a1ffab5d_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_c38850818b1e1e0f0e1a5ea956617263ded1c7c82309f0e0a767e115c1a82cc4 = $this->env->getExtension("native_profiler");
        $__internal_c38850818b1e1e0f0e1a5ea956617263ded1c7c82309f0e0a767e115c1a82cc4->enter($__internal_c38850818b1e1e0f0e1a5ea956617263ded1c7c82309f0e0a767e115c1a82cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Modification du dossier</h1>

    ";
        // line 6
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "users", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "users", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "users", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-lg-2 control-label\">
                Déplacez vos fichiers ou cliquez dans la zone :
            </label>
            <div id=\"dropZoneFile\" class=\"col-lg-10\">
                <iframe src=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\">
                </iframe>
            </div>
        </div>
        <ul class=\"files\"
            data-prototype=\"";
        // line 39
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_4aceacafbd9e2447b14eb15fa2e8b0cddbea0d7657d0333cc3f5cf2b3f3f47b3", $context, $blocks));
        echo "\">
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 41
            echo "                <li class=\"formFile\">
                    <div class=\"form-group\">
                        ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'label');
            echo "
                        <div class=\"col-lg-10\">
                            ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'errors');
            echo "
                            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'widget');
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'label');
            echo "
                        <div class=\"col-lg-10\">
                            ";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'errors');
            echo "
                            ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'widget');
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'label');
            echo "
                        <div class=\"col-lg-10\">
                            ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'errors');
            echo "
                            ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'widget');
            echo "
                        </div>
                    </div>
                    ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "tmpPath", array()), 'widget');
            echo "
                    <div class=\"form-group\">
                        <label class=\"col-lg-2 control-label\">
                            Fichier :
                        </label>
                        <div class=\"col-lg-10\">
                            <img class=\"formFilePicture\"
                                 src=\"";
            // line 70
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
        // line 76
        echo "        </ul>


    </fieldset>
    ";
        // line 80
        $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()), "setRendered", array());
        // line 81
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("admin_folder");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
    ";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_c38850818b1e1e0f0e1a5ea956617263ded1c7c82309f0e0a767e115c1a82cc4->leave($__internal_c38850818b1e1e0f0e1a5ea956617263ded1c7c82309f0e0a767e115c1a82cc4_prof);

    }

    // line 39
    public function block___internal_4aceacafbd9e2447b14eb15fa2e8b0cddbea0d7657d0333cc3f5cf2b3f3f47b3($context, array $blocks = array())
    {
        $__internal_ef37b6f761805290faab05a025ad55e818e0e36934f25ae505d9219eabb24d6a = $this->env->getExtension("native_profiler");
        $__internal_ef37b6f761805290faab05a025ad55e818e0e36934f25ae505d9219eabb24d6a->enter($__internal_ef37b6f761805290faab05a025ad55e818e0e36934f25ae505d9219eabb24d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_4aceacafbd9e2447b14eb15fa2e8b0cddbea0d7657d0333cc3f5cf2b3f3f47b3"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebGedBundle:Folder:edit.html.twig", 39)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_ef37b6f761805290faab05a025ad55e818e0e36934f25ae505d9219eabb24d6a->leave($__internal_ef37b6f761805290faab05a025ad55e818e0e36934f25ae505d9219eabb24d6a_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGedBundle:Folder:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 39,  212 => 84,  208 => 83,  202 => 81,  200 => 80,  194 => 76,  180 => 70,  170 => 63,  164 => 60,  160 => 59,  155 => 57,  148 => 53,  144 => 52,  139 => 50,  132 => 46,  128 => 45,  123 => 43,  119 => 41,  115 => 40,  111 => 39,  103 => 34,  92 => 26,  88 => 25,  83 => 23,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Modification du dossier</h1>*/
/* */
/*     {{ form_start(edit_form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.name) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.name) }}*/
/*                 {{ form_widget(edit_form.name) }}*/
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
/*             {{ form_label(edit_form.users) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.users) }}*/
/*                 {{ form_widget(edit_form.users) }}*/
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
/*     <a href="{{ path('admin_folder') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*     {{ form(delete_form) }}*/
/* {% endblock %}*/
