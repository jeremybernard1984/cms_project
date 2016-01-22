<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_50a70d00272e0381bcc7680e1b9b9d806483c01d8e0fb48bc348535e55de123e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f49b9b0677233e0b023269f7496557701ab4e5268f7175f93f1eeac40e330344 = $this->env->getExtension("native_profiler");
        $__internal_f49b9b0677233e0b023269f7496557701ab4e5268f7175f93f1eeac40e330344->enter($__internal_f49b9b0677233e0b023269f7496557701ab4e5268f7175f93f1eeac40e330344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f49b9b0677233e0b023269f7496557701ab4e5268f7175f93f1eeac40e330344->leave($__internal_f49b9b0677233e0b023269f7496557701ab4e5268f7175f93f1eeac40e330344_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d691b0c55cd28b457247da12ac6d6088fdd49973bb50cd44f2377e11b036b188 = $this->env->getExtension("native_profiler");
        $__internal_d691b0c55cd28b457247da12ac6d6088fdd49973bb50cd44f2377e11b036b188->enter($__internal_d691b0c55cd28b457247da12ac6d6088fdd49973bb50cd44f2377e11b036b188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d691b0c55cd28b457247da12ac6d6088fdd49973bb50cd44f2377e11b036b188->leave($__internal_d691b0c55cd28b457247da12ac6d6088fdd49973bb50cd44f2377e11b036b188_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
