<?php

/* PointWebAdminBundle:Default:index1.html.twig */
class __TwigTemplate_15b3f4f54a38e275cc94db321e01a137782df0e667c597a8c9a0c4d07422b1d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Default:index1.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e76c0103ffd78dfc4b2b1c5ad109781f3bc77139476f08c9b23d03b4d8a1c1ca = $this->env->getExtension("native_profiler");
        $__internal_e76c0103ffd78dfc4b2b1c5ad109781f3bc77139476f08c9b23d03b4d8a1c1ca->enter($__internal_e76c0103ffd78dfc4b2b1c5ad109781f3bc77139476f08c9b23d03b4d8a1c1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Default:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e76c0103ffd78dfc4b2b1c5ad109781f3bc77139476f08c9b23d03b4d8a1c1ca->leave($__internal_e76c0103ffd78dfc4b2b1c5ad109781f3bc77139476f08c9b23d03b4d8a1c1ca_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_8802fd2e83a7eae5a1b811d526ab25dc8efcdd625333079977c86a550757c673 = $this->env->getExtension("native_profiler");
        $__internal_8802fd2e83a7eae5a1b811d526ab25dc8efcdd625333079977c86a550757c673->enter($__internal_8802fd2e83a7eae5a1b811d526ab25dc8efcdd625333079977c86a550757c673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    Bienvenue dans la plate-forme d'administration de votre site.
";
        
        $__internal_8802fd2e83a7eae5a1b811d526ab25dc8efcdd625333079977c86a550757c673->leave($__internal_8802fd2e83a7eae5a1b811d526ab25dc8efcdd625333079977c86a550757c673_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Default:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
