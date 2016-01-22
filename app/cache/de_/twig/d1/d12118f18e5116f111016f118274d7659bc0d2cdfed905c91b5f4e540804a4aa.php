<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3e1a7977a5683ae5c8f698029536b2e6e26b07ce67ecd8f6bc9647af108fc3bd extends Twig_Template
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
        $__internal_4fc8b40f18bcfcee5f369dfc2c15cb050c352c8ec1802ddae1b8faec1f511f0b = $this->env->getExtension("native_profiler");
        $__internal_4fc8b40f18bcfcee5f369dfc2c15cb050c352c8ec1802ddae1b8faec1f511f0b->enter($__internal_4fc8b40f18bcfcee5f369dfc2c15cb050c352c8ec1802ddae1b8faec1f511f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4fc8b40f18bcfcee5f369dfc2c15cb050c352c8ec1802ddae1b8faec1f511f0b->leave($__internal_4fc8b40f18bcfcee5f369dfc2c15cb050c352c8ec1802ddae1b8faec1f511f0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
