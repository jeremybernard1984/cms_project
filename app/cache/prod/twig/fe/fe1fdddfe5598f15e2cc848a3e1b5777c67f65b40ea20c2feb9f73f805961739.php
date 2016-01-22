<?php

/* PointWebGuestbookBundle:Default:index.html.twig */
class __TwigTemplate_ca07ee0b84187e648fba6cf5100d68e4ec3ee1eb6f8c1cf48bd978099e943f4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebGuestbookBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15e377f0296b7a8e659ece959e211091c529f49124cfd18f448e32f0aa59ff32 = $this->env->getExtension("native_profiler");
        $__internal_15e377f0296b7a8e659ece959e211091c529f49124cfd18f448e32f0aa59ff32->enter($__internal_15e377f0296b7a8e659ece959e211091c529f49124cfd18f448e32f0aa59ff32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGuestbookBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15e377f0296b7a8e659ece959e211091c529f49124cfd18f448e32f0aa59ff32->leave($__internal_15e377f0296b7a8e659ece959e211091c529f49124cfd18f448e32f0aa59ff32_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_eee50017dd1cec118d65e42ef5a98434df7e48be9bedebb9c25a535dc642cd8a = $this->env->getExtension("native_profiler");
        $__internal_eee50017dd1cec118d65e42ef5a98434df7e48be9bedebb9c25a535dc642cd8a->enter($__internal_eee50017dd1cec118d65e42ef5a98434df7e48be9bedebb9c25a535dc642cd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h1>Listing des commentaires</h1>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "        <div class=\"flash-notice\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    <div class=\"row\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 12
            echo "            ";
            if ((($this->getAttribute($context["loop"], "index0", array()) % 2) == 0)) {
                // line 13
                echo "            <div class=\"row\">
            ";
            }
            // line 15
            echo "                <div class=\"col-sm-1 text-right\" style=\"padding: 0\">
                    <div class=\"round round-lg hollow color";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "notation", array()), "html", null, true);
            echo "\">
                       <span class=\"glyphicon glyphicon-star\"></span><strong> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "notation", array()), "html", null, true);
            echo "</strong><sub>/5</sub>
                    </div>
                </div><!-- /col-sm-1 -->
                <div class=\"col-sm-5\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstname", array()), "html", null, true);
            echo "</strong>
                            <span class=\"text-muted\">
                                ";
            // line 25
            if ($this->getAttribute($context["entity"], "createDate", array())) {
                echo "posté le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createDate", array()), "d-m-Y"), "html", null, true);
            }
            // line 26
            echo "                            </span>
                        </div>
                        <div class=\"panel-body\">
                            ";
            // line 29
            echo $this->getAttribute($context["entity"], "comment", array());
            echo "
                        </div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-5 -->
            ";
            // line 33
            if (((($this->getAttribute($context["loop"], "index0", array()) % 2) == 1) || $this->getAttribute($context["loop"], "last", array()))) {
                // line 34
                echo "            </div>
            ";
            }
            // line 36
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    </div>
    ";
        // line 39
        $this->loadTemplate("PointWebAppBundle::_pager_classic.html.twig", "PointWebGuestbookBundle:Default:index.html.twig", 39)->display($context);
        // line 40
        echo "
    <!-- Formulaire d'envoi de commentaires -->
    <h1>Création d'un commentaire</h1>

    ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <fieldset>
        <div class=\"form-group\">
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'errors');
        echo "
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notation", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notation", array()), 'errors');
        echo "
                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notation", array()), 'widget');
        echo "
            </div>
        </div>

    </fieldset>
    ";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_eee50017dd1cec118d65e42ef5a98434df7e48be9bedebb9c25a535dc642cd8a->leave($__internal_eee50017dd1cec118d65e42ef5a98434df7e48be9bedebb9c25a535dc642cd8a_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGuestbookBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 83,  238 => 78,  234 => 77,  229 => 75,  222 => 71,  218 => 70,  213 => 68,  206 => 64,  202 => 63,  197 => 61,  190 => 57,  186 => 56,  181 => 54,  174 => 50,  170 => 49,  165 => 47,  159 => 44,  153 => 40,  151 => 39,  147 => 37,  133 => 36,  129 => 34,  127 => 33,  120 => 29,  115 => 26,  110 => 25,  103 => 23,  94 => 17,  90 => 16,  87 => 15,  83 => 13,  80 => 12,  63 => 11,  59 => 9,  50 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/*     <h1>Listing des commentaires</h1>*/
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class="flash-notice">*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     <div class="row">*/
/*         {% for entity in entities %}*/
/*             {% if loop.index0 % 2 == 0 %}*/
/*             <div class="row">*/
/*             {% endif %}*/
/*                 <div class="col-sm-1 text-right" style="padding: 0">*/
/*                     <div class="round round-lg hollow color{{ entity.notation }}">*/
/*                        <span class="glyphicon glyphicon-star"></span><strong> {{ entity.notation }}</strong><sub>/5</sub>*/
/*                     </div>*/
/*                 </div><!-- /col-sm-1 -->*/
/*                 <div class="col-sm-5">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <strong>{{ entity.title }} {{ entity.firstname }}</strong>*/
/*                             <span class="text-muted">*/
/*                                 {% if entity.createDate %}posté le {{ entity.createDate|date('d-m-Y') }}{% endif %}*/
/*                             </span>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             {{ entity.comment|raw }}*/
/*                         </div><!-- /panel-body -->*/
/*                     </div><!-- /panel panel-default -->*/
/*                 </div><!-- /col-sm-5 -->*/
/*             {% if loop.index0 % 2 == 1 or loop.last %}*/
/*             </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*     </div>*/
/*     {% include 'PointWebAppBundle::_pager_classic.html.twig' %}*/
/* */
/*     <!-- Formulaire d'envoi de commentaires -->*/
/*     <h1>Création d'un commentaire</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*     <fieldset>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.title) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.title) }}*/
/*                 {{ form_widget(form.title) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.firstname) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.firstname) }}*/
/*                 {{ form_widget(form.firstname) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.email) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.email) }}*/
/*                 {{ form_widget(form.email) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.comment) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.comment) }}*/
/*                 {{ form_widget(form.comment) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.notation) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.notation) }}*/
/*                 {{ form_widget(form.notation) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </fieldset>*/
/*     {{ form_end(form) }}*/
/* */
/* */
/* {% endblock %}*/
/* */
