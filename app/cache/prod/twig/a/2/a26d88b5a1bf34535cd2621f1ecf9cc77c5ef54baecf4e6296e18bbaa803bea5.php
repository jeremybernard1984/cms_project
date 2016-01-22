<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_a26d88b5a1bf34535cd2621f1ecf9cc77c5ef54baecf4e6296e18bbaa803bea5 extends Twig_Template
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
        $__internal_75c114be1159ea66c6b46c74ba7f98de26c180ec8c916954b3451b05ec4086e8 = $this->env->getExtension("native_profiler");
        $__internal_75c114be1159ea66c6b46c74ba7f98de26c180ec8c916954b3451b05ec4086e8->enter($__internal_75c114be1159ea66c6b46c74ba7f98de26c180ec8c916954b3451b05ec4086e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::base.html.twig"));

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
        
        $__internal_75c114be1159ea66c6b46c74ba7f98de26c180ec8c916954b3451b05ec4086e8->leave($__internal_75c114be1159ea66c6b46c74ba7f98de26c180ec8c916954b3451b05ec4086e8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4bfc2a4cc5c1f44a0bd2a6e800f12c70f55737846e5a2d9f177b877e99fa0d5 = $this->env->getExtension("native_profiler");
        $__internal_c4bfc2a4cc5c1f44a0bd2a6e800f12c70f55737846e5a2d9f177b877e99fa0d5->enter($__internal_c4bfc2a4cc5c1f44a0bd2a6e800f12c70f55737846e5a2d9f177b877e99fa0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MON MOULE SERCO POINT-WEB";
        
        $__internal_c4bfc2a4cc5c1f44a0bd2a6e800f12c70f55737846e5a2d9f177b877e99fa0d5->leave($__internal_c4bfc2a4cc5c1f44a0bd2a6e800f12c70f55737846e5a2d9f177b877e99fa0d5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_47011c79713ad76ae623814defa902ed175a8a362176a5d16a1f0c600b884ca8 = $this->env->getExtension("native_profiler");
        $__internal_47011c79713ad76ae623814defa902ed175a8a362176a5d16a1f0c600b884ca8->enter($__internal_47011c79713ad76ae623814defa902ed175a8a362176a5d16a1f0c600b884ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_47011c79713ad76ae623814defa902ed175a8a362176a5d16a1f0c600b884ca8->leave($__internal_47011c79713ad76ae623814defa902ed175a8a362176a5d16a1f0c600b884ca8_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_d49591eb23b78d54cc3fe88fdc65d40a2602ad1ede0bfd53d810679714012322 = $this->env->getExtension("native_profiler");
        $__internal_d49591eb23b78d54cc3fe88fdc65d40a2602ad1ede0bfd53d810679714012322->enter($__internal_d49591eb23b78d54cc3fe88fdc65d40a2602ad1ede0bfd53d810679714012322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "            ";
        $this->loadTemplate("PointWebAppBundle::_header.html.twig", "PointWebAppBundle::base.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        
        $__internal_d49591eb23b78d54cc3fe88fdc65d40a2602ad1ede0bfd53d810679714012322->leave($__internal_d49591eb23b78d54cc3fe88fdc65d40a2602ad1ede0bfd53d810679714012322_prof);

    }

    // line 18
    public function block_slider($context, array $blocks = array())
    {
        $__internal_db522568b64beceb328f16a76f3581824374dd55d468d38a21e9be42e3985f1d = $this->env->getExtension("native_profiler");
        $__internal_db522568b64beceb328f16a76f3581824374dd55d468d38a21e9be42e3985f1d->enter($__internal_db522568b64beceb328f16a76f3581824374dd55d468d38a21e9be42e3985f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 19
        echo "            ";
        $this->loadTemplate("PointWebAppBundle::_slider.html.twig", "PointWebAppBundle::base.html.twig", 19)->display($context);
        // line 20
        echo "        ";
        
        $__internal_db522568b64beceb328f16a76f3581824374dd55d468d38a21e9be42e3985f1d->leave($__internal_db522568b64beceb328f16a76f3581824374dd55d468d38a21e9be42e3985f1d_prof);

    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        $__internal_297403adb29a734b91ba6f7ccdd1baf987efef80a2d40dc658f8945c6e7590ef = $this->env->getExtension("native_profiler");
        $__internal_297403adb29a734b91ba6f7ccdd1baf987efef80a2d40dc658f8945c6e7590ef->enter($__internal_297403adb29a734b91ba6f7ccdd1baf987efef80a2d40dc658f8945c6e7590ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 24
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:menu"));
        echo "
        ";
        
        $__internal_297403adb29a734b91ba6f7ccdd1baf987efef80a2d40dc658f8945c6e7590ef->leave($__internal_297403adb29a734b91ba6f7ccdd1baf987efef80a2d40dc658f8945c6e7590ef_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_724b861c9be119828166c87a66f5ba7f61618f42f71966a41ba665022bda77f8 = $this->env->getExtension("native_profiler");
        $__internal_724b861c9be119828166c87a66f5ba7f61618f42f71966a41ba665022bda77f8->enter($__internal_724b861c9be119828166c87a66f5ba7f61618f42f71966a41ba665022bda77f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "
        ";
        
        $__internal_724b861c9be119828166c87a66f5ba7f61618f42f71966a41ba665022bda77f8->leave($__internal_724b861c9be119828166c87a66f5ba7f61618f42f71966a41ba665022bda77f8_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4ade8e2c4788109feba443dfc777fa6e4fe0a2b1ce0b6c360d6b644c9554ae04 = $this->env->getExtension("native_profiler");
        $__internal_4ade8e2c4788109feba443dfc777fa6e4fe0a2b1ce0b6c360d6b644c9554ae04->enter($__internal_4ade8e2c4788109feba443dfc777fa6e4fe0a2b1ce0b6c360d6b644c9554ae04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 35
        echo "        ";
        $this->loadTemplate("PointWebAppBundle::_footer.html.twig", "PointWebAppBundle::base.html.twig", 35)->display($context);
        // line 36
        echo "    ";
        
        $__internal_4ade8e2c4788109feba443dfc777fa6e4fe0a2b1ce0b6c360d6b644c9554ae04->leave($__internal_4ade8e2c4788109feba443dfc777fa6e4fe0a2b1ce0b6c360d6b644c9554ae04_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8aa9d494b71a1aa421fc220e514ddff5fb8f20f857a072d58d391550852b97e = $this->env->getExtension("native_profiler");
        $__internal_b8aa9d494b71a1aa421fc220e514ddff5fb8f20f857a072d58d391550852b97e->enter($__internal_b8aa9d494b71a1aa421fc220e514ddff5fb8f20f857a072d58d391550852b97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b8aa9d494b71a1aa421fc220e514ddff5fb8f20f857a072d58d391550852b97e->leave($__internal_b8aa9d494b71a1aa421fc220e514ddff5fb8f20f857a072d58d391550852b97e_prof);

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
