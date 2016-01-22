<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c0c793a067b5df797997a6eb1eceecb33e43ae60ad7be1531cd91fda074f344e extends Twig_Template
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
        $__internal_aa4fce07cac974b7d89492c48e5d654263a41485ab945734c5a621536dd4521f = $this->env->getExtension("native_profiler");
        $__internal_aa4fce07cac974b7d89492c48e5d654263a41485ab945734c5a621536dd4521f->enter($__internal_aa4fce07cac974b7d89492c48e5d654263a41485ab945734c5a621536dd4521f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_aa4fce07cac974b7d89492c48e5d654263a41485ab945734c5a621536dd4521f->leave($__internal_aa4fce07cac974b7d89492c48e5d654263a41485ab945734c5a621536dd4521f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
