<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4799a034651901f229654f9480ac8e478b95555541504b61cc91ee0fb629e388 extends Twig_Template
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
        $__internal_7df0caba1ffb5ff8be3195e6487a587a79e2fcdfa2385e9e7435627472522384 = $this->env->getExtension("native_profiler");
        $__internal_7df0caba1ffb5ff8be3195e6487a587a79e2fcdfa2385e9e7435627472522384->enter($__internal_7df0caba1ffb5ff8be3195e6487a587a79e2fcdfa2385e9e7435627472522384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7df0caba1ffb5ff8be3195e6487a587a79e2fcdfa2385e9e7435627472522384->leave($__internal_7df0caba1ffb5ff8be3195e6487a587a79e2fcdfa2385e9e7435627472522384_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
