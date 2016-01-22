<?php

/* default/index.html.twig */
class __TwigTemplate_e836e52e6275309ed75f8ab758fbd6033a1f4b104089bd6673e1e147389fa76b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3412aa659492cbb281f5306363ea741abe2522e1be951719cfa7631bccb1726f = $this->env->getExtension("native_profiler");
        $__internal_3412aa659492cbb281f5306363ea741abe2522e1be951719cfa7631bccb1726f->enter($__internal_3412aa659492cbb281f5306363ea741abe2522e1be951719cfa7631bccb1726f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3412aa659492cbb281f5306363ea741abe2522e1be951719cfa7631bccb1726f->leave($__internal_3412aa659492cbb281f5306363ea741abe2522e1be951719cfa7631bccb1726f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d48afdacf95e0835b28afb806041746f19853fd9aa67d2760e2e98346835221 = $this->env->getExtension("native_profiler");
        $__internal_4d48afdacf95e0835b28afb806041746f19853fd9aa67d2760e2e98346835221->enter($__internal_4d48afdacf95e0835b28afb806041746f19853fd9aa67d2760e2e98346835221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_4d48afdacf95e0835b28afb806041746f19853fd9aa67d2760e2e98346835221->leave($__internal_4d48afdacf95e0835b28afb806041746f19853fd9aa67d2760e2e98346835221_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Homepage.*/
/* {% endblock %}*/
/* */
