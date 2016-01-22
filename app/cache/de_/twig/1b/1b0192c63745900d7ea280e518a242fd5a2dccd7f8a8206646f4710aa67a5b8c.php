<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_036850bae3cd69ba42ace4da7894973e9062fc4a4cc3700bb4cce6dadb04d755 extends Twig_Template
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
        $__internal_94d93d74588f4e992c983972dcadb7cf944fc4e1c3774e650e3610fd5f908057 = $this->env->getExtension("native_profiler");
        $__internal_94d93d74588f4e992c983972dcadb7cf944fc4e1c3774e650e3610fd5f908057->enter($__internal_94d93d74588f4e992c983972dcadb7cf944fc4e1c3774e650e3610fd5f908057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_94d93d74588f4e992c983972dcadb7cf944fc4e1c3774e650e3610fd5f908057->leave($__internal_94d93d74588f4e992c983972dcadb7cf944fc4e1c3774e650e3610fd5f908057_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
