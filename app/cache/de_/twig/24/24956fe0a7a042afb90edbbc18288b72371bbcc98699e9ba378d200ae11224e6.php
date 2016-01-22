<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_67519a110f1c79400ac4be0c98166b8515dfbb9de3d82cae1a85749795745b8a extends Twig_Template
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
        $__internal_624d0aca0ac8412ecbd37f41639df900483f616bf96d9e9589a66ffa6d6bd26b = $this->env->getExtension("native_profiler");
        $__internal_624d0aca0ac8412ecbd37f41639df900483f616bf96d9e9589a66ffa6d6bd26b->enter($__internal_624d0aca0ac8412ecbd37f41639df900483f616bf96d9e9589a66ffa6d6bd26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_624d0aca0ac8412ecbd37f41639df900483f616bf96d9e9589a66ffa6d6bd26b->leave($__internal_624d0aca0ac8412ecbd37f41639df900483f616bf96d9e9589a66ffa6d6bd26b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
