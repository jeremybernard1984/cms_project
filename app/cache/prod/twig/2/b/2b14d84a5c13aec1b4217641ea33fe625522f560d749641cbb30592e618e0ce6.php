<?php

/* PointWebAdminBundle:Form:fields.html.twig */
class __TwigTemplate_2b14d84a5c13aec1b4217641ea33fe625522f560d749641cbb30592e618e0ce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_widget' => array($this, 'block_choice_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'file_widget' => array($this, 'block_file_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5832d02dfabcee0049733c9d47f3d67b470dfef43d672c5a1d2256accf7a9617 = $this->env->getExtension("native_profiler");
        $__internal_5832d02dfabcee0049733c9d47f3d67b470dfef43d672c5a1d2256accf7a9617->enter($__internal_5832d02dfabcee0049733c9d47f3d67b470dfef43d672c5a1d2256accf7a9617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Form:fields.html.twig"));

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
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('file_widget', $context, $blocks);
        // line 56
        echo "



";
        
        $__internal_5832d02dfabcee0049733c9d47f3d67b470dfef43d672c5a1d2256accf7a9617->leave($__internal_5832d02dfabcee0049733c9d47f3d67b470dfef43d672c5a1d2256accf7a9617_prof);

    }

    // line 1
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_32aefc2c1b3a440f3839ed870d51ac7fb5675a1a1e2da09ed1880baff3575128 = $this->env->getExtension("native_profiler");
        $__internal_32aefc2c1b3a440f3839ed870d51ac7fb5675a1a1e2da09ed1880baff3575128->enter($__internal_32aefc2c1b3a440f3839ed870d51ac7fb5675a1a1e2da09ed1880baff3575128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

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
        
        $__internal_32aefc2c1b3a440f3839ed870d51ac7fb5675a1a1e2da09ed1880baff3575128->leave($__internal_32aefc2c1b3a440f3839ed870d51ac7fb5675a1a1e2da09ed1880baff3575128_prof);

    }

    // line 28
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_97ba60af382c6e289d0ed6d44b00e6a76a96efc3b6a0ae781e55d57bb7aedc8c = $this->env->getExtension("native_profiler");
        $__internal_97ba60af382c6e289d0ed6d44b00e6a76a96efc3b6a0ae781e55d57bb7aedc8c->enter($__internal_97ba60af382c6e289d0ed6d44b00e6a76a96efc3b6a0ae781e55d57bb7aedc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_97ba60af382c6e289d0ed6d44b00e6a76a96efc3b6a0ae781e55d57bb7aedc8c->leave($__internal_97ba60af382c6e289d0ed6d44b00e6a76a96efc3b6a0ae781e55d57bb7aedc8c_prof);

    }

    // line 36
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e894402460a5d990206dae8691f6a513c4c400f5f98d5cfb41bf361cad8d6e58 = $this->env->getExtension("native_profiler");
        $__internal_e894402460a5d990206dae8691f6a513c4c400f5f98d5cfb41bf361cad8d6e58->enter($__internal_e894402460a5d990206dae8691f6a513c4c400f5f98d5cfb41bf361cad8d6e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 37
        echo "    ";
        ob_start();
        // line 38
        echo "        <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"><input type=\"radio\" ";
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
        
        $__internal_e894402460a5d990206dae8691f6a513c4c400f5f98d5cfb41bf361cad8d6e58->leave($__internal_e894402460a5d990206dae8691f6a513c4c400f5f98d5cfb41bf361cad8d6e58_prof);

    }

    // line 43
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_8fd1692275bb43c069afda8375b099ea4860255490e646dbe2c8fff7dc067d00 = $this->env->getExtension("native_profiler");
        $__internal_8fd1692275bb43c069afda8375b099ea4860255490e646dbe2c8fff7dc067d00->enter($__internal_8fd1692275bb43c069afda8375b099ea4860255490e646dbe2c8fff7dc067d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 44
        echo "    ";
        ob_start();
        // line 45
        echo "        <div class=\"input-group\" style=\"margin: 5px 0\">
                <span class=\"input-group-btn\">
                    <span class=\"btn btn-primary btn-file\">
                        Browse&hellip;
                        <input type=\"file\" ";
        // line 49
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
                    </span>
                </span>
            <input type=\"text\" class=\"form-control\" readonly>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8fd1692275bb43c069afda8375b099ea4860255490e646dbe2c8fff7dc067d00->leave($__internal_8fd1692275bb43c069afda8375b099ea4860255490e646dbe2c8fff7dc067d00_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  252 => 49,  246 => 45,  243 => 44,  237 => 43,  213 => 38,  210 => 37,  204 => 36,  183 => 31,  178 => 30,  175 => 29,  169 => 28,  161 => 25,  154 => 22,  151 => 21,  148 => 20,  142 => 18,  140 => 17,  135 => 16,  132 => 15,  129 => 14,  119 => 12,  117 => 11,  109 => 10,  106 => 9,  89 => 6,  84 => 5,  66 => 4,  63 => 3,  60 => 2,  54 => 1,  43 => 56,  41 => 43,  38 => 42,  36 => 36,  33 => 35,  31 => 28,  28 => 27,  26 => 1,);
    }
}
