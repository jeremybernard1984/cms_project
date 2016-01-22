<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_113e0f13e8e7bc2d36704e2c4ea9a71f1f2fee796a0d3681554a34521e3f317b extends Twig_Template
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
        $__internal_70f50d1077e1ee93fe13466b2e73dfe90878f643da68ab094e1240507201a9fb = $this->env->getExtension("native_profiler");
        $__internal_70f50d1077e1ee93fe13466b2e73dfe90878f643da68ab094e1240507201a9fb->enter($__internal_70f50d1077e1ee93fe13466b2e73dfe90878f643da68ab094e1240507201a9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_70f50d1077e1ee93fe13466b2e73dfe90878f643da68ab094e1240507201a9fb->leave($__internal_70f50d1077e1ee93fe13466b2e73dfe90878f643da68ab094e1240507201a9fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
