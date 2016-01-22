<?php

/* PointWebNewsBundle:News:show.html.twig */
class __TwigTemplate_d974cab0ce5e14c6394f70785bef08045c11318e9f040ba9acb3c0697953fe3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebNewsBundle:News:show.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24652ac25e0c85acc3a4f7994c9620a9bb0d12e9c762131d360ac51caaa08061 = $this->env->getExtension("native_profiler");
        $__internal_24652ac25e0c85acc3a4f7994c9620a9bb0d12e9c762131d360ac51caaa08061->enter($__internal_24652ac25e0c85acc3a4f7994c9620a9bb0d12e9c762131d360ac51caaa08061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebNewsBundle:News:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24652ac25e0c85acc3a4f7994c9620a9bb0d12e9c762131d360ac51caaa08061->leave($__internal_24652ac25e0c85acc3a4f7994c9620a9bb0d12e9c762131d360ac51caaa08061_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_e944d288afd0b455ba0928ec5b4d9ec6f05edc561294396756e2d7ee25652976 = $this->env->getExtension("native_profiler");
        $__internal_e944d288afd0b455ba0928ec5b4d9ec6f05edc561294396756e2d7ee25652976->enter($__internal_e944d288afd0b455ba0928ec5b4d9ec6f05edc561294396756e2d7ee25652976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>News</h1>

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Titre</div>
        <div class=\"panel-body\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Description</div>
        <div class=\"panel-body\">
            ";
        // line 15
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array());
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Position</div>
        <div class=\"panel-body\">
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">En ligne</div>
        <div class=\"panel-body\">
            ";
        // line 27
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 28
        echo "        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Date de début</div>
        <div class=\"panel-body\">
            ";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate", array()), "d-m-Y"), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Date de fin</div>
        <div class=\"panel-body\">
            ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate", array()), "d-m-Y"), "html", null, true);
        echo "
        </div>
    </div>
    ";
        // line 42
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 43
            echo "
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Fichiers</div>
            <div class=\"panel-body\">
                <div id=\"gallery\" style=\"display:none;\">
                    ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 49
                echo "                        <img alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                             data-image=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                             data-description=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "description", array()), "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                </div>
            </div>
        </div>

    ";
        }
        // line 58
        echo "
    <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("admin_news");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
    <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i>
        Modifier</a>
    ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_e944d288afd0b455ba0928ec5b4d9ec6f05edc561294396756e2d7ee25652976->leave($__internal_e944d288afd0b455ba0928ec5b4d9ec6f05edc561294396756e2d7ee25652976_prof);

    }

    public function getTemplateName()
    {
        return "PointWebNewsBundle:News:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 62,  148 => 60,  144 => 59,  141 => 58,  134 => 53,  126 => 51,  122 => 50,  115 => 49,  111 => 48,  104 => 43,  102 => 42,  96 => 39,  87 => 33,  80 => 28,  74 => 27,  65 => 21,  56 => 15,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
