<?php

/* PointWebNewsBundle:Default:last_news.html.twig */
class __TwigTemplate_7fb7ae38cf73fe22dbfdec21562a925afe0e97bca8f422b20732ac46023a4c27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91d976eeb31f627b5289f743f8b05ba3db94344372cd1998f19b39e822330118 = $this->env->getExtension("native_profiler");
        $__internal_91d976eeb31f627b5289f743f8b05ba3db94344372cd1998f19b39e822330118->enter($__internal_91d976eeb31f627b5289f743f8b05ba3db94344372cd1998f19b39e822330118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebNewsBundle:Default:last_news.html.twig"));

        // line 1
        echo "<div class=\"col-md-4 col-sm-6 page-header\">
    <div class=\"panel panel-default text-center\">
        <div class=\"panel-heading\">
            <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_detail", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                ";
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 6
            echo "                    <img class=\"img-responsive img-hover\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()), 0, array(), "array"), "name", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            echo "\" data-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
            echo "\">
                ";
        } else {
            // line 8
            echo "                    <img class=\"img-responsive img-hover\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/sans_image_700x450.jpg"), "html", null, true);
            echo "\" alt=\"http://placehold.it/700x450\">
                ";
        }
        // line 10
        echo "            </a>
        </div>
        <div class=\"panel-body\">
            <h4>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</h4>
            <p>";
        // line 14
        echo twig_truncate_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resum", array()), 250, false, "...");
        echo "</p>
            <a class=\"btn btn-primary btn-block\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_detail", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo ">En savoir plus</a>
        </div>
    </div>
</div>";
        
        $__internal_91d976eeb31f627b5289f743f8b05ba3db94344372cd1998f19b39e822330118->leave($__internal_91d976eeb31f627b5289f743f8b05ba3db94344372cd1998f19b39e822330118_prof);

    }

    public function getTemplateName()
    {
        return "PointWebNewsBundle:Default:last_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  58 => 14,  54 => 13,  49 => 10,  43 => 8,  33 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div class="col-md-4 col-sm-6 page-header">*/
/*     <div class="panel panel-default text-center">*/
/*         <div class="panel-heading">*/
/*             <a href="{{ path('news_detail', {'id':entity.id}) }}">*/
/*                 {% if entity.pictures|length >0 %}*/
/*                     <img class="img-responsive img-hover" alt="{{ entity.pictures[0].name }}" src="{{ asset(entity.pictures[0].getWebPath(base)) }}" data-image="{{ asset(entity.pictures[0].getWebPath(base)) }}">*/
/*                 {% else %}*/
/*                     <img class="img-responsive img-hover" src="{{ asset('images/sans_image_700x450.jpg') }}" alt="http://placehold.it/700x450">*/
/*                 {% endif %}*/
/*             </a>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <h4>{{ entity.title }}</h4>*/
/*             <p>{{ entity.resum | truncate(250, false, '...') | raw }}</p>*/
/*             <a class="btn btn-primary btn-block" href={{ path('news_detail', {'id':entity.id}) }}>En savoir plus</a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
