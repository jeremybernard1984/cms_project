<?php

/* PointWebAdminBundle:Menu:new.html.twig */
class __TwigTemplate_35ceeb4ed16ce38e8efdf16457105abf22646dd296bea8566775492ecb65e650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Menu:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_b91554e2e92c0608174bc4f94e456462978a1e55a779b3b5d44a5c2bda3c5388' => array($this, 'block___internal_b91554e2e92c0608174bc4f94e456462978a1e55a779b3b5d44a5c2bda3c5388'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd5a370707e9cd1b4e9ffa1da530c22d425c5bac6c104def5e4c2232b31090ed = $this->env->getExtension("native_profiler");
        $__internal_cd5a370707e9cd1b4e9ffa1da530c22d425c5bac6c104def5e4c2232b31090ed->enter($__internal_cd5a370707e9cd1b4e9ffa1da530c22d425c5bac6c104def5e4c2232b31090ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Menu:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd5a370707e9cd1b4e9ffa1da530c22d425c5bac6c104def5e4c2232b31090ed->leave($__internal_cd5a370707e9cd1b4e9ffa1da530c22d425c5bac6c104def5e4c2232b31090ed_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_80e8dd77425308dd9af489f5f25b16e9b939f25ab4bbd9cca498e0158ecde384 = $this->env->getExtension("native_profiler");
        $__internal_80e8dd77425308dd9af489f5f25b16e9b939f25ab4bbd9cca498e0158ecde384->enter($__internal_80e8dd77425308dd9af489f5f25b16e9b939f25ab4bbd9cca498e0158ecde384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_b91554e2e92c0608174bc4f94e456462978a1e55a779b3b5d44a5c2bda3c5388", $context, $blocks));
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
        
        $__internal_80e8dd77425308dd9af489f5f25b16e9b939f25ab4bbd9cca498e0158ecde384->leave($__internal_80e8dd77425308dd9af489f5f25b16e9b939f25ab4bbd9cca498e0158ecde384_prof);

    }

    // line 54
    public function block___internal_b91554e2e92c0608174bc4f94e456462978a1e55a779b3b5d44a5c2bda3c5388($context, array $blocks = array())
    {
        $__internal_feea7cad8e2a2914071ba1c42b28e9213300dae9b36cc8f1f5a03ad26abc6e11 = $this->env->getExtension("native_profiler");
        $__internal_feea7cad8e2a2914071ba1c42b28e9213300dae9b36cc8f1f5a03ad26abc6e11->enter($__internal_feea7cad8e2a2914071ba1c42b28e9213300dae9b36cc8f1f5a03ad26abc6e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_b91554e2e92c0608174bc4f94e456462978a1e55a779b3b5d44a5c2bda3c5388"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebAdminBundle:Menu:new.html.twig", 54)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_feea7cad8e2a2914071ba1c42b28e9213300dae9b36cc8f1f5a03ad26abc6e11->leave($__internal_feea7cad8e2a2914071ba1c42b28e9213300dae9b36cc8f1f5a03ad26abc6e11_prof);

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
