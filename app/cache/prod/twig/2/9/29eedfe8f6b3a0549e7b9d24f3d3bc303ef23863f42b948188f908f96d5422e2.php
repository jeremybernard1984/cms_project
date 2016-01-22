<?php

/* PointWebAdminBundle:Menu:new.html.twig */
class __TwigTemplate_29eedfe8f6b3a0549e7b9d24f3d3bc303ef23863f42b948188f908f96d5422e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Menu:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_959cd193c32bfe0b4d8b0fb2490d899cbf286064a206afab8288d7bebfe6ad90' => array($this, 'block___internal_959cd193c32bfe0b4d8b0fb2490d899cbf286064a206afab8288d7bebfe6ad90'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e17a46f1421896e49ac975bd0db0b392bd670168b65a52abdb2a74db0e054e1 = $this->env->getExtension("native_profiler");
        $__internal_1e17a46f1421896e49ac975bd0db0b392bd670168b65a52abdb2a74db0e054e1->enter($__internal_1e17a46f1421896e49ac975bd0db0b392bd670168b65a52abdb2a74db0e054e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Menu:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e17a46f1421896e49ac975bd0db0b392bd670168b65a52abdb2a74db0e054e1->leave($__internal_1e17a46f1421896e49ac975bd0db0b392bd670168b65a52abdb2a74db0e054e1_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_27ad58dc2394051ab9dae9d5b82e575d58249c6b46456342bbec68b945890b08 = $this->env->getExtension("native_profiler");
        $__internal_27ad58dc2394051ab9dae9d5b82e575d58249c6b46456342bbec68b945890b08->enter($__internal_27ad58dc2394051ab9dae9d5b82e575d58249c6b46456342bbec68b945890b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Création du menu</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "path", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'widget');
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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_959cd193c32bfe0b4d8b0fb2490d899cbf286064a206afab8288d7bebfe6ad90", $context, $blocks));
        echo "\">
        </ul>
    </fieldset>
    ";
        // line 57
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 58
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("admin_menu");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
";
        
        $__internal_27ad58dc2394051ab9dae9d5b82e575d58249c6b46456342bbec68b945890b08->leave($__internal_27ad58dc2394051ab9dae9d5b82e575d58249c6b46456342bbec68b945890b08_prof);

    }

    // line 54
    public function block___internal_959cd193c32bfe0b4d8b0fb2490d899cbf286064a206afab8288d7bebfe6ad90($context, array $blocks = array())
    {
        $__internal_dc82ff943698f4636786080dd7aef060dda37a2239248992266f80b9af2b4bb4 = $this->env->getExtension("native_profiler");
        $__internal_dc82ff943698f4636786080dd7aef060dda37a2239248992266f80b9af2b4bb4->enter($__internal_dc82ff943698f4636786080dd7aef060dda37a2239248992266f80b9af2b4bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_959cd193c32bfe0b4d8b0fb2490d899cbf286064a206afab8288d7bebfe6ad90"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebAdminBundle:Menu:new.html.twig", 54)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_dc82ff943698f4636786080dd7aef060dda37a2239248992266f80b9af2b4bb4->leave($__internal_dc82ff943698f4636786080dd7aef060dda37a2239248992266f80b9af2b4bb4_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Menu:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 54,  158 => 60,  152 => 58,  150 => 57,  144 => 54,  136 => 49,  124 => 40,  120 => 39,  115 => 37,  108 => 33,  104 => 32,  99 => 30,  92 => 26,  88 => 25,  83 => 23,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
