<?php

/* PointWebAdminBundle:Form:fields.html.twig */
class __TwigTemplate_a4ca3765e3460802298fbc52a25532b7df68f03ad5edef3a80f4d00fe810e6a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_widget' => array($this, 'block_choice_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fac1270cbf5c0f2ab494eb53d307dd9d419352ea06bf72ed4419938e70b926af = $this->env->getExtension("native_profiler");
        $__internal_fac1270cbf5c0f2ab494eb53d307dd9d419352ea06bf72ed4419938e70b926af->enter($__internal_fac1270cbf5c0f2ab494eb53d307dd9d419352ea06bf72ed4419938e70b926af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('radio_widget', $context, $blocks);
        
        $__internal_fac1270cbf5c0f2ab494eb53d307dd9d419352ea06bf72ed4419938e70b926af->leave($__internal_fac1270cbf5c0f2ab494eb53d307dd9d419352ea06bf72ed4419938e70b926af_prof);

    }

    // line 1
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_0d40a4ccd6faf150127b82aec7fc67978b7f0d322cbc5149bdc2b3f4e4a42e84 = $this->env->getExtension("native_profiler");
        $__internal_0d40a4ccd6faf150127b82aec7fc67978b7f0d322cbc5149bdc2b3f4e4a42e84->enter($__internal_0d40a4ccd6faf150127b82aec7fc67978b7f0d322cbc5149bdc2b3f4e4a42e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 4
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 5
                echo "                <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
                    ";
                // line 6
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                </div>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        ";
        } else {
            // line 10
            echo "            <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo ">
                ";
            // line 11
            if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
                // line 12
                echo "                    <option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</option>
                ";
            }
            // line 14
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 15
                echo "                    ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 16
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                    ";
                // line 17
                if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                    // line 18
                    echo "                        <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
                    ";
                }
                // line 20
                echo "                ";
            }
            // line 21
            echo "                ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 22
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
            </select>
        ";
        }
        // line 25
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0d40a4ccd6faf150127b82aec7fc67978b7f0d322cbc5149bdc2b3f4e4a42e84->leave($__internal_0d40a4ccd6faf150127b82aec7fc67978b7f0d322cbc5149bdc2b3f4e4a42e84_prof);

    }

    // line 28
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_451e8a66616a62582ba6dbfab3a3b084b302ff4ac146eb51b93fb1c64b6dd2c5 = $this->env->getExtension("native_profiler");
        $__internal_451e8a66616a62582ba6dbfab3a3b084b302ff4ac146eb51b93fb1c64b6dd2c5->enter($__internal_451e8a66616a62582ba6dbfab3a3b084b302ff4ac146eb51b93fb1c64b6dd2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 29
        echo "    ";
        ob_start();
        // line 30
        echo "        <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"><input
                    type=\"checkbox\" ";
        // line 31
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        </label>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_451e8a66616a62582ba6dbfab3a3b084b302ff4ac146eb51b93fb1c64b6dd2c5->leave($__internal_451e8a66616a62582ba6dbfab3a3b084b302ff4ac146eb51b93fb1c64b6dd2c5_prof);

    }

    // line 36
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_64b82a4ddf56e13ae5a264affa5ed0aa972ac92eed6d4569c1178930b166b135 = $this->env->getExtension("native_profiler");
        $__internal_64b82a4ddf56e13ae5a264affa5ed0aa972ac92eed6d4569c1178930b166b135->enter($__internal_64b82a4ddf56e13ae5a264affa5ed0aa972ac92eed6d4569c1178930b166b135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 37
        echo "    ";
        ob_start();
        // line 38
        echo "        <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"><input
                    type=\"radio\" ";
        // line 39
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        </label>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_64b82a4ddf56e13ae5a264affa5ed0aa972ac92eed6d4569c1178930b166b135->leave($__internal_64b82a4ddf56e13ae5a264affa5ed0aa972ac92eed6d4569c1178930b166b135_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  206 => 39,  201 => 38,  198 => 37,  192 => 36,  171 => 31,  166 => 30,  163 => 29,  157 => 28,  149 => 25,  142 => 22,  139 => 21,  136 => 20,  130 => 18,  128 => 17,  123 => 16,  120 => 15,  117 => 14,  107 => 12,  105 => 11,  97 => 10,  94 => 9,  77 => 6,  72 => 5,  54 => 4,  51 => 3,  48 => 2,  42 => 1,  35 => 36,  32 => 35,  30 => 28,  27 => 27,  25 => 1,);
    }
}
