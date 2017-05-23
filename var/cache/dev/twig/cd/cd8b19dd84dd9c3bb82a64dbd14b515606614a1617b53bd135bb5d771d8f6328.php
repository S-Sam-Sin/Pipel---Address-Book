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
        $__internal_1a0e1b88b792d3285a25ea9bc3072eabb027ad7895bc1dc03b44d779e6845332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0e1b88b792d3285a25ea9bc3072eabb027ad7895bc1dc03b44d779e6845332->enter($__internal_1a0e1b88b792d3285a25ea9bc3072eabb027ad7895bc1dc03b44d779e6845332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_258d82f8e404e80796a7789a0915ff4fab5d53e17d471754ae40eebb5c54189e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258d82f8e404e80796a7789a0915ff4fab5d53e17d471754ae40eebb5c54189e->enter($__internal_258d82f8e404e80796a7789a0915ff4fab5d53e17d471754ae40eebb5c54189e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a0e1b88b792d3285a25ea9bc3072eabb027ad7895bc1dc03b44d779e6845332->leave($__internal_1a0e1b88b792d3285a25ea9bc3072eabb027ad7895bc1dc03b44d779e6845332_prof);

        
        $__internal_258d82f8e404e80796a7789a0915ff4fab5d53e17d471754ae40eebb5c54189e->leave($__internal_258d82f8e404e80796a7789a0915ff4fab5d53e17d471754ae40eebb5c54189e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95d0a05115ca7502ad14cd06e6397a075053a8c64b5a3ee8f1d227afe044bea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d0a05115ca7502ad14cd06e6397a075053a8c64b5a3ee8f1d227afe044bea0->enter($__internal_95d0a05115ca7502ad14cd06e6397a075053a8c64b5a3ee8f1d227afe044bea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_77637a42c46219a1cf86c5ea56ac0bb6070e3a1742c466f521ac8cca2c92d437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77637a42c46219a1cf86c5ea56ac0bb6070e3a1742c466f521ac8cca2c92d437->enter($__internal_77637a42c46219a1cf86c5ea56ac0bb6070e3a1742c466f521ac8cca2c92d437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_77637a42c46219a1cf86c5ea56ac0bb6070e3a1742c466f521ac8cca2c92d437->leave($__internal_77637a42c46219a1cf86c5ea56ac0bb6070e3a1742c466f521ac8cca2c92d437_prof);

        
        $__internal_95d0a05115ca7502ad14cd06e6397a075053a8c64b5a3ee8f1d227afe044bea0->leave($__internal_95d0a05115ca7502ad14cd06e6397a075053a8c64b5a3ee8f1d227afe044bea0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b9d59879c246d4b7a1a60f6445d1e26c3d5bd6fe0397fa55cd6f12be0226e6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d59879c246d4b7a1a60f6445d1e26c3d5bd6fe0397fa55cd6f12be0226e6e6->enter($__internal_b9d59879c246d4b7a1a60f6445d1e26c3d5bd6fe0397fa55cd6f12be0226e6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_45f09b432ec5fad14315ec12a208bc62797c46d6713337f39b0ebe2e7c297860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f09b432ec5fad14315ec12a208bc62797c46d6713337f39b0ebe2e7c297860->enter($__internal_45f09b432ec5fad14315ec12a208bc62797c46d6713337f39b0ebe2e7c297860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_45f09b432ec5fad14315ec12a208bc62797c46d6713337f39b0ebe2e7c297860->leave($__internal_45f09b432ec5fad14315ec12a208bc62797c46d6713337f39b0ebe2e7c297860_prof);

        
        $__internal_b9d59879c246d4b7a1a60f6445d1e26c3d5bd6fe0397fa55cd6f12be0226e6e6->leave($__internal_b9d59879c246d4b7a1a60f6445d1e26c3d5bd6fe0397fa55cd6f12be0226e6e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_396371af0e2d43ffba2f18ca0c4f0b49bae299a3ad8a9d8bde05f61af49b645e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396371af0e2d43ffba2f18ca0c4f0b49bae299a3ad8a9d8bde05f61af49b645e->enter($__internal_396371af0e2d43ffba2f18ca0c4f0b49bae299a3ad8a9d8bde05f61af49b645e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1b111f49b528bb6636e8dfce79c9d9441918bc52c680f871e092b4cd7c678d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b111f49b528bb6636e8dfce79c9d9441918bc52c680f871e092b4cd7c678d93->enter($__internal_1b111f49b528bb6636e8dfce79c9d9441918bc52c680f871e092b4cd7c678d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1b111f49b528bb6636e8dfce79c9d9441918bc52c680f871e092b4cd7c678d93->leave($__internal_1b111f49b528bb6636e8dfce79c9d9441918bc52c680f871e092b4cd7c678d93_prof);

        
        $__internal_396371af0e2d43ffba2f18ca0c4f0b49bae299a3ad8a9d8bde05f61af49b645e->leave($__internal_396371af0e2d43ffba2f18ca0c4f0b49bae299a3ad8a9d8bde05f61af49b645e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/grimlorn/Citadel/Architect/Contact-app-Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
