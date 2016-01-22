<?php

/* PointWebPartnerBundle:Partner:new.html.twig */
class __TwigTemplate_84b99bb8396de67dfd88be83ee24b4b4c05eb10f641f19226c3d96d2cd30ea85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebPartnerBundle:Partner:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_c0fe65179d013a3bab28df4d3daf9a8364500fb61910dae76a915c5f0a8cd91f' => array($this, 'block___internal_c0fe65179d013a3bab28df4d3daf9a8364500fb61910dae76a915c5f0a8cd91f'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca10b695326c20b3013ca2d64bbaa80e674a3d8c9aa35b2f95bbdbb404de010c = $this->env->getExtension("native_profiler");
        $__internal_ca10b695326c20b3013ca2d64bbaa80e674a3d8c9aa35b2f95bbdbb404de010c->enter($__internal_ca10b695326c20b3013ca2d64bbaa80e674a3d8c9aa35b2f95bbdbb404de010c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:Partner:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca10b695326c20b3013ca2d64bbaa80e674a3d8c9aa35b2f95bbdbb404de010c->leave($__internal_ca10b695326c20b3013ca2d64bbaa80e674a3d8c9aa35b2f95bbdbb404de010c_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_f222fdaad5d4fc66f2579c5018570fb2f1617249af8551f37973d0236f1f76ce = $this->env->getExtension("native_profiler");
        $__internal_f222fdaad5d4fc66f2579c5018570fb2f1617249af8551f37973d0236f1f76ce->enter($__internal_f222fdaad5d4fc66f2579c5018570fb2f1617249af8551f37973d0236f1f76ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Création d'un partenaire</h1>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'errors');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'errors');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-lg-2 control-label\">
                Déplacez vos fichiers ou cliquez dans la zone :
            </label>

            <div id=\"dropZoneFile\" class=\"col-lg-10\">
                <iframe src=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\">
                </iframe>
            </div>
        </div>
        <ul class=\"files\"
            data-prototype=\"";
        // line 63
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_c0fe65179d013a3bab28df4d3daf9a8364500fb61910dae76a915c5f0a8cd91f", $context, $blocks));
        echo "\">
        </ul>
    </fieldset>
    ";
        // line 66
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 67
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("admin_partner");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la
        liste</a>
";
        
        $__internal_f222fdaad5d4fc66f2579c5018570fb2f1617249af8551f37973d0236f1f76ce->leave($__internal_f222fdaad5d4fc66f2579c5018570fb2f1617249af8551f37973d0236f1f76ce_prof);

    }

    // line 63
    public function block___internal_c0fe65179d013a3bab28df4d3daf9a8364500fb61910dae76a915c5f0a8cd91f($context, array $blocks = array())
    {
        $__internal_ba128f8b4c4339c1582eb07ac8aa6a67603bc03f966519a7d5becc0dd4d2649e = $this->env->getExtension("native_profiler");
        $__internal_ba128f8b4c4339c1582eb07ac8aa6a67603bc03f966519a7d5becc0dd4d2649e->enter($__internal_ba128f8b4c4339c1582eb07ac8aa6a67603bc03f966519a7d5becc0dd4d2649e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_c0fe65179d013a3bab28df4d3daf9a8364500fb61910dae76a915c5f0a8cd91f"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebPartnerBundle:Partner:new.html.twig", 63)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_ba128f8b4c4339c1582eb07ac8aa6a67603bc03f966519a7d5becc0dd4d2649e->leave($__internal_ba128f8b4c4339c1582eb07ac8aa6a67603bc03f966519a7d5becc0dd4d2649e_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:Partner:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 63,  176 => 69,  170 => 67,  168 => 66,  162 => 63,  154 => 58,  141 => 48,  137 => 47,  132 => 45,  125 => 41,  121 => 40,  116 => 38,  109 => 34,  105 => 33,  100 => 31,  92 => 26,  88 => 25,  83 => 23,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
