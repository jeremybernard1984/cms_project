<?php

/* @PointWebApp/knp_menu.html.twig */
class __TwigTemplate_d974b34fd4b5f2e8a37bdd74be28cb9a88b5e909685ed6ebedaf9abfaf45419b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@PointWebApp/knp_menu.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'sub_dropdownElement' => array($this, 'block_sub_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b016c340c08fed13ca5e10d84f8cf515c849cffbbd7a651a64807e25f5e2d8d = $this->env->getExtension("native_profiler");
        $__internal_8b016c340c08fed13ca5e10d84f8cf515c849cffbbd7a651a64807e25f5e2d8d->enter($__internal_8b016c340c08fed13ca5e10d84f8cf515c849cffbbd7a651a64807e25f5e2d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebApp/knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b016c340c08fed13ca5e10d84f8cf515c849cffbbd7a651a64807e25f5e2d8d->leave($__internal_8b016c340c08fed13ca5e10d84f8cf515c849cffbbd7a651a64807e25f5e2d8d_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_6f0b10624ff38ec5b5358470989849ca98fc1f3dec9bdf89df047b2897235851 = $this->env->getExtension("native_profiler");
        $__internal_6f0b10624ff38ec5b5358470989849ca98fc1f3dec9bdf89df047b2897235851->enter($__internal_6f0b10624ff38ec5b5358470989849ca98fc1f3dec9bdf89df047b2897235851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@PointWebApp/knp_menu.html.twig", 4);
        // line 5
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array()), false)) : (false));
            // line 8
            $context["is_sub_dropdown"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "sub_dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "sub_dropdown", array()), false)) : (false));
            // line 9
            $context["divider_prepend"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array()), false)) : (false));
            // line 10
            $context["divider_append"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array()), false)) : (false));
            // line 11
            echo "
        ";
            // line 13
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 15
            if ((isset($context["divider_prepend"]) ? $context["divider_prepend"] : $this->getContext($context, "divider_prepend"))) {
                // line 16
                echo "            ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 18
            echo "
        ";
            // line 20
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 22
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 23
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array())), "method")) {
                // line 24
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 26
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 27
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 29
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 30
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 32
            echo "
        ";
            // line 34
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 35
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 36
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            // line 37
            echo "        ";
            // line 38
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 39
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
                // line 40
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            }
            // line 42
            if ((isset($context["is_sub_dropdown"]) ? $context["is_sub_dropdown"] : $this->getContext($context, "is_sub_dropdown"))) {
                // line 43
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown-submenu"));
                // line 44
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            }
            // line 46
            echo "
        ";
            // line 48
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 49
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 51
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 52
            echo "
        ";
            // line 54
            echo "        <li";
            echo $context["macros"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 55
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 56
                echo "                ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (            // line 57
(isset($context["is_sub_dropdown"]) ? $context["is_sub_dropdown"] : $this->getContext($context, "is_sub_dropdown"))) {
                // line 58
                echo "                ";
                $this->displayBlock("sub_dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 59
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 60
                echo "                ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 62
                echo "                ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 64
            echo "            ";
            // line 65
            echo "            ";
            $this->displayBlock("list", $context, $blocks);
            echo "
        </li>";
            // line 68
            if ((isset($context["divider_append"]) ? $context["divider_append"] : $this->getContext($context, "divider_append"))) {
                // line 69
                echo "            ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 71
            echo "    ";
        }
        
        $__internal_6f0b10624ff38ec5b5358470989849ca98fc1f3dec9bdf89df047b2897235851->leave($__internal_6f0b10624ff38ec5b5358470989849ca98fc1f3dec9bdf89df047b2897235851_prof);

    }

    // line 74
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_d0de0b15dab91ff1152720beabb4ec8a98b32ac6f649535281bace00a66f1c39 = $this->env->getExtension("native_profiler");
        $__internal_d0de0b15dab91ff1152720beabb4ec8a98b32ac6f649535281bace00a66f1c39->enter($__internal_d0de0b15dab91ff1152720beabb4ec8a98b32ac6f649535281bace00a66f1c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 75
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) == 1)) {
            // line 76
            echo "        <li class=\"divider-vertical\"></li>
    ";
        } else {
            // line 78
            echo "        <li class=\"divider\"></li>
    ";
        }
        
        $__internal_d0de0b15dab91ff1152720beabb4ec8a98b32ac6f649535281bace00a66f1c39->leave($__internal_d0de0b15dab91ff1152720beabb4ec8a98b32ac6f649535281bace00a66f1c39_prof);

    }

    // line 82
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_fcb78da69857ca08df8454e1ef7ecd2292bf5cc965d1231cd51364dec669ae83 = $this->env->getExtension("native_profiler");
        $__internal_fcb78da69857ca08df8454e1ef7ecd2292bf5cc965d1231cd51364dec669ae83->enter($__internal_fcb78da69857ca08df8454e1ef7ecd2292bf5cc965d1231cd51364dec669ae83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 83
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array())), "method");
        echo ">
        ";
        // line 84
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 85
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 87
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_fcb78da69857ca08df8454e1ef7ecd2292bf5cc965d1231cd51364dec669ae83->leave($__internal_fcb78da69857ca08df8454e1ef7ecd2292bf5cc965d1231cd51364dec669ae83_prof);

    }

    // line 91
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_e0cf5c2fa4d9259d294bf7e92a9324a936c55d4bb779a6e93ba51f298679c79a = $this->env->getExtension("native_profiler");
        $__internal_e0cf5c2fa4d9259d294bf7e92a9324a936c55d4bb779a6e93ba51f298679c79a->enter($__internal_e0cf5c2fa4d9259d294bf7e92a9324a936c55d4bb779a6e93ba51f298679c79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 92
        echo "    <span>";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array())), "method");
        echo ">
        ";
        // line 93
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 94
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 96
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
\t</span>
";
        
        $__internal_e0cf5c2fa4d9259d294bf7e92a9324a936c55d4bb779a6e93ba51f298679c79a->leave($__internal_e0cf5c2fa4d9259d294bf7e92a9324a936c55d4bb779a6e93ba51f298679c79a_prof);

    }

    // line 100
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_4e73df6bf0dc08a9fd91d851209d0bd67c8e1c0262e9986b3ee51f2c2ab910c0 = $this->env->getExtension("native_profiler");
        $__internal_4e73df6bf0dc08a9fd91d851209d0bd67c8e1c0262e9986b3ee51f2c2ab910c0->enter($__internal_4e73df6bf0dc08a9fd91d851209d0bd67c8e1c0262e9986b3ee51f2c2ab910c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 101
        $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 102
        $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 103
        $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array());
        // line 104
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
        // line 105
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("data-toggle" => "dropdown"));
        // line 106
        echo "    <a href=\"#\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
        echo ">
        ";
        // line 107
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 108
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 110
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
        
        $__internal_4e73df6bf0dc08a9fd91d851209d0bd67c8e1c0262e9986b3ee51f2c2ab910c0->leave($__internal_4e73df6bf0dc08a9fd91d851209d0bd67c8e1c0262e9986b3ee51f2c2ab910c0_prof);

    }

    // line 114
    public function block_sub_dropdownElement($context, array $blocks = array())
    {
        $__internal_fada2633143c99f4962df7f896f7f0a2742ba57f8dbb103d104df7b3f76903b5 = $this->env->getExtension("native_profiler");
        $__internal_fada2633143c99f4962df7f896f7f0a2742ba57f8dbb103d104df7b3f76903b5->enter($__internal_fada2633143c99f4962df7f896f7f0a2742ba57f8dbb103d104df7b3f76903b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sub_dropdownElement"));

        // line 115
        $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 116
        $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 117
        $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array());
        // line 118
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
        // line 119
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("data-toggle" => "dropdown-submenu"));
        // line 120
        echo "    <a href=\"#\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
        echo ">
        ";
        // line 121
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 122
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 124
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_fada2633143c99f4962df7f896f7f0a2742ba57f8dbb103d104df7b3f76903b5->leave($__internal_fada2633143c99f4962df7f896f7f0a2742ba57f8dbb103d104df7b3f76903b5_prof);

    }

    // line 128
    public function block_label($context, array $blocks = array())
    {
        $__internal_ee5bca0ab4f44f9256304527797a06eac8deb54dbf1824e2be173f9af15d2b68 = $this->env->getExtension("native_profiler");
        $__internal_ee5bca0ab4f44f9256304527797a06eac8deb54dbf1824e2be173f9af15d2b68->enter($__internal_ee5bca0ab4f44f9256304527797a06eac8deb54dbf1824e2be173f9af15d2b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
        
        $__internal_ee5bca0ab4f44f9256304527797a06eac8deb54dbf1824e2be173f9af15d2b68->leave($__internal_ee5bca0ab4f44f9256304527797a06eac8deb54dbf1824e2be173f9af15d2b68_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebApp/knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 128,  334 => 124,  328 => 122,  326 => 121,  321 => 120,  319 => 119,  317 => 118,  315 => 117,  313 => 116,  311 => 115,  305 => 114,  293 => 110,  287 => 108,  285 => 107,  280 => 106,  278 => 105,  276 => 104,  274 => 103,  272 => 102,  270 => 101,  264 => 100,  253 => 96,  247 => 94,  245 => 93,  240 => 92,  234 => 91,  223 => 87,  217 => 85,  215 => 84,  208 => 83,  202 => 82,  193 => 78,  189 => 76,  186 => 75,  180 => 74,  172 => 71,  168 => 69,  166 => 68,  161 => 65,  159 => 64,  155 => 62,  151 => 60,  149 => 59,  146 => 58,  144 => 57,  141 => 56,  139 => 55,  135 => 54,  132 => 52,  130 => 51,  127 => 49,  125 => 48,  122 => 46,  119 => 44,  117 => 43,  115 => 42,  112 => 40,  110 => 39,  108 => 38,  106 => 37,  104 => 36,  102 => 35,  100 => 34,  97 => 32,  94 => 30,  92 => 29,  89 => 27,  87 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  73 => 18,  69 => 16,  67 => 15,  65 => 13,  62 => 11,  60 => 10,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  49 => 5,  46 => 4,  40 => 3,  11 => 1,);
    }
}
/* {% extends 'knp_menu.html.twig' %}*/
/* */
/* {% block item %}*/
/*     {% import "knp_menu.html.twig" as macros %}*/
/*     {% if item.displayed %}*/
/*         {%- set attributes = item.attributes %}*/
/*         {%- set is_dropdown = attributes.dropdown|default(false) %}*/
/*         {%- set is_sub_dropdown = attributes.sub_dropdown|default(false) %}*/
/*         {%- set divider_prepend = attributes.divider_prepend|default(false) %}*/
/*         {%- set divider_append = attributes.divider_append|default(false) %}*/
/* */
/*         {# unset bootstrap specific attributes #}*/
/*         {%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}*/
/* */
/*         {%- if divider_prepend %}*/
/*             {{ block('dividerElement') }}*/
/*         {%- endif %}*/
/* */
/*         {# building the class of the item #}*/
/*         {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}*/
/*         {%- if matcher.isCurrent(item) %}*/
/*             {%- set classes = classes|merge([options.currentClass]) %}*/
/*         {%- elseif matcher.isAncestor(item, options.depth) %}*/
/*             {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*         {%- endif %}*/
/*         {%- if item.actsLikeFirst %}*/
/*             {%- set classes = classes|merge([options.firstClass]) %}*/
/*         {%- endif %}*/
/*         {%- if item.actsLikeLast %}*/
/*             {%- set classes = classes|merge([options.lastClass]) %}*/
/*         {%- endif %}*/
/* */
/*         {# building the class of the children #}*/
/*         {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}*/
/*         {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}*/
/*         {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}*/
/*         {# adding classes for dropdown #}*/
/*         {%- if is_dropdown %}*/
/*             {%- set classes = classes|merge(['dropdown']) %}*/
/*             {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}*/
/*         {%- endif %}*/
/*         {%- if is_sub_dropdown %}*/
/*             {%- set classes = classes|merge(['dropdown-submenu']) %}*/
/*             {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}*/
/*         {%- endif %}*/
/* */
/*         {# putting classes together #}*/
/*         {%- if classes is not empty %}*/
/*             {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*         {%- endif %}*/
/*         {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}*/
/* */
/*         {# displaying the item #}*/
/*         <li{{ macros.attributes(attributes) }}>*/
/*             {%- if is_dropdown %}*/
/*                 {{ block('dropdownElement') }}*/
/*             {%- elseif is_sub_dropdown %}*/
/*                 {{ block('sub_dropdownElement') }}*/
/*             {%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}*/
/*                 {{ block('linkElement') }}*/
/*             {%- else %}*/
/*                 {{ block('spanElement') }}*/
/*             {%- endif %}*/
/*             {# render the list of children#}*/
/*             {{ block('list') }}*/
/*         </li>*/
/* */
/*         {%- if divider_append %}*/
/*             {{ block('dividerElement') }}*/
/*         {%- endif %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block dividerElement %}*/
/*     {% if item.level == 1 %}*/
/*         <li class="divider-vertical"></li>*/
/*     {% else %}*/
/*         <li class="divider"></li>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block linkElement %}*/
/*     <a href="{{ item.uri }}"{{ macros.attributes(item.linkAttributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i>*/
/*         {% endif %}*/
/*         {{ block('label') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block spanElement %}*/
/*     <span>{{ macros.attributes(item.labelAttributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i>*/
/*         {% endif %}*/
/*         {{ block('label') }}*/
/* 	</span>*/
/* {% endblock %}*/
/* */
/* {% block dropdownElement %}*/
/*     {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}*/
/*     {%- set classes = classes|merge(['dropdown-toggle']) %}*/
/*     {%- set attributes = item.linkAttributes %}*/
/*     {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}*/
/*     <a href="#"{{ macros.attributes(attributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i>*/
/*         {% endif %}*/
/*         {{ block('label') }}*/
/*         <b class="caret"></b>*/
/*     </a>*/
/* {% endblock %}*/
/* {% block sub_dropdownElement %}*/
/*     {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}*/
/*     {%- set classes = classes|merge(['dropdown-toggle']) %}*/
/*     {%- set attributes = item.linkAttributes %}*/
/*     {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {%- set attributes = attributes|merge({'data-toggle': 'dropdown-submenu'}) %}*/
/*     <a href="#"{{ macros.attributes(attributes) }}>*/
/*         {% if item.attribute('icon') is not empty  %}*/
/*             <i class="{{ item.attribute('icon') }}"></i>*/
/*         {% endif %}*/
/*         {{ block('label') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block label %}{{ item.label|trans }}{% endblock %}*/
