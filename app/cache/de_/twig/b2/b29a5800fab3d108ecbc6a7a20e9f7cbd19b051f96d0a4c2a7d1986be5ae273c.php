<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_82e2b98e9c28781259f782a66fb5a39967064f78fd5fbd98eb7c48a0174d5f9c extends Twig_Template
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
        $__internal_d0a1a8b6b3c3f2f5b2f0e78d1dacfa6eccae7bba27beb2b7d9b087bcb0326c1d = $this->env->getExtension("native_profiler");
        $__internal_d0a1a8b6b3c3f2f5b2f0e78d1dacfa6eccae7bba27beb2b7d9b087bcb0326c1d->enter($__internal_d0a1a8b6b3c3f2f5b2f0e78d1dacfa6eccae7bba27beb2b7d9b087bcb0326c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d0a1a8b6b3c3f2f5b2f0e78d1dacfa6eccae7bba27beb2b7d9b087bcb0326c1d->leave($__internal_d0a1a8b6b3c3f2f5b2f0e78d1dacfa6eccae7bba27beb2b7d9b087bcb0326c1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
