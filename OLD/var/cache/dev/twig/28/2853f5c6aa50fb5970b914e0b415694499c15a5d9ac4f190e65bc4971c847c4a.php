<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_d7ef667c2dc8dcd06ca6b753e004127d265f0a3acbd55eca9d7fa179e1e18b04 extends Twig_Template
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
        $__internal_f06ef003c3d36014eb7508793b8680fcbc31f4610848d1ccbbb1cb637954c82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06ef003c3d36014eb7508793b8680fcbc31f4610848d1ccbbb1cb637954c82b->enter($__internal_f06ef003c3d36014eb7508793b8680fcbc31f4610848d1ccbbb1cb637954c82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_d632d3eadbbea8dd0b06446649f5649f914295dfe6d1ed0d464add1230d9a40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d632d3eadbbea8dd0b06446649f5649f914295dfe6d1ed0d464add1230d9a40a->enter($__internal_d632d3eadbbea8dd0b06446649f5649f914295dfe6d1ed0d464add1230d9a40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_f06ef003c3d36014eb7508793b8680fcbc31f4610848d1ccbbb1cb637954c82b->leave($__internal_f06ef003c3d36014eb7508793b8680fcbc31f4610848d1ccbbb1cb637954c82b_prof);

        
        $__internal_d632d3eadbbea8dd0b06446649f5649f914295dfe6d1ed0d464add1230d9a40a->leave($__internal_d632d3eadbbea8dd0b06446649f5649f914295dfe6d1ed0d464add1230d9a40a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
