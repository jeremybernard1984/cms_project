<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_4edb945e9a6ef985777930fff112d12bc2ac5667e0c200b5407273b7ed1b7e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_398a8f3f96e0322aba7bf78caa1f66746e4b44a0c65fe90f5a2c93ec64eda2fb = $this->env->getExtension("native_profiler");
        $__internal_398a8f3f96e0322aba7bf78caa1f66746e4b44a0c65fe90f5a2c93ec64eda2fb->enter($__internal_398a8f3f96e0322aba7bf78caa1f66746e4b44a0c65fe90f5a2c93ec64eda2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_398a8f3f96e0322aba7bf78caa1f66746e4b44a0c65fe90f5a2c93ec64eda2fb->leave($__internal_398a8f3f96e0322aba7bf78caa1f66746e4b44a0c65fe90f5a2c93ec64eda2fb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
