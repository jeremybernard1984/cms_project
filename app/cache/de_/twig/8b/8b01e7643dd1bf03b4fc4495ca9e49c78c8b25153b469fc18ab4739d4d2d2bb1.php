<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ed88210df632abbe05da22371ea0cb806fde73ac6683412777f4257ec6ee3023 extends Twig_Template
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
        $__internal_401014437a5ed27c8fc88f3ca0534244206eb2298fff38e9c9540e5df119d51e = $this->env->getExtension("native_profiler");
        $__internal_401014437a5ed27c8fc88f3ca0534244206eb2298fff38e9c9540e5df119d51e->enter($__internal_401014437a5ed27c8fc88f3ca0534244206eb2298fff38e9c9540e5df119d51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_401014437a5ed27c8fc88f3ca0534244206eb2298fff38e9c9540e5df119d51e->leave($__internal_401014437a5ed27c8fc88f3ca0534244206eb2298fff38e9c9540e5df119d51e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b085683647f6e0b2b1eca457a575771c976bf86fb19f8082c21ceb395350fb47 = $this->env->getExtension("native_profiler");
        $__internal_b085683647f6e0b2b1eca457a575771c976bf86fb19f8082c21ceb395350fb47->enter($__internal_b085683647f6e0b2b1eca457a575771c976bf86fb19f8082c21ceb395350fb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b085683647f6e0b2b1eca457a575771c976bf86fb19f8082c21ceb395350fb47->leave($__internal_b085683647f6e0b2b1eca457a575771c976bf86fb19f8082c21ceb395350fb47_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3a02859b6e1f3e1a538fd2407f89911444eebd37f3d20c1c96dcc4b47c94f474 = $this->env->getExtension("native_profiler");
        $__internal_3a02859b6e1f3e1a538fd2407f89911444eebd37f3d20c1c96dcc4b47c94f474->enter($__internal_3a02859b6e1f3e1a538fd2407f89911444eebd37f3d20c1c96dcc4b47c94f474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3a02859b6e1f3e1a538fd2407f89911444eebd37f3d20c1c96dcc4b47c94f474->leave($__internal_3a02859b6e1f3e1a538fd2407f89911444eebd37f3d20c1c96dcc4b47c94f474_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_172a1985c5d8706b7d05b52b657ac44c4249af0fa2d806d8716e9ececf56c196 = $this->env->getExtension("native_profiler");
        $__internal_172a1985c5d8706b7d05b52b657ac44c4249af0fa2d806d8716e9ececf56c196->enter($__internal_172a1985c5d8706b7d05b52b657ac44c4249af0fa2d806d8716e9ececf56c196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_172a1985c5d8706b7d05b52b657ac44c4249af0fa2d806d8716e9ececf56c196->leave($__internal_172a1985c5d8706b7d05b52b657ac44c4249af0fa2d806d8716e9ececf56c196_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
