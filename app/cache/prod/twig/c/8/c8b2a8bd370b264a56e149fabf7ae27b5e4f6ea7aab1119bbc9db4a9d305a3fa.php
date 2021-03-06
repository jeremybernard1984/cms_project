<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c8b2a8bd370b264a56e149fabf7ae27b5e4f6ea7aab1119bbc9db4a9d305a3fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5524368d36d2dce33c843346cc4d14dc1fd3f42a6d9ea8739539b0f9e8a96747 = $this->env->getExtension("native_profiler");
        $__internal_5524368d36d2dce33c843346cc4d14dc1fd3f42a6d9ea8739539b0f9e8a96747->enter($__internal_5524368d36d2dce33c843346cc4d14dc1fd3f42a6d9ea8739539b0f9e8a96747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5524368d36d2dce33c843346cc4d14dc1fd3f42a6d9ea8739539b0f9e8a96747->leave($__internal_5524368d36d2dce33c843346cc4d14dc1fd3f42a6d9ea8739539b0f9e8a96747_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed8ea957c867c1cda452b50689867ee4ff9cdd0682b91ff6d7b991e89b6dd8e4 = $this->env->getExtension("native_profiler");
        $__internal_ed8ea957c867c1cda452b50689867ee4ff9cdd0682b91ff6d7b991e89b6dd8e4->enter($__internal_ed8ea957c867c1cda452b50689867ee4ff9cdd0682b91ff6d7b991e89b6dd8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ed8ea957c867c1cda452b50689867ee4ff9cdd0682b91ff6d7b991e89b6dd8e4->leave($__internal_ed8ea957c867c1cda452b50689867ee4ff9cdd0682b91ff6d7b991e89b6dd8e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb4625fa08a29fec278f2ee0535a9cabd658123f768bc00c30b09653d1c6573b = $this->env->getExtension("native_profiler");
        $__internal_bb4625fa08a29fec278f2ee0535a9cabd658123f768bc00c30b09653d1c6573b->enter($__internal_bb4625fa08a29fec278f2ee0535a9cabd658123f768bc00c30b09653d1c6573b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb4625fa08a29fec278f2ee0535a9cabd658123f768bc00c30b09653d1c6573b->leave($__internal_bb4625fa08a29fec278f2ee0535a9cabd658123f768bc00c30b09653d1c6573b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cff95666fae052127b65904c5f3e49e4713acf29a67e31a50c3f290690783dd = $this->env->getExtension("native_profiler");
        $__internal_1cff95666fae052127b65904c5f3e49e4713acf29a67e31a50c3f290690783dd->enter($__internal_1cff95666fae052127b65904c5f3e49e4713acf29a67e31a50c3f290690783dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1cff95666fae052127b65904c5f3e49e4713acf29a67e31a50c3f290690783dd->leave($__internal_1cff95666fae052127b65904c5f3e49e4713acf29a67e31a50c3f290690783dd_prof);

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
