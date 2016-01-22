<?php

/* PointWebGuestbookBundle:Default:all_guestbook.html.twig */
class __TwigTemplate_3aa7d9590339bcd1f149e7bbd3072b1956950466dce654d8ac6f774d7d202501 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebGuestbookBundle:Default:all_guestbook.html.twig", 1);
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
        $__internal_366a331e5f25c2b3893c33d950c85cf44de37feb5de51ad4762b0d8b5867aa14 = $this->env->getExtension("native_profiler");
        $__internal_366a331e5f25c2b3893c33d950c85cf44de37feb5de51ad4762b0d8b5867aa14->enter($__internal_366a331e5f25c2b3893c33d950c85cf44de37feb5de51ad4762b0d8b5867aa14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGuestbookBundle:Default:all_guestbook.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_366a331e5f25c2b3893c33d950c85cf44de37feb5de51ad4762b0d8b5867aa14->leave($__internal_366a331e5f25c2b3893c33d950c85cf44de37feb5de51ad4762b0d8b5867aa14_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_673a1e277bf54487acc14545e8fdab61f83d4bdf7975ec2c975834b17c57d0d5 = $this->env->getExtension("native_profiler");
        $__internal_673a1e277bf54487acc14545e8fdab61f83d4bdf7975ec2c975834b17c57d0d5->enter($__internal_673a1e277bf54487acc14545e8fdab61f83d4bdf7975ec2c975834b17c57d0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_menu"]) ? $context["current_menu"] : $this->getContext($context, "current_menu")), "title", array()), "html", null, true);
        echo "
            </h1>
            ";
        // line 10
        echo "            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\">Accueil</a></li>
                <li class=\"active\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_menu"]) ? $context["current_menu"] : $this->getContext($context, "current_menu")), "title", array()), "html", null, true);
        echo "</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"flash-notice\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        ";
        // line 24
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
            // line 25
            echo "            ";
            if ((($this->getAttribute($context["loop"], "index0", array()) % 2) == 0)) {
                // line 26
                echo "            <div class=\"row\">
            ";
            }
            // line 28
            echo "                <div class=\"col-sm-1 text-right\" style=\"padding: 0\">
                    <div class=\"round round-lg hollow color";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "notation", array()), "html", null, true);
            echo "\">
                       <span class=\"glyphicon glyphicon-star\"></span><strong> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "notation", array()), "html", null, true);
            echo "</strong><sub>/5</sub>
                    </div>
                </div><!-- /col-sm-1 -->
                <div class=\"col-sm-5\">
                    <div class=\"panel panel_debord panel-default\">
                        <div class=\"panel-heading\">
                            <strong>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstname", array()), "html", null, true);
            echo "</strong>
                            <span class=\"text-muted\">
                                ";
            // line 38
            if ($this->getAttribute($context["entity"], "createDate", array())) {
                echo "posté le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createDate", array()), "d-m-Y"), "html", null, true);
            }
            // line 39
            echo "                            </span>
                        </div>
                        <div class=\"panel-body\">
                            ";
            // line 42
            echo $this->getAttribute($context["entity"], "comment", array());
            echo "
                        </div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-5 -->
            ";
            // line 46
            if (((($this->getAttribute($context["loop"], "index0", array()) % 2) == 1) || $this->getAttribute($context["loop"], "last", array()))) {
                // line 47
                echo "            </div>
            ";
            }
            // line 49
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
        // line 50
        echo "
    </div>

