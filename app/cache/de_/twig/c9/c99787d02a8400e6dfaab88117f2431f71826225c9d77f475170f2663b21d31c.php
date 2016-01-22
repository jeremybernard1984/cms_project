<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_38266445f61886f6b1ce3c8cc38a757ee3f2cbd87cc65432076d24ad24dadfb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_a60da38e63a92c54b87ee894dc38260c02bc46f857ac24935b047d42e2652d4d = $this->env->getExtension("native_profiler");
        $__internal_a60da38e63a92c54b87ee894dc38260c02bc46f857ac24935b047d42e2652d4d->enter($__internal_a60da38e63a92c54b87ee894dc38260c02bc46f857ac24935b047d42e2652d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a60da38e63a92c54b87ee894dc38260c02bc46f857ac24935b047d42e2652d4d->leave($__internal_a60da38e63a92c54b87ee894dc38260c02bc46f857ac24935b047d42e2652d4d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f46ea222f7d21cd408048d64619c016ecf6a149b9a34f4928345f258cd35b9a2 = $this->env->getExtension("native_profiler");
        $__internal_f46ea222f7d21cd408048d64619c016ecf6a149b9a34f4928345f258cd35b9a2->enter($__internal_f46ea222f7d21cd408048d64619c016ecf6a149b9a34f4928345f258cd35b9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f46ea222f7d21cd408048d64619c016ecf6a149b9a34f4928345f258cd35b9a2->leave($__internal_f46ea222f7d21cd408048d64619c016ecf6a149b9a34f4928345f258cd35b9a2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
