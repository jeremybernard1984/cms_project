<?php

/* PointWebUserBundle:User:show.html.twig */
class __TwigTemplate_e14b050ef0642e035a75249c824224a03d5153f9e8325604d16d8b26a1e5c70b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebUserBundle:User:show.html.twig", 1);
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
        $__internal_5681804995c623f297b096b55fcf04ccb2389d3e5784c0ce361f6c864c889a70 = $this->env->getExtension("native_profiler");
        $__internal_5681804995c623f297b096b55fcf04ccb2389d3e5784c0ce361f6c864c889a70->enter($__internal_5681804995c623f297b096b55fcf04ccb2389d3e5784c0ce361f6c864c889a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebUserBundle:User:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5681804995c623f297b096b55fcf04ccb2389d3e5784c0ce361f6c864c889a70->leave($__internal_5681804995c623f297b096b55fcf04ccb2389d3e5784c0ce361f6c864c889a70_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_a1edbb3821d253085c69a34adfa55a78919eb638fb55a584a3124d9c1c7cf9f1 = $this->env->getExtension("native_profiler");
        $__internal_a1edbb3821d253085c69a34adfa55a78919eb638fb55a584a3124d9c1c7cf9f1->enter($__internal_a1edbb3821d253085c69a34adfa55a78919eb638fb55a584a3124d9c1c7cf9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>User</h1>

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Nom d'utilisateur</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Prénom</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Nom</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Email</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Roles</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 44
            echo "                <p>";
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Actif ?</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 53
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enabled", array()) == true)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 54
        echo "        </div>
    </div>

    <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i>
        Modifier</a>
    ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_a1edbb3821d253085c69a34adfa55a78919eb638fb55a584a3124d9c1c7cf9f1->leave($__internal_a1edbb3821d253085c69a34adfa55a78919eb638fb55a584a3124d9c1c7cf9f1_prof);

    }

    public function getTemplateName()
    {
        return "PointWebUserBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 60,  130 => 58,  126 => 57,  121 => 54,  115 => 53,  106 => 46,  97 => 44,  93 => 43,  82 => 35,  71 => 27,  60 => 19,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
