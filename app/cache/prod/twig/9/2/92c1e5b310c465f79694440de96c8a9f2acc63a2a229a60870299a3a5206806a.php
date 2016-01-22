<?php

/* PointWebGalleryBundle:Gallery:new.html.twig */
class __TwigTemplate_92c1e5b310c465f79694440de96c8a9f2acc63a2a229a60870299a3a5206806a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebGalleryBundle:Gallery:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_5f60dcb568b68ce37d2a2e371606af48b76aa0e9e72ed65b0c1bbf8d3d0ea64a' => array($this, 'block___internal_5f60dcb568b68ce37d2a2e371606af48b76aa0e9e72ed65b0c1bbf8d3d0ea64a'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daed428e11a6b41503c3e1cc598268eb13480fee8dbccd0b958b0850b2928193 = $this->env->getExtension("native_profiler");
        $__internal_daed428e11a6b41503c3e1cc598268eb13480fee8dbccd0b958b0850b2928193->enter($__internal_daed428e11a6b41503c3e1cc598268eb13480fee8dbccd0b958b0850b2928193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGalleryBundle:Gallery:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daed428e11a6b41503c3e1cc598268eb13480fee8dbccd0b958b0850b2928193->leave($__internal_daed428e11a6b41503c3e1cc598268eb13480fee8dbccd0b958b0850b2928193_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_842bf1f7113de42fb3e2d90b641ab9e51c9fb51113c509f9b0fd49ae511bb266 = $this->env->getExtension("native_profiler");
        $__internal_842bf1f7113de42fb3e2d90b641ab9e51c9fb51113c509f9b0fd49ae511bb266->enter($__internal_842bf1f7113de42fb3e2d90b641ab9e51c9fb51113c509f9b0fd49ae511bb266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Création d'une galerie</h1>

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
            <label class=\"col-lg-2 control-label\">
                Déplacez vos fichiers ou cliquez dans la zone :
            </label>

            <div id=\"dropZoneFile\" class=\"col-lg-10\">
                <iframe src=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\">
                </iframe>
            </div>
        </div>
        <ul class=\"files\"
            data-prototype=\"";
        // line 34
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_5f60dcb568b68ce37d2a2e371606af48b76aa0e9e72ed65b0c1bbf8d3d0ea64a", $context, $blocks));
        echo "\">
        </ul>
    </fieldset>
    ";
        // line 37
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 38
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("admin_gallery");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
";
        
        $__internal_842bf1f7113de42fb3e2d90b641ab9e51c9fb51113c509f9b0fd49ae511bb266->leave($__internal_842bf1f7113de42fb3e2d90b641ab9e51c9fb51113c509f9b0fd49ae511bb266_prof);

    }

    // line 34
    public function block___internal_5f60dcb568b68ce37d2a2e371606af48b76aa0e9e72ed65b0c1bbf8d3d0ea64a($context, array $blocks = array())
    {
        $__internal_dcd5db96445daabb5847970200852d42e2a441a6c278b523007c381156017512 = $this->env->getExtension("native_profiler");
        $__internal_dcd5db96445daabb5847970200852d42e2a441a6c278b523007c381156017512->enter($__internal_dcd5db96445daabb5847970200852d42e2a441a6c278b523007c381156017512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_5f60dcb568b68ce37d2a2e371606af48b76aa0e9e72ed65b0c1bbf8d3d0ea64a"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebGalleryBundle:Gallery:new.html.twig", 34)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_dcd5db96445daabb5847970200852d42e2a441a6c278b523007c381156017512->leave($__internal_dcd5db96445daabb5847970200852d42e2a441a6c278b523007c381156017512_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGalleryBundle:Gallery:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  111 => 40,  105 => 38,  103 => 37,  97 => 34,  89 => 29,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
