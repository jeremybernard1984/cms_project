<?php

/* @PointWebApp/Default/contact.html.twig */
class __TwigTemplate_8da48dc381352bc9148206323db10af556a4097f69d9204e68e4176d351f6450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "@PointWebApp/Default/contact.html.twig", 1);
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
        $__internal_576c1685404ba2b06ee9a6493410abf3f81700a7344e30b93a670fe872993b87 = $this->env->getExtension("native_profiler");
        $__internal_576c1685404ba2b06ee9a6493410abf3f81700a7344e30b93a670fe872993b87->enter($__internal_576c1685404ba2b06ee9a6493410abf3f81700a7344e30b93a670fe872993b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebApp/Default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_576c1685404ba2b06ee9a6493410abf3f81700a7344e30b93a670fe872993b87->leave($__internal_576c1685404ba2b06ee9a6493410abf3f81700a7344e30b93a670fe872993b87_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_aee1efa7ad3d54c597a16cccf128a2bd14416768d8a5d91e158e0c68b30b9e37 = $this->env->getExtension("native_profiler");
        $__internal_aee1efa7ad3d54c597a16cccf128a2bd14416768d8a5d91e158e0c68b30b9e37->enter($__internal_aee1efa7ad3d54c597a16cccf128a2bd14416768d8a5d91e158e0c68b30b9e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebPageBundle:Default:contactPage", array("id" => "5")));
        echo "

    <div class=\"row\">
            <div class=\"well well-sm\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "                    <div class=\"alert alert-success alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                        ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
                    <div class=\"row\">
                        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <strong>(*)</strong> Champs obligatoires
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "
                                <div>
                                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
                                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "
                                <div>
                                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
                                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label');
        echo "
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-phone\"></span>
                                    </span>
                                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
                                </div>
                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span>
                                    </span>
                                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                </div>
                                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                            </div>

                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label');
        echo "
                                <div>
                                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'errors');
        echo "
                                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode", array()), 'label');
        echo "
                                        <div>
                                            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode", array()), 'errors');
        echo "
                                            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCode", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'label');
        echo "
                                        <div>
                                            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'errors');
        echo "
                                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'label');
        echo "
                                <div>
                                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'errors');
        echo "
                                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget');
        echo "
                                </div>
                            </div>

                        </div>
                        <div class=\"col-md-12 text-center\">
                            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
                        </div>

                        ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>

            </div>
    </div>

";
        
        $__internal_aee1efa7ad3d54c597a16cccf128a2bd14416768d8a5d91e158e0c68b30b9e37->leave($__internal_aee1efa7ad3d54c597a16cccf128a2bd14416768d8a5d91e158e0c68b30b9e37_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebApp/Default/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 95,  221 => 92,  212 => 86,  208 => 85,  203 => 83,  194 => 77,  190 => 76,  185 => 74,  176 => 68,  172 => 67,  167 => 65,  158 => 59,  154 => 58,  149 => 56,  140 => 50,  135 => 48,  128 => 44,  122 => 41,  117 => 39,  110 => 35,  103 => 31,  99 => 30,  94 => 28,  87 => 24,  83 => 23,  78 => 21,  69 => 15,  65 => 13,  56 => 10,  52 => 8,  48 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/*     {{ render(controller('PointWebPageBundle:Default:contactPage',{'id': '5' })) }}*/
/* */
/*     <div class="row">*/
/*             <div class="well well-sm">*/
/*                 {% for message in app.session.flashbag.get('info') %}*/
/*                     <div class="alert alert-success alert-dismissable">*/
/*                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*                     <div class="row">*/
/*                         {{ form_start(form) }}*/
/*                         <div class="col-md-6">*/
/*                             <div class="form-group">*/
/*                                 <strong>(*)</strong> Champs obligatoires*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_label(form.lastname) }}*/
/*                                 <div>*/
/*                                     {{ form_errors(form.lastname) }}*/
/*                                     {{ form_widget(form.lastname) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_label(form.firstname) }}*/
/*                                 <div>*/
/*                                     {{ form_errors(form.firstname) }}*/
/*                                     {{ form_widget(form.firstname) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_label(form.phone) }}*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span>*/
/*                                     </span>*/
/*                                     {{ form_widget(form.phone) }}*/
/*                                 </div>*/
/*                                 {{ form_errors(form.phone) }}*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_label(form.email) }}*/
/*                                 <div class="input-group">*/
/*                                     <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>*/
/*                                     </span>*/
/*                                         {{ form_widget(form.email) }}*/
/*                                 </div>*/
/*                                 {{ form_errors(form.email) }}*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <div class="form-group">*/
/*                                 {{ form_label(form.address) }}*/
/*                                 <div>*/
/*                                     {{ form_errors(form.address) }}*/
/*                                     {{ form_widget(form.address) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                     <div class="form-group">*/
/*                                         {{ form_label(form.zipCode) }}*/
/*                                         <div>*/
/*                                             {{ form_errors(form.zipCode) }}*/
/*                                             {{ form_widget(form.zipCode) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-6">*/
/*                                     <div class="form-group">*/
/*                                         {{ form_label(form.city) }}*/
/*                                         <div>*/
/*                                             {{ form_errors(form.city) }}*/
/*                                             {{ form_widget(form.city) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 {{ form_label(form.message) }}*/
/*                                 <div>*/
/*                                     {{ form_errors(form.message) }}*/
/*                                     {{ form_widget(form.message) }}*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="col-md-12 text-center">*/
/*                             {{ form_widget(form.submit) }}*/
/*                         </div>*/
/* */
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/* */
/*             </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
