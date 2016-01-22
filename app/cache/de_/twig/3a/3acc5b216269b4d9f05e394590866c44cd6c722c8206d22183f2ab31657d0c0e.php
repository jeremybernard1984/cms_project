<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e421299a7e5ab20adb95a5dc7f8d47e17795e2efb7c09b2308c97396b1334f87 extends Twig_Template
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
        $__internal_1c7a4bba160d6924f6aeba7e9d3ce3c94ee13b7da5bae87956dc64b54576d934 = $this->env->getExtension("native_profiler");
        $__internal_1c7a4bba160d6924f6aeba7e9d3ce3c94ee13b7da5bae87956dc64b54576d934->enter($__internal_1c7a4bba160d6924f6aeba7e9d3ce3c94ee13b7da5bae87956dc64b54576d934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1c7a4bba160d6924f6aeba7e9d3ce3c94ee13b7da5bae87956dc64b54576d934->leave($__internal_1c7a4bba160d6924f6aeba7e9d3ce3c94ee13b7da5bae87956dc64b54576d934_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
