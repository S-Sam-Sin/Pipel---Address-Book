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
        $__internal_feebb6bd40f5ef7eb7bd7c76d83660b91746c9a3a8b9ce6f02a6149d4d1c59a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feebb6bd40f5ef7eb7bd7c76d83660b91746c9a3a8b9ce6f02a6149d4d1c59a8->enter($__internal_feebb6bd40f5ef7eb7bd7c76d83660b91746c9a3a8b9ce6f02a6149d4d1c59a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6430b9abd7de44bb036a1d940d926f1260d885207f687df4fbe27e5e8d2c97fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6430b9abd7de44bb036a1d940d926f1260d885207f687df4fbe27e5e8d2c97fa->enter($__internal_6430b9abd7de44bb036a1d940d926f1260d885207f687df4fbe27e5e8d2c97fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feebb6bd40f5ef7eb7bd7c76d83660b91746c9a3a8b9ce6f02a6149d4d1c59a8->leave($__internal_feebb6bd40f5ef7eb7bd7c76d83660b91746c9a3a8b9ce6f02a6149d4d1c59a8_prof);

        
        $__internal_6430b9abd7de44bb036a1d940d926f1260d885207f687df4fbe27e5e8d2c97fa->leave($__internal_6430b9abd7de44bb036a1d940d926f1260d885207f687df4fbe27e5e8d2c97fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd0425bdd3ef4daa1608bb1f23129f5f3ce0cced107c66060c699c4b4a42121e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0425bdd3ef4daa1608bb1f23129f5f3ce0cced107c66060c699c4b4a42121e->enter($__internal_bd0425bdd3ef4daa1608bb1f23129f5f3ce0cced107c66060c699c4b4a42121e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_df58ef260c3a3ebaa1eb380c47b2bf9ef8ef2266e8e893f8d5be8a9844cdf619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df58ef260c3a3ebaa1eb380c47b2bf9ef8ef2266e8e893f8d5be8a9844cdf619->enter($__internal_df58ef260c3a3ebaa1eb380c47b2bf9ef8ef2266e8e893f8d5be8a9844cdf619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_df58ef260c3a3ebaa1eb380c47b2bf9ef8ef2266e8e893f8d5be8a9844cdf619->leave($__internal_df58ef260c3a3ebaa1eb380c47b2bf9ef8ef2266e8e893f8d5be8a9844cdf619_prof);

        
        $__internal_bd0425bdd3ef4daa1608bb1f23129f5f3ce0cced107c66060c699c4b4a42121e->leave($__internal_bd0425bdd3ef4daa1608bb1f23129f5f3ce0cced107c66060c699c4b4a42121e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d55ed04a9a8363efc3db3bca82712f7f997f039275104a547d198a98e6b38c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d55ed04a9a8363efc3db3bca82712f7f997f039275104a547d198a98e6b38c3->enter($__internal_8d55ed04a9a8363efc3db3bca82712f7f997f039275104a547d198a98e6b38c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b455498c7f11d3b94120a1eee1a034938cbfb73788767e7286535ce3474b4a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b455498c7f11d3b94120a1eee1a034938cbfb73788767e7286535ce3474b4a25->enter($__internal_b455498c7f11d3b94120a1eee1a034938cbfb73788767e7286535ce3474b4a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b455498c7f11d3b94120a1eee1a034938cbfb73788767e7286535ce3474b4a25->leave($__internal_b455498c7f11d3b94120a1eee1a034938cbfb73788767e7286535ce3474b4a25_prof);

        
        $__internal_8d55ed04a9a8363efc3db3bca82712f7f997f039275104a547d198a98e6b38c3->leave($__internal_8d55ed04a9a8363efc3db3bca82712f7f997f039275104a547d198a98e6b38c3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff65d56674dcd8525e6e85030347ee701cf6f4e5516bd57b30c3c8dbae55ead0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff65d56674dcd8525e6e85030347ee701cf6f4e5516bd57b30c3c8dbae55ead0->enter($__internal_ff65d56674dcd8525e6e85030347ee701cf6f4e5516bd57b30c3c8dbae55ead0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a86504f8e314b653507c7eff37179127da4283f7a6efafb3e413388f7014a420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86504f8e314b653507c7eff37179127da4283f7a6efafb3e413388f7014a420->enter($__internal_a86504f8e314b653507c7eff37179127da4283f7a6efafb3e413388f7014a420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a86504f8e314b653507c7eff37179127da4283f7a6efafb3e413388f7014a420->leave($__internal_a86504f8e314b653507c7eff37179127da4283f7a6efafb3e413388f7014a420_prof);

        
        $__internal_ff65d56674dcd8525e6e85030347ee701cf6f4e5516bd57b30c3c8dbae55ead0->leave($__internal_ff65d56674dcd8525e6e85030347ee701cf6f4e5516bd57b30c3c8dbae55ead0_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
