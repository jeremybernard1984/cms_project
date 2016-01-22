<?php

/* ::base.html.twig */
class __TwigTemplate_a9ab79265ef7e0de04680a9be837f62aaec1c612655a0f57747b0d0d734a1f54 extends Twig_Template
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
        $__internal_d44b9c6b88d6166709978b98e0f5bdf0df682213275dfaff3f177fa9d164ba36 = $this->env->getExtension("native_profiler");
        $__internal_d44b9c6b88d6166709978b98e0f5bdf0df682213275dfaff3f177fa9d164ba36->enter($__internal_d44b9c6b88d6166709978b98e0f5bdf0df682213275dfaff3f177fa9d164ba36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d44b9c6b88d6166709978b98e0f5bdf0df682213275dfaff3f177fa9d164ba36->leave($__internal_d44b9c6b88d6166709978b98e0f5bdf0df682213275dfaff3f177fa9d164ba36_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b67ee8ec94599e0da627207c2b9611aac75d10e6bc23915b83a9fb3c17a7b5b = $this->env->getExtension("native_profiler");
        $__internal_9b67ee8ec94599e0da627207c2b9611aac75d10e6bc23915b83a9fb3c17a7b5b->enter($__internal_9b67ee8ec94599e0da627207c2b9611aac75d10e6bc23915b83a9fb3c17a7b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b67ee8ec94599e0da627207c2b9611aac75d10e6bc23915b83a9fb3c17a7b5b->leave($__internal_9b67ee8ec94599e0da627207c2b9611aac75d10e6bc23915b83a9fb3c17a7b5b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e7f4c218b0225782a4b71f62a8f66fd2fb822d8e2dc4a7fc06db65d88e9e54c = $this->env->getExtension("native_profiler");
        $__internal_6e7f4c218b0225782a4b71f62a8f66fd2fb822d8e2dc4a7fc06db65d88e9e54c->enter($__internal_6e7f4c218b0225782a4b71f62a8f66fd2fb822d8e2dc4a7fc06db65d88e9e54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6e7f4c218b0225782a4b71f62a8f66fd2fb822d8e2dc4a7fc06db65d88e9e54c->leave($__internal_6e7f4c218b0225782a4b71f62a8f66fd2fb822d8e2dc4a7fc06db65d88e9e54c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d29bca4e9060aeaaab023823698d7e33e6abfa499c15da200fbfa34e0049d286 = $this->env->getExtension("native_profiler");
        $__internal_d29bca4e9060aeaaab023823698d7e33e6abfa499c15da200fbfa34e0049d286->enter($__internal_d29bca4e9060aeaaab023823698d7e33e6abfa499c15da200fbfa34e0049d286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d29bca4e9060aeaaab023823698d7e33e6abfa499c15da200fbfa34e0049d286->leave($__internal_d29bca4e9060aeaaab023823698d7e33e6abfa499c15da200fbfa34e0049d286_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c11cf02cfcaf83c925186c69257755864f83bfab27a1f789405b5fab46e014a1 = $this->env->getExtension("native_profiler");
        $__internal_c11cf02cfcaf83c925186c69257755864f83bfab27a1f789405b5fab46e014a1->enter($__internal_c11cf02cfcaf83c925186c69257755864f83bfab27a1f789405b5fab46e014a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c11cf02cfcaf83c925186c69257755864f83bfab27a1f789405b5fab46e014a1->leave($__internal_c11cf02cfcaf83c925186c69257755864f83bfab27a1f789405b5fab46e014a1_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
