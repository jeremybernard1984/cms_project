<?php

/* PointWebGuestBookBundle:Default:index.html.twig */
class __TwigTemplate_e426ae4e881f0758446e98b193f1fa1e45ea00e5529ac8486f01758e7c30dc22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebGuestBookBundle:Default:index.html.twig", 1);
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
        $__internal_07f5009f0444232ec9e460ae2636a64ce1a6253d748b7e6bf3a479b62ee8c9b6 = $this->env->getExtension("native_profiler");
        $__internal_07f5009f0444232ec9e460ae2636a64ce1a6253d748b7e6bf3a479b62ee8c9b6->enter($__internal_07f5009f0444232ec9e460ae2636a64ce1a6253d748b7e6bf3a479b62ee8c9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGuestBookBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07f5009f0444232ec9e460ae2636a64ce1a6253d748b7e6bf3a479b62ee8c9b6->leave($__internal_07f5009f0444232ec9e460ae2636a64ce1a6253d748b7e6bf3a479b62ee8c9b6_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_cea505f7e2e67a22566f6046c7ff040a7370c9b3fe79ab45eedcee8cafd56619 = $this->env->getExtension("native_profiler");
        $__internal_cea505f7e2e67a22566f6046c7ff040a7370c9b3fe79ab45eedcee8cafd56619->enter($__internal_cea505f7e2e67a22566f6046c7ff040a7370c9b3fe79ab45eedcee8cafd56619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "    <table class=\"records_list\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Commentaire</th>
            <th>Note</th>

            <th>Date de création</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo $this->getAttribute($context["entity"], "comment", array());
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "notation", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 31
            if ($this->getAttribute($context["entity"], "createDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <!-- Formulaire d'envoi de commentaires -->
    <h1>Création d'un commentaire</h1>

    ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <fieldset>
        <div class=\"form-group\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'errors');
        echo "
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notation", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notation", array()), 'errors');
        echo "
                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notation", array()), 'widget');
        echo "
            </div>
        </div>

    </fieldset>
    ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_cea505f7e2e67a22566f6046c7ff040a7370c9b3fe79ab45eedcee8cafd56619->leave($__internal_cea505f7e2e67a22566f6046c7ff040a7370c9b3fe79ab45eedcee8cafd56619_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGuestBookBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 79,  201 => 74,  197 => 73,  192 => 71,  185 => 67,  181 => 66,  176 => 64,  169 => 60,  165 => 59,  160 => 57,  153 => 53,  149 => 52,  144 => 50,  137 => 46,  133 => 45,  128 => 43,  122 => 40,  114 => 34,  103 => 31,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  79 => 24,  75 => 23,  59 => 9,  50 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
/*     <table class="records_list">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Id</th>*/
/*             <th>Nom</th>*/
/*             <th>Prénom</th>*/
/*             <th>Commentaire</th>*/
/*             <th>Note</th>*/
/* */
/*             <th>Date de création</th>*/
/* */
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td>{{ entity.id }}</td>*/
/*                 <td>{{ entity.lastname }}</td>*/
/*                 <td>{{ entity.firstname }}</td>*/
/*                 <td>{{ entity.comment|raw }}</td>*/
/*                 <td>{{ entity.notation }}</td>*/
/* */
/*                 <td>{% if entity.createDate %}{{ entity.createDate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <!-- Formulaire d'envoi de commentaires -->*/
/*     <h1>Création d'un commentaire</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*     <fieldset>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.lastname) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.lastname) }}*/
/*                 {{ form_widget(form.lastname) }}*/
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
