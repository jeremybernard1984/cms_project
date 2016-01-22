<?php

/* PointWebGedBundle:Folder:new.html.twig */
class __TwigTemplate_ffbf0157c9333e2a8fdbb9702e42191ed2449578b1bd842df12121db506b86e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebGedBundle:Folder:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_881e3c220d62e139ebcc9f56a2566a63e7e8213141c364a3042a9d41ff5c9db0' => array($this, 'block___internal_881e3c220d62e139ebcc9f56a2566a63e7e8213141c364a3042a9d41ff5c9db0'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4256a416d405964ef6c03c98ff0ac7a9167f1b5ee9cd36b5c17900bf6b9336e1 = $this->env->getExtension("native_profiler");
        $__internal_4256a416d405964ef6c03c98ff0ac7a9167f1b5ee9cd36b5c17900bf6b9336e1->enter($__internal_4256a416d405964ef6c03c98ff0ac7a9167f1b5ee9cd36b5c17900bf6b9336e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGedBundle:Folder:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4256a416d405964ef6c03c98ff0ac7a9167f1b5ee9cd36b5c17900bf6b9336e1->leave($__internal_4256a416d405964ef6c03c98ff0ac7a9167f1b5ee9cd36b5c17900bf6b9336e1_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_41fddd25d672c263e42b365302316bd6d958cfe29c253ee901e6e547065f6349 = $this->env->getExtension("native_profiler");
        $__internal_41fddd25d672c263e42b365302316bd6d958cfe29c253ee901e6e547065f6349->enter($__internal_41fddd25d672c263e42b365302316bd6d958cfe29c253ee901e6e547065f6349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_881e3c220d62e139ebcc9f56a2566a63e7e8213141c364a3042a9d41ff5c9db0", $context, $blocks));
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
        
        $__internal_41fddd25d672c263e42b365302316bd6d958cfe29c253ee901e6e547065f6349->leave($__internal_41fddd25d672c263e42b365302316bd6d958cfe29c253ee901e6e547065f6349_prof);

    }

    // line 41
    public function block___internal_881e3c220d62e139ebcc9f56a2566a63e7e8213141c364a3042a9d41ff5c9db0($context, array $blocks = array())
    {
        $__internal_9f41f0b4eda5deb2d1785a364cb237f0ad0a78991030a61b535a56fa0bedcd07 = $this->env->getExtension("native_profiler");
        $__internal_9f41f0b4eda5deb2d1785a364cb237f0ad0a78991030a61b535a56fa0bedcd07->enter($__internal_9f41f0b4eda5deb2d1785a364cb237f0ad0a78991030a61b535a56fa0bedcd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_881e3c220d62e139ebcc9f56a2566a63e7e8213141c364a3042a9d41ff5c9db0"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebGedBundle:Folder:new.html.twig", 41)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_9f41f0b4eda5deb2d1785a364cb237f0ad0a78991030a61b535a56fa0bedcd07->leave($__internal_9f41f0b4eda5deb2d1785a364cb237f0ad0a78991030a61b535a56fa0bedcd07_prof);

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
