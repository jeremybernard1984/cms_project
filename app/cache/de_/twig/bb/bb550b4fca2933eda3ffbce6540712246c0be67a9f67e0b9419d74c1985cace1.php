<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ba39c13ae8190a5e8cd854b2943634cd9c33ce026fc95562608e5cfd2912fb1c extends Twig_Template
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
        $__internal_406a3f96fbb205fca4f3f3daa64d85900fd0ef49334ed5d8ef2f39800c07b847 = $this->env->getExtension("native_profiler");
        $__internal_406a3f96fbb205fca4f3f3daa64d85900fd0ef49334ed5d8ef2f39800c07b847->enter($__internal_406a3f96fbb205fca4f3f3daa64d85900fd0ef49334ed5d8ef2f39800c07b847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_406a3f96fbb205fca4f3f3daa64d85900fd0ef49334ed5d8ef2f39800c07b847->leave($__internal_406a3f96fbb205fca4f3f3daa64d85900fd0ef49334ed5d8ef2f39800c07b847_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
