<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f57a2c96d9d36bf9fde13ad262a909d5bb15aa1586007e362099d23dd1c2c3c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57a2c96d9d36bf9fde13ad262a909d5bb15aa1586007e362099d23dd1c2c3c7->enter($__internal_f57a2c96d9d36bf9fde13ad262a909d5bb15aa1586007e362099d23dd1c2c3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_43e52c6cd6fed309c733ac52f8c13a695d67c7f5a0772b0fa74fb8a7016af10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e52c6cd6fed309c733ac52f8c13a695d67c7f5a0772b0fa74fb8a7016af10d->enter($__internal_43e52c6cd6fed309c733ac52f8c13a695d67c7f5a0772b0fa74fb8a7016af10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f57a2c96d9d36bf9fde13ad262a909d5bb15aa1586007e362099d23dd1c2c3c7->leave($__internal_f57a2c96d9d36bf9fde13ad262a909d5bb15aa1586007e362099d23dd1c2c3c7_prof);

        
        $__internal_43e52c6cd6fed309c733ac52f8c13a695d67c7f5a0772b0fa74fb8a7016af10d->leave($__internal_43e52c6cd6fed309c733ac52f8c13a695d67c7f5a0772b0fa74fb8a7016af10d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f76a70fce61522ae3f82a3879a33c4ea3df795a9c3ecb68c26878d726c2e990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f76a70fce61522ae3f82a3879a33c4ea3df795a9c3ecb68c26878d726c2e990->enter($__internal_5f76a70fce61522ae3f82a3879a33c4ea3df795a9c3ecb68c26878d726c2e990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac6c1cb5082a5b53c8590a28d8069bc45e58e054b98872207f48a2bfee43ed65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6c1cb5082a5b53c8590a28d8069bc45e58e054b98872207f48a2bfee43ed65->enter($__internal_ac6c1cb5082a5b53c8590a28d8069bc45e58e054b98872207f48a2bfee43ed65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ac6c1cb5082a5b53c8590a28d8069bc45e58e054b98872207f48a2bfee43ed65->leave($__internal_ac6c1cb5082a5b53c8590a28d8069bc45e58e054b98872207f48a2bfee43ed65_prof);

        
        $__internal_5f76a70fce61522ae3f82a3879a33c4ea3df795a9c3ecb68c26878d726c2e990->leave($__internal_5f76a70fce61522ae3f82a3879a33c4ea3df795a9c3ecb68c26878d726c2e990_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af88bd1cef4ad11cd35cb0b9442a7e188aaad35cf2ad3b6e8cd34f81042b3f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af88bd1cef4ad11cd35cb0b9442a7e188aaad35cf2ad3b6e8cd34f81042b3f40->enter($__internal_af88bd1cef4ad11cd35cb0b9442a7e188aaad35cf2ad3b6e8cd34f81042b3f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e521bf18748ecee7684d012b3551afd9985c66341692f0d6afeca4359248bc2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e521bf18748ecee7684d012b3551afd9985c66341692f0d6afeca4359248bc2b->enter($__internal_e521bf18748ecee7684d012b3551afd9985c66341692f0d6afeca4359248bc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e521bf18748ecee7684d012b3551afd9985c66341692f0d6afeca4359248bc2b->leave($__internal_e521bf18748ecee7684d012b3551afd9985c66341692f0d6afeca4359248bc2b_prof);

        
        $__internal_af88bd1cef4ad11cd35cb0b9442a7e188aaad35cf2ad3b6e8cd34f81042b3f40->leave($__internal_af88bd1cef4ad11cd35cb0b9442a7e188aaad35cf2ad3b6e8cd34f81042b3f40_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57ed33613e65abe28908b7af4ad5204283c29197dc245f23a5d698aa82c97756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ed33613e65abe28908b7af4ad5204283c29197dc245f23a5d698aa82c97756->enter($__internal_57ed33613e65abe28908b7af4ad5204283c29197dc245f23a5d698aa82c97756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e9f905b22524f3c9dc7c63d0157b76a07a0ceac0b8616abfb7fea432b93d983b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f905b22524f3c9dc7c63d0157b76a07a0ceac0b8616abfb7fea432b93d983b->enter($__internal_e9f905b22524f3c9dc7c63d0157b76a07a0ceac0b8616abfb7fea432b93d983b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e9f905b22524f3c9dc7c63d0157b76a07a0ceac0b8616abfb7fea432b93d983b->leave($__internal_e9f905b22524f3c9dc7c63d0157b76a07a0ceac0b8616abfb7fea432b93d983b_prof);

        
        $__internal_57ed33613e65abe28908b7af4ad5204283c29197dc245f23a5d698aa82c97756->leave($__internal_57ed33613e65abe28908b7af4ad5204283c29197dc245f23a5d698aa82c97756_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/grimlorn/Citadel/Architect/Contact-app-Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
