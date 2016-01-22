<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_da922cb70fbdfec72d45f9bc90a351b32338d127420e1a712cb57ee0fe7e12d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'slider' => array($this, 'block_slider'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b69f8fe664ca8a7f2214812aa7dbe733825aa5b42cef8b859a1db6d20a4b3c9 = $this->env->getExtension("native_profiler");
        $__internal_0b69f8fe664ca8a7f2214812aa7dbe733825aa5b42cef8b859a1db6d20a4b3c9->enter($__internal_0b69f8fe664ca8a7f2214812aa7dbe733825aa5b42cef8b859a1db6d20a4b3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::base.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:header"));
        echo "

<body>
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "</body>
</html>";
        
        $__internal_0b69f8fe664ca8a7f2214812aa7dbe733825aa5b42cef8b859a1db6d20a4b3c9->leave($__internal_0b69f8fe664ca8a7f2214812aa7dbe733825aa5b42cef8b859a1db6d20a4b3c9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8744ca1e8b9a65ed10eb01bcc5d3b4ace2c460794bcfa0571563bc0673f78bfb = $this->env->getExtension("native_profiler");
        $__internal_8744ca1e8b9a65ed10eb01bcc5d3b4ace2c460794bcfa0571563bc0673f78bfb->enter($__internal_8744ca1e8b9a65ed10eb01bcc5d3b4ace2c460794bcfa0571563bc0673f78bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
        ";
        // line 7
        $this->displayBlock('menu', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('slider', $context, $blocks);
        // line 13
        echo "        <!-- Page Content -->
        <div class=\"container content\">

            ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "        </div>
        <!-- /.container -->
    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_8744ca1e8b9a65ed10eb01bcc5d3b4ace2c460794bcfa0571563bc0673f78bfb->leave($__internal_8744ca1e8b9a65ed10eb01bcc5d3b4ace2c460794bcfa0571563bc0673f78bfb_prof);

    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f4409ced34e76a5a1717d3d72b5620b031865daafd0bec99456e1acaea3ee8d = $this->env->getExtension("native_profiler");
        $__internal_1f4409ced34e76a5a1717d3d72b5620b031865daafd0bec99456e1acaea3ee8d->enter($__internal_1f4409ced34e76a5a1717d3d72b5620b031865daafd0bec99456e1acaea3ee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 8
        echo "            ";
        $this->loadTemplate("PointWebAppBundle::_menu.html.twig", "PointWebAppBundle::base.html.twig", 8)->display($context);
        // line 9
        echo "        ";
        
        $__internal_1f4409ced34e76a5a1717d3d72b5620b031865daafd0bec99456e1acaea3ee8d->leave($__internal_1f4409ced34e76a5a1717d3d72b5620b031865daafd0bec99456e1acaea3ee8d_prof);

    }

    // line 10
    public function block_slider($context, array $blocks = array())
    {
        $__internal_89fdc0c935b587c7918353e56e954025cc885910b0c897aa7ec88f4d4c6c6654 = $this->env->getExtension("native_profiler");
        $__internal_89fdc0c935b587c7918353e56e954025cc885910b0c897aa7ec88f4d4c6c6654->enter($__internal_89fdc0c935b587c7918353e56e954025cc885910b0c897aa7ec88f4d4c6c6654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 11
        echo "
        ";
        
        $__internal_89fdc0c935b587c7918353e56e954025cc885910b0c897aa7ec88f4d4c6c6654->leave($__internal_89fdc0c935b587c7918353e56e954025cc885910b0c897aa7ec88f4d4c6c6654_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_437b5d337747089d4c6cfaa3d5a26f980f0ce222e1dc40e9d76df54e55c738dc = $this->env->getExtension("native_profiler");
        $__internal_437b5d337747089d4c6cfaa3d5a26f980f0ce222e1dc40e9d76df54e55c738dc->enter($__internal_437b5d337747089d4c6cfaa3d5a26f980f0ce222e1dc40e9d76df54e55c738dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
                ";
        // line 18
        $this->loadTemplate("PointWebAppBundle:Default:index.html.twig", "PointWebAppBundle::base.html.twig", 18)->display($context);
        // line 19
        echo "            ";
        
        $__internal_437b5d337747089d4c6cfaa3d5a26f980f0ce222e1dc40e9d76df54e55c738dc->leave($__internal_437b5d337747089d4c6cfaa3d5a26f980f0ce222e1dc40e9d76df54e55c738dc_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_87240832e925cc7cfdcb8c1f504c55b55e49b4920e7a25640ed6675b73d327e1 = $this->env->getExtension("native_profiler");
        $__internal_87240832e925cc7cfdcb8c1f504c55b55e49b4920e7a25640ed6675b73d327e1->enter($__internal_87240832e925cc7cfdcb8c1f504c55b55e49b4920e7a25640ed6675b73d327e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "                ";
        $this->loadTemplate("PointWebAppBundle::_footer.html.twig", "PointWebAppBundle::base.html.twig", 21)->display($context);
        // line 22
        echo "            ";
        
        $__internal_87240832e925cc7cfdcb8c1f504c55b55e49b4920e7a25640ed6675b73d327e1->leave($__internal_87240832e925cc7cfdcb8c1f504c55b55e49b4920e7a25640ed6675b73d327e1_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb0402fa43ec5906a0dfa11f1fbe705d6ac0b29aed430b42ff7cc2b945e1b4dc = $this->env->getExtension("native_profiler");
        $__internal_eb0402fa43ec5906a0dfa11f1fbe705d6ac0b29aed430b42ff7cc2b945e1b4dc->enter($__internal_eb0402fa43ec5906a0dfa11f1fbe705d6ac0b29aed430b42ff7cc2b945e1b4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        ";
        $this->loadTemplate("PointWebAppBundle::_js.html.twig", "PointWebAppBundle::base.html.twig", 26)->display($context);
        // line 27
        echo "    ";
        
        $__internal_eb0402fa43ec5906a0dfa11f1fbe705d6ac0b29aed430b42ff7cc2b945e1b4dc->leave($__internal_eb0402fa43ec5906a0dfa11f1fbe705d6ac0b29aed430b42ff7cc2b945e1b4dc_prof);

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
        return array (  155 => 27,  152 => 26,  146 => 25,  139 => 22,  136 => 21,  130 => 20,  123 => 19,  121 => 18,  118 => 17,  112 => 16,  104 => 11,  98 => 10,  91 => 9,  88 => 8,  82 => 7,  75 => 25,  71 => 23,  68 => 20,  66 => 16,  61 => 13,  58 => 10,  56 => 7,  53 => 6,  47 => 5,  39 => 29,  37 => 5,  31 => 2,  28 => 1,);
    }
}
/* */
/* {{ render(controller("PointWebAppBundle:Default:header")) }}*/
/* */
/* <body>*/
/* {% block body %}*/
/* */
/*         {% block menu %}*/
/*             {% include 'PointWebAppBundle::_menu.html.twig' %}*/
/*         {% endblock %}*/
/*         {% block slider %}*/
/* */
/*         {% endblock %}*/
/*         <!-- Page Content -->*/
/*         <div class="container content">*/
/* */
/*             {% block content %}*/
/* */
/*                 {% include 'PointWebAppBundle:Default:index.html.twig' %}*/
/*             {% endblock %}*/
/*             {% block footer %}*/
/*                 {% include 'PointWebAppBundle::_footer.html.twig' %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     {% block javascripts %}*/
/*         {% include 'PointWebAppBundle::_js.html.twig' %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
