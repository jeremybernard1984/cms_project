<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ee12ce595760d2ef212ce5f257f51082c2da148cbd7f9aa6f01aba465a554a87 extends Twig_Template
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
        $__internal_b71e83ff22d9b5ada708c52d2c07a356020a468b2ee7bfe4d6130797f733fee2 = $this->env->getExtension("native_profiler");
        $__internal_b71e83ff22d9b5ada708c52d2c07a356020a468b2ee7bfe4d6130797f733fee2->enter($__internal_b71e83ff22d9b5ada708c52d2c07a356020a468b2ee7bfe4d6130797f733fee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b71e83ff22d9b5ada708c52d2c07a356020a468b2ee7bfe4d6130797f733fee2->leave($__internal_b71e83ff22d9b5ada708c52d2c07a356020a468b2ee7bfe4d6130797f733fee2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
