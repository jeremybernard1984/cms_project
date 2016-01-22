<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_91b30595ab45741155de02d603e72c6452af3e46639d164e57bac1eb55293aa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79f3f35585d59fff43aeef2bd8e7d1737646dd6641ff58eb64ef6ce07fec9a0a = $this->env->getExtension("native_profiler");
        $__internal_79f3f35585d59fff43aeef2bd8e7d1737646dd6641ff58eb64ef6ce07fec9a0a->enter($__internal_79f3f35585d59fff43aeef2bd8e7d1737646dd6641ff58eb64ef6ce07fec9a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_79f3f35585d59fff43aeef2bd8e7d1737646dd6641ff58eb64ef6ce07fec9a0a->leave($__internal_79f3f35585d59fff43aeef2bd8e7d1737646dd6641ff58eb64ef6ce07fec9a0a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fe06f4d00736ec9491bc40f4438076924fcd6d184781db117f59744d3d2416fc = $this->env->getExtension("native_profiler");
        $__internal_fe06f4d00736ec9491bc40f4438076924fcd6d184781db117f59744d3d2416fc->enter($__internal_fe06f4d00736ec9491bc40f4438076924fcd6d184781db117f59744d3d2416fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_fe06f4d00736ec9491bc40f4438076924fcd6d184781db117f59744d3d2416fc->leave($__internal_fe06f4d00736ec9491bc40f4438076924fcd6d184781db117f59744d3d2416fc_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d77fc6366dcf8daee448cd558d1a21031131844938f2e04628a3e270ca6490b1 = $this->env->getExtension("native_profiler");
        $__internal_d77fc6366dcf8daee448cd558d1a21031131844938f2e04628a3e270ca6490b1->enter($__internal_d77fc6366dcf8daee448cd558d1a21031131844938f2e04628a3e270ca6490b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d77fc6366dcf8daee448cd558d1a21031131844938f2e04628a3e270ca6490b1->leave($__internal_d77fc6366dcf8daee448cd558d1a21031131844938f2e04628a3e270ca6490b1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6a68eaa0cb3b2c0aeb766d98db4aa5c2a4fcf9d907ee04d6be16aca7c2e6114d = $this->env->getExtension("native_profiler");
        $__internal_6a68eaa0cb3b2c0aeb766d98db4aa5c2a4fcf9d907ee04d6be16aca7c2e6114d->enter($__internal_6a68eaa0cb3b2c0aeb766d98db4aa5c2a4fcf9d907ee04d6be16aca7c2e6114d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6a68eaa0cb3b2c0aeb766d98db4aa5c2a4fcf9d907ee04d6be16aca7c2e6114d->leave($__internal_6a68eaa0cb3b2c0aeb766d98db4aa5c2a4fcf9d907ee04d6be16aca7c2e6114d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
