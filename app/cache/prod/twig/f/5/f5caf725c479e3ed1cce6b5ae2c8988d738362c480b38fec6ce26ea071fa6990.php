<?php

/* PointWebProductBundle:PartnerCategory:new.html.twig */
class __TwigTemplate_f5caf725c479e3ed1cce6b5ae2c8988d738362c480b38fec6ce26ea071fa6990 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:PartnerCategory:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_16186ab2caba81a3a5dca27c4a682d5133a3fab1a8dba4b97b4313303cfd7ab3' => array($this, 'block___internal_16186ab2caba81a3a5dca27c4a682d5133a3fab1a8dba4b97b4313303cfd7ab3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea7547b044bb8d33e1dd1b819d069d143f2d3ba12ec76c787255c890f88a8009 = $this->env->getExtension("native_profiler");
        $__internal_ea7547b044bb8d33e1dd1b819d069d143f2d3ba12ec76c787255c890f88a8009->enter($__internal_ea7547b044bb8d33e1dd1b819d069d143f2d3ba12ec76c787255c890f88a8009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:PartnerCategory:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea7547b044bb8d33e1dd1b819d069d143f2d3ba12ec76c787255c890f88a8009->leave($__internal_ea7547b044bb8d33e1dd1b819d069d143f2d3ba12ec76c787255c890f88a8009_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_905857326b141b6e49392ffe68c6789908cf3bdd816c79916bcd9f5e63de6bcf = $this->env->getExtension("native_profiler");
        $__internal_905857326b141b6e49392ffe68c6789908cf3bdd816c79916bcd9f5e63de6bcf->enter($__internal_905857326b141b6e49392ffe68c6789908cf3bdd816c79916bcd9f5e63de6bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Création d'une Catégorie</h1>

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
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'errors');
        echo "
            ";
        // line 41
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
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_16186ab2caba81a3a5dca27c4a682d5133a3fab1a8dba4b97b4313303cfd7ab3", $context, $blocks));
        echo "\">
        ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 56
            echo "            <li class=\"formFile\">
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
        echo "    </ul>


</fieldset>
    ";
        // line 95
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 96
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
";
        
        $__internal_905857326b141b6e49392ffe68c6789908cf3bdd816c79916bcd9f5e63de6bcf->leave($__internal_905857326b141b6e49392ffe68c6789908cf3bdd816c79916bcd9f5e63de6bcf_prof);

    }

    // line 54
    public function block___internal_16186ab2caba81a3a5dca27c4a682d5133a3fab1a8dba4b97b4313303cfd7ab3($context, array $blocks = array())
    {
        $__internal_af83e2bf133718d414df5a7d3f0b42e33de26dfa19ce99a178316ffd37e6d370 = $this->env->getExtension("native_profiler");
        $__internal_af83e2bf133718d414df5a7d3f0b42e33de26dfa19ce99a178316ffd37e6d370->enter($__internal_af83e2bf133718d414df5a7d3f0b42e33de26dfa19ce99a178316ffd37e6d370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_16186ab2caba81a3a5dca27c4a682d5133a3fab1a8dba4b97b4313303cfd7ab3"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebProductBundle:PartnerCategory:new.html.twig", 54)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_af83e2bf133718d414df5a7d3f0b42e33de26dfa19ce99a178316ffd37e6d370->leave($__internal_af83e2bf133718d414df5a7d3f0b42e33de26dfa19ce99a178316ffd37e6d370_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:PartnerCategory:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 54,  241 => 98,  235 => 96,  233 => 95,  227 => 91,  213 => 85,  203 => 78,  197 => 75,  193 => 74,  188 => 72,  181 => 68,  177 => 67,  172 => 65,  165 => 61,  161 => 60,  156 => 58,  152 => 56,  148 => 55,  144 => 54,  136 => 49,  125 => 41,  121 => 40,  116 => 38,  109 => 34,  105 => 33,  100 => 31,  93 => 27,  89 => 26,  84 => 24,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
