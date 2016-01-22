<?php

/* PointWebAdminBundle::base.html.twig */
class __TwigTemplate_3cfe17832f602c4525a31a74eb6eb3245cef481e9c16ab751eeba7c920f12472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_content' => array($this, 'block_body_content'),
            'content_left' => array($this, 'block_content_left'),
            'content_right' => array($this, 'block_content_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3f4db108aefced65a50838478e7f12ceeb8ae4517520be8336f70e9bd269350 = $this->env->getExtension("native_profiler");
        $__internal_a3f4db108aefced65a50838478e7f12ceeb8ae4517520be8336f70e9bd269350->enter($__internal_a3f4db108aefced65a50838478e7f12ceeb8ae4517520be8336f70e9bd269350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->loadTemplate("PointWebAdminBundle::_header.html.twig", "PointWebAdminBundle::base.html.twig", 6)->display($context);
        // line 7
        echo "</head>
<body>
<div id=\"wrapper\">
    <div class=\"container-fluid\" id=\"chargement\">Loading...<span id=\"chargement-infos\"></span></div>
    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
        ";
        // line 13
        $this->loadTemplate("PointWebAdminBundle::_menutop_admin.html.twig", "PointWebAdminBundle::base.html.twig", 13)->display($context);
        // line 14
        echo "        ";
        $this->loadTemplate("PointWebAdminBundle::_menuleft_admin.html.twig", "PointWebAdminBundle::base.html.twig", 14)->display($context);
        // line 15
        echo "    </nav>
    <div id=\"page-wrapper\">
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "</body>
<footer>
    ";
        // line 38
        $this->displayBlock('footer', $context, $blocks);
        // line 41
        echo "</footer>
</html>
";
        
        $__internal_a3f4db108aefced65a50838478e7f12ceeb8ae4517520be8336f70e9bd269350->leave($__internal_a3f4db108aefced65a50838478e7f12ceeb8ae4517520be8336f70e9bd269350_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39d39c68b54be8e4c6b6753c373b23f71623769d7fd7bb1a0f808943f168f1a6 = $this->env->getExtension("native_profiler");
        $__internal_39d39c68b54be8e4c6b6753c373b23f71623769d7fd7bb1a0f808943f168f1a6->enter($__internal_39d39c68b54be8e4c6b6753c373b23f71623769d7fd7bb1a0f808943f168f1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_39d39c68b54be8e4c6b6753c373b23f71623769d7fd7bb1a0f808943f168f1a6->leave($__internal_39d39c68b54be8e4c6b6753c373b23f71623769d7fd7bb1a0f808943f168f1a6_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_51a787d6866bba96df51861136ed35c52ff56ee4d704eda2c129d5a82b5ad0a1 = $this->env->getExtension("native_profiler");
        $__internal_51a787d6866bba96df51861136ed35c52ff56ee4d704eda2c129d5a82b5ad0a1->enter($__internal_51a787d6866bba96df51861136ed35c52ff56ee4d704eda2c129d5a82b5ad0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "            <!-- /.row -->
            <div class=\"row\">
                ";
        // line 20
        $this->displayBlock('body_content', $context, $blocks);
        // line 25
        echo "            </div>
            <!-- /.row -->
        ";
        
        $__internal_51a787d6866bba96df51861136ed35c52ff56ee4d704eda2c129d5a82b5ad0a1->leave($__internal_51a787d6866bba96df51861136ed35c52ff56ee4d704eda2c129d5a82b5ad0a1_prof);

    }

    // line 20
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_78af4d017a0413d28171da83d69b5ddd11ab7efe10c6c0610818d82aaf910c78 = $this->env->getExtension("native_profiler");
        $__internal_78af4d017a0413d28171da83d69b5ddd11ab7efe10c6c0610818d82aaf910c78->enter($__internal_78af4d017a0413d28171da83d69b5ddd11ab7efe10c6c0610818d82aaf910c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 21
        echo "                    ";
        $this->displayBlock('content_left', $context, $blocks);
        // line 23
        echo "                    ";
        $this->displayBlock('content_right', $context, $blocks);
        // line 24
        echo "                ";
        
        $__internal_78af4d017a0413d28171da83d69b5ddd11ab7efe10c6c0610818d82aaf910c78->leave($__internal_78af4d017a0413d28171da83d69b5ddd11ab7efe10c6c0610818d82aaf910c78_prof);

    }

    // line 21
    public function block_content_left($context, array $blocks = array())
    {
        $__internal_356b6703b9683bd2c0ea2d3ee1734743b6ed7de42eed78a6731a474190da7128 = $this->env->getExtension("native_profiler");
        $__internal_356b6703b9683bd2c0ea2d3ee1734743b6ed7de42eed78a6731a474190da7128->enter($__internal_356b6703b9683bd2c0ea2d3ee1734743b6ed7de42eed78a6731a474190da7128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_left"));

        // line 22
        echo "                    ";
        
        $__internal_356b6703b9683bd2c0ea2d3ee1734743b6ed7de42eed78a6731a474190da7128->leave($__internal_356b6703b9683bd2c0ea2d3ee1734743b6ed7de42eed78a6731a474190da7128_prof);

    }

    // line 23
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_f9bc520888b33a963090781f21931f4e92cd39f24734333bb48d81f3483f842b = $this->env->getExtension("native_profiler");
        $__internal_f9bc520888b33a963090781f21931f4e92cd39f24734333bb48d81f3483f842b->enter($__internal_f9bc520888b33a963090781f21931f4e92cd39f24734333bb48d81f3483f842b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        
        $__internal_f9bc520888b33a963090781f21931f4e92cd39f24734333bb48d81f3483f842b->leave($__internal_f9bc520888b33a963090781f21931f4e92cd39f24734333bb48d81f3483f842b_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_332bd2cc11049435f4e7ceb16f46122b9f374e0837ac2cb8bbe881c83fdc28e2 = $this->env->getExtension("native_profiler");
        $__internal_332bd2cc11049435f4e7ceb16f46122b9f374e0837ac2cb8bbe881c83fdc28e2->enter($__internal_332bd2cc11049435f4e7ceb16f46122b9f374e0837ac2cb8bbe881c83fdc28e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebAdminBundle::base.html.twig", 34)->display($context);
        
        $__internal_332bd2cc11049435f4e7ceb16f46122b9f374e0837ac2cb8bbe881c83fdc28e2->leave($__internal_332bd2cc11049435f4e7ceb16f46122b9f374e0837ac2cb8bbe881c83fdc28e2_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fe046fff55d2b07eb9553d907daf0d9d4c1fd8b7e613a3cf58c4b67c8da22c10 = $this->env->getExtension("native_profiler");
        $__internal_fe046fff55d2b07eb9553d907daf0d9d4c1fd8b7e613a3cf58c4b67c8da22c10->enter($__internal_fe046fff55d2b07eb9553d907daf0d9d4c1fd8b7e613a3cf58c4b67c8da22c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 39
        echo "
    ";
        
        $__internal_fe046fff55d2b07eb9553d907daf0d9d4c1fd8b7e613a3cf58c4b67c8da22c10->leave($__internal_fe046fff55d2b07eb9553d907daf0d9d4c1fd8b7e613a3cf58c4b67c8da22c10_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 39,  174 => 38,  166 => 34,  160 => 33,  149 => 23,  142 => 22,  136 => 21,  129 => 24,  126 => 23,  123 => 21,  117 => 20,  108 => 25,  106 => 20,  102 => 18,  96 => 17,  84 => 5,  75 => 41,  73 => 38,  69 => 36,  67 => 33,  60 => 28,  58 => 17,  54 => 15,  51 => 14,  49 => 13,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }
}
