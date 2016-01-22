<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4b98302492d01f00a094e6ce094ba60f8a8f6b294473e06133d2c86979aedc07 extends Twig_Template
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
        $__internal_3c11bf8c34e41f94cd37d88f1e7f95cb2b39bebf259cdbe391bf336a91bf1175 = $this->env->getExtension("native_profiler");
        $__internal_3c11bf8c34e41f94cd37d88f1e7f95cb2b39bebf259cdbe391bf336a91bf1175->enter($__internal_3c11bf8c34e41f94cd37d88f1e7f95cb2b39bebf259cdbe391bf336a91bf1175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3c11bf8c34e41f94cd37d88f1e7f95cb2b39bebf259cdbe391bf336a91bf1175->leave($__internal_3c11bf8c34e41f94cd37d88f1e7f95cb2b39bebf259cdbe391bf336a91bf1175_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_36a1b7fe019b7171d0d2f11d21aa31fd256c199de02f2dd7868eef2c2bd85295 = $this->env->getExtension("native_profiler");
        $__internal_36a1b7fe019b7171d0d2f11d21aa31fd256c199de02f2dd7868eef2c2bd85295->enter($__internal_36a1b7fe019b7171d0d2f11d21aa31fd256c199de02f2dd7868eef2c2bd85295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_36a1b7fe019b7171d0d2f11d21aa31fd256c199de02f2dd7868eef2c2bd85295->leave($__internal_36a1b7fe019b7171d0d2f11d21aa31fd256c199de02f2dd7868eef2c2bd85295_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_65e215d5d929e60b450179617503fe04b158aa046faaf80f8abb65726bd1a148 = $this->env->getExtension("native_profiler");
        $__internal_65e215d5d929e60b450179617503fe04b158aa046faaf80f8abb65726bd1a148->enter($__internal_65e215d5d929e60b450179617503fe04b158aa046faaf80f8abb65726bd1a148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_65e215d5d929e60b450179617503fe04b158aa046faaf80f8abb65726bd1a148->leave($__internal_65e215d5d929e60b450179617503fe04b158aa046faaf80f8abb65726bd1a148_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_84613c50ae1039c56c938a62e3b7b39f0630b8e6ef28215313f68d054b7f18ca = $this->env->getExtension("native_profiler");
        $__internal_84613c50ae1039c56c938a62e3b7b39f0630b8e6ef28215313f68d054b7f18ca->enter($__internal_84613c50ae1039c56c938a62e3b7b39f0630b8e6ef28215313f68d054b7f18ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_84613c50ae1039c56c938a62e3b7b39f0630b8e6ef28215313f68d054b7f18ca->leave($__internal_84613c50ae1039c56c938a62e3b7b39f0630b8e6ef28215313f68d054b7f18ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
