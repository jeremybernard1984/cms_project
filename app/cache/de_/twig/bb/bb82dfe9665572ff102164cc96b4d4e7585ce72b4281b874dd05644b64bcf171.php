<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f9748cf7d2ea5c4f6502d20271ddba1ddbdc143681a958d191a58cb503187945 extends Twig_Template
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
        $__internal_4ef5620142f6e8d0d602581f0b83691c365ddae6cd143e6ab32ad973d52dbd07 = $this->env->getExtension("native_profiler");
        $__internal_4ef5620142f6e8d0d602581f0b83691c365ddae6cd143e6ab32ad973d52dbd07->enter($__internal_4ef5620142f6e8d0d602581f0b83691c365ddae6cd143e6ab32ad973d52dbd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4ef5620142f6e8d0d602581f0b83691c365ddae6cd143e6ab32ad973d52dbd07->leave($__internal_4ef5620142f6e8d0d602581f0b83691c365ddae6cd143e6ab32ad973d52dbd07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
