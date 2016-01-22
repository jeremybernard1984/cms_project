<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_dc60c86833d821e8fd59787c416785e2d0f52555d80b8c77de13bad4f5319adf extends Twig_Template
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
        $__internal_a443450ba05653ae10ccb075bc982f93230ef19b2e01b47cec360b6d25090a7f = $this->env->getExtension("native_profiler");
        $__internal_a443450ba05653ae10ccb075bc982f93230ef19b2e01b47cec360b6d25090a7f->enter($__internal_a443450ba05653ae10ccb075bc982f93230ef19b2e01b47cec360b6d25090a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a443450ba05653ae10ccb075bc982f93230ef19b2e01b47cec360b6d25090a7f->leave($__internal_a443450ba05653ae10ccb075bc982f93230ef19b2e01b47cec360b6d25090a7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
