<?php

/* PointWebNewsBundle:Default:last_news.html.twig */
class __TwigTemplate_56567d24c9d0f39cb4767f850187683fbe140695d8b2e5aee84dbd6eb2d8b02f extends Twig_Template
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
        // line 1
        echo "<div class=\"col-md-4 col-sm-6 page-header\">
    <div class=\"panel panel-default text-center\">
        <div class=\"panel-heading\">
            <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_detail", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">
                ";
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pictures", array())) > 0)) {
            // line 6
            echo "                    <img class=\"img-responsive img-hover\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pictures", array()), 0, array(), "array"), "name", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : null)), "method")), "html", null, true);
            echo "\" data-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : null)), "method")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), "html", null, true);
        echo "</h4>
            <p>";
        // line 14
        echo twig_truncate_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "resum", array()), 250, false, "...");
        echo "</p>
            <a class=\"btn btn-primary btn-block\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_detail", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo ">En savoir plus</a>
        </div>
    </div>
</div>";
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
        return array (  59 => 15,  55 => 14,  51 => 13,  46 => 10,  40 => 8,  30 => 6,  28 => 5,  24 => 4,  19 => 1,);
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
