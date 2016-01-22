<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_e35f17b16e53638243bb2e01883e084dedd0cd42428f6f95039b1657a6ee01e1 extends Twig_Template
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
        $__internal_33ac19d27eb989ed883b3c400836e9c41ec6a9a2f33e233cce832a4fdc22adc1 = $this->env->getExtension("native_profiler");
        $__internal_33ac19d27eb989ed883b3c400836e9c41ec6a9a2f33e233cce832a4fdc22adc1->enter($__internal_33ac19d27eb989ed883b3c400836e9c41ec6a9a2f33e233cce832a4fdc22adc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_33ac19d27eb989ed883b3c400836e9c41ec6a9a2f33e233cce832a4fdc22adc1->leave($__internal_33ac19d27eb989ed883b3c400836e9c41ec6a9a2f33e233cce832a4fdc22adc1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6a68f4bad2f20bb2db7714dfadd314b9bc00138eb5404ceb2ff8d6eccc4d53aa = $this->env->getExtension("native_profiler");
        $__internal_6a68f4bad2f20bb2db7714dfadd314b9bc00138eb5404ceb2ff8d6eccc4d53aa->enter($__internal_6a68f4bad2f20bb2db7714dfadd314b9bc00138eb5404ceb2ff8d6eccc4d53aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6a68f4bad2f20bb2db7714dfadd314b9bc00138eb5404ceb2ff8d6eccc4d53aa->leave($__internal_6a68f4bad2f20bb2db7714dfadd314b9bc00138eb5404ceb2ff8d6eccc4d53aa_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_deb574fe15ba024ed71b14538a882fce128106a1a597ad41f175b082caa683df = $this->env->getExtension("native_profiler");
        $__internal_deb574fe15ba024ed71b14538a882fce128106a1a597ad41f175b082caa683df->enter($__internal_deb574fe15ba024ed71b14538a882fce128106a1a597ad41f175b082caa683df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_deb574fe15ba024ed71b14538a882fce128106a1a597ad41f175b082caa683df->leave($__internal_deb574fe15ba024ed71b14538a882fce128106a1a597ad41f175b082caa683df_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_40fa8e76f7c6284477d57e92cde885629217f28490ace996bcde253d763dc75c = $this->env->getExtension("native_profiler");
        $__internal_40fa8e76f7c6284477d57e92cde885629217f28490ace996bcde253d763dc75c->enter($__internal_40fa8e76f7c6284477d57e92cde885629217f28490ace996bcde253d763dc75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_40fa8e76f7c6284477d57e92cde885629217f28490ace996bcde253d763dc75c->leave($__internal_40fa8e76f7c6284477d57e92cde885629217f28490ace996bcde253d763dc75c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
