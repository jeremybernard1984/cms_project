<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cb6a487315cf25307a6ced002222a345afe3e8d8540604d289ae40b8ec7e786a extends Twig_Template
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
        $__internal_4f131601dd3280dd08ea3ef9dfb74e16f2580872d065d9246e0d474f4a0d049a = $this->env->getExtension("native_profiler");
        $__internal_4f131601dd3280dd08ea3ef9dfb74e16f2580872d065d9246e0d474f4a0d049a->enter($__internal_4f131601dd3280dd08ea3ef9dfb74e16f2580872d065d9246e0d474f4a0d049a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4f131601dd3280dd08ea3ef9dfb74e16f2580872d065d9246e0d474f4a0d049a->leave($__internal_4f131601dd3280dd08ea3ef9dfb74e16f2580872d065d9246e0d474f4a0d049a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
