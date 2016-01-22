<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_65c03dc7205027ada4ef512de08aa934054877ea4f009e8449b414186c696d31 extends Twig_Template
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
        $__internal_f12c90c3206508362525f8d5fa79679c11e5563dc6383a52a990779f765a8200 = $this->env->getExtension("native_profiler");
        $__internal_f12c90c3206508362525f8d5fa79679c11e5563dc6383a52a990779f765a8200->enter($__internal_f12c90c3206508362525f8d5fa79679c11e5563dc6383a52a990779f765a8200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f12c90c3206508362525f8d5fa79679c11e5563dc6383a52a990779f765a8200->leave($__internal_f12c90c3206508362525f8d5fa79679c11e5563dc6383a52a990779f765a8200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
