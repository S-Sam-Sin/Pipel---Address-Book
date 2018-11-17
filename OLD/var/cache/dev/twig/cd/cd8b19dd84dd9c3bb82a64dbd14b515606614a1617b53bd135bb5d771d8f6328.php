<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79d5ebd484c95b92bde3bc14a6dc7c5c7fc43fb0698d480e3a358e865afb68e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d5ebd484c95b92bde3bc14a6dc7c5c7fc43fb0698d480e3a358e865afb68e6->enter($__internal_79d5ebd484c95b92bde3bc14a6dc7c5c7fc43fb0698d480e3a358e865afb68e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a75ca743e24f88eecfa7c6f4dfc1d5f460d6ea7f77a68e762085b42da4d4683b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75ca743e24f88eecfa7c6f4dfc1d5f460d6ea7f77a68e762085b42da4d4683b->enter($__internal_a75ca743e24f88eecfa7c6f4dfc1d5f460d6ea7f77a68e762085b42da4d4683b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79d5ebd484c95b92bde3bc14a6dc7c5c7fc43fb0698d480e3a358e865afb68e6->leave($__internal_79d5ebd484c95b92bde3bc14a6dc7c5c7fc43fb0698d480e3a358e865afb68e6_prof);

        
        $__internal_a75ca743e24f88eecfa7c6f4dfc1d5f460d6ea7f77a68e762085b42da4d4683b->leave($__internal_a75ca743e24f88eecfa7c6f4dfc1d5f460d6ea7f77a68e762085b42da4d4683b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_787f2bef5747f4c93dc74dd3b792e2d3e7af92f183be5878ef6e49e8f83f8f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787f2bef5747f4c93dc74dd3b792e2d3e7af92f183be5878ef6e49e8f83f8f88->enter($__internal_787f2bef5747f4c93dc74dd3b792e2d3e7af92f183be5878ef6e49e8f83f8f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2c0d651be9f70e11f26090dcaa9f108ca705051b9138691021a66e0243e4428d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0d651be9f70e11f26090dcaa9f108ca705051b9138691021a66e0243e4428d->enter($__internal_2c0d651be9f70e11f26090dcaa9f108ca705051b9138691021a66e0243e4428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c0d651be9f70e11f26090dcaa9f108ca705051b9138691021a66e0243e4428d->leave($__internal_2c0d651be9f70e11f26090dcaa9f108ca705051b9138691021a66e0243e4428d_prof);

        
        $__internal_787f2bef5747f4c93dc74dd3b792e2d3e7af92f183be5878ef6e49e8f83f8f88->leave($__internal_787f2bef5747f4c93dc74dd3b792e2d3e7af92f183be5878ef6e49e8f83f8f88_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c11b07dde0bded74d29c27b1a187c7bfca5da0585d607d7992c03c5d6666bae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11b07dde0bded74d29c27b1a187c7bfca5da0585d607d7992c03c5d6666bae1->enter($__internal_c11b07dde0bded74d29c27b1a187c7bfca5da0585d607d7992c03c5d6666bae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_103a62393a5a6869581b8b1d052efe48d4943ecff819e03b4650664dda0813cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103a62393a5a6869581b8b1d052efe48d4943ecff819e03b4650664dda0813cb->enter($__internal_103a62393a5a6869581b8b1d052efe48d4943ecff819e03b4650664dda0813cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_103a62393a5a6869581b8b1d052efe48d4943ecff819e03b4650664dda0813cb->leave($__internal_103a62393a5a6869581b8b1d052efe48d4943ecff819e03b4650664dda0813cb_prof);

        
        $__internal_c11b07dde0bded74d29c27b1a187c7bfca5da0585d607d7992c03c5d6666bae1->leave($__internal_c11b07dde0bded74d29c27b1a187c7bfca5da0585d607d7992c03c5d6666bae1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e67a0360559c6726354dfd96b1c7c425a88f659e1b3fed8b0870cc2baa6f8d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67a0360559c6726354dfd96b1c7c425a88f659e1b3fed8b0870cc2baa6f8d6a->enter($__internal_e67a0360559c6726354dfd96b1c7c425a88f659e1b3fed8b0870cc2baa6f8d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c21ab5a3534e814e23f871ea32dfc06b0476922a4b4cb1b8fad3ab8a2d9e8bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21ab5a3534e814e23f871ea32dfc06b0476922a4b4cb1b8fad3ab8a2d9e8bd8->enter($__internal_c21ab5a3534e814e23f871ea32dfc06b0476922a4b4cb1b8fad3ab8a2d9e8bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c21ab5a3534e814e23f871ea32dfc06b0476922a4b4cb1b8fad3ab8a2d9e8bd8->leave($__internal_c21ab5a3534e814e23f871ea32dfc06b0476922a4b4cb1b8fad3ab8a2d9e8bd8_prof);

        
        $__internal_e67a0360559c6726354dfd96b1c7c425a88f659e1b3fed8b0870cc2baa6f8d6a->leave($__internal_e67a0360559c6726354dfd96b1c7c425a88f659e1b3fed8b0870cc2baa6f8d6a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
