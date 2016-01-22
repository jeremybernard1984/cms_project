<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8a3e8f2d6d11e035a8f2f2fff61fbbc2e40c595c1772ff258065cd917b14f253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6df67c0f27640467d3dc68da21ab7604a8b0384689d0320c63c474715f4af98f = $this->env->getExtension("native_profiler");
        $__internal_6df67c0f27640467d3dc68da21ab7604a8b0384689d0320c63c474715f4af98f->enter($__internal_6df67c0f27640467d3dc68da21ab7604a8b0384689d0320c63c474715f4af98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6df67c0f27640467d3dc68da21ab7604a8b0384689d0320c63c474715f4af98f->leave($__internal_6df67c0f27640467d3dc68da21ab7604a8b0384689d0320c63c474715f4af98f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8245d45193072d3366b49eee5f39399c18212c474127eac2d1c7a525ee803ed3 = $this->env->getExtension("native_profiler");
        $__internal_8245d45193072d3366b49eee5f39399c18212c474127eac2d1c7a525ee803ed3->enter($__internal_8245d45193072d3366b49eee5f39399c18212c474127eac2d1c7a525ee803ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8245d45193072d3366b49eee5f39399c18212c474127eac2d1c7a525ee803ed3->leave($__internal_8245d45193072d3366b49eee5f39399c18212c474127eac2d1c7a525ee803ed3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f6f48fd3b1f3d99f568f3253baef1cd5846e8c0d434e5493c41cd451e02b261 = $this->env->getExtension("native_profiler");
        $__internal_0f6f48fd3b1f3d99f568f3253baef1cd5846e8c0d434e5493c41cd451e02b261->enter($__internal_0f6f48fd3b1f3d99f568f3253baef1cd5846e8c0d434e5493c41cd451e02b261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0f6f48fd3b1f3d99f568f3253baef1cd5846e8c0d434e5493c41cd451e02b261->leave($__internal_0f6f48fd3b1f3d99f568f3253baef1cd5846e8c0d434e5493c41cd451e02b261_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f67e8ddedc01d4919fd35106645dbed5ee0ac2b39f59c7d3ca1fb394c217fed1 = $this->env->getExtension("native_profiler");
        $__internal_f67e8ddedc01d4919fd35106645dbed5ee0ac2b39f59c7d3ca1fb394c217fed1->enter($__internal_f67e8ddedc01d4919fd35106645dbed5ee0ac2b39f59c7d3ca1fb394c217fed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f67e8ddedc01d4919fd35106645dbed5ee0ac2b39f59c7d3ca1fb394c217fed1->leave($__internal_f67e8ddedc01d4919fd35106645dbed5ee0ac2b39f59c7d3ca1fb394c217fed1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
