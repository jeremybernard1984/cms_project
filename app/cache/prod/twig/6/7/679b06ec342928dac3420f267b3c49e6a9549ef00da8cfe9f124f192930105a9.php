<?php

/* PointWebGalleryBundle:Gallery:edit.html.twig */
class __TwigTemplate_679b06ec342928dac3420f267b3c49e6a9549ef00da8cfe9f124f192930105a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebGalleryBundle:Gallery:edit.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_5acb6d06e99d3aa9552dfb393820b7e67a43e5e89a9a769bae91a032e8d7cde2' => array($this, 'block___internal_5acb6d06e99d3aa9552dfb393820b7e67a43e5e89a9a769bae91a032e8d7cde2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6bfe23d2b161545d8b4354afd196571f9816ac77375359199e8c4360433db36 = $this->env->getExtension("native_profiler");
        $__internal_b6bfe23d2b161545d8b4354afd196571f9816ac77375359199e8c4360433db36->enter($__internal_b6bfe23d2b161545d8b4354afd196571f9816ac77375359199e8c4360433db36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGalleryBundle:Gallery:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6bfe23d2b161545d8b4354afd196571f9816ac77375359199e8c4360433db36->leave($__internal_b6bfe23d2b161545d8b4354afd196571f9816ac77375359199e8c4360433db36_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_f54f0ccc605953ecc4cf30055b3f98350526640f967cc554b134c719f2a839b6 = $this->env->getExtension("native_profiler");
        $__internal_f54f0ccc605953ecc4cf30055b3f98350526640f967cc554b134c719f2a839b6->enter($__internal_f54f0ccc605953ecc4cf30055b3f98350526640f967cc554b134c719f2a839b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Modification de la galerie</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget');
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
            <label class=\"col-lg-2 control-label\">
                Déplacez vos fichiers ou cliquez dans la zone :
            </label>
            <div id=\"dropZoneFile\" class=\"col-lg-10\">
                <iframe src=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\">
                </iframe>
            </div>
        </div>
        <ul class=\"files\"
            data-prototype=\"";
        // line 32
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_5acb6d06e99d3aa9552dfb393820b7e67a43e5e89a9a769bae91a032e8d7cde2", $context, $blocks));
        echo "\">
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 34
            echo "                <li class=\"formFile\">
                    <div class=\"form-group\">
                        ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'label');
            echo "
                        <div class=\"col-lg-10\">
                            ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'errors');
            echo "
                            ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'widget');
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'label');
            echo "
                        <div class=\"col-lg-10\">
                            ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'errors');
            echo "
                            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'widget');
            echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'label');
            echo "
                        <div class=\"col-lg-10\">
                            ";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'errors');
            echo "
                            ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'widget');
            echo "
                        </div>
                    </div>
                    ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "tmpPath", array()), 'widget');
            echo "
                    <div class=\"form-group\">
                        <label class=\"col-lg-2 control-label\">
                            Fichier :
                        </label>
                        <div class=\"col-lg-10\">
                            <img class=\"formFilePicture\"
                                 src=\"";
            // line 63
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
        // line 69
        echo "        </ul>


    </fieldset>
    ";
        // line 73
        $this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()), "setRendered", array());
        // line 74
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("admin_gallery");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
    ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_f54f0ccc605953ecc4cf30055b3f98350526640f967cc554b134c719f2a839b6->leave($__internal_f54f0ccc605953ecc4cf30055b3f98350526640f967cc554b134c719f2a839b6_prof);

    }

    // line 32
    public function block___internal_5acb6d06e99d3aa9552dfb393820b7e67a43e5e89a9a769bae91a032e8d7cde2($context, array $blocks = array())
    {
        $__internal_e5e903683003f6e8e7e1937830fe4d94e6056b963ee8589006a645c1ce139233 = $this->env->getExtension("native_profiler");
        $__internal_e5e903683003f6e8e7e1937830fe4d94e6056b963ee8589006a645c1ce139233->enter($__internal_e5e903683003f6e8e7e1937830fe4d94e6056b963ee8589006a645c1ce139233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_5acb6d06e99d3aa9552dfb393820b7e67a43e5e89a9a769bae91a032e8d7cde2"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebGalleryBundle:Gallery:edit.html.twig", 32)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_e5e903683003f6e8e7e1937830fe4d94e6056b963ee8589006a645c1ce139233->leave($__internal_e5e903683003f6e8e7e1937830fe4d94e6056b963ee8589006a645c1ce139233_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGalleryBundle:Gallery:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 32,  196 => 77,  192 => 76,  186 => 74,  184 => 73,  178 => 69,  164 => 63,  154 => 56,  148 => 53,  144 => 52,  139 => 50,  132 => 46,  128 => 45,  123 => 43,  116 => 39,  112 => 38,  107 => 36,  103 => 34,  99 => 33,  95 => 32,  87 => 27,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
