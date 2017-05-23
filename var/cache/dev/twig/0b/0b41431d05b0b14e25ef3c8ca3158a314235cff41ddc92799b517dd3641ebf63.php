<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_33d244f06e3597a4611798c3ebdde8e315ef10d0cb27077d0c8e708c948f75a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a8e5599462f0f634d2ea6bfea08a9ebe4bdb7afca3f9469093dff1185db1510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8e5599462f0f634d2ea6bfea08a9ebe4bdb7afca3f9469093dff1185db1510->enter($__internal_5a8e5599462f0f634d2ea6bfea08a9ebe4bdb7afca3f9469093dff1185db1510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0c41ed60eb5076b75221425582b791137a2aaaf7870775686952f43b231486e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c41ed60eb5076b75221425582b791137a2aaaf7870775686952f43b231486e7->enter($__internal_0c41ed60eb5076b75221425582b791137a2aaaf7870775686952f43b231486e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a8e5599462f0f634d2ea6bfea08a9ebe4bdb7afca3f9469093dff1185db1510->leave($__internal_5a8e5599462f0f634d2ea6bfea08a9ebe4bdb7afca3f9469093dff1185db1510_prof);

        
        $__internal_0c41ed60eb5076b75221425582b791137a2aaaf7870775686952f43b231486e7->leave($__internal_0c41ed60eb5076b75221425582b791137a2aaaf7870775686952f43b231486e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_15392f4bd2c5ad20f8b9c5b280ac852837d6172fa5ace6d92a0deb85afb2a02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15392f4bd2c5ad20f8b9c5b280ac852837d6172fa5ace6d92a0deb85afb2a02b->enter($__internal_15392f4bd2c5ad20f8b9c5b280ac852837d6172fa5ace6d92a0deb85afb2a02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9e685f470f9367fccc94a1e1527d4747302f1a937764c1f0980c8cb02f8ea75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e685f470f9367fccc94a1e1527d4747302f1a937764c1f0980c8cb02f8ea75d->enter($__internal_9e685f470f9367fccc94a1e1527d4747302f1a937764c1f0980c8cb02f8ea75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9e685f470f9367fccc94a1e1527d4747302f1a937764c1f0980c8cb02f8ea75d->leave($__internal_9e685f470f9367fccc94a1e1527d4747302f1a937764c1f0980c8cb02f8ea75d_prof);

        
        $__internal_15392f4bd2c5ad20f8b9c5b280ac852837d6172fa5ace6d92a0deb85afb2a02b->leave($__internal_15392f4bd2c5ad20f8b9c5b280ac852837d6172fa5ace6d92a0deb85afb2a02b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/grimlorn/Citadel/Architect/Contact-app-Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
