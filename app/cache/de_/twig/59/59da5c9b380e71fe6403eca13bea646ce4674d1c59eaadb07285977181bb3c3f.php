<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6818be7cb5baf54d1caac5e8e6161042535158e21566385fa30d5016d94ce8b2 extends Twig_Template
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
        $__internal_3966debfa8eabf625a4b95889718652553a4519b87cc5ffe8e66d7552516ecd0 = $this->env->getExtension("native_profiler");
        $__internal_3966debfa8eabf625a4b95889718652553a4519b87cc5ffe8e66d7552516ecd0->enter($__internal_3966debfa8eabf625a4b95889718652553a4519b87cc5ffe8e66d7552516ecd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3966debfa8eabf625a4b95889718652553a4519b87cc5ffe8e66d7552516ecd0->leave($__internal_3966debfa8eabf625a4b95889718652553a4519b87cc5ffe8e66d7552516ecd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
