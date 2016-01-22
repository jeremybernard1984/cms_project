<?php

/* ::base.html.twig */
class __TwigTemplate_8eaefa9e7686f4cf98c921d4a96ecb1999fee01643504d70bd71e9a24cd34b86 extends Twig_Template
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
        $__internal_e10ce9770d4f0580e69fbf746f1989df1277a6e252ffe72b81389e47f2b58a62 = $this->env->getExtension("native_profiler");
        $__internal_e10ce9770d4f0580e69fbf746f1989df1277a6e252ffe72b81389e47f2b58a62->enter($__internal_e10ce9770d4f0580e69fbf746f1989df1277a6e252ffe72b81389e47f2b58a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e10ce9770d4f0580e69fbf746f1989df1277a6e252ffe72b81389e47f2b58a62->leave($__internal_e10ce9770d4f0580e69fbf746f1989df1277a6e252ffe72b81389e47f2b58a62_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1ff1d6f09da97ee6713f836f3af9ab976ccbce741e309a6757977708f128694 = $this->env->getExtension("native_profiler");
        $__internal_b1ff1d6f09da97ee6713f836f3af9ab976ccbce741e309a6757977708f128694->enter($__internal_b1ff1d6f09da97ee6713f836f3af9ab976ccbce741e309a6757977708f128694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b1ff1d6f09da97ee6713f836f3af9ab976ccbce741e309a6757977708f128694->leave($__internal_b1ff1d6f09da97ee6713f836f3af9ab976ccbce741e309a6757977708f128694_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_259819cfe3e2a26bf058ae86af7e098ad616447fdc48afaa4178c4928a79edce = $this->env->getExtension("native_profiler");
        $__internal_259819cfe3e2a26bf058ae86af7e098ad616447fdc48afaa4178c4928a79edce->enter($__internal_259819cfe3e2a26bf058ae86af7e098ad616447fdc48afaa4178c4928a79edce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_259819cfe3e2a26bf058ae86af7e098ad616447fdc48afaa4178c4928a79edce->leave($__internal_259819cfe3e2a26bf058ae86af7e098ad616447fdc48afaa4178c4928a79edce_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fde76d1d03f5c6df2a21852eb7bde2d9494cb60183f60abeb07acf8ac614ed13 = $this->env->getExtension("native_profiler");
        $__internal_fde76d1d03f5c6df2a21852eb7bde2d9494cb60183f60abeb07acf8ac614ed13->enter($__internal_fde76d1d03f5c6df2a21852eb7bde2d9494cb60183f60abeb07acf8ac614ed13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fde76d1d03f5c6df2a21852eb7bde2d9494cb60183f60abeb07acf8ac614ed13->leave($__internal_fde76d1d03f5c6df2a21852eb7bde2d9494cb60183f60abeb07acf8ac614ed13_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9bba8f6c5a51d45102e9ad3b4c72a4ea44c1d80da5a41056ec11d005b463097 = $this->env->getExtension("native_profiler");
        $__internal_d9bba8f6c5a51d45102e9ad3b4c72a4ea44c1d80da5a41056ec11d005b463097->enter($__internal_d9bba8f6c5a51d45102e9ad3b4c72a4ea44c1d80da5a41056ec11d005b463097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d9bba8f6c5a51d45102e9ad3b4c72a4ea44c1d80da5a41056ec11d005b463097->leave($__internal_d9bba8f6c5a51d45102e9ad3b4c72a4ea44c1d80da5a41056ec11d005b463097_prof);

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
