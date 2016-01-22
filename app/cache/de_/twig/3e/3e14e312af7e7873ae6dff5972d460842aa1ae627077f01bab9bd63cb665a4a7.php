<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c60f0434f148e0bed8ee7746f164b953689ad938f0d7012478eaa20b2a6c1d12 extends Twig_Template
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
        $__internal_ad4bab1c3dcc5295e4c2854633ed1d248a20eb0866ec6d4402333d57be0196e3 = $this->env->getExtension("native_profiler");
        $__internal_ad4bab1c3dcc5295e4c2854633ed1d248a20eb0866ec6d4402333d57be0196e3->enter($__internal_ad4bab1c3dcc5295e4c2854633ed1d248a20eb0866ec6d4402333d57be0196e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ad4bab1c3dcc5295e4c2854633ed1d248a20eb0866ec6d4402333d57be0196e3->leave($__internal_ad4bab1c3dcc5295e4c2854633ed1d248a20eb0866ec6d4402333d57be0196e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
