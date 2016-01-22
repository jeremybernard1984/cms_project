<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_ddc330bb152dd27df9f6c881affc1722e624aa9331acbaf58047f4792aa0ce29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f98a4fbda239d5902731c9ab4d473c5282c75690f3d74b2605f18d666111af79 = $this->env->getExtension("native_profiler");
        $__internal_f98a4fbda239d5902731c9ab4d473c5282c75690f3d74b2605f18d666111af79->enter($__internal_f98a4fbda239d5902731c9ab4d473c5282c75690f3d74b2605f18d666111af79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f98a4fbda239d5902731c9ab4d473c5282c75690f3d74b2605f18d666111af79->leave($__internal_f98a4fbda239d5902731c9ab4d473c5282c75690f3d74b2605f18d666111af79_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0063d0d2cebcd0d752f70bc19d91107740f3dee60473cbeac25b14582a463cb = $this->env->getExtension("native_profiler");
        $__internal_d0063d0d2cebcd0d752f70bc19d91107740f3dee60473cbeac25b14582a463cb->enter($__internal_d0063d0d2cebcd0d752f70bc19d91107740f3dee60473cbeac25b14582a463cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_d0063d0d2cebcd0d752f70bc19d91107740f3dee60473cbeac25b14582a463cb->leave($__internal_d0063d0d2cebcd0d752f70bc19d91107740f3dee60473cbeac25b14582a463cb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
