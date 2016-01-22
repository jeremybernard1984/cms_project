<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_74c8f2dbb2ac3aa52376fbb7733925f4b4a970438f6889e24bde17d728b34bcc extends Twig_Template
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
        $__internal_2058dc73ca6c39d229607298cf9cd6f0c9aba2c1507991845604d629e5d1b954 = $this->env->getExtension("native_profiler");
        $__internal_2058dc73ca6c39d229607298cf9cd6f0c9aba2c1507991845604d629e5d1b954->enter($__internal_2058dc73ca6c39d229607298cf9cd6f0c9aba2c1507991845604d629e5d1b954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2058dc73ca6c39d229607298cf9cd6f0c9aba2c1507991845604d629e5d1b954->leave($__internal_2058dc73ca6c39d229607298cf9cd6f0c9aba2c1507991845604d629e5d1b954_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
