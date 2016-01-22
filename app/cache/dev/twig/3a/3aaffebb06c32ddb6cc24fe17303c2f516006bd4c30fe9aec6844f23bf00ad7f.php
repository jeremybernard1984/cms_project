<?php

/* CoreSphereConsoleBundle:Console:terminal.html.twig */
class __TwigTemplate_3c98a4c63cf5d903ae01bbc08623d6b1ca61f82c87b2006de6f7f93d14eacb04 extends Twig_Template
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
        $__internal_e0d54e88a59fa1abb43bca3025543f8aab7e8ad53ae0179227ad555e6fc890f1 = $this->env->getExtension("native_profiler");
        $__internal_e0d54e88a59fa1abb43bca3025543f8aab7e8ad53ae0179227ad555e6fc890f1->enter($__internal_e0d54e88a59fa1abb43bca3025543f8aab7e8ad53ae0179227ad555e6fc890f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:terminal.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.headline.index"), "html", null, true);
        echo "</h1>
<div id=\"coresphere_consolebundle_console\" class=\"console\">
    <div class=\"console_info_bar\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.working_directory"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["working_dir"]) ? $context["working_dir"] : $this->getContext($context, "working_dir")), "html", null, true);
        echo "</strong>
        <span class=\"console_env_info\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.environment"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, (isset($context["environment"]) ? $context["environment"] : $this->getContext($context, "environment")), "html", null, true);
        echo "</strong></span>
    </div>
    <div class=\"console_log_container\">
        <ol class=\"console_log\">

        </ol>
    </div>
    <div class=\"console_prompt\">
        <div contenteditable=\"true\" class=\"console_input\"></div>
        <div class=\"console_input_background\"></div>
    </div>
    <div class=\"console_suggestions\"></div>
</div>
";
        
        $__internal_e0d54e88a59fa1abb43bca3025543f8aab7e8ad53ae0179227ad555e6fc890f1->leave($__internal_e0d54e88a59fa1abb43bca3025543f8aab7e8ad53ae0179227ad555e6fc890f1_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:terminal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  22 => 1,);
    }
}
/* <h1>{{ 'coresphere_console.headline.index'|trans }}</h1>*/
/* <div id="coresphere_consolebundle_console" class="console">*/
/*     <div class="console_info_bar">*/
/*         {{ 'coresphere_console.working_directory'|trans }}: <strong>{{ working_dir }}</strong>*/
/*         <span class="console_env_info">{{ 'coresphere_console.environment'|trans }}: <strong>{{ environment }}</strong></span>*/
/*     </div>*/
/*     <div class="console_log_container">*/
/*         <ol class="console_log">*/
/* */
/*         </ol>*/
/*     </div>*/
/*     <div class="console_prompt">*/
/*         <div contenteditable="true" class="console_input"></div>*/
/*         <div class="console_input_background"></div>*/
/*     </div>*/
/*     <div class="console_suggestions"></div>*/
/* </div>*/
/* */