<div class=\"row\">
    ";
        // line 54
        $this->loadTemplate("PointWebAppBundle::_pager_classic.html.twig", "PointWebGuestbookBundle:Default:all_guestbook.html.twig", 54)->display($context);
        // line 55
        echo "</div>

    <!-- Formulaire d'envoi de commentaires -->
    <div class=\"row\">
        <h3 class=\"title-page\">Ajouter un commentaire</h3>

    <div class=\"well well-sm\">
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 63
            echo "            <div class=\"alert alert-success alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                ";
            // line 65
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
        <div class=\"row\">
            ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <strong>(*)</strong> Champs obligatoires
                </div>
                <div class=\"form-group\">
                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "

                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "

                        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
                        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                    <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span>
                                    </span>
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                    </div>
                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                </div>

            </div>
            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notation", array()), 'label');
        echo "
                        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notation", array()), 'errors');
        echo "
                        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notation", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'label');
        echo "
                        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'errors');
        echo "
                    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget', array("attr" => array("rows" => "5")));
        echo "
                </div>

            </div>
            <div class=\"col-md-12 text-center\">
                ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
            </div>

            ";
        // line 116
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>

    </div>
</div>


";
        
        $__internal_673a1e277bf54487acc14545e8fdab61f83d4bdf7975ec2c975834b17c57d0d5->leave($__internal_673a1e277bf54487acc14545e8fdab61f83d4bdf7975ec2c975834b17c57d0d5_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGuestbookBundle:Default:all_guestbook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 116,  299 => 113,  291 => 108,  287 => 107,  283 => 106,  277 => 103,  273 => 102,  269 => 101,  260 => 95,  255 => 93,  248 => 89,  241 => 85,  237 => 84,  232 => 82,  226 => 79,  222 => 78,  217 => 76,  208 => 70,  204 => 68,  195 => 65,  191 => 63,  187 => 62,  178 => 55,  176 => 54,  170 => 50,  156 => 49,  152 => 47,  150 => 46,  143 => 42,  138 => 39,  133 => 38,  126 => 36,  117 => 30,  113 => 29,  110 => 28,  106 => 26,  103 => 25,  86 => 24,  82 => 22,  73 => 19,  70 => 18,  66 => 17,  58 => 12,  54 => 11,  51 => 10,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/*     <!-- Page Heading/Breadcrumbs -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1 class="page-header">*/
/*                 {{ current_menu.title }}*/
/*             </h1>*/
/*             {#{ knp_menu_render('breadcrumb', {'currentClass': 'active'}) }#}*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="{{ path('point_web_app_homepage')}}">Accueil</a></li>*/
/*                 <li class="active">{{ current_menu.title }}</li>*/
/*             </ol>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.row -->*/
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
/*                     <div class="panel panel_debord panel-default">*/
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
/* */
/* <div class="row">*/
/*     {% include 'PointWebAppBundle::_pager_classic.html.twig' %}*/
/* </div>*/
/* */
/*     <!-- Formulaire d'envoi de commentaires -->*/
/*     <div class="row">*/
/*         <h3 class="title-page">Ajouter un commentaire</h3>*/
/* */
/*     <div class="well well-sm">*/
/*         {% for message in app.session.flashbag.get('info') %}*/
/*             <div class="alert alert-success alert-dismissable">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*                 {{ message }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="row">*/
/*             {{ form_start(form) }}*/
/*             <div class="col-md-6">*/
/*                 <div class="form-group">*/
/*                     <strong>(*)</strong> Champs obligatoires*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.title) }}*/
/* */
/*                         {{ form_errors(form.title) }}*/
/*                         {{ form_widget(form.title) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.firstname) }}*/
/* */
/*                         {{ form_errors(form.firstname) }}*/
/*                         {{ form_widget(form.firstname) }}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.email) }}*/
/*                     <div class="input-group">*/
/*                                     <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>*/
/*                                     </span>*/
/*                         {{ form_widget(form.email) }}*/
/*                     </div>*/
/*                     {{ form_errors(form.email) }}*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.notation) }}*/
/*                         {{ form_errors(form.notation) }}*/
/*                         {{ form_widget(form.notation) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(form.comment) }}*/
/*                         {{ form_errors(form.comment) }}*/
/*                     {{ form_widget(form.comment, { 'attr': {'rows': '5'} }) }}*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="col-md-12 text-center">*/
/*                 {{ form_widget(form.submit) }}*/
/*             </div>*/
/* */
/*             {{ form_end(form) }}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
