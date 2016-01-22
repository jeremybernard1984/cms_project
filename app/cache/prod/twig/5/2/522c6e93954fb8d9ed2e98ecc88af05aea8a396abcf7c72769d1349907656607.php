<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_522c6e93954fb8d9ed2e98ecc88af05aea8a396abcf7c72769d1349907656607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'slider' => array($this, 'block_slider'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38ec2a636b1bd5fac9d9edf951f5acb16c0913540b5c57673b5d33f920972318 = $this->env->getExtension("native_profiler");
        $__internal_38ec2a636b1bd5fac9d9edf951f5acb16c0913540b5c57673b5d33f920972318->enter($__internal_38ec2a636b1bd5fac9d9edf951f5acb16c0913540b5c57673b5d33f920972318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "<footer>
    ";
        // line 34
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "</footer>
";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "</body>
</html>";
        
        $__internal_38ec2a636b1bd5fac9d9edf951f5acb16c0913540b5c57673b5d33f920972318->leave($__internal_38ec2a636b1bd5fac9d9edf951f5acb16c0913540b5c57673b5d33f920972318_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6bb1e91e86223fc5f652042d465f8b7a253286ea8f4994ae6504514341c78ca = $this->env->getExtension("native_profiler");
        $__internal_c6bb1e91e86223fc5f652042d465f8b7a253286ea8f4994ae6504514341c78ca->enter($__internal_c6bb1e91e86223fc5f652042d465f8b7a253286ea8f4994ae6504514341c78ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MON MOULE SERCO POINT-WEB";
        
        $__internal_c6bb1e91e86223fc5f652042d465f8b7a253286ea8f4994ae6504514341c78ca->leave($__internal_c6bb1e91e86223fc5f652042d465f8b7a253286ea8f4994ae6504514341c78ca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b88ef94e6f3f7cc0a27e4fad4096b9b4b854adae5b688cbb247d0fca6a96d7b = $this->env->getExtension("native_profiler");
        $__internal_7b88ef94e6f3f7cc0a27e4fad4096b9b4b854adae5b688cbb247d0fca6a96d7b->enter($__internal_7b88ef94e6f3f7cc0a27e4fad4096b9b4b854adae5b688cbb247d0fca6a96d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <header>
        ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "    </header>
    <div id=\"slider\">
        ";
        // line 18
        $this->displayBlock('slider', $context, $blocks);
        // line 21
        echo "    </div>
    <div id=\"menu\">
        ";
        // line 23
        $this->displayBlock('menu', $context, $blocks);
        // line 26
        echo "    </div>
    <div id=\"content\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "    </div>
";
        
        $__internal_7b88ef94e6f3f7cc0a27e4fad4096b9b4b854adae5b688cbb247d0fca6a96d7b->leave($__internal_7b88ef94e6f3f7cc0a27e4fad4096b9b4b854adae5b688cbb247d0fca6a96d7b_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_7356aa077329b96d314e10b2eaac5005a64b15173d0317afde7fef23d544a353 = $this->env->getExtension("native_profiler");
        $__internal_7356aa077329b96d314e10b2eaac5005a64b15173d0317afde7fef23d544a353->enter($__internal_7356aa077329b96d314e10b2eaac5005a64b15173d0317afde7fef23d544a353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "            ";
        $this->loadTemplate("PointWebAppBundle::_header.html.twig", "PointWebAppBundle::base.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        
        $__internal_7356aa077329b96d314e10b2eaac5005a64b15173d0317afde7fef23d544a353->leave($__internal_7356aa077329b96d314e10b2eaac5005a64b15173d0317afde7fef23d544a353_prof);

    }

    // line 18
    public function block_slider($context, array $blocks = array())
    {
        $__internal_6cb7c06285686bf21d945d6892a3f8a9accb8b7117c886ce640381a59e163cc8 = $this->env->getExtension("native_profiler");
        $__internal_6cb7c06285686bf21d945d6892a3f8a9accb8b7117c886ce640381a59e163cc8->enter($__internal_6cb7c06285686bf21d945d6892a3f8a9accb8b7117c886ce640381a59e163cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 19
        echo "            ";
        $this->loadTemplate("PointWebAppBundle::_slider.html.twig", "PointWebAppBundle::base.html.twig", 19)->display($context);
        // line 20
        echo "        ";
        
        $__internal_6cb7c06285686bf21d945d6892a3f8a9accb8b7117c886ce640381a59e163cc8->leave($__internal_6cb7c06285686bf21d945d6892a3f8a9accb8b7117c886ce640381a59e163cc8_prof);

    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3556c48f7c4b675bdea42833b643682b44378d4b107f2a9510a6418cc998f762 = $this->env->getExtension("native_profiler");
        $__internal_3556c48f7c4b675bdea42833b643682b44378d4b107f2a9510a6418cc998f762->enter($__internal_3556c48f7c4b675bdea42833b643682b44378d4b107f2a9510a6418cc998f762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 24
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:menu"));
        echo "
        ";
        
        $__internal_3556c48f7c4b675bdea42833b643682b44378d4b107f2a9510a6418cc998f762->leave($__internal_3556c48f7c4b675bdea42833b643682b44378d4b107f2a9510a6418cc998f762_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_4a66b70d83c44c182a776646e0678f49fbd344fec16b79f49f0a2d51f79c46ac = $this->env->getExtension("native_profiler");
        $__internal_4a66b70d83c44c182a776646e0678f49fbd344fec16b79f49f0a2d51f79c46ac->enter($__internal_4a66b70d83c44c182a776646e0678f49fbd344fec16b79f49f0a2d51f79c46ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "
        ";
        
        $__internal_4a66b70d83c44c182a776646e0678f49fbd344fec16b79f49f0a2d51f79c46ac->leave($__internal_4a66b70d83c44c182a776646e0678f49fbd344fec16b79f49f0a2d51f79c46ac_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        $__internal_091fe1957741b0e7cf8c1572dd58037ea7ebd9e652779ef1d5202156add58f35 = $this->env->getExtension("native_profiler");
        $__internal_091fe1957741b0e7cf8c1572dd58037ea7ebd9e652779ef1d5202156add58f35->enter($__internal_091fe1957741b0e7cf8c1572dd58037ea7ebd9e652779ef1d5202156add58f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 35
        echo "        ";
        $this->loadTemplate("PointWebAppBundle::_footer.html.twig", "PointWebAppBundle::base.html.twig", 35)->display($context);
        // line 36
        echo "    ";
        
        $__internal_091fe1957741b0e7cf8c1572dd58037ea7ebd9e652779ef1d5202156add58f35->leave($__internal_091fe1957741b0e7cf8c1572dd58037ea7ebd9e652779ef1d5202156add58f35_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eddb87a827a4124d80465578e878c96a4d253eb84ba9592df4563e3741c92c5d = $this->env->getExtension("native_profiler");
        $__internal_eddb87a827a4124d80465578e878c96a4d253eb84ba9592df4563e3741c92c5d->enter($__internal_eddb87a827a4124d80465578e878c96a4d253eb84ba9592df4563e3741c92c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eddb87a827a4124d80465578e878c96a4d253eb84ba9592df4563e3741c92c5d->leave($__internal_eddb87a827a4124d80465578e878c96a4d253eb84ba9592df4563e3741c92c5d_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 38,  194 => 36,  191 => 35,  185 => 34,  177 => 29,  171 => 28,  161 => 24,  155 => 23,  148 => 20,  145 => 19,  139 => 18,  132 => 15,  129 => 14,  123 => 13,  115 => 31,  113 => 28,  109 => 26,  107 => 23,  103 => 21,  101 => 18,  97 => 16,  95 => 13,  92 => 12,  86 => 11,  74 => 5,  66 => 40,  64 => 38,  61 => 37,  59 => 34,  56 => 33,  54 => 11,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }
}
