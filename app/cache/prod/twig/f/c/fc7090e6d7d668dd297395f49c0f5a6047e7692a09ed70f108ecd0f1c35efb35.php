<?php

/* PointWebGalleryBundle:Gallery:new.html.twig */
class __TwigTemplate_fc7090e6d7d668dd297395f49c0f5a6047e7692a09ed70f108ecd0f1c35efb35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebGalleryBundle:Gallery:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_6b27ea7ef241a39016bdd06549750f44a78536d3311753119c6865e18489226b' => array($this, 'block___internal_6b27ea7ef241a39016bdd06549750f44a78536d3311753119c6865e18489226b'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_092f72fba6ebe1913d15cad310f0a87bc75013ea1eff7869b5433fe9fd7a9de2 = $this->env->getExtension("native_profiler");
        $__internal_092f72fba6ebe1913d15cad310f0a87bc75013ea1eff7869b5433fe9fd7a9de2->enter($__internal_092f72fba6ebe1913d15cad310f0a87bc75013ea1eff7869b5433fe9fd7a9de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGalleryBundle:Gallery:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_092f72fba6ebe1913d15cad310f0a87bc75013ea1eff7869b5433fe9fd7a9de2->leave($__internal_092f72fba6ebe1913d15cad310f0a87bc75013ea1eff7869b5433fe9fd7a9de2_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_8fa9fbcf4b2cab8212722fe6836d3659a9b4df1e4efedb57645eff8050c23281 = $this->env->getExtension("native_profiler");
        $__internal_8fa9fbcf4b2cab8212722fe6836d3659a9b4df1e4efedb57645eff8050c23281->enter($__internal_8fa9fbcf4b2cab8212722fe6836d3659a9b4df1e4efedb57645eff8050c23281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Ajout d'une gallerie</h1>
    ";
        // line 5
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
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"col-lg-12 docTitle\">
            Gestion des images/documents
        </div>
        <div id=\"dropZoneFile\" class=\"col-lg-2\">
            <iframe src=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\"></iframe>
            <div class=\"fichierInfos\">
                <p>Déplacez vos fichiers<br>
                    ou cliquez dans la zone</p>
            </div>
        </div>
        <div class=\"col-lg-10\">
            <ul class=\"files\" data-prototype=\"";
        // line 50
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_6b27ea7ef241a39016bdd06549750f44a78536d3311753119c6865e18489226b", $context, $blocks));
        echo "\">
                ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 52
            echo "                    <li class=\"formFile col-sm-3\">
                        ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'errors');
            echo "
                        ";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'widget');
            echo "
                        <div style=\"clear:both;width: 100%;height: 80px;background: url('";
            // line 55
            if ($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["picture"], "vars", array()), "value", array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            }
            echo "') no-repeat center #e1e1e8;background-size: contain;\"></div>
                        ";
            // line 56
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'errors');
            echo "
                        ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'widget');
            echo "
                        ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'errors');
            echo "
                        ";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'widget', array("attr" => array("value" => "0")));
            echo "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </ul>
        </div>
    </fieldset>
    ";
        // line 65
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 66
        echo "

    <div class=\"col-lg-12 submitBt\">
        <div style=\"float: left\">
            <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("admin_news");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
        </div>
        ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_8fa9fbcf4b2cab8212722fe6836d3659a9b4df1e4efedb57645eff8050c23281->leave($__internal_8fa9fbcf4b2cab8212722fe6836d3659a9b4df1e4efedb57645eff8050c23281_prof);

    }

    // line 50
    public function block___internal_6b27ea7ef241a39016bdd06549750f44a78536d3311753119c6865e18489226b($context, array $blocks = array())
    {
        $__internal_b8625a51c0ab4e143aac4a925d8b955ff9e4b1a7eb81fd89fa98f2e77fdae83a = $this->env->getExtension("native_profiler");
        $__internal_b8625a51c0ab4e143aac4a925d8b955ff9e4b1a7eb81fd89fa98f2e77fdae83a->enter($__internal_b8625a51c0ab4e143aac4a925d8b955ff9e4b1a7eb81fd89fa98f2e77fdae83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_6b27ea7ef241a39016bdd06549750f44a78536d3311753119c6865e18489226b"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebGalleryBundle:Gallery:new.html.twig", 50)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_b8625a51c0ab4e143aac4a925d8b955ff9e4b1a7eb81fd89fa98f2e77fdae83a->leave($__internal_b8625a51c0ab4e143aac4a925d8b955ff9e4b1a7eb81fd89fa98f2e77fdae83a_prof);

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
        return array (  205 => 50,  195 => 72,  190 => 70,  184 => 66,  182 => 65,  177 => 62,  168 => 59,  164 => 58,  160 => 57,  156 => 56,  150 => 55,  146 => 54,  142 => 53,  139 => 52,  135 => 51,  131 => 50,  121 => 43,  110 => 35,  106 => 34,  101 => 32,  94 => 28,  90 => 27,  85 => 25,  77 => 20,  73 => 19,  68 => 17,  60 => 12,  56 => 11,  51 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
