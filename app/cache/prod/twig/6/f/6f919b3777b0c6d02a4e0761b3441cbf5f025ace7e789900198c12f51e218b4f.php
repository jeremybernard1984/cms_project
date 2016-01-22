<?php

/* PointWebProductBundle:Category:new.html.twig */
class __TwigTemplate_6f919b3777b0c6d02a4e0761b3441cbf5f025ace7e789900198c12f51e218b4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:Category:new.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
            '__internal_c324a5a198aba83a3dcce89290369fb877e1b7929374774291b7b2be1cfd00ea' => array($this, 'block___internal_c324a5a198aba83a3dcce89290369fb877e1b7929374774291b7b2be1cfd00ea'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48772734c9a33c7985a8a70a082950caa34f5d35aebc1e3a00d143cf9e20a185 = $this->env->getExtension("native_profiler");
        $__internal_48772734c9a33c7985a8a70a082950caa34f5d35aebc1e3a00d143cf9e20a185->enter($__internal_48772734c9a33c7985a8a70a082950caa34f5d35aebc1e3a00d143cf9e20a185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48772734c9a33c7985a8a70a082950caa34f5d35aebc1e3a00d143cf9e20a185->leave($__internal_48772734c9a33c7985a8a70a082950caa34f5d35aebc1e3a00d143cf9e20a185_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_552df97ad3900d96b7c10d7adb158d7114bd8311e272e86a8c36db030bcc1767 = $this->env->getExtension("native_profiler");
        $__internal_552df97ad3900d96b7c10d7adb158d7114bd8311e272e86a8c36db030bcc1767->enter($__internal_552df97ad3900d96b7c10d7adb158d7114bd8311e272e86a8c36db030bcc1767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "group_cat", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "group_cat", array()), 'errors');
        echo "
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "group_cat", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level_cat", array()), 'label');
        echo "
        <div class=\"col-lg-10\">
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level_cat", array()), 'errors');
        echo "
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level_cat", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-lg-2 control-label\">
            Déplacez vos fichiers ou cliquez dans la zone :
        </label>
        <div id=\"dropZoneFile\" class=\"col-lg-10\">
            <iframe src=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\">
            </iframe>
        </div>
    </div>
    <ul class=\"files\"
        data-prototype=\"";
        // line 68
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_c324a5a198aba83a3dcce89290369fb877e1b7929374774291b7b2be1cfd00ea", $context, $blocks));
        echo "\">
        ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 70
            echo "            <li class=\"formFile\">
                <div class=\"form-group\">
                    ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'label');
            echo "
                    <div class=\"col-lg-10\">
                        ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'errors');
            echo "
                        ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "name", array()), 'widget');
            echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'label');
            echo "
                    <div class=\"col-lg-10\">
                        ";
            // line 81
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'errors');
            echo "
                        ";
            // line 82
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "description", array()), 'widget');
            echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'label');
            echo "
                    <div class=\"col-lg-10\">
                        ";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'errors');
            echo "
                        ";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "position", array()), 'widget');
            echo "
                    </div>
                </div>
                ";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["picture"], "tmpPath", array()), 'widget');
            echo "
                <div class=\"form-group\">
                    <label class=\"col-lg-2 control-label\">
                        Fichier :
                    </label>
                    <div class=\"col-lg-10\">
                        <img class=\"formFilePicture\"
                             src=\"";
            // line 99
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
        // line 105
        echo "    </ul>


</fieldset>
    ";
        // line 109
        $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "setRendered", array());
        // line 110
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
";
        
        $__internal_552df97ad3900d96b7c10d7adb158d7114bd8311e272e86a8c36db030bcc1767->leave($__internal_552df97ad3900d96b7c10d7adb158d7114bd8311e272e86a8c36db030bcc1767_prof);

    }

    // line 68
    public function block___internal_c324a5a198aba83a3dcce89290369fb877e1b7929374774291b7b2be1cfd00ea($context, array $blocks = array())
    {
        $__internal_9b9e2f145e63984e20e45cbf89fc40eac33d0a1c2da1f78af0afffda5f347ea1 = $this->env->getExtension("native_profiler");
        $__internal_9b9e2f145e63984e20e45cbf89fc40eac33d0a1c2da1f78af0afffda5f347ea1->enter($__internal_9b9e2f145e63984e20e45cbf89fc40eac33d0a1c2da1f78af0afffda5f347ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_c324a5a198aba83a3dcce89290369fb877e1b7929374774291b7b2be1cfd00ea"));

        $this->loadTemplate("PointWebAdminBundle:Form:prototype.html.twig", "PointWebProductBundle:Category:new.html.twig", 68)->display(array_merge($context, array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pictures", array()), "vars", array()), "prototype", array()))));
        
        $__internal_9b9e2f145e63984e20e45cbf89fc40eac33d0a1c2da1f78af0afffda5f347ea1->leave($__internal_9b9e2f145e63984e20e45cbf89fc40eac33d0a1c2da1f78af0afffda5f347ea1_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 68,  273 => 112,  267 => 110,  265 => 109,  259 => 105,  245 => 99,  235 => 92,  229 => 89,  225 => 88,  220 => 86,  213 => 82,  209 => 81,  204 => 79,  197 => 75,  193 => 74,  188 => 72,  184 => 70,  180 => 69,  176 => 68,  168 => 63,  157 => 55,  153 => 54,  148 => 52,  141 => 48,  137 => 47,  132 => 45,  125 => 41,  121 => 40,  116 => 38,  109 => 34,  105 => 33,  100 => 31,  93 => 27,  89 => 26,  84 => 24,  76 => 19,  72 => 18,  67 => 16,  60 => 12,  56 => 11,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
