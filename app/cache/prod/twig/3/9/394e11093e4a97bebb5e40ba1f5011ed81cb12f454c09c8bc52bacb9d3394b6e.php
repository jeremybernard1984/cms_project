<?php

/* PointWebGedBundle:Folder:new.html.twig */
class __TwigTemplate_394e11093e4a97bebb5e40ba1f5011ed81cb12f454c09c8bc52bacb9d3394b6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebGedBundle:Folder:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_0d142a3602dd03d3cc099a07edf93af08c0cb6bff6378b8d48a155460a6d593c' => array($this, 'block___internal_0d142a3602dd03d3cc099a07edf93af08c0cb6bff6378b8d48a155460a6d593c'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b923c9fb5d1ef82bd7473ad5d2379f51b51544198f54f800e53a6fc1302a59f = $this->env->getExtension("native_profiler");
        $__internal_9b923c9fb5d1ef82bd7473ad5d2379f51b51544198f54f800e53a6fc1302a59f->enter($__internal_9b923c9fb5d1ef82bd7473ad5d2379f51b51544198f54f800e53a6fc1302a59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGedBundle:Folder:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b923c9fb5d1ef82bd7473ad5d2379f51b51544198f54f800e53a6fc1302a59f->leave($__internal_9b923c9fb5d1ef82bd7473ad5d2379f51b51544198f54f800e53a6fc1302a59f_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_4025ea59d2a67e136c41dd8def99936b509eccac28574d15748bc0fc2ed503af = $this->env->getExtension("native_profiler");
        $__internal_4025ea59d2a67e136c41dd8def99936b509eccac28574d15748bc0fc2ed503af->enter($__internal_4025ea59d2a67e136c41dd8def99936b509eccac28574d15748bc0fc2ed503af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Création d'un dossier</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "users", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-lg-2 control-label\">
                Déplacez vos fichiers ou cliquez dans la zone :
            </label>

            <div id=\"dropZoneFile\" class=\"col-lg-10\">
                <iframe src=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\">
                </iframe>
            </div>
        </div>
        <ul class=\"files\"
            data-prototype=\"";
        // line 41
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_0d142a3602dd03d3cc099a07edf93af08c0cb6bff6378b8d48a155460a6d593c", $context, $blocks));
        echo "\">
        </ul>
    </fieldset>
    ";
        // line 44
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 45
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("admin_folder");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
";
        
        $__internal_4025ea59d2a67e136c41dd8def99936b509eccac28574d15748bc0fc2ed503af->leave($__internal_4025ea59d2a67e136c41dd8def99936b509eccac28574d15748bc0fc2ed503af_prof);

    }

    // line 41
    public function block___internal_0d142a3602dd03d3cc099a07edf93af08c0cb6bff6378b8d48a155460a6d593c($context, array $blocks = array())
    {
        $__internal_f9b022ca13e355932969df8234ea3c5c22c5d20951bd2ebbdb79f48319f1b96a = $this->env->getExtension("native_profiler");
        $__internal_f9b022ca13e355932969df8234ea3c5c22c5d20951bd2ebbdb79f48319f1b96a->enter($__internal_f9b022ca13e355932969df8234ea3c5c22c5d20951bd2ebbdb79f48319f1b96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_0d142a3602dd03d3cc099a07edf93af08c0cb6bff6378b8d48a155460a6d593c"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebGedBundle:Folder:new.html.twig", 41)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_f9b022ca13e355932969df8234ea3c5c22c5d20951bd2ebbdb79f48319f1b96a->leave($__internal_f9b022ca13e355932969df8234ea3c5c22c5d20951bd2ebbdb79f48319f1b96a_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGedBundle:Folder:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  127 => 47,  121 => 45,  119 => 44,  113 => 41,  105 => 36,  92 => 26,  88 => 25,  83 => 23,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
