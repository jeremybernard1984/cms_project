<?php

/* base.html.twig */
class __TwigTemplate_e183829cd8859e65fb1cc20cb975b6eab0debe7bae650860f7b8f494b226f167 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f0046ce9a5675bf85b4320b6fb5e36f2e3f4dc4562be661c757ae8b1c689095 = $this->env->getExtension("native_profiler");
        $__internal_1f0046ce9a5675bf85b4320b6fb5e36f2e3f4dc4562be661c757ae8b1c689095->enter($__internal_1f0046ce9a5675bf85b4320b6fb5e36f2e3f4dc4562be661c757ae8b1c689095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1f0046ce9a5675bf85b4320b6fb5e36f2e3f4dc4562be661c757ae8b1c689095->leave($__internal_1f0046ce9a5675bf85b4320b6fb5e36f2e3f4dc4562be661c757ae8b1c689095_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_876e094a2f84e30c464cc221fca211210797bc8ab8561c445880fada58fdf9c5 = $this->env->getExtension("native_profiler");
        $__internal_876e094a2f84e30c464cc221fca211210797bc8ab8561c445880fada58fdf9c5->enter($__internal_876e094a2f84e30c464cc221fca211210797bc8ab8561c445880fada58fdf9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_876e094a2f84e30c464cc221fca211210797bc8ab8561c445880fada58fdf9c5->leave($__internal_876e094a2f84e30c464cc221fca211210797bc8ab8561c445880fada58fdf9c5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_543eb5b47afd773d63cce7677d2e3a42434281282a63df897b11b5ecf2a4c251 = $this->env->getExtension("native_profiler");
        $__internal_543eb5b47afd773d63cce7677d2e3a42434281282a63df897b11b5ecf2a4c251->enter($__internal_543eb5b47afd773d63cce7677d2e3a42434281282a63df897b11b5ecf2a4c251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_543eb5b47afd773d63cce7677d2e3a42434281282a63df897b11b5ecf2a4c251->leave($__internal_543eb5b47afd773d63cce7677d2e3a42434281282a63df897b11b5ecf2a4c251_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_79bf3e2c192d3e5b729f0fda67a496f372ec4e8fc867b5ba1435fac998178996 = $this->env->getExtension("native_profiler");
        $__internal_79bf3e2c192d3e5b729f0fda67a496f372ec4e8fc867b5ba1435fac998178996->enter($__internal_79bf3e2c192d3e5b729f0fda67a496f372ec4e8fc867b5ba1435fac998178996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_79bf3e2c192d3e5b729f0fda67a496f372ec4e8fc867b5ba1435fac998178996->leave($__internal_79bf3e2c192d3e5b729f0fda67a496f372ec4e8fc867b5ba1435fac998178996_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_111864f0fb74ec6e6520245f5e610d70c8bb3cb0181ab975f9c3d1f30247cf70 = $this->env->getExtension("native_profiler");
        $__internal_111864f0fb74ec6e6520245f5e610d70c8bb3cb0181ab975f9c3d1f30247cf70->enter($__internal_111864f0fb74ec6e6520245f5e610d70c8bb3cb0181ab975f9c3d1f30247cf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_111864f0fb74ec6e6520245f5e610d70c8bb3cb0181ab975f9c3d1f30247cf70->leave($__internal_111864f0fb74ec6e6520245f5e610d70c8bb3cb0181ab975f9c3d1f30247cf70_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
