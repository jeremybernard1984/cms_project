<?php

/* @PointWebUser/Default/index.html.twig */
class __TwigTemplate_258e82e7f9e4d9e4ccd685ac6a7c11bd6bd8630e4ffa03e3aae6ed8e4335ec86 extends Twig_Template
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
        $__internal_43f157ddb2dd67b78f89e1ad1255584ae89adbd6cc8a87c6f144d7a8eb3eda56 = $this->env->getExtension("native_profiler");
        $__internal_43f157ddb2dd67b78f89e1ad1255584ae89adbd6cc8a87c6f144d7a8eb3eda56->enter($__internal_43f157ddb2dd67b78f89e1ad1255584ae89adbd6cc8a87c6f144d7a8eb3eda56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebUser/Default/index.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) ? $context["folders"] : $this->getContext($context, "folders")));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["folder"], "name", array()), "html", null, true);
            echo "
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["folder"], "pictures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 4
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "
        ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "description", array()), "html", null, true);
                echo "
        <img src=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "\"/>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_43f157ddb2dd67b78f89e1ad1255584ae89adbd6cc8a87c6f144d7a8eb3eda56->leave($__internal_43f157ddb2dd67b78f89e1ad1255584ae89adbd6cc8a87c6f144d7a8eb3eda56_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebUser/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 5,  35 => 4,  31 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for folder in folders %}*/
/*     {{ folder.name }}*/
/*     {% for picture in folder.pictures %}*/
/*         {{ picture.name }}*/
/*         {{ picture.description }}*/
/*         <img src="{{ asset(picture.getWebPath(base)) }}" alt="{{ picture.name }}"/>*/
/*         {% endfor %}*/
/* {% endfor %}*/
/* */
