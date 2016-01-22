<?php

/* PointWebPartnerBundle:Partner:show.html.twig */
class __TwigTemplate_2d310d6e286e6054239ca79ad00bb11225506c2f51c87a97d832bde994541bf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebPartnerBundle:Partner:show.html.twig", 1);
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
        $__internal_2f0df345d41a56e4ee99e34333b83b4293945f2aa7930cb49c2d62065aa25f5e = $this->env->getExtension("native_profiler");
        $__internal_2f0df345d41a56e4ee99e34333b83b4293945f2aa7930cb49c2d62065aa25f5e->enter($__internal_2f0df345d41a56e4ee99e34333b83b4293945f2aa7930cb49c2d62065aa25f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebPartnerBundle:Partner:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f0df345d41a56e4ee99e34333b83b4293945f2aa7930cb49c2d62065aa25f5e->leave($__internal_2f0df345d41a56e4ee99e34333b83b4293945f2aa7930cb49c2d62065aa25f5e_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_c1ccfd9593d1b4606e1d5420400ce81f9b8ea208128ec40e02518ca975bf1ed1 = $this->env->getExtension("native_profiler");
        $__internal_c1ccfd9593d1b4606e1d5420400ce81f9b8ea208128ec40e02518ca975bf1ed1->enter($__internal_c1ccfd9593d1b4606e1d5420400ce81f9b8ea208128ec40e02518ca975bf1ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Partner</h1>

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Nom</div>
        <div class=\"panel-body\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
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
        <div class=\"panel-heading\">Lien</div>
        <div class=\"panel-body\">
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "link", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Position</div>
        <div class=\"panel-body\">
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">En ligne</div>
        <div class=\"panel-body\">
            ";
        // line 33
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 34
        echo "        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Date de début</div>
        <div class=\"panel-body\">
            ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "startDate", array()), "d-m-Y"), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Date de fin</div>
        <div class=\"panel-body\">
            ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "endDate", array()), "d-m-Y"), "html", null, true);
        echo "
        </div>
    </div>
    ";
        // line 48
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 49
            echo "
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Fichiers</div>
            <div class=\"panel-body\">
                <div id=\"gallery\" style=\"display:none;\">
                    ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 55
                echo "                        <img alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                             data-image=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                             data-description=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "description", array()), "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </div>
            </div>
        </div>

    ";
        }
        // line 64
        echo "
    <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("admin_partner");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la
        liste</a>
    <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_partner_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i>
        Modifier</a>
    ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_c1ccfd9593d1b4606e1d5420400ce81f9b8ea208128ec40e02518ca975bf1ed1->leave($__internal_c1ccfd9593d1b4606e1d5420400ce81f9b8ea208128ec40e02518ca975bf1ed1_prof);

    }

    public function getTemplateName()
    {
        return "PointWebPartnerBundle:Partner:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 69,  158 => 67,  153 => 65,  150 => 64,  143 => 59,  135 => 57,  131 => 56,  124 => 55,  120 => 54,  113 => 49,  111 => 48,  105 => 45,  96 => 39,  89 => 34,  83 => 33,  74 => 27,  65 => 21,  56 => 15,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
