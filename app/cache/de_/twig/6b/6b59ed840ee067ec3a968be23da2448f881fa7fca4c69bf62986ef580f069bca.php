<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3c210d08a26d028caf1121c548587b5ef49a3f570250d3fcd2305e34f5905285 extends Twig_Template
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
        $__internal_9d15b2d8c3f3901518663c7efb4fb80619d4fab3e39a36764f10ff6ae02d6b51 = $this->env->getExtension("native_profiler");
        $__internal_9d15b2d8c3f3901518663c7efb4fb80619d4fab3e39a36764f10ff6ae02d6b51->enter($__internal_9d15b2d8c3f3901518663c7efb4fb80619d4fab3e39a36764f10ff6ae02d6b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9d15b2d8c3f3901518663c7efb4fb80619d4fab3e39a36764f10ff6ae02d6b51->leave($__internal_9d15b2d8c3f3901518663c7efb4fb80619d4fab3e39a36764f10ff6ae02d6b51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
