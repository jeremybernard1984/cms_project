<?php

/* PointWebAdminBundle:Reglage:edit.html.twig */
class __TwigTemplate_1fd098f918214d7ff5497b842daea86785aa9dae4bc511a553da055fa4f60f04 extends Twig_Template
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
        $__internal_83cb456772c364780c74cfe9297d22cbeeb7f249fdf96b9f3b56cf72e6b84f49 = $this->env->getExtension("native_profiler");
        $__internal_83cb456772c364780c74cfe9297d22cbeeb7f249fdf96b9f3b56cf72e6b84f49->enter($__internal_83cb456772c364780c74cfe9297d22cbeeb7f249fdf96b9f3b56cf72e6b84f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Reglage:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83cb456772c364780c74cfe9297d22cbeeb7f249fdf96b9f3b56cf72e6b84f49->leave($__internal_83cb456772c364780c74cfe9297d22cbeeb7f249fdf96b9f3b56cf72e6b84f49_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_f5982de9e303f2fc5c39400d38c61ca438262b2c7553ca5f476be8c017ae27d1 = $this->env->getExtension("native_profiler");
        $__internal_f5982de9e303f2fc5c39400d38c61ca438262b2c7553ca5f476be8c017ae27d1->enter($__internal_f5982de9e303f2fc5c39400d38c61ca438262b2c7553ca5f476be8c017ae27d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "metadescription", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "metadescription", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "metadescription", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "googleplusLink", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "googleplusLink", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "googleplusLink", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "facebookLink", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "facebookLink", array()), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "facebookLink", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "googleanalitics", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "googleanalitics", array()), 'errors');
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "googleanalitics", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-lg-2\" style=\"text-align: right\">Menus actifs :</label>
            <div class=\"col-lg-10\">
                <label class=\"col-lg-12\" >
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuProduct", array()), 'widget');
        echo " Menu produits
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuNews", array()), 'widget');
        echo " Menu news
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuPartner", array()), 'widget');
        echo " Menu partenaires
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuGuestBook", array()), 'widget');
        echo " Menu Livre d'or
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuFaq", array()), 'widget');
        echo " Menu Foire aux questions (F.A.Q.)
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuGallery", array()), 'widget');
        echo " Menu gallerie
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuFolder", array()), 'widget');
        echo " Menu gestion documentaire
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuPage", array()), 'widget');
        echo " Menu pages
                </label>
                <label class=\"col-lg-12\" >
                    ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menuMap", array()), 'widget');
        echo " Menu maps Google
                </label>
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "backgroundStyle", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "backgroundStyle", array()), 'errors');
        echo "
                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "backgroundStyle", array()), 'widget');
        echo "
            </div>
        </div>

    </fieldset>
    <div class=\"col-lg-12 submitBt\">
        ";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_f5982de9e303f2fc5c39400d38c61ca438262b2c7553ca5f476be8c017ae27d1->leave($__internal_f5982de9e303f2fc5c39400d38c61ca438262b2c7553ca5f476be8c017ae27d1_prof);

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
        return array (  226 => 92,  217 => 86,  213 => 85,  208 => 83,  200 => 78,  194 => 75,  188 => 72,  182 => 69,  176 => 66,  170 => 63,  164 => 60,  158 => 57,  152 => 54,  142 => 47,  138 => 46,  133 => 44,  126 => 40,  122 => 39,  117 => 37,  110 => 33,  106 => 32,  101 => 30,  94 => 26,  90 => 25,  85 => 23,  77 => 18,  73 => 17,  68 => 15,  60 => 11,  51 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/*         <div class="form-group">*/
/*             {{ form_label(edit_form.metadescription) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(edit_form.metadescription) }}*/
/*                 {{ form_widget(edit_form.metadescription) }}*/
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
