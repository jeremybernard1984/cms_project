<?php

/* PointWebProductBundle:PartnerCategory:edit.html.twig */
class __TwigTemplate_3d608f52ca3ceafce0d5a47e91c6de5178c425092159d918b980bb4b9dd1b39c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:PartnerCategory:edit.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_c68668d2ceddf171b3254b0db37f1ec86842802276a7cf4f0a64d5b64cfc9b7c' => array($this, 'block___internal_c68668d2ceddf171b3254b0db37f1ec86842802276a7cf4f0a64d5b64cfc9b7c'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f5d8ca3ff5bef832c983ae672e0cb55ee8a4eabdb9119b4e7b8b5605a670c6f = $this->env->getExtension("native_profiler");
        $__internal_8f5d8ca3ff5bef832c983ae672e0cb55ee8a4eabdb9119b4e7b8b5605a670c6f->enter($__internal_8f5d8ca3ff5bef832c983ae672e0cb55ee8a4eabdb9119b4e7b8b5605a670c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:PartnerCategory:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f5d8ca3ff5bef832c983ae672e0cb55ee8a4eabdb9119b4e7b8b5605a670c6f->leave($__internal_8f5d8ca3ff5bef832c983ae672e0cb55ee8a4eabdb9119b4e7b8b5605a670c6f_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_e53316d3340042bb0204b898f8fff17f71e6b0ca925762160726f56146799c13 = $this->env->getExtension("native_profiler");
        $__internal_e53316d3340042bb0204b898f8fff17f71e6b0ca925762160726f56146799c13->enter($__internal_e53316d3340042bb0204b898f8fff17f71e6b0ca925762160726f56146799c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Modification de la catégorie</h1>

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
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "position", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "parent", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "parent", array()), 'errors');
        echo "
                ";
        // line 41
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
        // line 49
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\">
                </iframe>
            </div>
        </div>
        <ul class=\"files\"
            data-prototype=\"";
        // line 54
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_c68668d2ceddf171b3254b0db37f1ec86842802276a7cf4f0a64d5b64cfc9b7c", $context, $blocks));
        echo "\">
            ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 56
            echo "                <li class=\"formFile\">
                    <div class=\"form-group\">
                        ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'label');
            echo "
                        <div class=\"col-lg-10\">
                            ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'errors');
            echo "
                            ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'widget');
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'label');
            echo "
                        <div class=\"col-lg-10\">
                            ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'errors');
            echo "
                            ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'widget');
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'label');
            echo "
                        <div class=\"col-lg-10\">
                            ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'errors');
            echo "
                            ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'widget');
            echo "
                        </div>
                    </div>
                    ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "tmpPath", array()), 'widget');
            echo "
                    <div class=\"form-group\">
                        <label class=\"col-lg-2 control-label\">
                            Fichier :
                        </label>
                        <div class=\"col-lg-10\">
                            <img class=\"formFilePicture\"
                                 src=\"";
            // line 85
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
        // line 91
        echo "        </ul>


    </fieldset>
    ";
        // line 95
        $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()), "setRendered", array());
        // line 96
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
    ";
        // line 99
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_e53316d3340042bb0204b898f8fff17f71e6b0ca925762160726f56146799c13->leave($__internal_e53316d3340042bb0204b898f8fff17f71e6b0ca925762160726f56146799c13_prof);

    }

    // line 54
    public function block___internal_c68668d2ceddf171b3254b0db37f1ec86842802276a7cf4f0a64d5b64cfc9b7c($context, array $blocks = array())
    {
        $__internal_28a996da0e0c7e8a662dcfc31e821e24030d24a7050eb6e401fad2b8369bc5a7 = $this->env->getExtension("native_profiler");
        $__internal_28a996da0e0c7e8a662dcfc31e821e24030d24a7050eb6e401fad2b8369bc5a7->enter($__internal_28a996da0e0c7e8a662dcfc31e821e24030d24a7050eb6e401fad2b8369bc5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_c68668d2ceddf171b3254b0db37f1ec86842802276a7cf4f0a64d5b64cfc9b7c"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebProductBundle:PartnerCategory:edit.html.twig", 54)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_28a996da0e0c7e8a662dcfc31e821e24030d24a7050eb6e401fad2b8369bc5a7->leave($__internal_28a996da0e0c7e8a662dcfc31e821e24030d24a7050eb6e401fad2b8369bc5a7_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:PartnerCategory:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 54,  245 => 99,  241 => 98,  235 => 96,  233 => 95,  227 => 91,  213 => 85,  203 => 78,  197 => 75,  193 => 74,  188 => 72,  181 => 68,  177 => 67,  172 => 65,  165 => 61,  161 => 60,  156 => 58,  152 => 56,  148 => 55,  144 => 54,  136 => 49,  125 => 41,  121 => 40,  116 => 38,  109 => 34,  105 => 33,  100 => 31,  93 => 27,  89 => 26,  84 => 24,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
