<?php

/* @PointWebApp/knp_breadcrumb.html.twig */
class __TwigTemplate_47258cd8751fb2915a24fd1bc77a07a677322cb698d4d8dae5565e9424dfb42f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c5146d83734188944ccbdd33557e33022a1a925c574bec2395eebff86c70b4c = $this->env->getExtension("native_profiler");
        $__internal_6c5146d83734188944ccbdd33557e33022a1a925c574bec2395eebff86c70b4c->enter($__internal_6c5146d83734188944ccbdd33557e33022a1a925c574bec2395eebff86c70b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebApp/knp_breadcrumb.html.twig"));

        // line 1
        $this->displayBlock('root', $context, $blocks);
        
        $__internal_6c5146d83734188944ccbdd33557e33022a1a925c574bec2395eebff86c70b4c->leave($__internal_6c5146d83734188944ccbdd33557e33022a1a925c574bec2395eebff86c70b4c_prof);

    }

    public function block_root($context, array $blocks = array())
    {
        $__internal_42b0d3b67ca7645d7cc3ba8c36e5b4de08274d503f77cd807b661d2da3858c3d = $this->env->getExtension("native_profiler");
        $__internal_42b0d3b67ca7645d7cc3ba8c36e5b4de08274d503f77cd807b661d2da3858c3d->enter($__internal_42b0d3b67ca7645d7cc3ba8c36e5b4de08274d503f77cd807b661d2da3858c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "breadcrumbsArray", array())) {
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "breadcrumbsArray", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 4
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo "<a href=\"/\" title=\"Go to Home\" class=\"tip-bottom\"><i class=\"icon-home\"></i> Home</a>";
                } elseif ( !$this->getAttribute(                // line 5
$context["loop"], "last", array())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "uri", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["link"], "label", array())), "html", null, true);
                    echo "</a>";
                } else {
                    // line 7
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "uri", array()), "html", null, true);
                    echo "\" class=\"current\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["link"], "label", array())), "html", null, true);
                    echo "</a>";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    ";
        }
        
        $__internal_42b0d3b67ca7645d7cc3ba8c36e5b4de08274d503f77cd807b661d2da3858c3d->leave($__internal_42b0d3b67ca7645d7cc3ba8c36e5b4de08274d503f77cd807b661d2da3858c3d_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebApp/knp_breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 10,  66 => 7,  58 => 5,  55 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block root %}*/
/*     {% if item.breadcrumbsArray %}*/
/*         {%- for  link in item.breadcrumbsArray %}*/
/*             {%- if loop.index == 1 %}<a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>*/
/*             {%- elseif not loop.last %}<a href="{{ link.uri }}">{{ link.label | trans }}</a>*/
/*             {%- else %}*/
/*                 <a href="{{ link.uri }}" class="current">{{ link.label | trans }}</a>*/
/*             {%- endif %}*/
/*         {%- endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
