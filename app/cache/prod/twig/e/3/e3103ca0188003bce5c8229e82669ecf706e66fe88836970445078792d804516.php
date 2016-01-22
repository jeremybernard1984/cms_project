<?php

/* PointWebFaqBundle:faq:show.html.twig */
class __TwigTemplate_e3103ca0188003bce5c8229e82669ecf706e66fe88836970445078792d804516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9afabe67b1614a364af55faa8ed780316610741cff38caa54a80742635f3edea = $this->env->getExtension("native_profiler");
        $__internal_9afabe67b1614a364af55faa8ed780316610741cff38caa54a80742635f3edea->enter($__internal_9afabe67b1614a364af55faa8ed780316610741cff38caa54a80742635f3edea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebFaqBundle:faq:show.html.twig"));

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
        $this->loadTemplate("PointWebAdminBundle::_header.html.twig", "PointWebFaqBundle:faq:show.html.twig", 6)->display($context);
        // line 7
        echo "    <style>
        .panel-heading, .panel-footer{
            text-align: center;font-weight:bold;
        }
        .img-view{
            text-align: center;float: left;width: 150px;height:220px;font-size: 10px;border: 10px solid #fff;overflow: hidden;
        }
        .img-view img{
            width: 100%;
        }
    </style>
</head>
<body style=\"background: #fff;\">
<div id=\"wrapper\">

    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            FAQ
        </div>
        <div class=\"panel-body\">
            <div class=\"col-lg-12\">
                <div class=\"col-lg-12\">
                    <label>Question :</label>
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "question", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Réponse :</label><br>
                    ";
        // line 34
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answer", array());
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>Position :</label>
                    ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-lg-12\">
                    <label>En ligne :</label>
                    ";
        // line 42
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 43
        echo "                </div>
            </div>
        </div>
        <div class=\"panel-footer\">
            <a href=\"javascript:parent.jQuery.fancybox.close();\">Fermer la fenêtre</a>
        </div>
    </div>

</div>
<!-- /#wrapper -->
";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "</body>
<footer>
    ";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "</footer>
</html>

";
        
        $__internal_9afabe67b1614a364af55faa8ed780316610741cff38caa54a80742635f3edea->leave($__internal_9afabe67b1614a364af55faa8ed780316610741cff38caa54a80742635f3edea_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b061504b1e4178eb953bd22f2ea4de4624c7905d58680652f7738fcaff665b3 = $this->env->getExtension("native_profiler");
        $__internal_2b061504b1e4178eb953bd22f2ea4de4624c7905d58680652f7738fcaff665b3->enter($__internal_2b061504b1e4178eb953bd22f2ea4de4624c7905d58680652f7738fcaff665b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_2b061504b1e4178eb953bd22f2ea4de4624c7905d58680652f7738fcaff665b3->leave($__internal_2b061504b1e4178eb953bd22f2ea4de4624c7905d58680652f7738fcaff665b3_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae8fb42be29dad2bcc9dd077963fe4ec00f92c236f61a036518c6f3233803b27 = $this->env->getExtension("native_profiler");
        $__internal_ae8fb42be29dad2bcc9dd077963fe4ec00f92c236f61a036518c6f3233803b27->enter($__internal_ae8fb42be29dad2bcc9dd077963fe4ec00f92c236f61a036518c6f3233803b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebFaqBundle:faq:show.html.twig", 54)->display($context);
        
        $__internal_ae8fb42be29dad2bcc9dd077963fe4ec00f92c236f61a036518c6f3233803b27->leave($__internal_ae8fb42be29dad2bcc9dd077963fe4ec00f92c236f61a036518c6f3233803b27_prof);

    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9307d318400c723b3f58f85c25d6e7b3533d061586bddea131f98b737dcabe31 = $this->env->getExtension("native_profiler");
        $__internal_9307d318400c723b3f58f85c25d6e7b3533d061586bddea131f98b737dcabe31->enter($__internal_9307d318400c723b3f58f85c25d6e7b3533d061586bddea131f98b737dcabe31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 59
        echo "
    ";
        
        $__internal_9307d318400c723b3f58f85c25d6e7b3533d061586bddea131f98b737dcabe31->leave($__internal_9307d318400c723b3f58f85c25d6e7b3533d061586bddea131f98b737dcabe31_prof);

    }

    public function getTemplateName()
    {
        return "PointWebFaqBundle:faq:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 59,  145 => 58,  137 => 54,  131 => 53,  119 => 5,  109 => 61,  107 => 58,  103 => 56,  101 => 53,  89 => 43,  83 => 42,  76 => 38,  69 => 34,  62 => 30,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
