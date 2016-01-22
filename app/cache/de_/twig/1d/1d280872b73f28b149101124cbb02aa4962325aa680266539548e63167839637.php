<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_b16f8ec9df9a09054c4e7866f1754e3df2db570b26e549f98c37f189146ceacc extends Twig_Template
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
        $__internal_719d890fc4515e049ee3e30b3b8e98a46aa8c7a188b5f68fd3b2492f35edb459 = $this->env->getExtension("native_profiler");
        $__internal_719d890fc4515e049ee3e30b3b8e98a46aa8c7a188b5f68fd3b2492f35edb459->enter($__internal_719d890fc4515e049ee3e30b3b8e98a46aa8c7a188b5f68fd3b2492f35edb459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_719d890fc4515e049ee3e30b3b8e98a46aa8c7a188b5f68fd3b2492f35edb459->leave($__internal_719d890fc4515e049ee3e30b3b8e98a46aa8c7a188b5f68fd3b2492f35edb459_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
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
