<?php

/* PointWebFaqBundle:faq:show.html.twig */
class __TwigTemplate_33a2e6cbad39b1a34246171c3b1d8510b5fc9c3541486fbeda4959eca4fec940 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebFaqBundle:faq:show.html.twig", 1);
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
        $__internal_2ec15360c6938166d3c3bcefa3aaf793c2e3b74d172bdb485a9a94facdbea423 = $this->env->getExtension("native_profiler");
        $__internal_2ec15360c6938166d3c3bcefa3aaf793c2e3b74d172bdb485a9a94facdbea423->enter($__internal_2ec15360c6938166d3c3bcefa3aaf793c2e3b74d172bdb485a9a94facdbea423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebFaqBundle:faq:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec15360c6938166d3c3bcefa3aaf793c2e3b74d172bdb485a9a94facdbea423->leave($__internal_2ec15360c6938166d3c3bcefa3aaf793c2e3b74d172bdb485a9a94facdbea423_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_03bb683a0a5f2ea608b38731775f0a73b5bad107f5baab56fb0b325398fa9995 = $this->env->getExtension("native_profiler");
        $__internal_03bb683a0a5f2ea608b38731775f0a73b5bad107f5baab56fb0b325398fa9995->enter($__internal_03bb683a0a5f2ea608b38731775f0a73b5bad107f5baab56fb0b325398fa9995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>FAQ</h1>


    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Question</div>
        <div class=\"panel-body\">
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "question", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Réponse</div>
        <div class=\"panel-body\">
            ";
        // line 16
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answer", array());
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Position</div>
        <div class=\"panel-body\">
            ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">En ligne</div>
        <div class=\"panel-body\">
            ";
        // line 28
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 29
        echo "        </div>
    </div>


    <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("admin_faq");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la
        liste</a>
    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_faq_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i>
        Modifier</a>
    ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_03bb683a0a5f2ea608b38731775f0a73b5bad107f5baab56fb0b325398fa9995->leave($__internal_03bb683a0a5f2ea608b38731775f0a73b5bad107f5baab56fb0b325398fa9995_prof);

    }

    public function getTemplateName()
    {
        return "PointWebFaqBundle:faq:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 37,  92 => 35,  87 => 33,  81 => 29,  75 => 28,  66 => 22,  57 => 16,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
