<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_dba12cdc2563868ccfdecb2df8206cf48357c02ab7d2097ce82ad069c35f568c extends Twig_Template
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
        $__internal_01ec54ce0ddb69a13412137d3161d7f6370c0a572c1343499bed44dfaf9b558b = $this->env->getExtension("native_profiler");
        $__internal_01ec54ce0ddb69a13412137d3161d7f6370c0a572c1343499bed44dfaf9b558b->enter($__internal_01ec54ce0ddb69a13412137d3161d7f6370c0a572c1343499bed44dfaf9b558b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_01ec54ce0ddb69a13412137d3161d7f6370c0a572c1343499bed44dfaf9b558b->leave($__internal_01ec54ce0ddb69a13412137d3161d7f6370c0a572c1343499bed44dfaf9b558b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
