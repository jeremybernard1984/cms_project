<?php

/* PointWebAdminBundle:Reglage:edit.html.twig */
class __TwigTemplate_a1ade9bef63f27f58725c282caf2e24a01defc1cb855bd863f2ee8f9558647d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Reglage:edit.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c67d6b7a0aee762c20b99d3c1f73fe9cd1a7a5048a638a9ce6f88ec364c6cc59 = $this->env->getExtension("native_profiler");
        $__internal_c67d6b7a0aee762c20b99d3c1f73fe9cd1a7a5048a638a9ce6f88ec364c6cc59->enter($__internal_c67d6b7a0aee762c20b99d3c1f73fe9cd1a7a5048a638a9ce6f88ec364c6cc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Reglage:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c67d6b7a0aee762c20b99d3c1f73fe9cd1a7a5048a638a9ce6f88ec364c6cc59->leave($__internal_c67d6b7a0aee762c20b99d3c1f73fe9cd1a7a5048a638a9ce6f88ec364c6cc59_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_093b6e864ffa2825caf13bb32b9ecc59e20b7c3cf1bcffbd48a69fa4b52f11a1 = $this->env->getExtension("native_profiler");
        $__internal_093b6e864ffa2825caf13bb32b9ecc59e20b7c3cf1bcffbd48a69fa4b52f11a1->enter($__internal_093b6e864ffa2825caf13bb32b9ecc59e20b7c3cf1bcffbd48a69fa4b52f11a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Réglages du site</h1>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "        <div class=\"alert alert-success alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>

        <div class=\"form-group\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clientName", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clientName", array()), 'errors');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clientName", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "logo", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "logo", array()), 'errors');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "logo", array()), 'widget');
        echo "
                ";
        // line 26
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array())) {
            // line 27
            echo "                    <!---->
                    <a class=\"fancybox\" href=\"../../../";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array()), "AssetPath", array()), "html", null, true);
            echo "\"><img src=\"../../../";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array()), "AssetPath", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array()), "name", array()), "html", null, true);
            echo "\" style=\"width:150px;float: left\"></a>
                ";
        } else {
            // line 30
            echo "                    ...
                ";
        }
        // line 32
        echo "            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "metadescription", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "metadescription", array()), 'errors');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "metadescription", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "keyword", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "keyword", array()), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "keyword", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "googleplusLink", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "googleplusLink", array()), 'errors');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "googleplusLink", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "facebookLink", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "facebookLink", array()), 'errors');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "facebookLink", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "googleanalitics", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "googleanalitics", array()), 'errors');
        echo "
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "googleanalitics", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-lg-2\" style=\"text-align: right\">Menus actifs :</label>
            <div class=\"col-lg-10\">
                <label class=\"col-lg-12\" >
                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuProduct", array()), 'widget');
        echo " Menu produits
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuNews", array()), 'widget');
        echo " Menu news
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuPartner", array()), 'widget');
        echo " Menu partenaires
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuGuestBook", array()), 'widget');
        echo " Menu Livre d'or
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuFaq", array()), 'widget');
        echo " Menu Foire aux questions (F.A.Q.)
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuGallery", array()), 'widget');
        echo " Menu gallerie
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuFolder", array()), 'widget');
        echo " Menu gestion documentaire
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuPage", array()), 'widget');
        echo " Menu pages
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuMap", array()), 'widget');
        echo " Menu maps Google
                </label>
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "backgroundStyle", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "backgroundStyle", array()), 'errors');
        echo "
                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "backgroundStyle", array()), 'widget');
        echo "
            </div>
        </div>

    </fieldset>
    <div class=\"col-lg-12 submitBt\">
        ";
        // line 111
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_093b6e864ffa2825caf13bb32b9ecc59e20b7c3cf1bcffbd48a69fa4b52f11a1->leave($__internal_093b6e864ffa2825caf13bb32b9ecc59e20b7c3cf1bcffbd48a69fa4b52f11a1_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Reglage:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 111,  268 => 105,  264 => 104,  259 => 102,  251 => 97,  245 => 94,  239 => 91,  233 => 88,  227 => 85,  221 => 82,  215 => 79,  209 => 76,  203 => 73,  193 => 66,  189 => 65,  184 => 63,  177 => 59,  173 => 58,  168 => 56,  161 => 52,  157 => 51,  152 => 49,  145 => 45,  141 => 44,  136 => 42,  129 => 38,  125 => 37,  120 => 35,  115 => 32,  111 => 30,  102 => 28,  99 => 27,  97 => 26,  93 => 25,  89 => 24,  84 => 22,  77 => 18,  73 => 17,  68 => 15,  60 => 11,  51 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Réglages du site</h1>*/
/*     {% for message in app.session.flashbag.get('info') %}*/
/*         <div class="alert alert-success alert-dismissable">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*             {{ message }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     {{ form_start(edit_form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.clientName) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.clientName) }}*/
/*                 {{ form_widget(edit_form.clientName) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.logo) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.logo) }}*/
/*                 {{ form_widget(edit_form.logo) }}*/
/*                 {% if entity.logo %}*/
/*                     <!---->*/
/*                     <a class="fancybox" href="../../../{{ entity.logo.AssetPath }}"><img src="../../../{{ entity.logo.AssetPath }}" alt="{{ entity.logo.name }}" style="width:150px;float: left"></a>*/
/*                 {% else %}*/
/*                     ...*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.metadescription) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.metadescription) }}*/
/*                 {{ form_widget(edit_form.metadescription) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.keyword) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.keyword) }}*/
/*                 {{ form_widget(edit_form.keyword) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.googleplusLink) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.googleplusLink) }}*/
/*                 {{ form_widget(edit_form.googleplusLink) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.facebookLink) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.facebookLink) }}*/
/*                 {{ form_widget(edit_form.facebookLink) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.googleanalitics) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.googleanalitics) }}*/
/*                 {{ form_widget(edit_form.googleanalitics) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="col-lg-2" style="text-align: right">Menus actifs :</label>*/
/*             <div class="col-lg-10">*/
/*                 <label class="col-lg-12" >*/
/*                     {{ form_widget(edit_form.menuProduct) }} Menu produits*/
/*                 </label>*/
/*                 <label class="col-lg-12" >*/
/*                     {{ form_widget(edit_form.menuNews) }} Menu news*/
/*                 </label>*/
/*                 <label class="col-lg-12" >*/
/*                     {{ form_widget(edit_form.menuPartner) }} Menu partenaires*/
/*                 </label>*/
/*                 <label class="col-lg-12" >*/
/*                     {{ form_widget(edit_form.menuGuestBook) }} Menu Livre d'or*/
/*                 </label>*/
/*                 <label class="col-lg-12" >*/
/*                     {{ form_widget(edit_form.menuFaq) }} Menu Foire aux questions (F.A.Q.)*/
/*                 </label>*/
/*                 <label class="col-lg-12" >*/
/*                     {{ form_widget(edit_form.menuGallery) }} Menu gallerie*/
/*                 </label>*/
/*                 <label class="col-lg-12" >*/
/*                     {{ form_widget(edit_form.menuFolder) }} Menu gestion documentaire*/
/*                 </label>*/
/*                 <label class="col-lg-12" >*/
/*                     {{ form_widget(edit_form.menuPage) }} Menu pages*/
/*                 </label>*/
/*                 <label class="col-lg-12" >*/
/*                     {{ form_widget(edit_form.menuMap) }} Menu maps Google*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.backgroundStyle) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.backgroundStyle) }}*/
/*                 {{ form_widget(edit_form.backgroundStyle) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </fieldset>*/
/*     <div class="col-lg-12 submitBt">*/
/*         {{ form_end(edit_form) }}*/
/*     </div>*/
/* {% endblock %}*/
