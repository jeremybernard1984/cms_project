<?php

/* PointWebAdminBundle::base.html.twig */
class __TwigTemplate_e12ad1337c1835995ced955a300b980f116586ffbacf30d6662df86299147df5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_head_login' => array($this, 'block_body_head_login'),
            'body_content' => array($this, 'block_body_content'),
            'content_left' => array($this, 'block_content_left'),
            'content_right' => array($this, 'block_content_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7be7c52435c5a3fcc26cab67652933edd419574bd4dfc41f14b2669154369ec7 = $this->env->getExtension("native_profiler");
        $__internal_7be7c52435c5a3fcc26cab67652933edd419574bd4dfc41f14b2669154369ec7->enter($__internal_7be7c52435c5a3fcc26cab67652933edd419574bd4dfc41f14b2669154369ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.11.4.custom/external/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.11.4.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-common-libraries.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-functions.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-thumbsgeneral.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-thumbsstrip.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-touchthumbs.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-panelsbase.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-strippanel.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-gridpanel.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-thumbsgrid.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-tiles.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-tiledesign.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-avia.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-slider.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-sliderassets.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-touchslider.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-zoomslider.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-video.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-gallery.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-lightbox.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-carousel.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-api.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/themes/grid/ug-theme-grid.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/material.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.rowsorter.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("okfocus-okzoom/src/okzoom.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("font-awesome-4.3.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\"
          media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.11.4.custom/jquery-ui.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel='stylesheet' href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("unitegallery-master/source/unitegallery/css/unite-gallery.css"), "html", null, true);
        echo "\"
          type='text/css' media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/material.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/material-fullpalette.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/ripples.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/roboto.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 109
        $this->displayBlock('javascripts', $context, $blocks);
        // line 110
        echo "</body>
<footer>
    ";
        // line 112
        $this->displayBlock('footer', $context, $blocks);
        // line 113
        echo "</footer>
</html>
";
        
        $__internal_7be7c52435c5a3fcc26cab67652933edd419574bd4dfc41f14b2669154369ec7->leave($__internal_7be7c52435c5a3fcc26cab67652933edd419574bd4dfc41f14b2669154369ec7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d24c7ecb0e713dd43850dd05c1a1a436998426a685009d43d1d9bae6f181ae7d = $this->env->getExtension("native_profiler");
        $__internal_d24c7ecb0e713dd43850dd05c1a1a436998426a685009d43d1d9bae6f181ae7d->enter($__internal_d24c7ecb0e713dd43850dd05c1a1a436998426a685009d43d1d9bae6f181ae7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_d24c7ecb0e713dd43850dd05c1a1a436998426a685009d43d1d9bae6f181ae7d->leave($__internal_d24c7ecb0e713dd43850dd05c1a1a436998426a685009d43d1d9bae6f181ae7d_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b1233bbfda872346d1b24046b1bcd4360fa6b3126b26e5dc2f3bce613f45a7b = $this->env->getExtension("native_profiler");
        $__internal_6b1233bbfda872346d1b24046b1bcd4360fa6b3126b26e5dc2f3bce613f45a7b->enter($__internal_6b1233bbfda872346d1b24046b1bcd4360fa6b3126b26e5dc2f3bce613f45a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 70
        echo "    <div class=\"navbar navbar-default\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                    data-target=\".navbar-responsive-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("point_web_admin_homepage");
        echo "\">
                <img class=\"logo\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("logo.png"), "html", null, true);
        echo "\" alt=\"logo\"/>
            </a>
        </div>
        <div class=\"navbar-collapse collapse navbar-responsive-collapse\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 84
        $this->loadTemplate("PointWebAdminBundle::_menu_admin.html.twig", "PointWebAdminBundle::base.html.twig", 84)->display($context);
        // line 85
        echo "            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    ";
        // line 88
        $this->displayBlock('body_head_login', $context, $blocks);
        // line 94
        echo "                </li>
            </ul>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-1\"></div>
        <div class=\"col-lg-10 well page active\">
            ";
        // line 101
        $this->displayBlock('body_content', $context, $blocks);
        // line 105
        echo "</div>
        <div class=\"col-lg-1\"></div>
    </div>
";
        
        $__internal_6b1233bbfda872346d1b24046b1bcd4360fa6b3126b26e5dc2f3bce613f45a7b->leave($__internal_6b1233bbfda872346d1b24046b1bcd4360fa6b3126b26e5dc2f3bce613f45a7b_prof);

    }

    // line 88
    public function block_body_head_login($context, array $blocks = array())
    {
        $__internal_875de907513563eac965d6d09253fc5a39e40b4fdcf3047be8de21e37fededb0 = $this->env->getExtension("native_profiler");
        $__internal_875de907513563eac965d6d09253fc5a39e40b4fdcf3047be8de21e37fededb0->enter($__internal_875de907513563eac965d6d09253fc5a39e40b4fdcf3047be8de21e37fededb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_head_login"));

        // line 89
        echo "                        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"
                           class=\"mdi-action-exit-to-app\"
                           data-toggle=\"tooltip\"
                           data-placement=\"bottom\" title=\"Se déconnecter\"></a>
                    ";
        
        $__internal_875de907513563eac965d6d09253fc5a39e40b4fdcf3047be8de21e37fededb0->leave($__internal_875de907513563eac965d6d09253fc5a39e40b4fdcf3047be8de21e37fededb0_prof);

    }

    // line 101
    public function block_body_content($context, array $blocks = array())
    {
        $__internal_d4ece2cbd3ca4ae86b0fb996010903534cd7d8de4e32c9386e8d17438b3ad8a0 = $this->env->getExtension("native_profiler");
        $__internal_d4ece2cbd3ca4ae86b0fb996010903534cd7d8de4e32c9386e8d17438b3ad8a0->enter($__internal_d4ece2cbd3ca4ae86b0fb996010903534cd7d8de4e32c9386e8d17438b3ad8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_content"));

        // line 102
        echo "                ";
        $this->displayBlock('content_left', $context, $blocks);
        // line 104
        echo "                ";
        $this->displayBlock('content_right', $context, $blocks);
        // line 105
        echo "            ";
        
        $__internal_d4ece2cbd3ca4ae86b0fb996010903534cd7d8de4e32c9386e8d17438b3ad8a0->leave($__internal_d4ece2cbd3ca4ae86b0fb996010903534cd7d8de4e32c9386e8d17438b3ad8a0_prof);

    }

    // line 102
    public function block_content_left($context, array $blocks = array())
    {
        $__internal_b4dd0bb7b3ecd407bdccc5fa4ffd9faaea020683af86c3fecd16d04943cbea00 = $this->env->getExtension("native_profiler");
        $__internal_b4dd0bb7b3ecd407bdccc5fa4ffd9faaea020683af86c3fecd16d04943cbea00->enter($__internal_b4dd0bb7b3ecd407bdccc5fa4ffd9faaea020683af86c3fecd16d04943cbea00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_left"));

        // line 103
        echo "                ";
        
        $__internal_b4dd0bb7b3ecd407bdccc5fa4ffd9faaea020683af86c3fecd16d04943cbea00->leave($__internal_b4dd0bb7b3ecd407bdccc5fa4ffd9faaea020683af86c3fecd16d04943cbea00_prof);

    }

    // line 104
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_2692614d1c28d28eb2a719aafd80fbedf51e77896c969f2b5f695f684e3793f7 = $this->env->getExtension("native_profiler");
        $__internal_2692614d1c28d28eb2a719aafd80fbedf51e77896c969f2b5f695f684e3793f7->enter($__internal_2692614d1c28d28eb2a719aafd80fbedf51e77896c969f2b5f695f684e3793f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        
        $__internal_2692614d1c28d28eb2a719aafd80fbedf51e77896c969f2b5f695f684e3793f7->leave($__internal_2692614d1c28d28eb2a719aafd80fbedf51e77896c969f2b5f695f684e3793f7_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4127a5a1a4521a6d10cd89c365fd084f08fcbd4352f04b484aa72d0f61763f3f = $this->env->getExtension("native_profiler");
        $__internal_4127a5a1a4521a6d10cd89c365fd084f08fcbd4352f04b484aa72d0f61763f3f->enter($__internal_4127a5a1a4521a6d10cd89c365fd084f08fcbd4352f04b484aa72d0f61763f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4127a5a1a4521a6d10cd89c365fd084f08fcbd4352f04b484aa72d0f61763f3f->leave($__internal_4127a5a1a4521a6d10cd89c365fd084f08fcbd4352f04b484aa72d0f61763f3f_prof);

    }

    // line 112
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1f2ad1927d6c25a3608a0eede59c54d76499ddbe6d16262455b6d017507e47d7 = $this->env->getExtension("native_profiler");
        $__internal_1f2ad1927d6c25a3608a0eede59c54d76499ddbe6d16262455b6d017507e47d7->enter($__internal_1f2ad1927d6c25a3608a0eede59c54d76499ddbe6d16262455b6d017507e47d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_1f2ad1927d6c25a3608a0eede59c54d76499ddbe6d16262455b6d017507e47d7->leave($__internal_1f2ad1927d6c25a3608a0eede59c54d76499ddbe6d16262455b6d017507e47d7_prof);

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
        return array (  388 => 112,  377 => 109,  366 => 104,  359 => 103,  353 => 102,  346 => 105,  343 => 104,  340 => 102,  334 => 101,  321 => 89,  315 => 88,  305 => 105,  303 => 101,  294 => 94,  292 => 88,  287 => 85,  285 => 84,  277 => 79,  273 => 78,  263 => 70,  257 => 69,  245 => 5,  236 => 113,  234 => 112,  230 => 110,  228 => 109,  226 => 69,  220 => 66,  216 => 65,  212 => 64,  208 => 63,  204 => 62,  200 => 61,  196 => 60,  191 => 58,  187 => 57,  182 => 55,  178 => 54,  174 => 53,  170 => 52,  166 => 51,  162 => 50,  158 => 49,  154 => 48,  149 => 46,  145 => 45,  140 => 43,  135 => 41,  130 => 39,  126 => 38,  121 => 36,  116 => 34,  111 => 32,  106 => 30,  102 => 29,  97 => 27,  93 => 26,  88 => 24,  83 => 22,  78 => 20,  73 => 18,  68 => 16,  63 => 14,  58 => 12,  53 => 10,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }
}
