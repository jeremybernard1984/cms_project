<?php

/* PointWebAdminBundle:Form:fields.html.twig */
class __TwigTemplate_169d23b88b398d8f5f9003fbc58169704d04c4d957818a02d5e292904aa5b7ea extends Twig_Template
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
        $__internal_11b29c842f60f3ce19c77d7527d6b3f4dee267b732461bcf1581fb5f36d6dc3d = $this->env->getExtension("native_profiler");
        $__internal_11b29c842f60f3ce19c77d7527d6b3f4dee267b732461bcf1581fb5f36d6dc3d->enter($__internal_11b29c842f60f3ce19c77d7527d6b3f4dee267b732461bcf1581fb5f36d6dc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Form:fields.html.twig"));

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
        
        $__internal_11b29c842f60f3ce19c77d7527d6b3f4dee267b732461bcf1581fb5f36d6dc3d->leave($__internal_11b29c842f60f3ce19c77d7527d6b3f4dee267b732461bcf1581fb5f36d6dc3d_prof);

    }

    // line 1
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_f136b321b726f32195e429b815c980d405748939797b8c34e9484c743dbf2a9b = $this->env->getExtension("native_profiler");
        $__internal_f136b321b726f32195e429b815c980d405748939797b8c34e9484c743dbf2a9b->enter($__internal_f136b321b726f32195e429b815c980d405748939797b8c34e9484c743dbf2a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 4
            echo "            ";
            $context['_parent'] = $context;
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
        
        $__internal_f136b321b726f32195e429b815c980d405748939797b8c34e9484c743dbf2a9b->leave($__internal_f136b321b726f32195e429b815c980d405748939797b8c34e9484c743dbf2a9b_prof);

    }

    // line 28
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8d42779e982d7d8d504e1972dd44872375d820f02e2b1efb293e480c1ddcfc9d = $this->env->getExtension("native_profiler");
        $__internal_8d42779e982d7d8d504e1972dd44872375d820f02e2b1efb293e480c1ddcfc9d->enter($__internal_8d42779e982d7d8d504e1972dd44872375d820f02e2b1efb293e480c1ddcfc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_8d42779e982d7d8d504e1972dd44872375d820f02e2b1efb293e480c1ddcfc9d->leave($__internal_8d42779e982d7d8d504e1972dd44872375d820f02e2b1efb293e480c1ddcfc9d_prof);

    }

    // line 36
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_72096ce84c23feb163ce011418d9647edc2ef9041026457b43358b085d2c1a0f = $this->env->getExtension("native_profiler");
        $__internal_72096ce84c23feb163ce011418d9647edc2ef9041026457b43358b085d2c1a0f->enter($__internal_72096ce84c23feb163ce011418d9647edc2ef9041026457b43358b085d2c1a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_72096ce84c23feb163ce011418d9647edc2ef9041026457b43358b085d2c1a0f->leave($__internal_72096ce84c23feb163ce011418d9647edc2ef9041026457b43358b085d2c1a0f_prof);

    }

    // line 43
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_55bbb7f0c2f026f7cc1787a396bcf2736378991b35e4083d5087ef5fbc04e7ee = $this->env->getExtension("native_profiler");
        $__internal_55bbb7f0c2f026f7cc1787a396bcf2736378991b35e4083d5087ef5fbc04e7ee->enter($__internal_55bbb7f0c2f026f7cc1787a396bcf2736378991b35e4083d5087ef5fbc04e7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

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
        
        $__internal_55bbb7f0c2f026f7cc1787a396bcf2736378991b35e4083d5087ef5fbc04e7ee->leave($__internal_55bbb7f0c2f026f7cc1787a396bcf2736378991b35e4083d5087ef5fbc04e7ee_prof);

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
/* {% block choice_widget %}*/
/*     {% spaceless %}*/
/*         {% if expanded %}*/
/*             {% for child in form %}*/
/*                 <div {{ block('widget_container_attributes') }}>*/
/*                     {{ form_widget(child) }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% else %}*/
/*             <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*                 {% if placeholder is not none %}*/
/*                     <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder|trans({}, translation_domain) }}</option>*/
/*                 {% endif %}*/
/*                 {% if preferred_choices|length > 0 %}*/
/*                     {% set options = preferred_choices %}*/
/*                     {{ block('choice_widget_options') }}*/
/*                     {% if choices|length > 0 and separator is not none %}*/
/*                         <option disabled="disabled">{{ separator }}</option>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*                 {% set options = choices %}*/
/*                 {{ block('choice_widget_options') }}*/
/*             </select>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget %}*/
/* */
/* {% block checkbox_widget %}*/
/*     {% spaceless %}*/
/*         <label for="{{ id }}"><input*/
/*                     type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />{{ label|trans }}*/
/*         </label>*/
/*     {% endspaceless %}*/
/* {% endblock checkbox_widget %}*/
/* */
/* {% block radio_widget %}*/
/*     {% spaceless %}*/
/*         <label for="{{ id }}"><input type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />{{ label|trans }}*/
/*         </label>*/
/*     {% endspaceless %}*/
/* {% endblock radio_widget %}*/
/* */
/* {% block file_widget %}*/
/*     {% spaceless %}*/
/*         <div class="input-group" style="margin: 5px 0">*/
/*                 <span class="input-group-btn">*/
/*                     <span class="btn btn-primary btn-file">*/
/*                         Browse&hellip;*/
/*                         <input type="file" {{ block('widget_attributes') }}>*/
/*                     </span>*/
/*                 </span>*/
/*             <input type="text" class="form-control" readonly>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock file_widget  %}*/
/* */
/* */
/* */
/* */
/* */
