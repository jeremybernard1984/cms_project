<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a323c403953da50bbf0b0b5e28fd936f08d97e28a7599cffd786a05dfeea9bb4 extends Twig_Template
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
        $__internal_7f5e4d19d957821c95fb1cd65ebb17b2bdb70cb0c6f848d27c876e54803c4f4d = $this->env->getExtension("native_profiler");
        $__internal_7f5e4d19d957821c95fb1cd65ebb17b2bdb70cb0c6f848d27c876e54803c4f4d->enter($__internal_7f5e4d19d957821c95fb1cd65ebb17b2bdb70cb0c6f848d27c876e54803c4f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7f5e4d19d957821c95fb1cd65ebb17b2bdb70cb0c6f848d27c876e54803c4f4d->leave($__internal_7f5e4d19d957821c95fb1cd65ebb17b2bdb70cb0c6f848d27c876e54803c4f4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
