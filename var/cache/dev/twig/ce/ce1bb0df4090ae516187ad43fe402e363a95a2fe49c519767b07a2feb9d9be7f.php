<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_06ea0b59d3dba35debe9668c5d2cede766dd2214812920938df42982b3b2985e extends Twig_Template
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
        $__internal_0e974b9f6d5ecdd2bd5f92fb2aa4154255f92099d658b3ff0d219471684786da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e974b9f6d5ecdd2bd5f92fb2aa4154255f92099d658b3ff0d219471684786da->enter($__internal_0e974b9f6d5ecdd2bd5f92fb2aa4154255f92099d658b3ff0d219471684786da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c95539dfa5a6a1aac50745561853f4166ef4405cadad3e2702acb5b190b63999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95539dfa5a6a1aac50745561853f4166ef4405cadad3e2702acb5b190b63999->enter($__internal_c95539dfa5a6a1aac50745561853f4166ef4405cadad3e2702acb5b190b63999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_0e974b9f6d5ecdd2bd5f92fb2aa4154255f92099d658b3ff0d219471684786da->leave($__internal_0e974b9f6d5ecdd2bd5f92fb2aa4154255f92099d658b3ff0d219471684786da_prof);

        
        $__internal_c95539dfa5a6a1aac50745561853f4166ef4405cadad3e2702acb5b190b63999->leave($__internal_c95539dfa5a6a1aac50745561853f4166ef4405cadad3e2702acb5b190b63999_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/grimlorn/Citadel/Architect/Contact-app-Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
