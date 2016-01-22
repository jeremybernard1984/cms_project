<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f6652966424a23913e68b2759594128072e3a2541553b947f091f40db09e493c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebUserBundle::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebUserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc229d66514bae3ffe94d38ce11fbea578d60543fc97f81e921fc9dee8f4e92d = $this->env->getExtension("native_profiler");
        $__internal_bc229d66514bae3ffe94d38ce11fbea578d60543fc97f81e921fc9dee8f4e92d->enter($__internal_bc229d66514bae3ffe94d38ce11fbea578d60543fc97f81e921fc9dee8f4e92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc229d66514bae3ffe94d38ce11fbea578d60543fc97f81e921fc9dee8f4e92d->leave($__internal_bc229d66514bae3ffe94d38ce11fbea578d60543fc97f81e921fc9dee8f4e92d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3adebb0b3cbc90425b6d8843ab0785804ec2d788b097c37c3666d944c303e30f = $this->env->getExtension("native_profiler");
        $__internal_3adebb0b3cbc90425b6d8843ab0785804ec2d788b097c37c3666d944c303e30f->enter($__internal_3adebb0b3cbc90425b6d8843ab0785804ec2d788b097c37c3666d944c303e30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <div>
        <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <fieldset>
                <legend>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "</legend>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                <div class=\"form-group\">
                    <label for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                           required=\"required\"/>

                </div>
                <div class=\"form-group\">
                    <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\"/>
                </div>
                <div class=\"checkbox\">
                    <label><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                </div>

                <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary pull-right\"
                       value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
            </fieldset>
        </form>
    </div>
";
        
        $__internal_3adebb0b3cbc90425b6d8843ab0785804ec2d788b097c37c3666d944c303e30f->leave($__internal_3adebb0b3cbc90425b6d8843ab0785804ec2d788b097c37c3666d944c303e30f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  87 => 27,  80 => 23,  72 => 18,  68 => 17,  62 => 14,  58 => 13,  53 => 11,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
