<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9cffb6f1ae1751454184a38db17e64e87b8dca405eabecc2cc803baa758a60ec extends Twig_Template
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
        $__internal_eec62556e02dcf5ff1edabedb3eacd11193f7386c81c3c54423629c5a7c1b259 = $this->env->getExtension("native_profiler");
        $__internal_eec62556e02dcf5ff1edabedb3eacd11193f7386c81c3c54423629c5a7c1b259->enter($__internal_eec62556e02dcf5ff1edabedb3eacd11193f7386c81c3c54423629c5a7c1b259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_eec62556e02dcf5ff1edabedb3eacd11193f7386c81c3c54423629c5a7c1b259->leave($__internal_eec62556e02dcf5ff1edabedb3eacd11193f7386c81c3c54423629c5a7c1b259_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
